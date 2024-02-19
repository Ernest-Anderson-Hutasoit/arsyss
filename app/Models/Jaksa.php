<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Jaksa extends Model
{
    use HasFactory;

    public function p16s(): BelongsToMany
    {
        return $this->belongsToMany(P16::class,"jaksa_p16")->withTimestamps();
    }
    public function p16as(): BelongsToMany
    {
        return $this->belongsToMany(P16a::class,"jaksa_p16a")->withTimestamps();
    }
}
