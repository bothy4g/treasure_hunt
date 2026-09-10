<?php

namespace App\Services;

use App\Models\Character;
use App\Events\CharacterLeveledUp;
use Illuminate\Support\Facades\Log;

class CharacterLevelingService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function levelUp(Character $character): Character
    {
        $newStats = $this->calculateNewStats($character);

        // $character->update([
        //     'level' => $character->level + 1,
        //     'strength' => $newStats['strength'],
        //     'agility' => $newStats['agility'],
        //     // ...
        // ]);

        event(new CharacterLeveledUp($character));

        return $character;
    }

    protected function calculateNewStats(Character $character): array
    {
        Log::debug("New stats calculated");
        return [];
    }
}
