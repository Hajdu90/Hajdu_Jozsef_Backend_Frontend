<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class esemeny extends Model
{
    /** @use HasFactory<\Database\Factories\EsemenyFactory> */
    use HasFactory;

    protected $fillable = [
        'kategoria_id',
        'esemeny_nev',
        'leiras',
        'datum',
        'ar',
        'resztvevok',
        'kepUrl'
    ];

    protected $with = ['kategoria'];

    public function kategoria() {
    return $this->belongsTo(kategoria::class, 
    'kategoria_id');
 }
}
