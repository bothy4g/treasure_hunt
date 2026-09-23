<?php

namespace App\Providers;

use Carbon\CarbonImmutable;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Event;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use Illuminate\Validation\Rules\Password;

use App\Listeners\DumpSchemaOnMigration;
use Illuminate\Database\Events\MigrationsEnded;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->configureDefaults();
        Event::listen(MigrationsEnded::class, DumpSchemaOnMigration::class);

        Factory::guessFactoryNamesUsing(function (string $modelName) {
            if ($modelName === \App\Domains\Character\Models\Character::class) {
                return \Database\Factories\CharacterFactory::class;
            }

            $appNamespace = 'App\\';
            $modelName = str_starts_with($modelName, $appNamespace.'Models\\') ? substr($modelName, strlen($appNamespace.'Models\\')) : substr($modelName, strlen($appNamespace));

            return 'Database\\Factories\\'.$modelName.'Factory';
        });


    }

    /**
     * Configure default behaviors for production-ready applications.
     */
    protected function configureDefaults(): void
    {
        Date::use(CarbonImmutable::class);

        DB::prohibitDestructiveCommands(
            app()->isProduction(),
        );

        Password::defaults(fn (): ?Password => app()->isProduction()
            ? Password::min(12)
                ->mixedCase()
                ->letters()
                ->numbers()
                ->symbols()
                ->uncompromised()
            : null,
        );
    }
}
