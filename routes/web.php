<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;
use App\Models\Livro;
Route::get('/', function () {
    $livros = Livro::orderBy('created_at', 'desc')->limit(5)->get();
    $livro = Livro::orderBy('id', 'desc')->limit(1)->get();
    return view('welcome', ['livros' => $livros, 'livro' => $livro]);
});
Route::get('/uploads', function () {
    return view('create');
})->name('create');
Route::get('/dashboard', [LivroController::class, 'dashboard'])->name('livros.dashboard');
Route::get('/livros/create', [LivroController::class, 'create'])->name('livros.create');
Route::get('/livros', [LivroController::class, 'index'])->name('livros.index');
Route::post('/livros', [LivroController::class, 'store']);
Route::get('livros/{id}', [LivroController::class, 'show'])->name('livros.show');
Route::delete('livros/{id}', [LivroController::class, 'destroy'])->name('livros.destroy');
Route::get('/livros/{id}/edit', [LivroController::class, 'edit'])->name('livros.edit');
Route::put('/livros/{id}', [LivroController::class, 'update'])->name('livros.update');

