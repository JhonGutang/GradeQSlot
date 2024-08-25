<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    protected $model = Course::class;

    public function definition()
    {
        return [
            'year_level' => $this->faker->numberBetween(1, 4), // Assuming 4 years of study
            'semester' => $this->faker->numberBetween(1, 2), // 1 or 2
            'course_code' => $this->faker->unique()->lexify('C??-???'), // Example: C01-ABC
            'course_name' => $this->faker->sentence(3), // Random course name
        ];
    }
}
