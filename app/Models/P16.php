<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class P16 extends Model
{
    use HasFactory;
    protected $table = 'p16s';
    protected $fillable = ['nomor', 'tanggal', 'gambar'];

    public function perkaras(): BelongsTo
    {
        return $this->belongsTo(Perkara::class);
    }
    public function jaksas(): BelongsToMany
    {
        return $this->belongsToMany(Jaksa::class, "jaksa_p16")->withTimestamps();
    }
}
