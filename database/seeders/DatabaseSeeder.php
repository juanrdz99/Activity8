<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Factories\CityFactory; // Importa la fábrica de City

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Ejecutar semillas de ciudades
        CityFactory::new()->count(20)->create();

        // Ejecutar semillas de equipos
        \App\Models\Team::factory()->count(32)->create(); // Otra forma de importar Team::class
    }
}
