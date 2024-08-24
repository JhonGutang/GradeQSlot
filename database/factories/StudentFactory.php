<?php

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    protected $model = \App\Models\Student::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'gender' => $this->faker->randomElement(['male', 'female', 'other']),
            'password' => bcrypt('password'), // or Hash::make('password')
        ];
    }
}
