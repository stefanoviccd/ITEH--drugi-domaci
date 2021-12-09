<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PresenterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstname' => $this->faker->name(),
            'lastname' =>$this->faker->word()
        ];
    }
}
