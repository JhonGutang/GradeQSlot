<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\DocumentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/prospectus', [CoursesController::class, 'index']);
Route::get('/documents', [DocumentController::class, 'getDocuments']);