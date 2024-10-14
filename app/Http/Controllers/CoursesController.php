<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CoursesController extends Controller
{
    public function index(Request $request){
        $courses = Course::paginate(8);
        return response()->json($courses);
    }
}
