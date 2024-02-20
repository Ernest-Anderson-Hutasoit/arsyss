<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tersangka extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'alamat', 'gambar'];

    public function tersangkas():BelongsToMany
    {
        return $this->belongsToMany(Perkara::class,"perkara_tersangka")->withTimestamps();
    }
}
