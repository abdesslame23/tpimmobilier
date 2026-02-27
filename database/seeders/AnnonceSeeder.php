<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnnonceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    \App\Models\Annonce::create([
        'titre' => 'Appartement moderne',
        'description' => 'Bel appartement au centre ville',
        'type' => 'Appartement',
        'ville' => 'Casablanca',
        'superficie' => 120,
        'neuf' => true,
        'prix' => 950000
    ]);
}
}