<?php

namespace Database\Factories;

use App\Models\DocumentRequest;
use App\Models\Document;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentRequestFactory extends Factory
{
    protected $model = DocumentRequest::class;

    public function definition()
    {
        return [
            'student_id' => Student::factory(),  // Associate with a student
            'document_id' => Document::factory(),  // Associate with a document
            'other_document_details' => $this->faker->optional()->word(),  // Optional field
            'request_reason' => $this->faker->sentence(),  // Reason for the request
            'status' => $this->faker->randomElement(['Pending', 'Approved', 'Rejected']),  // Random status
        ];
    }
}
