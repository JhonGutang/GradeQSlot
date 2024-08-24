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

// Client
Route::inertia('/client/home', 'client/Home')->name('client-home');
Route::inertia('/client/dashboard', 'client/Dashboard')->name('client.dashboard');
Route::inertia('/client/landingPage', 'client/LandingPage')->name('client.landingPage');

// Admin
Route::inertia('/admin/home', 'admin/Home');
