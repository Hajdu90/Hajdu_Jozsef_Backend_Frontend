<?php

namespace Database\Seeders;

use App\Models\esemeny;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EsemenySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        esemeny::create([
            'kategoria_id' => '1',
            'esemeny_nev' => 'Edda koncenrt',
            'leiras' => 'Nyári szabadtári koncenrt',
            'datum' => '2026-05-25 09:25:30',
            'ar' => 5000,
            'resztvevok' => 5,
            'kepUrl' => '/frontend/kepek/koncert.jpg'
        ]);

        esemeny::create([
            'kategoria_id' => '2',
            'esemeny_nev' => 'Kiállítás',
            'leiras' => 'Nyári szabadtári kiállítás',
            'datum' => '2026-07-12 19:25:30',
            'ar' => 12000,
            'resztvevok' => 20,
            'kepUrl' => '/frontend/kepek/kiallitas.jpg'
        ]);

        esemeny::create([
            'kategoria_id' => '2',
            'esemeny_nev' => 'Színház',
            'leiras' => 'Esti színház',
            'datum' => '2026-06-11 20:12:30',
            'ar' => 3000,
            'resztvevok' => 12,
            'kepUrl' => '/frontend/kepek/szinhaz.jpg'
        ]);

        esemeny::create([
            'kategoria_id' => '2',
            'esemeny_nev' => 'Színház',
            'leiras' => 'Nyári szabadtári koncenrt',
            'datum' => '2026-06-28 12:25:30',
            'ar' => 9000,
            'resztvevok' => 30,
            'kepUrl' => '/frontend/kepek/szinhaz.jpg'
        ]);
    }
}
