<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'document_id',
        'other_document_details',
        'request_reason',
        'status'
    ];

    // Define the relationship with Document
    public function document()
    {
        return $this->belongsTo(Document::class);
    }

    // Define the relationship with Student
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
