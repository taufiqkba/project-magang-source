<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StoCabangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->stateAbbr(),
            'area' => $this->faker->city()
        ];
    }
}
