<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\StudentController;
use App\Models\Course;
use App\Models\Document;
use App\Models\Student;
use Inertia\Inertia;

// Home

Route::middleware('guest:student')->group(function () {
    Route::inertia('/', 'Homes');
    Route::inertia('/auth/login', 'auth/Login')->name('login');
    Route::inertia('/auth', 'auth/Login');
    Route::inertia('/auth/register', 'auth/Register')->name('register');
    Route::post('/auth/register', [AuthController::class, 'registerStudent']);
    Route::post('/auth/login', [AuthController::class, 'loginStudent']);
});

Route::middleware('auth:student')->group(function(){
Route::inertia('/client', 'client/Home');
Route::inertia('/client/home', 'client/Home')->name('client.home');
Route::get('/client/profile', [StudentController::class, 'index'])->name('client.profile');
Route::get('/client/requestHistory/{id}', [StudentController::class, 'showRequestHistory'])->name('client.history');
Route::get('/client/prospectus', [CoursesController::class, 'index'])->name('client.prospectus');
Route::get('/client/inquire', [DocumentController::class, 'getDocuments'])->name('client.inquire');
Route::post('/client/inquire/{id}', [DocumentController::class, 'requestingDocument']);
Route::post('/client/logout', [AuthController::class, 'logoutStudent'])->name('logout');
});


// Admin Routes
Route::inertia('/admin/home', 'admin/Home')->name('admin.home');
Route::inertia('/admin', 'admin/Home');
Route::get('/admin/studentInfo', [AdminController::class, 'getAllStudents'])->name('admin.studentInfo');
Route::get('/admin/studentInfo/{id}', [AdminController::class, 'showStudentInfo']);
Route::get('/admin/requests', [DocumentController::class, 'getDocumentRequests'])->name('admin.requests');
Route::get('/admin/requests/{id}', [AdminController::class, 'showStudentRequest']);
Route::get('/admin/studentinfo', [AdminController::class, 'index']);

