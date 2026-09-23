<?php

namespace App\Domains\Character\Listeners;

use App\Domains\Character\Events\CharacterGenerated;
use App\Domains\Character\Events\CharacterLeveledUp;
use App\Domains\Character\Services\CharacterLevelingService;
use Illuminate\Support\Facades\Log;

class LevelUp
{
    /**
     * Create the event listener.
     */
    public function __construct(
        protected CharacterLevelingService $service
    ) {}

    /**
     * Handle the event.
     */
    public function handle(CharacterGenerated $event): void
    {
        $character = $event->getCharacter();
        Log::debug('Leveling up character');
        $this->service->levelUp($character);
        Log::debug('Leveled up character');
        CharacterLeveledUp::dispatch($character);
    }
}
