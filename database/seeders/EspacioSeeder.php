<?php

namespace Database\Seeders;

use App\Models\Espacio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EspacioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Espacios 1º ----------
        Espacio::create([
            'nombre'=>'Geografía',
            'curso_id'=>1,
        ]);

        Espacio::create([
            'nombre'=>'Historia',
            'curso_id'=>1,
        ]);

        Espacio::create([
            'nombre'=>'Lengua',
            'curso_id'=>1,
        ]);

        Espacio::create([
            'nombre'=>'Lengua Extranjera (Inglés)',
            'curso_id'=>1,
        ]);

        Espacio::create([
            'nombre'=>'Educación Física',
            
            'curso_id'=>1,
            
        ]);


        Espacio::create([
            'nombre'=>'Formación Ética y Ciudadana',
            
            'curso_id'=>1,
      
        ]);

        Espacio::create([
            'nombre'=>'Educación Artistica',
        
            'curso_id'=>1,
         
        ]);

        Espacio::create([
            'nombre'=>'Biología',
          
            'curso_id'=>1,
       
        ]);

        Espacio::create([
            'nombre'=>'Matemáticas',
        
            'curso_id'=>1,
      
        ]);


        Espacio::create([
            'nombre'=>'Educación Tecnológica',

            'curso_id'=>1,
   
        ]);


        Espacio::create([
            'nombre'=>'Dibujo Técnico',
   
            'curso_id'=>1,
       
        ]);


        Espacio::create([
            'nombre'=>'Taller',
        
            'curso_id'=>1,
         
        ]);
//------------fin espacios 1º--------------------------------



    //Espacios 2º ----------
    Espacio::create([
        'nombre'=>'Geografía',
       
        'curso_id'=>2,
     
    ]);

    Espacio::create([
        'nombre'=>'Historia',
     
        'curso_id'=>2,
  
    ]);

    Espacio::create([
        'nombre'=>'Lengua',
   
        'curso_id'=>2,
 
    ]);

    Espacio::create([
        'nombre'=>'Lengua Extranjera (Inglés)',
     
        'curso_id'=>2,
 
    ]);

    Espacio::create([
        'nombre'=>'Educación Física',
   
        'curso_id'=>2,
  
    ]);


    Espacio::create([
        'nombre'=>'Formación Ética y Ciudadana',
    
        'curso_id'=>2,
  
    ]);

    Espacio::create([
        'nombre'=>'Educación Artistica',
       
        'curso_id'=>2,
      
    ]);

    Espacio::create([
        'nombre'=>'Física',
    
        'curso_id'=>2,
  
    ]);

    Espacio::create([
        'nombre'=>'Matemáticas',
   
        'curso_id'=>2,

    ]);


    Espacio::create([
        'nombre'=>'Educación Tecnológica',
        'curso_id'=>2,
    ]);


    Espacio::create([
        'nombre'=>'Dibujo Técnico',
  
        'curso_id'=>2,
  
    ]);


    Espacio::create([
        'nombre'=>'Química',
   
        'curso_id'=>2,

    ]);


    Espacio::create([
        'nombre'=>'Taller',
     
        'curso_id'=>2,
  
    ]);
//------------fin espacios 2º--------------------------------

//------ Espacios de 3º

    Espacio::create([
        'nombre'=>'Lengua y Literatura',
      
        'curso_id'=>3,
   
    ]);

    Espacio::create([
        'nombre'=>'Formación Ética y Ciudadana',
      
        'curso_id'=>3,
     
    ]);

    Espacio::create([
        'nombre'=>'Lengua Extranjera (Inglés)',
       
        'curso_id'=>3,

    ]);


    Espacio::create([
        'nombre'=>'Geografía',

        'curso_id'=>3,
   
    ]);


    Espacio::create([
        'nombre'=>'Educación Física',
     
        'curso_id'=>3,
 
    ]);


    Espacio::create([
        'nombre'=>'Matemáticas',

        'curso_id'=>3,
    
    ]);

    Espacio::create([
        'nombre'=>'Física Aplicada',
        
        'curso_id'=>3,
     
    ]);



    Espacio::create([
        'nombre'=>'Química de los Materiales para la Construcción',
       
        'curso_id'=>3,
     
    ]);

    
    Espacio::create([
        'nombre'=>'Materiales para la Construcción I',
        
        'curso_id'=>3,
      
    ]);


    Espacio::create([
        'nombre'=>'Representación Gráfica',
      
        'curso_id'=>3,
     
    ]);


    Espacio::create([
        'nombre'=>'Sistemas Edilicios I',
    
        'curso_id'=>3,
    
    ]);


    Espacio::create([
        'nombre'=>'Taller',
      
        'curso_id'=>3,
 
    ]);
