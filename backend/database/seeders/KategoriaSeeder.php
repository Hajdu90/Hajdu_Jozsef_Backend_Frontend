<?php

namespace Database\Seeders;

use App\Models\kategoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        kategoria::create([
            'kategoria_nev' => 'zene',
        ]);

        kategoria::create([
            'kategoria_nev' => 'kultura',
        ]);
    }
}
