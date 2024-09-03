<?php

namespace App\Http\Controllers;

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

    public function showRequestHistory(Request $request, $id){
        $student = Student::with('documentRequests.document')->find($id);
        return Inertia::render('client/RequestHistory', [
        'student' => $student,
        ]);
    }
}
