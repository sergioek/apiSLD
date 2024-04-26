<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Docente>
 */
class DocenteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'apellidos'=>$this->faker->lastName(),
            'nombres'=>$this->faker->userName(),
            'dni'=>$this->faker->numberBetween($min=37313478,$max=58250368),
            'prefixCUIL'=>$this->faker->numberBetween($min=20,$max=29),
            'postfixCUIL'=>$this->faker->numberBetween($min=0,$max=9),
            'fnacimiento'=>$this->faker->date(),
            'lnacimiento'=>$this->faker->randomElement(['Fernandez','Santiago','La Banda']),
            'localidad'=>$this->faker->randomElement(['Fernandez','Santiago','La Banda']),
            'domicilio'=>$this->faker->sentence(),
            'estadoCivil'=>$this->faker->randomElement(['Casado/a','Soltero/a','Divorciado/a']),
            'finicioDocencia'=>$this->faker->date(),
            'titulo1'=>$this->faker->sentence(),
            'titulo2'=>$this->faker->sentence(),
            'email'=>$this->faker->email(),
            'tel'=>$this->faker->phoneNumber()
        ];
    }
}
