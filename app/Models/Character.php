<?php

namespace App\Models;

use Database\Factories\CharacterFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Character extends Model
{
    /** @use HasFactory<CharacterFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'description',
        'strength',
        'perserverance',
        'willpower',
        'intelligence',
        'dexterity',
        'socialization',
        'focus',
        'balance',
        'generated_at',
    ];

    /** @var string[] */
    protected array $primaryAttributes = [
        'strength',
        'perserverance',
        'willpower',
        'intelligence',
        'dexterity',
        'socialization',
        'focus',
        'balance',
    ];

    /**
     * Get the user that owns the character.
     *
     * @return BelongsTo<User, $this>
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the list of character attributes.
     *
     * @return string[]
     */
    public function getCharacterAttributes(): array
    {
        return $this->primaryAttributes;
    }
}
