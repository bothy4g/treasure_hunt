<?php

use Livewire\Component;

new class extends Component
{
    public function setDefaultCharacter(int $id): void
    {
        $user = auth()->user();
        $user->update(['active_character_id' => $id]);
        $user->refresh();
        auth()->setUser($user);
        $this->dispatch('refresh-page');
    }
};
?>

<div class="mb-6">
    <h2 class="text-lg font-semibold text-neutral-900 dark:text-neutral-100 mb-3">Select Default Character</h2>
    <table class="min-w-full text-sm text-left border-collapse">
        <thead class="text-xs text-neutral-700 dark:text-neutral-300 uppercase bg-neutral-100 dark:bg-zinc-800">
            <tr>
                <th class="px-4 py-3 font-medium">Character</th>
                <th class="px-4 py-3 font-medium">Default</th>
            </tr>
        </thead>
        <tbody>
            @forelse(auth()->user()->characters as $char)
                <tr class="border-b border-neutral-200 dark:border-zinc-700">
                    <td class="px-4 py-3 font-medium text-neutral-900 dark:text-neutral-100">{{ $char->name }}</td>
                    <td class="px-4 py-3">
                        <label wire:click="setDefaultCharacter({{ $char->id }})" class="inline-flex items-center cursor-pointer gap-2 select-none">
                            <input type="radio" name="default_char_selector" value="{{ $char->id }}"
                                @if(auth()->user()->active_character_id == $char->id) checked @endif
                                class="w-4 h-4 text-blue-600 bg-neutral-100 border-neutral-300 dark:bg-zinc-700 dark:border-zinc-600 focus:ring-blue-500" />
                            <span class="text-sm text-neutral-700 dark:text-neutral-300">Set as default</span>
                        </label>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="2" class="px-4 py-3 text-neutral-500">No characters available.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
