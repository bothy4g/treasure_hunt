<?php

namespace App\Listeners;

use Illuminate\Database\Events\MigrationsEnded;
use Illuminate\Support\Facades\Artisan;

class DumpSchemaOnMigration
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(MigrationsEnded $event): void
    {
        if (app()->environment('local', 'testing')) {
            Artisan::call('schema:dump-json');
        }
    }
}
