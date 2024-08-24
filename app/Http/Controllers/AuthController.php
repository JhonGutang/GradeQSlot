<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request){
        sleep(1);
        $fields = $request->validate([
            'studentId' => ['required', 'max:255'],
            'name' => ['required', 'max:255'],
            'gender' => ['required', 'in:Male,Female,other'], // assuming gender is a select input
            'email' => ['required', 'email', 'max:255', 'unique:students'], // ensure the email is unique in the students table
            'password' => ['required', 'min:8', 'confirmed'], // confirmed checks if 'password' matches 'password_confirmation'
            
        ]);
        
        $student = Student::create($fields);
        Auth::login($student);
        return redirect()->route('login');
    }
}
