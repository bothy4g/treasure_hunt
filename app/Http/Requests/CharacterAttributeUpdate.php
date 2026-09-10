<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CharacterAttributeUpdate extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * @return array<string, array<int, string>>
     */
    public function rules(): array
    {
        return [
            'strength' => ['required', 'integer', 'min:1', 'max:20'],
            'willpower' => ['required', 'integer', 'min:1', 'max:20'],
            'perseverance' => ['required', 'integer', 'min:1', 'max:20'],
            'intelligence' => ['required', 'integer', 'min:1', 'max:20'],
            'dexterity' => ['required', 'integer', 'min:1', 'max:20'],
            'socialization' => ['required', 'integer', 'min:1', 'max:20'],
            'focus' => ['required', 'integer', 'min:1', 'max:20'],
            'balance' => ['required', 'integer', 'min:1', 'max:20'],
        ];
    }
}
