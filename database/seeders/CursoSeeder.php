<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Curso::create([
            'curso'=>'1º',
            'ciclo'=>'Ciclo Básico Técnico',
        ]);
        Curso::create([
            'curso'=>'2º',
            'ciclo'=>'Ciclo Básico Técnico',
        ]);
        Curso::create([
            'curso'=>'3º',
            'ciclo'=>'Ciclo Superior Orientado',
            'carrera'=>'Maestro Mayor de Obras'
        ]);
        Curso::create([
            'curso'=>'4º',
            'ciclo'=>'Ciclo Superior Orientado',
            'carrera'=>'Maestro Mayor de Obras'
        ]);

        Curso::create([
            'curso'=>'5º',
            'ciclo'=>'Ciclo Superior Orientado',
            'carrera'=>'Maestro Mayor de Obras'
        ]);

        Curso::create([
            'curso'=>'6º',
            'ciclo'=>'Ciclo Superior Orientado',
            'carrera'=>'Maestro Mayor de Obras'
        ]);
    }
}
