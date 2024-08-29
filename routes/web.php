<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CoursesController;
use App\Models\Course;
use App\Models\Student;
use Inertia\Inertia;

// Home
Route::inertia('/', 'Homes');

// Auth routes

    Route::inertia('/auth/login', 'auth/Login')->name('login');
    Route::inertia('/auth', 'auth/Login')->name('login');
    Route::inertia('/auth/register', 'auth/Register')->name('register');

    Route::post('/auth/register', [AuthController::class, 'registerStudent']);
    Route::post('/auth/login', [AuthController::class, 'loginStudent']);


// Client routes

    Route::inertia('/client', 'client/Home')->name('client.home');
    Route::inertia('/client/home', 'client/Home')->name('client.home');
    Route::inertia('/client/landingPage', 'client/LandingPage')->name('client.landingPage');
    Route::inertia('/client/profile', 'client/Profile')->name('client.profile');
    Route::inertia('/client/prospectus', 'client/Prospectus', ['courses' => Course::paginate(8)])->name('client.prospectus');
    Route::inertia('/client/inquire', 'client/Inquire')->name('client.inquire');


Route::get('/test-courses', function() {
    return Course::all();
});


// Admin
Route::inertia('/admin/home', 'admin/Home')->name('admin.home');
Route::inertia('/admin', 'admin/Home')->name('admin.home');
Route::inertia('/admin/studentInfo', 'admin/StudentInformation', ['students' => Student::paginate(8)])->name('admin.studentInfo');
Route::inertia('/admin/requests', 'admin/Requests')->name('admin.requests');

