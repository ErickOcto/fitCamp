<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GymFacility extends Model
{
    protected $guarded = [
        'id'
    ];

    public function gym(): BelongsTo{
        return $this->belongsTo(Gym::class, 'gym_id');
    }

    public function facility(): BelongsTo{
        return $this->belongsTo(Facility::class, 'facility_id');
    }
}
