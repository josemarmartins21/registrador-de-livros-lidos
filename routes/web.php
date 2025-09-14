<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\AutorController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/uploads', function () {
    return view('create');
})->name('create');

Route::get('/dashboard', [LivroController::class, 'dashboard'])->name('livros.dashboard');

Route::get('/livros/create', [LivroController::class, 'create'])->name('livros.create');
Route::get('/autores/create', [AutorController::class, 'create'])->name('autores.create');

Route::get('/livros', [LivroController::class, 'index'])->name('livros.index');

Route::get('/autores', [AutorController::class, 'index'])->name('autores.index');

