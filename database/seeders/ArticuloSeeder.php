<?php

namespace Database\Seeders;

use App\Models\Articulo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Articulo::create([
            'articulo'=>'8°a',
            'denominacion'=>'Enfermedad leve',
            'descuentoPresentismo'=>'SI'
        ]);

        Articulo::create([
            'articulo'=>'8°b',
            'denominacion'=>'Enfermedad grave',
            'descuentoPresentismo'=>'SI'
        ]);

        Articulo::create([
            'articulo'=>'10°',
            'denominacion'=>'Accidente de trabajo',
            'descuentoPresentismo'=>'NO'
        ]);

        Articulo::create([
            'articulo'=>'11°',
            'denominacion'=>'Atencion de familiar enfermo - Enfermedad de un familiar.',
            'descuentoPresentismo'=>'SI'
        ]);

        Articulo::create([
            'articulo'=>'12°',
            'denominacion'=>'Aislamiento',
            'descuentoPresentismo'=>'NO'
        ]);

        Articulo::create([
            'articulo'=>'14°a',
            'denominacion'=>'Parto simple con nacimiento a término de niño normal',
            'descuentoPresentismo'=>'NO'
        ]);

        Articulo::create([
            'articulo'=>'14°b',
            'denominacion'=>'Nacimiento múltiple a término de niños normales',
            'descuentoPresentismo'=>'NO'
        ]);

        Articulo::create([
            'articulo'=>'14°c',
            'denominacion'=>'Nacimiento múltiple de niños normales prematuros',
            'descuentoPresentismo'=>'NO'
        ]);

        Articulo::create([
            'articulo'=>'14°d',
            'denominacion'=>'Nacimiento de niño prematuro normal',
            'descuentoPresentismo'=>'NO'
        ]);

        Articulo::create([
            'articulo'=>'15°',
            'denominacion'=>'Franquicia por Atención y Alimentación de Hijo',
            'descuentoPresentismo'=>'NO'
        ]);

        Articulo::create([
            'articulo'=>'16°',
            'denominacion'=>'Nacimiento de Hijo del Docente Varón',
            'descuentoPresentismo'=>'NO'
        ]);

        Articulo::create([
            'articulo'=>'17°',
            'denominacion'=>'Razones particulares',
            'descuentoPresentismo'=>'SI'
        ]);

        Articulo::create([
            'articulo'=>'18°',
            'denominacion'=>'Cambio de estado',
            'descuentoPresentismo'=>'NO'
        ]);

        Articulo::create([
            'articulo'=>'20°',
            'denominacion'=>'Duelo',
            'descuentoPresentismo'=>'NO'
        ]);

        Articulo::create([
            'articulo'=>'21°',
            'denominacion'=>'Por exámen',
            'descuentoPresentismo'=>'SI'
        ]);

        Articulo::create([
            'articulo'=>'22°',
            'denominacion'=>'Actividades de interes publico',
            'descuentoPresentismo'=>'NO'
        ]);

        Articulo::create([
            'articulo'=>'25°',
            'denominacion'=>'Franquicia por estudio',
            'descuentoPresentismo'=>'SI'
        ]);

        Articulo::create([
            'articulo'=>'27°',
            'denominacion'=>'Licencia por representación política',
            'descuentoPresentismo'=>'NO'
        ]);

        Articulo::create([
            'articulo'=>'28°b',
            'denominacion'=>'Licencia por representación gremial',
            'descuentoPresentismo'=>'NO'
        ]);

        Articulo::create([
            'articulo'=>'28°c',
            'denominacion'=>'Licencia por representación gremial',
            'descuentoPresentismo'=>'NO'
        ]);

        Articulo::create([
            'articulo'=>'30°',
            'denominacion'=>'Día femenino',
            'descuentoPresentismo'=>'NO'
        ]);

        Articulo::create([
            'articulo'=>'31°',
            'denominacion'=>'Donación de sangre',
            'descuentoPresentismo'=>'NO'
        ]);

        Articulo::create([
            'articulo'=>'32°',
            'denominacion'=>'Licencia sin goce de haberes',
            'descuentoPresentismo'=>'NO'
        ]);

        Articulo::create([
            'articulo'=>'33°',
            'denominacion'=>'Licencia para Desempeñar otro Cargo o Función',
            'descuentoPresentismo'=>'NO'
        ]);

        Articulo::create([
            'articulo'=>'35°',
            'denominacion'=>'Miembro del Consejo de Educación, Junta de Clasificaciones y
            Calificaciones y Tribunal de Disciplina',
            'descuentoPresentismo'=>'NO'
        ]);

        Articulo::create([
            'articulo'=>'Constancias Varias',
            'denominacion'=>'Constancias',
            'descuentoPresentismo'=>'NO'
        ]);

        Articulo::create([
            'articulo'=>'Injustificada',
            'denominacion'=>'Falta Injustificada',
            'descuentoPresentismo'=>'NO'
        ]);


    }
}
