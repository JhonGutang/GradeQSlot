<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\DocumentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/register', [AuthController::class, 'registerStudent']);
Route::post('/login', [AuthController::class, 'loginStudent']);


Route::get('/prospectus', [CoursesController::class, 'index']);
Route::get('/documents', [DocumentController::class, 'getDocuments']);
Route::get('/students', [AdminController::class, 'getAllStudents']);