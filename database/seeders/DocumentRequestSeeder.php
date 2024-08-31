<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\DocumentRequest;
use App\Models\Document;
use App\Models\Student;

class DocumentRequestSeeder extends Seeder
{
    public function run()
    {
        // Fetch all document IDs
        $documentIds = Document::pluck('id')->toArray();

        // Fetch all student IDs
        $studentIds = Student::pluck('id')->toArray();

        // Now seed the DocumentRequests table using the existing document IDs and student IDs
        for ($i = 0; $i < 20; $i++) {
            DocumentRequest::create([
                'student_id' => $studentIds[array_rand($studentIds)], // Randomly pick a valid student ID
                'document_id' => $documentIds[array_rand($documentIds)], // Randomly pick a document ID from the existing ones
                'request_reason' => 'Some reason here...',
                'status' => 'Pending', // Default status
                'created_at' => now(), // Current timestamp
                'updated_at' => now(), // Current timestamp
            ]);
        }
    }
}
