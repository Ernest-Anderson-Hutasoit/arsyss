<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Barangbukti extends Model
{
    use HasFactory;

    public function perkaras():BelongsToMany
    {
        return $this->belongsToMany(Perkara::class,"barangbukti_perkara")->withTimestamps();
    }
}
