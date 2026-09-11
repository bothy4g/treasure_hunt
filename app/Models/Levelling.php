<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Levelling extends Model
{
    /** @use HasFactory<Levelling> */
    use HasFactory;

    protected $table = 'levelings';

    protected $fillable = [
        'character_id',
        'to_level',
        'area',
        'health_points',
        'faith_points',
        'skill_points',
        'community_points',
        'leveled_up_at',
    ];

    protected $casts = [
        'leveled_up_at' => 'datetime',
        'area' => 'integer',
        'to_level' => 'integer',
        'health_points' => 'integer',
        'faith_points' => 'integer',
        'skill_points' => 'integer',
        'community_points' => 'integer',
    ];

    public function character(): BelongsTo
    {
        return $this->belongsTo(Character::class);
    }
}
