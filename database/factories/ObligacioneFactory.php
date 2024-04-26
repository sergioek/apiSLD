<?php

namespace Database\Factories;

use App\Models\Cargo;
use App\Models\Docente;
use App\Models\Espacio;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ObligacioneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        $dias = [
            'Lunes' => ['cantidad' => $this->faker->numberBetween($min=0, $max=6)],
            'Martes' => ['cantidad' => $this->faker->numberBetween($min=0, $max=6)],
            'Miércoles' => ['cantidad' => $this->faker->numberBetween($min=0, $max=6)],
            'Jueves' => ['cantidad' => $this->faker->numberBetween($min=0, $max=6)],
            'Viernes' => ['cantidad' => $this->faker->numberBetween($min=0, $max=6)],
        ];
        $diasJSON=json_encode($dias);
        return [
            'caracter'=>$this->faker->randomElement(['Suplente','Titular','Interino']),
            'turno'=>$this->faker->randomElement(['M','T','N']),
            'horas'=>$this->faker->numberBetween($min=1,$max=10),
            'dias'=>$diasJSON,
            'fechaAlta'=>$this->faker->date('Y-m-d'),
            'origenVacante'=>$this->faker->text(),
            'expedienteAlta'=>$this->faker->word(),
            'numeroControl'=>$this->faker->word(),
            'cupof'=>$this->faker->word(),
            'observaciones'=>$this->faker->text(),
            'division'=>$this->faker->randomElement(['A','B','C','D','E',null]),
            // 'causaBaja'=>$this->faker->word(),
            // 'fechaBaja'=>$this->faker->date('Y-m-d'),
            // 'expedienteBaja'=>$this->faker->word(),
            'docente_id'=>Docente::all()->random()->id,
            'cargo_id'=>Cargo::all()->random()->id,
            'espacio_id'=> Espacio::all()->random()->id,
        ];

    }
}
