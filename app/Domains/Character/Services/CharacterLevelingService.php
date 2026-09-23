<?php

namespace App\Domains\Character\Services;

use App\Domains\Character\Events\CharacterLeveledUp;
use App\Domains\Character\Models\Character;
use App\Domains\Character\Models\Levelling;
use App\Services\DiceRoller;
use Illuminate\Support\Facades\Log;

class CharacterLevelingService
{
    public function levelUp(Character $character, int $area = 0): Character
    {
        $healthPoints = DiceRoller::roll(1, 10);
        $faithPoints = DiceRoller::roll(1, 6)
            + max(0, $character->willpower - 10)
            + max(0, $character->focus - 10);
        $skillPoints = max(0, $character->intelligence - 10)
            + max(0, $character->focus - 10)
            + max(0, $character->willpower - 10)
            + max(0, $character->perseverance - 10);
        $communityPoints = DiceRoller::roll(2, 10)
            + max(0, $character->socialization - 10);

        $toLevel = Levelling::where('character_id', $character->id)
            ->where('area', $area)
            ->max('to_level') ?? 0;
        $toLevel += 1;

        $levelling = Levelling::create([
            'character_id' => $character->id,
            'to_level' => $toLevel,
            'area' => $area,
            'health_points' => $healthPoints,
            'faith_points' => $faithPoints,
            'skill_points' => $skillPoints,
            'community_points' => $communityPoints,
            'leveled_up_at' => now(),
        ]);

        $character->increment('health_points', $healthPoints);
        $character->increment('faith_points', $faithPoints);
        $character->increment('skill_points', $skillPoints);
        $character->increment('community_points', $communityPoints);
        $character->refresh();

        Log::debug('Character leveled up', [
            'character_id' => $character->id,
            'area' => $area,
            'to_level' => $toLevel,
            'health_points' => $healthPoints,
            'faith_points' => $faithPoints,
            'skill_points' => $skillPoints,
            'community_points' => $communityPoints,
        ]);

        event(new CharacterLeveledUp($character));

        return $character;
    }
}
