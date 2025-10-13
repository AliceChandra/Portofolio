<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProfileController::class, 'home'])->name('home');
Route::get('/about', [ProfileController::class, 'about'])->name('about');
Route::get('/projects', [ProfileController::class, 'projects'])->name('projects');
Route::get('/skills', [ProfileController::class, 'skills'])->name('skills');
Route::get('/journey', [ProfileController::class, 'journey'])->name('journey');
Route::get('/contacts', [ProfileController::class, 'contacts'])->name('contacts');
