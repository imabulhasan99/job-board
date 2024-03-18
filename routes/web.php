<?php

use App\Http\Controllers\Category\AspController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Frontned\JobController;
use App\Http\Controllers\Category\JSJobController;
use App\Http\Controllers\Category\PHPJobController;
use App\Http\Controllers\Category\PaythonController;

Route::get('/', [JobController::class, 'index'])->name('job.index');
Route::get('single/{uuid}', [JobController::class, 'show'])->name('job.single');

Route::group([], function () {
    Route::get('laravel', [PHPJobController::class, 'laravel'])->name('job.laravel');
    Route::get('wordpress', [PHPJobController::class, 'wordpress'])->name('job.wordpress');
    Route::get('symfony', [PHPJobController::class, 'symfony'])->name('job.symfony');
    Route::get('vuejs', [JSJobController::class, 'vue'])->name('job.vue');
    Route::get('reactjs', [JSJobController::class, 'react'])->name('job.react');
    Route::get('nodejs', [JSJobController::class, 'node'])->name('job.node');
    Route::get('paython', [PaythonController::class, 'paython'])->name('job.paython');
    Route::get('asp', [AspController::class, 'asp'])->name('job.asp');
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
