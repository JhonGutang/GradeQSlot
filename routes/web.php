<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AuthController;
use Inertia\Inertia;

Route::inertia('/', 'Homes');

// Auth
Route::inertia('/auth/login', 'auth/Login')->name('login');
Route::inertia('/auth/register', 'auth/Register')->name('register');
Route::post('/auth/register', [AuthController::class, 'register']);
Route::post('/auth/login', [AuthController::class, 'login']);

// Client
Route::inertia('/client/home', 'client/Home')->name('client.home');
Route::inertia('/client/landingPage', 'client/LandingPage')->name('client.landingPage');
Route::inertia('/client/profile', 'client/Profile')->name('client.profile');
Route::inertia('/client/prospectus', 'client/Prospectus')->name('client.prospectus');
Route::inertia('/client/inquire', 'client/Inquire')->name('client.inquire');

// Admin
Route::inertia('/admin/home', 'admin/Home');
