<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;

class AuthController extends Controller
{
    public function registerStudent(Request $request)
    {
        sleep(1);
        $fields = $request->validate([
            'id' => ['required', 'max:255'],
            'name' => ['required', 'max:255'],
            'gender' => ['required', 'in:Male,Female,other'], 
            'email' => ['required', 'email', 'max:255', 'unique:students'],
            'password' => ['required', 'min:8', 'confirmed'],

        ]);

        $student = Student::create($fields);
        Auth::login($student);
        return redirect()->route('login');
    }


    public function loginStudent(Request $request)
    {
        $fields = $request->validate([
            'id' => ['required'],
            'password' => ['required', 'min:8']
        ]);
    
        $student = Student::where('id', $fields['id'])->first();
    
        if ($student && Hash::check($fields['password'], $student->password)) {
            Auth::guard('student')->login($student);
            $request->session()->regenerate();
            if (Auth::guard('student')->check()) {
                return redirect()->intended('client/home');
                // return Inertia::render('client/Home', [
                //     'auth' => [
                //         'student' => $student,
                //     ],
                // ]);
                
            } else {
                dd('Failed to authenticate student');
            }
        }
    
        return back()->withErrors([
            'id' => 'The provided credentials do not match our records.',
        ])->onlyInput('id');
    }


    public function logoutStudent(Request $request)
    {

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
    
}    