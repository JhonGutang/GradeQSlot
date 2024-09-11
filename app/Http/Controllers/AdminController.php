<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\DocumentRequest;
use App\Models\Grade;
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
        $courses = Course::all();

        $studentGrades = Grade::where('student_id', $student->id)
        ->with('course')
        ->get()
        ->keyBy('course_id'); 

  
    $coursesWithGrades = $courses->map(function ($course) use ($studentGrades) {
        return [
            'course' => $course,
            'grade' => $studentGrades->has($course->id) ? $studentGrades->get($course->id)->grade : null,
        ];
    });

    $student->coursesWithGrades = $coursesWithGrades;
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
