<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;
use App\Http\Requests\LivroRequest;
use App\Http\Requests\RequestUpdateLivros;

class LivroController extends Controller
{

    private $imagens = [];
  

    public function __construct()
    {
        $this->imagens = [
            'imagem_1',
            'imagem_2', 
            'foto_autor'
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
        $livro->descricao = ucfirst($request->descricao);
        $livro->nota_do_leitor = ucfirst($request->nota_do_leitor);
        $livro->numero_de_paginas = $request->numero_de_paginas;
        $livro->data_de_lancamento = $request->data_de_lancamento;
        $livro->comeco_da_leitura = $request->comeco_da_leitura;
        $livro->fim_da_leitura = $request->fim_da_leitura;
        $livro->nome_autor = ucwords($livro->nome_autor);
        /**
         * Percorre todas as requisições de file de imagem dentro
         * de um array e vê se cada imagem é válida e salva no banco se for
         * @author Josimar Martins
         */
        for ($i=0; $i < 3; $i++) { 
            $img = $this->validarImagens($request, $this->imagens[$i]);
            if ($i == 0 AND is_string($img)) {
                $livro->imagem_1 = $img;

            } else if ($i > 0 AND is_string($img) AND $i < 2) {
                $livro->imagem_2 = $img;

            } else {
                $livro->foto_autor = $img;
            }
        }
        $livro->save();
        return redirect('/')->with('msg', 'Livro adicionado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $livro = Livro::FindOrFail($id);
        return view('livros.show', ['livro' => $livro]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $livro = Livro::findOrFail($id);
        return view('livros.edit', ['livro' => $livro]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dados = $request->validate([
            'titulo' => 'string|nullable|max:30',
            'descricao' => 'string|nullable',
            'nota_do_leitor' => 'string|nullable',
            'numero_de_paginas' => 'integer|nullable|numeric',
            /* 'ano_de_lancamento' => 'date|nullble',
            'comeco_da_leitura' => 'date|nullble',
            'fim_da_leitura' => 'date|nullable',  */
            'imagem_1' => 'image|max:2048|nullable|max:2048',
            'imagem_2' => 'image|max:2048|nullable',
            'nome_autor' => 'string|max:50|nullable',
            'foto_autor' => 'image|nullable|max:2048'
        ]); // valida os dados a partir de uma outra classe Request

        for ($i=0; $i < 3; $i++) { 
            $img = $this->validarImagens($request, $this->imagens[$i]);
            
            if ($i == 0 AND is_string($img)) {
                $dados['imagem_1'] = $img; // guarda a imagem no request antes de ir ao banco

            } else if ($i > 0 AND is_string($img) AND $i < 2) {
                $dados['imagem_2'] = $img;

            } else {
                $dados['foto_autor'] = $img;
            }

        }
        Livro::findOrFail(($request->id))->update($dados); // atualiza todos os dados que foram passados via request no model buscdo pelo ID enviado também por Request POST e salva com metodo update()
        return redirect('/livros')->with('msg', 'Registro atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Livro::findOrFail($id)->delete();
        return redirect('livros');
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
