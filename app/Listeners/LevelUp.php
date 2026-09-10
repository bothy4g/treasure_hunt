<?php

namespace App\Listeners;

use App\Events\CharacterGenerated;
use App\Events\CharacterLeveledUp;
use App\Services\CharacterLevelingService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class LevelUp
{
    /**
     * Create the event listener.
     */
    public function __construct(
        protected CharacterLevelingService $service
    ){}

    /**
     * Handle the event.
     */
    public function handle(CharacterGenerated $event): void
    {
        $character = $event->getCharacter();
        Log::debug("Leveling up character");
        $this->service->levelUp($character);
        Log::debug("Leveled up character");
        CharacterLeveledUp::dispatch($character);
    }
}
