<?php

use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('Character')] class extends Component {
} ?>

<x-layouts::app :title="__('Character')">
    <div class="rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white dark:bg-zinc-900 p-6">
        <h1 class="text-2xl font-bold text-neutral-900 dark:text-neutral-100">
            Hello,
        </h1>

        <?php
        $character = auth()->user()->characters()->where('id', auth()->user()->active_character_id)->first()
            ?? auth()->user()->characters()->first();
        $name = $character->name ?? 'Adventurer';
        ?>

        <livewire:character-selector />

        <div x-data x-on:refresh-page.window="window.location.reload()" class="hidden"></div>

        <livewire:character-name :initial-name="$name" :character="$character" />

        <div class="flex flex-row w-full gap-4">
            <div class="w-half mt-8">
                <div class="flex justify-center">
                    <div class="w-100">
                        <livewire:character-attributes />
                    </div>
                </div>
            </div>

            <div class="w-half">
                <div class="flex justify-center">
                    <div class="w-1/2">
                        <div class="mt-6 space-y-6">
                            <x-character-points :character="$character" />

                            <x-temptation-resistance :character="$character" />

                            <x-experience :character="$character" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts::app>
