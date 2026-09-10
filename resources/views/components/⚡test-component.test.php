<?php

use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test('test-component')
        ->assertStatus(200);
});
