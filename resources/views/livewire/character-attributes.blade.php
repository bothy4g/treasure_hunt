<div class="rounded-xl border border-neutral-300 dark:border-neutral-600 bg-white dark:bg-zinc-900 p-6 shadow-lg">
    <div class="space-y-4">
        <div class="flex items-center justify-between">
            <span class="font-medium text-neutral-900 dark:text-neutral-100">
                {{ __('Remaining points') }}: {{ $remainingPoints }} / {{ \App\Models\Character::MAX_DISTRIBUTABLE_POINTS }}
            </span>
        </div>
        

        @foreach ($character->getCharacterAttributes() as $attribute)
            <div class="flex items-center justify-between">
                <span class="font-medium text-neutral-900 dark:text-neutral-100">
                    {{ ucfirst(__($attribute)) }}
                </span>

                <livewire:quantity-input
                    wire:key="input-{{ $attribute }}"
                    :id="'character-' . $attribute"
                    name="{{ $attribute }}"
                    label=""
                    :min="1"
                    :max="20"
                    :value="$character->$attribute ?? 1"
                    :remaining-points="$remainingPoints"
                    :attributes-readonly="$attributesReadonly"
                />
            </div>
        @endforeach

        @if (!$attributesReadonly && $remainingPoints == 0)
            <div class="flex justify-center">
                <button
                    wire:click="saveGeneratedAt()"
                    type="button"
                    @disabled($remainingPoints > 0)
                    class="px-4 py-2 {{ $remainingPoints > 0 ? 'bg-gray-400 cursor-not-allowed' : 'bg-blue-500 hover:bg-blue-600' }} text-white rounded transition-colors"
                >
                    {{ __('Save') }}
                </button> 
            </div>
        @endif
    </div>
</div>