<?php

namespace Database\Seeders;

use App\Models\Cargo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CargoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cargo::create([
            'cargo'=>'Catedrático/a'
        ]);

        Cargo::create([
            'cargo'=>'Rector de 1ra'
        ]);

        Cargo::create([
            'cargo'=>'Vicerrector de 1ra'
        ]);

        Cargo::create([
            'cargo'=>'Asesor Pedagógico'
        ]);

        Cargo::create([
            'cargo'=>'Secretario de 1ra'
        ]);

        
        Cargo::create([
            'cargo'=>'Jefe de Taller'
        ]);

        Cargo::create([
            'cargo'=>'Prosecretario de 1ra'
        ]);

        Cargo::create([
            'cargo'=>'Ayudante Técnico'
        ]);

        Cargo::create([
            'cargo'=>'Encargado General de Control'
        ]);

        Cargo::create([
            'cargo'=>'Bibliotecario'
        ]);

        Cargo::create([
            'cargo'=>'Preceptor'
        ]);

        Cargo::create([
            'cargo'=>'MEP'
        ]);

        Cargo::create([
            'cargo'=>'Auxiliar de Secretaría'
        ]);

        Cargo::create([
            'cargo'=>'Ayudante de Trabajos Prácticos'
        ]);

       
    }
}
