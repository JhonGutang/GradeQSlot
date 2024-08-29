<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function registerStudent(Request $request)
    {
        sleep(1);
        $fields = $request->validate([
            'student_id' => ['required', 'max:255'],
            'name' => ['required', 'max:255'],
            'gender' => ['required', 'in:Male,Female,other'], // assuming gender is a select input
            'email' => ['required', 'email', 'max:255', 'unique:students'], // ensure the email is unique in the students table
            'password' => ['required', 'min:8', 'confirmed'], // confirmed checks if 'password' matches 'password_confirmation'

        ]);

        $student = Student::create($fields);
        Auth::login($student);
        return redirect()->route('login');
    }

    public function loginStudent(Request $request)
    {
        $fields = $request->validate([
            'student_id' => ['required'],
            'password' => ['required', 'min:8']
        ]);
    
        $student = Student::where('student_id', $fields['student_id'])->first();

        
        // Check if student exists and password matches
        if ($student && Hash::check($fields['password'], $student->password)) {
            // Create a session for the student
            Auth::login($student); // Make sure to log the student in
            
            // Regenerate session
            $request->session()->regenerate();
            
            // Redirect to intended page with user data
            return redirect()->intended('/client/home')
            ->with('auth', [
                'student_id' => $student // Include user data here
            ]);
        }
        
        return dd($student);
        // return back()->withErrors([
        //     'student_id' => 'The provided credentials do not match our records.',
        // ])->onlyInput('student_id');
    }
}