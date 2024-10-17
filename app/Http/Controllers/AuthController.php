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
      return response()->json($request);
    }


    public function loginStudent(Request $request)
    {
      
    }


    public function logoutStudent(Request $request)
    {

    }
    
}    