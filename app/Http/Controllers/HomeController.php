<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Exception;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index()
    {

        try {
           
            $livros = Livro::buscarUltimosLivros();

            $livro = Livro::buscarUltimoLivro();
    
            Str::limit($livro[0]->descricao, 100, '...');
    
        
            $dados = [
                'livros' => $livros,
                'livro' => Str::limit($livro[0]->descricao, 120, '...'),
            ];
    
            return view('welcome', $dados);
        } catch (Exception $err) {
            die('Erro no servidor ' . $err->getMessage());
        }
    }
}
