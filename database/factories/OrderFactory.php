<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date' => $this->faker->date(),
            'amount' => $this->faker->numberBetween(1, 100),
            'client' => $this->faker->numberBetween(1, 100),
        ];
    }
}
