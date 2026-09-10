<?php

use App\Models\Character;
use App\Models\User;

test('it allows the user to update the character name from the main page', function () {
    $user = User::factory()->create();
    $character = Character::factory()->for($user)->create([
        'name' => 'Old Name',
    ]);

    $this->actingAs($user);

    Livewire::test('character_name', initialName: 'Old Name', character: $character)
        ->call('editName')
        ->set('name', 'New Name')
        ->call('saveName')
        ->assertSet('isEditable', false)
        ->assertSet('name', 'New Name');

    expect(Character::where('user_id', $user->id)->first()->name)->toBe('New Name');
});
