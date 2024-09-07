<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Student;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function index(){
        $student = Auth::user();
        return Inertia::render('client/Profile', [
            'student' => $student,
        ]);
    }

    public function showRequestHistory(){
        $documents = Document::all();
        $studentId = Auth::id();
        $student = Student::with('documentRequests.document')->find($studentId);
        return Inertia::render('client/Inquire', [
        'student' => $student,
        'documents' => $documents
        ]);
    }
}
