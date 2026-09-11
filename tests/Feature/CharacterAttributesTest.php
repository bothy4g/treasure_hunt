<?php

use App\Livewire\CharacterAttributes;
use App\Models\Character;
use App\Models\User;
use Livewire\Livewire;

test('it calculates remaining points on mount', function () {
    $user = User::factory()->create();
    $character = Character::factory()->for($user)->create([
        'strength' => 5,
        'perserverance' => 5,
        'willpower' => 5,
        'intelligence' => 5,
        'dexterity' => 5,
        'socialization' => 5,
        'focus' => 5,
        'balance' => 5,
    ]);

    $this->actingAs($user);

    Livewire::test(CharacterAttributes::class)
        ->assertSet('remainingPoints', Character::MAX_DISTRIBUTABLE_POINTS - 40)
        ->assertSet('strength', 5);
});

test('it reduces remaining points when an attribute increases', function () {
    $user = User::factory()->create();
    Character::factory()->for($user)->create([
        'strength' => 5,
        'perserverance' => 1,
        'willpower' => 1,
        'intelligence' => 1,
        'dexterity' => 1,
        'socialization' => 1,
        'focus' => 1,
        'balance' => 1,
    ]);

    $this->actingAs($user);

    Livewire::test(CharacterAttributes::class)
        ->assertSet('remainingPoints', Character::MAX_DISTRIBUTABLE_POINTS - 12)
        ->call('handleQuantityChange', name: 'strength', value: 10)
        ->assertSet('remainingPoints', Character::MAX_DISTRIBUTABLE_POINTS - 17)
        ->assertSet('strength', 10);

    expect(Character::where('user_id', $user->id)->first()->strength)->toBe(10);
});

test('it disables plus buttons when remaining points reach zero', function () {
    $user = User::factory()->create();
    Character::factory()->for($user)->create([
        'strength' => 11,
        'perserverance' => 11,
        'willpower' => 11,
        'intelligence' => 11,
        'dexterity' => 11,
        'socialization' => 11,
        'focus' => 11,
        'balance' => 10,
    ]);

    $this->actingAs($user);

    Livewire::test(CharacterAttributes::class)
        ->assertSet('remainingPoints', 0)
        ->assertSeeHtml('wire:click="incrementValue"')
        ->assertSeeHtml('disabled');
});

test('it shows an error toast when exceeding the maximum distributable points', function () {
    $user = User::factory()->create();
    $character = Character::factory()->for($user)->create([
        'strength' => 11,
        'perserverance' => 11,
        'willpower' => 11,
        'intelligence' => 11,
        'dexterity' => 11,
        'socialization' => 11,
        'focus' => 11,
        'balance' => 10,
    ]);

    $this->actingAs($user);

    Livewire::test(CharacterAttributes::class)
        ->assertSet('remainingPoints', 0)
        ->call('handleQuantityChange', name: 'strength', value: 12)
        ->assertDispatched('toast-show')
        ->assertSet('strength', 11);

    expect($character->fresh()->strength)->toBe(11);
});

test('it auto-saves attribute changes to the database', function () {
    $user = User::factory()->create();
    Character::factory()->for($user)->create([
        'strength' => 1,
        'perserverance' => 1,
        'willpower' => 1,
        'intelligence' => 1,
        'dexterity' => 1,
        'socialization' => 1,
        'focus' => 1,
        'balance' => 1,
    ]);

    $this->actingAs($user);

    Livewire::test(CharacterAttributes::class)
        ->call('handleQuantityChange', name: 'dexterity', value: 10)
        ->assertHasNoErrors();

    expect(Character::where('user_id', $user->id)->first()->dexterity)->toBe(10);
});

test('it increases remaining points when an attribute is decreased', function () {
    $user = User::factory()->create();
    Character::factory()->for($user)->create([
        'strength' => 10,
        'perserverance' => 1,
        'willpower' => 1,
        'intelligence' => 1,
        'dexterity' => 1,
        'socialization' => 1,
        'focus' => 1,
        'balance' => 1,
    ]);

    $this->actingAs($user);

    Livewire::test(CharacterAttributes::class)
        ->assertSet('remainingPoints', Character::MAX_DISTRIBUTABLE_POINTS - 17)
        ->call('handleQuantityChange', name: 'strength', value: 5)
        ->assertSet('remainingPoints', Character::MAX_DISTRIBUTABLE_POINTS - 12)
        ->assertSet('strength', 5);

    expect(Character::where('user_id', $user->id)->first()->strength)->toBe(5);
});

