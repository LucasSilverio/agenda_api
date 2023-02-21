<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'companyname' =>    $this->faker->word(),
            'slug' => $this->faker->word(),
            'ownername' => $this->faker->name(),
            'email' => $this->faker->email(),
            'phone' => $this->faker->phoneNumber(),
            'city' => $this->faker->city(),
            'uf' => $this->faker->word()
        ];
    }
}
