<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategoria extends Model
{
    /** @use HasFactory<\Database\Factories\KategoriaFactory> */
    use HasFactory;

    protected $fillable = [
        'kategoria_nev',
    ];

    public function esemenyek () {
    return $this->hasMany(esemeny::class, 
    'kategoria_id');
    }
}