test('parent re-renders the remaining points counter as attributes are decreased', function () {
    $user = User::factory()->create();

    // All attributes sum to exactly Character::MAX_DISTRIBUTABLE_POINTS so remaining points starts at 0.
    $attributeList = ['strength', 'perserverance', 'willpower', 'intelligence', 'dexterity', 'socialization', 'focus', 'balance'];
    $attributes = [];
    foreach ($attributeList as $attr) {
        $attributes[$attr] = ($attr === 'balance') ? 7 : 10;
    }

    Character::factory()->for($user)->create($attributes);

    $this->actingAs($user);

    Livewire::test(CharacterAttributes::class)
        ->assertSet('remainingPoints', 0)
        ->assertSee('Remaining points: 0 / Character::MAX_DISTRIBUTABLE_POINTS')
        ->call('handleQuantityChange', name: 'strength', value: 9)
        ->assertSet('remainingPoints', Character::MAX_DISTRIBUTABLE_POINTS - 76)
        ->assertSee('Remaining points: 1 / Character::MAX_DISTRIBUTABLE_POINTS');
});

test('quantity input disables plus button when no remaining points', function () {
    Livewire::test('quantity-input', [
        'id' => 'test',
        'label' => 'Test',
        'name' => 'test',
        'value' => 5,
        'min' => 1,
        'max' => 20,
        'remainingPoints' => 0,
        'attributesReadonly' => false,
    ])
        ->call('incrementValue')
        ->assertSet('value', 5)
        ->assertNotDispatched('quantityChanged');
});

test('quantity input enables plus button when remaining points are available', function () {
    Livewire::test('quantity-input', [
        'id' => 'test',
        'label' => 'Test',
        'name' => 'test',
        'value' => 5,
        'min' => 1,
        'max' => 20,
        'remainingPoints' => 5,
    ])
        ->call('incrementValue')
        ->assertSet('value', 6)
        ->assertDispatched('quantityChanged');
});

test('quantity input resets manual increments that exceed remaining points', function () {
    Livewire::test('quantity-input', [
        'id' => 'test',
        'label' => 'Test',
        'name' => 'test',
        'value' => 5,
        'min' => 1,
        'max' => 20,
        'remainingPoints' => 0,
    ])
        ->assertSet('value', 5)
        ->set('value', 6)
        ->assertSet('value', 5)
        ->assertDispatched('toast-show');
});

test('quantity input allows manual increments within remaining points', function () {
    Livewire::test('quantity-input', [
        'id' => 'test',
        'label' => 'Test',
        'name' => 'test',
        'value' => 5,
        'min' => 1,
        'max' => 20,
        'remainingPoints' => 3,
    ])
        ->set('value', 8)
        ->assertSet('value', 8)
        ->assertDispatched('quantityChanged');
});

test('quantity input does not increment via plus button when no points remain', function () {
    Livewire::test('quantity-input', [
        'id' => 'test',
        'label' => 'Test',
        'name' => 'test',
        'value' => 5,
        'min' => 1,
        'max' => 20,
        'remainingPoints' => 0,
    ])
        ->call('incrementValue')
        ->assertSet('value', 5);
});

test('quantity input still decrements when no points remain', function () {
    Livewire::test('quantity-input', [
        'id' => 'test',
        'label' => 'Test',
        'name' => 'test',
        'value' => 5,
        'min' => 1,
        'max' => 20,
        'remainingPoints' => 0,
    ])
        ->call('decrementValue')
        ->assertSet('value', 4)
        ->assertDispatched('quantityChanged');
});

test('it allows the user to update the character name', function () {
    $user = User::factory()->create();
    $character = Character::factory()->for($user)->create([
        'name' => 'Old Name',
    ]);

    $this->actingAs($user);

    Livewire::test(CharacterAttributes::class)
        ->call('toggleEdit')
        ->set('characterName', 'New Name')
        ->call('updateCharacterName')
        ->assertSet('isEditing', false)
        ->assertSet('characterName', 'New Name');

    expect(Character::where('user_id', $user->id)->first()->name)->toBe('New Name');
});
