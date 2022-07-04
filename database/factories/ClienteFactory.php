<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
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
            'nom_cli' => $this->faker->name(),
            'num_tel_cel' => $this->faker->randomNumber(9,false)
        ];
    }
}
