<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;
use App\Http\Requests\LivroRequest;

class LivroController extends Controller
{

    private $imagens = [];
  

    public function __construct()
    {
        $this->imagens = [
            'imagem_1',
            'imagem_2'
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $livros = Livro::all();
    
        return view('livros.index', ['livros' => $livros]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('livros.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LivroRequest $request)
    {
        
        $request->validated();

        $livro = new Livro();

        $livro->titulo = ucwords($request->titulo);
        $livro->breve_descricao = $request->breve_descricao;
        $livro->descricao = $request->descricao;
        $livro->nota_do_leitor = $request->nota_do_leitor;
        $livro->numero_de_paginas = $request->numero_de_paginas;
        $livro->data_de_lancamento = $request->data_de_lancamento;
        $livro->comeco_da_leitura = $request->comeco_da_leitura;
        $livro->fim_da_leitura = $request->fim_da_leitura;
        
        /**
         * Percorre todas as requisições de file de imagem dentro
         * de um array e vê se cada imagem é válida e salva no banco se for
         * @author Josimar Martins
         */
        for ($i=0; $i < 2; $i++) { 
            $img = $this->validarImagens($request, $this->imagens[$i]);
            
            if ($i == 0 AND is_string($img)) {
                $livro->imagem_1 = $img;

            } else if ($i > 0 AND is_string($img)) {
                $livro->imagem_2 = $img;
            }
        }

        $livro->save();

        redirect('/')->with('msg', 'Livro adicionado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function dashboard()
    {
        $livros = Livro::all();

        $quantidade_de_livros = Livro::count();


        return view('livros.dashboard', ['livros' => $livros, 'quantidade_de_livros' => $quantidade_de_livros]);
    }

    /**
     * Função que valida a imagem
     *@author Josimar Martins <josemar21@outlook.pt>
     * @param Request $request
     * @return void
     */
    public function validarImagens(LivroRequest $request, $imagem): bool | string
    {
        if ($request->hasFile($imagem) && $request->file($imagem)->isValid()) {
            $img_request = $request->file($imagem);
            
            $extension = $img_request->extension();
            
            $imagem_name = md5($img_request->getClientOriginalName() . strtotime('now')) . "." . $extension;
            
            $img_request->move(public_path('/img/uploads'), $imagem_name);
            
            return $imagem_name;
            
        }


        return false;

    }


}
