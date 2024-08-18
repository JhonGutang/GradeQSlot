<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::inertia('/', 'Homes');

// Auth
Route::inertia('/auth/login', 'auth/Login');
Route::inertia('/auth/register', 'auth/Register');

// Client
Route::inertia('/client/home', 'client/Home');
Route::inertia('/client/dashboard', 'client/Dashboard');

// Admin
Route::inertia('/admin/home', 'admin/Home');
