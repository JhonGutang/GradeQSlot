<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::inertia('/', 'Homes');

// Auth
Route::inertia('/auth/login', 'auth/Login')->name('login');
Route::inertia('/auth/register', 'auth/Register')->name('register');

// Client
Route::inertia('/client/home', 'client/Home')->name('client-home');
Route::inertia('/client/dashboard', 'client/Dashboard')->name('client.dashboard');

// Admin
Route::inertia('/admin/home', 'admin/Home');
