<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CandidateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
            'email'=>$this->faker->safeEmail(),
            'phone'=>$this->faker->text(),
            'address'=>$this->faker->text(),
            'skill'=>$this->faker->text(),
            'experience'=>$this->faker->text(),
            'otp'=>rand(000,999),
        ];
    }
}
