<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;
use App\Http\Requests\LivroRequest;
use App\Http\Requests\RequestUpdateLivros;
use Exception;

class LivroController extends Controller
{

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
    public function store(Request $request)
    {
        try {
            $livro = new Livro();

            $request->validate([
                'titulo' => 'string|max:50|required',
                'numero_de_paginas' => 'numeric|required',
                'foto_autor' => 'image|nullable|max:2048|mimes:jpg,png|dimensions:max_width:1920',
            ]);

            /**
             * Percorre todas as requisições de file de imagem dentro
             * de um array e vê se cada imagem é válida e salva no banco se for
             * @author Josimar Martins
             */
            
            if (is_string($this->validarImagens($request, 'imagem_1')) && !is_int($this->validarImagens($request, 'imagem_1'))) {
                $imagem_1 = $this->validarImagens($request, 'imagem_1');
            }

            if (is_string($this->validarImagens($request, 'imagem_2')) && !is_int($this->validarImagens($request, 'imagem_2'))) {
                $imagem_2 = $this->validarImagens($request, 'imagem_2');
            }

            if (is_string($this->validarImagens($request, 'foto_autor')) && !is_int($this->validarImagens($request, 'foto_autor'))) {
                $foto_autor = $this->validarImagens($request, 'foto_autor');
            }

            Livro::create([
                'titulo' => ucwords($request->titulo),
                'descricao' => ucfirst($request->descricao),
                'nota_do_leitor' => ucfirst($request->nota_do_leitor),
                'numero_de_paginas' => $request->numero_de_paginas,
                'data_de_lancamento' => $request->data_de_lancamento,
                'comeco_da_leitura' => $request->comeco_da_leitura,
                'fim_da_leitura' => $request->fim_da_leitura,
                'nome_autor' => ucwords($livro->nome_autor),
                'imagem_1' => $imagem_1,
                'imagem_2' => $imagem_2,
                'foto_autor' => $foto_autor,

            ]);

            return redirect()->route('livros.dashboard')->with('msg', 'Livro adicionado com sucesso!');
          
        } catch (Exception $err) {
            return back()->withInput()->with('msg', "Livro não cadastrado " . $err->getMessage());
        }
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
    public function validarImagens(Request $request, $imagem): bool | string
    {

        if ($request->hasFile($imagem) && $request->file($imagem)->isValid()) {
            $extension = $request->file($imagem);

            $imageName = md5($request->file($imagem)->getClientOriginalName() . strtotime('now')) . "." . $extension;

            $request->file($imagem)->move(public_path('/img/uploads'), $imageName);

            return $imageName;
        }
        /* if ($request->hasFile($imagem) && $request->file($imagem)->isValid()) {
            $img_request = $request->file($imagem);
            
            $extension = $img_request->extension();
            
            $imagem_name = md5($img_request->getClientOriginalName() . strtotime('now')) . "." . $extension;
            
            $img_request->move(public_path('/img/uploads'), $imagem_name);
            return $imagem_name;
            
        } */

        return false;

    }


}
