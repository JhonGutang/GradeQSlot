<?php

namespace App\Http\Controllers;

use App\Models\DocumentRequest;
use App\Models\Student;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminController extends Controller
{
    public function getAllStudents(Request $request)
    {
        $students = Student::paginate(8);

        return Inertia::render('admin/StudentInformation', [
            'students' => $students,
        ]);
    }

    public function showStudentInfo($id)
    {
        $student = Student::findOrFail($id);
        return Inertia::render('admin/ShowStudent', [
            'studentInfos' => $student,
        ]);
    }

    public function showStudentRequest($id)
    {

        $documentRequests = DocumentRequest::with(['document', 'student'])->findOrFail($id); // Query by student_id

        return Inertia::render('admin/ShowStudentRequest', [
            'documentRequests' => $documentRequests, 
        ]);
        // $documentRequest = DocumentRequest::findOrFail($id);
        // return Inertia::render('admin/ShowStudentRequest', [
        //     'documentRequest' => $documentRequest
        // ]);
    }
}
