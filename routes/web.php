<?php

use App\Http\Controllers\InformalEducationController;
use App\Http\Controllers\Pages\MainController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Main Pages
|--------------------------------------------------------------------------
*/

Route::get('/', [MainController::class, 'home'])->name('pages.home');
Route::get('/about', [MainController::class, 'about'])->name('pages.about');
Route::get('/projects', [MainController::class, 'projects'])->name('pages.projects');
Route::get('/skills', [MainController::class, 'skills'])->name('pages.skills');
Route::get('/journey', [MainController::class, 'journey'])->name('pages.journey');
Route::get('/contacts', [MainController::class, 'contacts'])->name('pages.contacts');

/*
|--------------------------------------------------------------------------
| Informal Education Pages
|--------------------------------------------------------------------------
*/

Route::prefix('journey/informal-education')->group(function() {
    Route::get('/academics', [InformalEducationController::class, 'academics'])
        ->name('journey_content.informal_education.academics');

    Route::get('/seminars', [InformalEducationController::class, 'seminars'])
        ->name('journey_content.informal_education.seminars');

    Route::get('/trainings', [InformalEducationController::class, 'trainings'])
        ->name('journey_content.informal_education.trainings');

    Route::get('/community-services', [InformalEducationController::class, 'community_services'])
        ->name('journey_content.informal_education.comserv');
});

/*
|--------------------------------------------------------------------------
| Breeze Pages
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