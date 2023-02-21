<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProfessionalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'company_id' => $this->faker->numberBetween(1,50),
            'name' => $this->faker->name,
            'email' => $this->faker->safeEmail,
            'cellphone' => $this->faker->phoneNumber,
            'pass' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password,
        ];
    }
}
