<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminController extends Controller
{
    public function getAllStudents(Request $request){
        $students = Student::paginate(8);

        return Inertia::render('admin/StudentInformation', [
            'students' => $students,
        ]);
    }

    public function showStudentInfo(Request $request, $id){
        $student = Student::findOrFail($id);
        return Inertia::render('admin/ShowStudent', [
            'studentInfos' => $student,
        ]);
    }
}
