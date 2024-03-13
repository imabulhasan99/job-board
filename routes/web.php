<?php

use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Frontned\JobController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JobController::class, 'index'])->name('job.index');
Route::get('single/{uuid}', [JobController::class, 'show'])->name('job.single');

Route::group([], function () {
    Route::get('laravel', [CategoryController::class, 'laravel'])->name('job.laravel');
    Route::get('wordpress', [CategoryController::class, 'wordpress'])->name('job.wordpress');
    Route::get('symfony', [CategoryController::class, 'symfony'])->name('job.symfony');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
