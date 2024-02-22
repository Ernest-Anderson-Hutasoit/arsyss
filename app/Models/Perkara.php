<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Perkara extends Model
{
    use HasFactory;

    protected $fillable = ['jenis_pidana', 'nomor_register', 'nomor_sprindik', 'jenis', 'pasal_dakwaan', 'status'];

    public function p16s(): HasOne
    {
        // return $this->hasOne(P16::class)->withDefault();
        return $this->hasOne(P16::class);
    }
    public function p16as(): HasOne
    {
        return $this->hasOne(P16a::class);
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
