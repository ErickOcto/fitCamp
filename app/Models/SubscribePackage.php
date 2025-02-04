<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SubscribePackage extends Model
{
    protected $guarded = ['id'];

    public function subscribeBenefits(): HasMany{
        return $this->hasMany(SubscribeBenefit::class);
    }
}
