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
        $documents = Document::all();

        // Fetch all student IDs
        $studentIds = Student::pluck('id')->toArray();

        // Now seed the DocumentRequests table using the existing document IDs and student IDs
        for ($i = 0; $i < 20; $i++) {
            // Randomly pick a document from the existing ones
            $document = $documents->random();

            // Determine the value for other_document_details
            $otherDocumentDetails = $document->id == 3 
                ? 'Additional details for this document...' 
                : null; // If it's not document ID 3, we leave this null or you can add more logic if needed

            DocumentRequest::create([
                'student_id' => $studentIds[array_rand($studentIds)], // Randomly pick a valid student ID
                'document_id' => $document->id, // Document ID from the existing documents
                'request_reason' => 'Some reason here...',
                'status' => 'Pending', // Default status
                'specify_other_document' => $otherDocumentDetails, // Add value if document_id is 3
                'created_at' => now(), // Current timestamp
                'updated_at' => now(), // Current timestamp
            ]);
        }
    }
}
