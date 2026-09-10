<?php

use Flux\Flux;
use Livewire\Attributes\Reactive;
use Livewire\Component;

new class extends Component
{
    public string $name;

    public bool $isEditable = false;

    public ?\App\Models\Character $character = null;

    public function mount(string $initialName): void
    {
        $this->name = $initialName;
    }


    public function editName(): void
    {
        $this->isEditable = true;
    }

    public function saveName(): void
    {
        $validated = $this->validate([
            'name' => 'required|string|max:255',
        ]);
        
        if (empty($validated)){
            Flux::toast(variant: 'danger', text: __('Invalid characters provided in Character name'));

            return;
        }

        if ($this->character) {
            $this->character->update(['name' => $validated['name']]);
            $this->name = $validated['name'];
        }

        $this->isEditable = false;

        Flux::toast(variant: 'success', text: __('Character name saved.'));
    }
};
?>

<div class="flex items-center gap-2">
    @if ($isEditable)
        <flux:input
            wire:model.live="name"
            class="text-xl font-bold"
            placeholder="Enter character name"
        />
        <flux:button
            variant="primary"
            wire:click="saveName"
            icon="check"
            size="sm"
        />
    @else
        <h1 class="text-2xl font-bold text-neutral-900 dark:text-neutral-100">
            {{ $name }}
        </h1>
        <flux:button
            variant="subtle"
            wire:click="editName"
            icon="pencil"
            size="sm"
        />
    @endif
</div>