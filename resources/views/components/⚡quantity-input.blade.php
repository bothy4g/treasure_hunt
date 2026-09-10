<?php

use Flux\Flux;
use Livewire\Attributes\Reactive;
use Livewire\Component;

new class extends Component
{
    public string $id;

    public string $label;

    public string $name;

    public int $value = 0;

    public int $previousValue = 0;

    public int $min = 0;

    public int $max = 100;

    #[Reactive]
    public int $remainingPoints = 0;

    /** Name of the event dispatched when the value changes. */
    public string $callback = 'quantityChanged';

    public bool $attributesReadonly = false;

    public function mount(
        string $id,
        string $label,
        string $name,
        int $value = 0,
        int $min = 0,
        int $max = 100,
        int $remainingPoints = 0,
        string $callback = 'quantityChanged',
        bool $attributesReadonly = false
    ) {
        $this->id = $id;
        $this->label = $label;
        $this->name = $name;
        $this->min = $min;
        $this->max = $max;
        $this->value = max($min, min($max, $value));
        $this->previousValue = $this->value;
        $this->remainingPoints = $remainingPoints;
        $this->callback = $callback;
        $this->attributesReadonly = $attributesReadonly;
    }

    public function incrementValue(): void
    {
        if ($this->value < $this->max && $this->remainingPoints > 0) {
            $this->previousValue = $this->value;
            $this->value++;
            $this->submit();
        }
    }

    public function decrementValue(): void
    {
        if ($this->value > $this->min) {
            $this->previousValue = $this->value;
            $this->value--;
            $this->submit();
        }
    }

    /** Fires before $value changes (typing, native spinners, etc.). */
    public function updatingValue($value): void
    {
        $this->previousValue = $this->value;
    }

    /** Fires whenever $value changes (typing, native spinners, etc.). */
    public function updatedValue($value): void
    {
        $this->value = max($this->min, min($this->max, (int) $value));

        if ($this->value > $this->previousValue) {
            $increase = $this->value - $this->previousValue;

            if ($increase > $this->remainingPoints) {
                $this->value = $this->previousValue;
                Flux::toast(variant: 'danger', text: __('You have reached the maximum distributable points'));

                return;
            }
        }

        if ($this->value === $this->previousValue) {
            return;
        }

        $this->submit();
    }

    public function submit(): void
    {
        $this->dispatch($this->callback, name: $this->name, value: $this->value);
    }
};
?>

<flux:field>
    <flux:label for="{{ $id }}">{{ $label }}</flux:label>

    <flux:input.group>
        @if (!$attributesReadonly)
            <flux:button
                type="button"
                wire:click="decrementValue"
                icon="minus"
                :disabled="$value <= $min || $attributesReadonly"
            />
        @endif

        <flux:input
            type="number"
            id="{{ $id }}"
            name="{{ $name }}"
            wire:model.live="value"
            min="{{ $min }}"
            max="{{ $max }}"
            class="text-center"
            :readonly="$attributesReadonly"
        />

        @if (!$attributesReadonly)
        <flux:button
            type="button"
            wire:click="incrementValue"
            icon="plus"
            :disabled="$value >= $max || $remainingPoints <= 0 || $attributesReadonly"
        />
        @endif
    </flux:input.group>
</flux:field>