// fin espacios 3º---------------------------



//------ Espacios de 4º

Espacio::create([
    'nombre'=>'Lengua y Literatura',

    'curso_id'=>4,

]);

Espacio::create([
    'nombre'=>'Formación Ética y Ciudadana',
  
    'curso_id'=>4,

]);

Espacio::create([
    'nombre'=>'Lengua Extranjera (Inglés)',
    
    'curso_id'=>4,

]);


Espacio::create([
    'nombre'=>'Historia',
  
    'curso_id'=>4,

]);


Espacio::create([
    'nombre'=>'Educación Física',

    'curso_id'=>4,
   
]);


Espacio::create([
    'nombre'=>'Matemáticas',
   
    'curso_id'=>4,

]);


Espacio::create([
    'nombre'=>'Materiales para la Construcción II',
   
    'curso_id'=>4,
    
]);


Espacio::create([
    'nombre'=>'Sistemas Edilicios II',
 
    'curso_id'=>4,
   
]);

Espacio::create([
    'nombre'=>'Proyecto I',
   
    'curso_id'=>4,
   
]);


Espacio::create([
    'nombre'=>'Estructuras I',
 
    'curso_id'=>4,
   
]);

Espacio::create([
    'nombre'=>'Instalaciones I',
  
    'curso_id'=>4,
  
]);


Espacio::create([
    'nombre'=>'Taller',
    
    'curso_id'=>4,
   
]);
// fin espacios 4º---------------------------



//------ Espacios de 5º

Espacio::create([
    'nombre'=>'Lengua y Literatura',
  
    'curso_id'=>5,

]);

Espacio::create([
    'nombre'=>'Formación Ética y Ciudadana',

    'curso_id'=>5,
   
]);

Espacio::create([
    'nombre'=>'Inglés Técnico',

    'curso_id'=>5,
  
]);


Espacio::create([
    'nombre'=>'Educación Física',
   
    'curso_id'=>5,

]);


Espacio::create([
    'nombre'=>'Matemáticas',
   
    'curso_id'=>5,
   
]);


Espacio::create([
    'nombre'=>'Materiales para la Construcción III',
   
    'curso_id'=>5,
   
]);


Espacio::create([
    'nombre'=>'Normativa para la Construcción I',
    
    'curso_id'=>5,
  
]);


Espacio::create([
    'nombre'=>'Sistemas Edilicios III',

    'curso_id'=>5,
  
]);

Espacio::create([
    'nombre'=>'Proyecto II',
    
    'curso_id'=>5,
  
]);


Espacio::create([
    'nombre'=>'Estructuras II',
 
    'curso_id'=>5,
   
]);

Espacio::create([
    'nombre'=>'Instalaciones II',
    
    'curso_id'=>5,
    
]);


Espacio::create([
    'nombre'=>'Taller',
   
    'curso_id'=>5,
   
]);
// fin espacios 5º---------------------------


//------ Espacios de 6º

Espacio::create([
    'nombre'=>'Lengua',
   
    'curso_id'=>6,
   
]);

Espacio::create([
    'nombre'=>'Formación Ética y Ciudadana',
   
    'curso_id'=>6,
    
]);

Espacio::create([
    'nombre'=>'Inglés Técnico',
   
    'curso_id'=>6,
    
]);


Espacio::create([
    'nombre'=>'Matemáticas',
   
    'curso_id'=>6,
   
]);


Espacio::create([
    'nombre'=>'Normativa para la Construcción II',
  
    'curso_id'=>6,
 
]);


Espacio::create([
    'nombre'=>'Administración de Obras',
 
    'curso_id'=>6,

]);


Espacio::create([
    'nombre'=>'Gerenciamiento de Obras',

    'curso_id'=>6,
  
]);


Espacio::create([
    'nombre'=>'Proyecto III',
  
    'curso_id'=>6,
   
]);


Espacio::create([
    'nombre'=>'Estructuras III',
 
    'curso_id'=>6,
  
]);

Espacio::create([
    'nombre'=>'Proyecto de Instalaciones',
 
    'curso_id'=>6,

]);



Espacio::create([
    'nombre'=>'Mediciones de Campos',
  
    'curso_id'=>6,
   
]);



Espacio::create([
    'nombre'=>'Instalaciones Electromecánicas',
  
    'curso_id'=>6,
  
]);


Espacio::create([
    'nombre'=>'Prácticas Profesionalizantes',

    'curso_id'=>6,
 
]);

// fin espacios 6º---------------------------
    }
}
