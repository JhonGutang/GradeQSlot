<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use App\Models\Student;

class StudentFactory extends Factory
{
    protected $model = Student::class;

    public function definition(): array
    {
        return [
            'id' => $this->faker->unique()->numberBetween(1, 1000),
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'middle_name' => $this->faker->optional()->firstName, 
            'email' => $this->faker->unique()->safeEmail,
            'age' => $this->faker->numberBetween(18, 80),
            'gender' => $this->faker->randomElement(['Male', 'Female']), 
            'birth_date' => $this->faker->date('Y-m-d', '2006-01-01'),
            'contact_number' => $this->faker->phoneNumber,
            'password' => bcrypt('password'), 
        ];
    }
}
