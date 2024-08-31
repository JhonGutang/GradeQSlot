<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DocumentRequest;

class DocumentRequestSeeder extends Seeder
{
    public function run()
    {
        DocumentRequest::factory()->count(20)->create();  // Create 30 document request records
    }
}
