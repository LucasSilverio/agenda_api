<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'company_id' => $this->faker->numberBetween(1, 50),
            'professional_id' => $this->faker->numberBetween(1,100),
            'name' => $this->faker->sentence(2),
            'description' => $this->faker->sentence(10),
            'price' => $this->faker->randomFloat(2, 10, 99),
            'time' => '00:40'
        ];
    }
}
