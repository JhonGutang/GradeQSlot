<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;

class AuthController extends Controller
{
  public function registerStudent(Request $request)
  {
    $validatedData = $this->validateData($request);

    try {
      $studentData = $this->prepareStudentDataForStorage($validatedData);
      $student = Student::create($studentData);
      $token = $student->createToken('Student Token')->plainTextToken;
      return response()->json([
        'message' => 'Student registered successfully',
        'student' => $student,
        'token' => $token,
      ], 201);
    } catch (\Exception $e) {
      return response()->json([
        'message' => 'Failed to register student',
        'error' => $e->getMessage()
      ], 500);
    }

  }

  private function validateData($request)
  {
      return $request->validate([
          'id' => 'required|integer',
          'firstName' => 'required|string|max:255',
          'lastName' => 'required|string|max:255',
          'middleName' => 'nullable|string|max:255',
          'email' => 'required|email|max:255|unique:students,email',
          'age' => 'required|integer|min:1',
          'gender' => 'required|string|max:10',
          'birthdate' => 'required|date',
          'contactNumber' => 'required|string|max:15',
          'password' => 'required|string|min:8|confirmed',
      ]);
  }
  
  private function prepareStudentDataForStorage($validatedData)
  {
      return [
          'id' => $validatedData['id'],
          'first_name' => $validatedData['firstName'],
          'last_name' => $validatedData['lastName'],
          'middle_name' => $validatedData['middleName'],
          'email' => $validatedData['email'],
          'age' => $validatedData['age'],
          'gender' => $validatedData['gender'],
          'birthdate' => Carbon::parse($validatedData['birthdate'])->format('Y-m-d'),
          'contact_number' => $validatedData['contactNumber'],
          'password' => Hash::make($validatedData['password']),
      ];
  }
  


  public function loginStudent(Request $request)
  {

  }


  public function logoutStudent(Request $request)
  {

  }

}