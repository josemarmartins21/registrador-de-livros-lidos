@extends('layouts.main')

@section('title', 'Editar livro - ' . $livro->titulo)


@section('content')
    <section id="create-livro">
        <div id="forms">
            <h2>Editar livro {{ $livro->titulo }}</h2>
            <form action="/livros/{{ $livro->id }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                
                <div class="form-group">
                    <label for="titulo">Titulo</label>
                    <input type="text" name="titulo" id="titulo" required placeholder="Digite o titulo do livro" autocomplete="off" maxlength="30" value="{{ $livro->titulo }}">
                </div>
                <div class="form-group">
                    <label for="numero_de_paginas">Nª de páginas do livro</label>
                    <input type="number" name="numero_de_paginas" id="numero_de_paginas" required placeholder="Digite o número de páginas do livro" value="{{ $livro->numero_de_paginas }}">
                </div>
                <div class="form-group">
                    <label for="ano_de_lancamento">Ano de lançamento</label>
                    <input type="date" name="data_de_lancamento" id="ano_de_lancamento" value="{{ $livro->data_de_lancamento }}" >
                </div>
                <div class="form-group">
                    <label for="comeco">Data que iniciaste a leitura</label>
                    <input type="date" name="comeco_da_leitura" id="comeco" value="{{ $livro->comeco_da_leitura }}">
                </div>
                <div class="form-group">
                    <label for="comeco">Data que terminaste a leitura</label>
                    <input type="date" name="fim_da_leitura" id="comeco" value="{{ $livro->fim_da_leitura }}">
                </div>
                <div class="form-group">
                    <label for="imagem_1">Imagem do livro</label>
                    <input type="file" name="imagem_1" id="imagem_1" >
                </div>
                <div class="form-group">
                    <label for="imagem_2">Imagem do livro (opcional)</label>
                    <input type="file" name="imagem_2" id="imagem_2">
                </div>
                <div class="form-group">
                    <label for="nome_autor">Nome do autor</label>
                    <input type="text" name="nome_autor" id="nome_autor" placeholder="Digite o nome do autor" maxlength="50" required>
                </div>
                <div class="form-group">
                    <label for="autor_ft">Fotografia do autor</label>
                    <input type="file" name="foto_autor" id="autor_ft" >
                </div>
                <div class="form-group"></div>
                <div class="form-group">
                    <label for="descricao">Descrição do livro</label>
                    <textarea name="descricao" id="descricao" cols="30" rows="10" placeholder="Diga mais acerca do livro"> {{ $livro->descricao }} </textarea>
                </div>
                <div class="form-group">
                    <label for="comentario">O que achaste do livro?</label>
                    <textarea name="nota_do_leitor" id="nota_do_leitor" cols="30" rows="10" placeholder="Fale sobre o livro mas do teu ponto de vista">
                        {{$livro->nota_do_leitor}}
                    </textarea>
                </div>
                <input type="submit" value="Cadastrar">
            </form>
        </div>
    </section>
    @endsection