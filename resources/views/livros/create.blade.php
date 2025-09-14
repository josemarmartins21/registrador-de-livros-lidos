@extends('layouts.main')

@section('title', 'Adicione autor de um livro já lido')


@section('content')
    <section id="create-livro">
        <div id="forms">
            <h2>Adicione um livro</h2>
            <form action="" method="post">
                @csrf
                <div class="form-group">
                    <label for="titulo">Titulo</label>
                    <input type="text" name="titulo" id="titulo" required placeholder="Digite o titulo do livro" autocomplete="off" maxlength="30">
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <textarea name="descricao" id="descricao" cols="30" rows="10" placeholder="Diga mais acerca do livro"></textarea>
                </div>
                <div class="form-group">
                    <label for="comentario">O que achaste do livro?</label>
                    <textarea name="comentario" id="comentario" cols="30" rows="10" placeholder="Fale sobre o livro mas do teu ponto de vista"></textarea>
                </div>
                <div class="form-group">
                    <label for="numero_de_paginas">Nª de páginas do livro</label>
                    <input type="number" name="numero_de_paginas" id="numero_de_paginas" required placeholder="Digite o número de páginas do livro">
                </div>
                <div class="form-group">
                    <label for="ano_de_lancamento">Ano de lançamento</label>
                    <input type="date" name="ano_de_lancamento" id="ano_de_lancamento" required>
                </div>
                <div class="form-group">
                    <label for="comeco">Data que iniciaste a leitura</label>
                    <input type="date" name="comeco" id="comeco">
                </div>
                <div class="form-group">
                    <label for="comeco">Data que iniciaste a leitura</label>
                    <input type="date" name="comeco" id="comeco">
                </div>
                <div class="form-group">
                    <label for="imagem_1">Imagem do livro</label>
                    <input type="file" name="imagem_1" id="imagem_1" required>
                </div>
                <div class="form-group">
                    <label for="imagem_2">Imagem do livro (opcional)</label>
                    <input type="file" name="imagem_2" id="imagem_2">
                </div>
                <div class="form-group"></div>
                <input type="submit" value="Cadastrar">
            </form>
        </div>
    </section>
@endsection