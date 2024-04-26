<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Docente;
use App\Models\Licencia;
use App\Models\Obligacione;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call(ArticuloSeeder::class);
        $this->call(CargoSeeder::class);
        $this->call(CursoSeeder::class);
        $this->call(EspacioSeeder::class);

        //Factories
        Docente::factory(10)->create();
        Obligacione::factory(25)->create();
        Licencia::factory(25)->create();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
