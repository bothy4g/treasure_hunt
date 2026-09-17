<?php

namespace App\Livewire;

use App\Events\CharacterGenerated;
use App\Models\Character;
use App\Models\User;
use Database\Factories\CharacterFactory;
use Flux\Flux;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Character Attributes')]
class CharacterAttributes extends Component
{
    public ?Character $character;

    /** @var array<string, int> */
    public array $updates = [];

    public int $strength = 0;

    public int $dexterity = 0;

    public int $willpower = 0;

    public int $perseverance = 0;

    public int $intelligence = 0;

    public int $socialization = 0;

    public int $focus = 0;

    public int $balance = 0;

    public int $remainingPoints = Character::MAX_DISTRIBUTABLE_POINTS;

    public bool $attributesReadonly = false;

    public bool $nameEditable = false;

    public string $characterName = '';

    public function mount(): void
    {
        $user = auth()->user();

        if (! $user instanceof User) {
            $this->character = null;

            return;
        }

        $this->character = Character::where('user_id', $user->id)
            ->when($user->active_character_id, fn ($q) => $q->where('id', $user->active_character_id))
            ->first();

        // Auto-create character if one does not exist
        if (! $this->character instanceof Character) {
            $this->character = $this->createCharacter($user);
        }

        // Set initial attribute values from character
        foreach ($this->character->getCharacterAttributes() as $attr) {
            $this->$attr = (int) $this->character->$attr;
        }

        $this->characterName = $this->character->name;

        // Set initial readonly state based on generated_at
        $this->attributesReadonly = $this->character->generated_at !== null;

        // Calculate initial remaining points
        $this->calculateRemainingPoints();
    }

    public function toggleNameEdit(): void
    {
        $this->nameEditable = ! $this->nameEditable;
    }

    public function saveName(): void
    {
        $validated = $this->validate([
            'characterName' => 'required|string|max:255',
        ]);

        if ($this->character) {
            $this->character->update(['name' => $validated['characterName']]);
            $this->characterName = $validated['characterName'];
        }

        $this->nameEditable = false;

        Flux::toast(variant: 'success', text: __('Character name saved.'));
    }

    protected function calculateRemainingPoints(): void
    {
        $sum = $this->strength + $this->dexterity + $this->willpower + $this->perseverance
            + $this->intelligence + $this->socialization + $this->focus + $this->balance;

        $this->remainingPoints = max(0, Character::MAX_DISTRIBUTABLE_POINTS - $sum);
    }

    /**
     * Create a new character for the authenticated user.
     */
    protected function createCharacter(User $user): Character
    {
        return CharacterFactory::new()->for($user)->createOne([
            'name' => 'New Character',
            'description' => '',
            'strength' => 1,
            'perseverance' => 1,
            'willpower' => 1,
            'intelligence' => 1,
            'dexterity' => 1,
            'socialization' => 1,
            'focus' => 1,
            'balance' => 1,
        ]);
    }

    #[On('quantityChanged')]
    public function handleQuantityChange(string $name, int $value): void
    {
        // Calculate current sum of all attributes
        $currentSum = $this->strength + $this->dexterity + $this->willpower + $this->perseverance
            + $this->intelligence + $this->socialization + $this->focus + $this->balance;
        // dump($currentSum);

        // Calculate what the new sum would be if we update this attribute
        $attrCurrentValue = $this->$name;
        // dump($attrCurrentValue);
        $newSum = $currentSum - $attrCurrentValue + $value;
        // dd($newSum);

        if ($newSum > Character::MAX_DISTRIBUTABLE_POINTS) {
            Flux::toast(variant: 'danger', text: __('You have reached the maximum distributable points'));

            return;
        }

        $this->$name = $value;
        $this->updates[$name] = $value;
        $this->saveCharacterAttributes($name);
    }

    /**
     * Save the current timestamp to the generated_at column and make attributes readonly.
     */
    public function saveGeneratedAt(): void
    {
        if ($this->character instanceof Character) {
            $this->character->update(['generated_at' => now()]);

            $this->attributesReadonly = true;
            Flux::toast(variant: 'success', text: __('Generated at timestamp saved.'));

            // Recalculate remaining points after save
            $this->calculateRemainingPoints();
            Log::debug('Character generated');

            CharacterGenerated::dispatch($this->character);

            $this->dispatch('refresh-page');
        }
    }

    public function saveCharacterAttributes(string $name): void
    {
        $validated = $this->validate([
            $name => 'required|integer|min:1|max:20',
        ]);

        $this->character->update($validated);

        $this->updates = [];
        Flux::toast(variant: 'success', text: __('Character attributes saved.'));

        // Recalculate remaining points after save
        $this->calculateRemainingPoints();
    }
}
