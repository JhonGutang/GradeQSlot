<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\StudentController;
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
    Route::get('/client/prospectus', [CoursesController::class, 'index'])->name('client.prospectus');
    Route::inertia('/client/inquire', 'client/Inquire')->name('client.inquire');

// Admin Routes
Route::inertia('/admin/home', 'admin/Home')->name('admin.home');
Route::inertia('/admin', 'admin/Home')->name('admin.home');

Route::get('/admin/studentInfo', [StudentController::class, 'getAllStudents'])->name('admin.studentInfo');
Route::get('/admin/studentInfo/{id}', [StudentController::class, 'showStudentInfo']);


Route::inertia('/admin/requests', 'admin/Requests')->name('admin.requests');
Route::get('/admin/studentinfo', [StudentController::class, 'index']);

