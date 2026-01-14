<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public Breeze Pages
|--------------------------------------------------------------------------
*/

Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/projects', [MainController::class, 'projects'])->name('projects');
Route::get('/skills', [MainController::class, 'skills'])->name('skills');
Route::get('/journey', [MainController::class, 'journey'])->name('journey');
Route::get('/contacts', [MainController::class, 'contacts'])->name('contacts');

/*
|--------------------------------------------------------------------------
| Public Breeze Pages
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
