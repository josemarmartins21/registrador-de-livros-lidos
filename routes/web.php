<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\AutorController;
use App\Models\Livro;
use App\Models\Autor;

Route::get('/', function () {
    $livros = Livro::orderBy('id', 'desc')->limit(5)->get();

    $livro = Livro::orderBy('id', 'desc')->limit(1)->get();
    $autore_livros = Autor::with('livros')->get();
    echo "<pre>";
    var_dump($autore_livros);
   
   
    dd();

    return view('welcome', ['livro' => $livro, 'livros' => $livros, 'nome_autor' => $nome_autor]);
});

Route::get('/uploads', function () {
    return view('create');
})->name('create');

Route::get('/dashboard', [LivroController::class, 'dashboard'])->name('livros.dashboard');

Route::get('/livros/create', [LivroController::class, 'create'])->name('livros.create');
Route::get('/autores/create', [AutorController::class, 'create'])->name('autores.create');

Route::get('/livros', [LivroController::class, 'index'])->name('livros.index');

Route::get('/autores', [AutorController::class, 'index'])->name('autores.index');

Route::post('/livros', [LivroController::class, 'store'])->name('livros.store');

