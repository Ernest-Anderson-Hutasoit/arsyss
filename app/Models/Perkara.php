<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Perkara extends Model
{
    use HasFactory;

    public function p16s(): HasMany
    {
        return $this->hasMany(P16::class)->withTimestamps();
    }
    public function p16as(): HasMany
    {
        return $this->hasMany(P16a::class)->withTimestamps();
    }
    public function barangbuktis(): BelongsToMany
    {
        return $this->belongsToMany(Barangbukti::class,"barangbukti_perkara")->withTimestamps();
    }

    public function tersangkas(): BelongsToMany
    {
        return $this->belongsToMany(Tersangka::class,"perkara_tersangka")->withTimestamps();
    }
    
}
