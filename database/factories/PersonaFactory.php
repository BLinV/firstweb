<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PersonaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dni' => $this->faker->randomNumber(8,false),
            'nom_per' => $this->faker->name(),
                'foto'=>$this->faker->name(),
            'fec_nac' => $this->faker->date(),
            'est_civ' => $this->faker->randomElement(['S','C','V','D']),
            'num_tel_cel' => $this->faker->randomNumber(9,false),
            'direccion' => $this->faker->sentence(2),
            'id_cargo' => $this->faker->numberBetween(0,5),
            'id_tiend' => $this->faker->numberBetween(1,3)
        ];
    }
}
