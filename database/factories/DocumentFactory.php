<?php

namespace Database\Factories;

use App\Models\Document;
use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentFactory extends Factory
{
    protected $model = Document::class;
    public $timestamps = false;
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->word(),  // Unique document name
            'description' => $this->faker->sentence(),  // Document description
            'status' => $this->faker->randomElement(['Pending', 'Approved', 'Rejected']),  // Random status
        ];
    }
}
