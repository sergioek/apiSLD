<?php

namespace Database\Factories;

use App\Models\Articulo;
use App\Models\Obligacione;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Licencia>
 */
class LicenciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'finicio'=>$this->faker->date('Y-m-d'),
            'ffinal'=>$this->faker->date('Y-m-d'),
            'dias'=>$this->faker->numberBetween($min=1,$max=30),
            'obligacionesAfectadas'=>$this->faker->numberBetween($min=1,$max=6),
            'injustificada'=>$this->faker->randomElement(['SI','NO']),
            'documentacion'=>$this->faker->randomElement(['Completa','Incompleta']),
            'observaciones'=>$this->faker->text($max=10),
            'articulo_id'=>Articulo::all()->random()->id,
            'obligacione_id'=>Obligacione::all()->random()->id,
        ];
    }
}
