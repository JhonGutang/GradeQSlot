<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Inertia\Inertia;

class StudentController extends Controller
{
    public function index(){
    $students = Student::paginate(8);

    return Inertia::render('admin/StudentInformation', [
        'students' => $students,
    ]);
    }
}
