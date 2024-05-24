<?php

use App\Http\Controllers\LivroController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/home', function () {
        return view('home');
    });

    Route::get('/livro', [LivroController::class, 'index'])->name('livro.index');
    Route::post('/livro', [LivroController::class, 'store'])->name('livro.store');
});

require __DIR__.'/auth.php';
