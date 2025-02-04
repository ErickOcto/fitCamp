<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GymTestimonial extends Model
{
    protected $guarded = [
        'id'
    ];

    public function gym(): BelongsTo{
        return $this->belongsTo(Gym::class, 'gym_id');
    }
}
