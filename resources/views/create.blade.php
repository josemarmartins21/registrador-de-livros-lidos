@extends('layouts.main')

@section('title', 'Adicione um já livro lido')


@section('content')
<section id="create">
    <div id="actions">
        <div class="options">
            <div class="heading">
                <h3>Livros</h3>
                <p>Faça uploads de livros <a href="{{route('livros.create')}}">aqui</a></p>
            </div>
            <div class="imagem">
                <img src="/img/biblia.jpg" alt="Imagem de bill gates" title="Biblia">
            </div>
        </div>
        <hr>
        <div class="options">
            <div class="heading">
                <h3>Autores</h3>
                <p>Faça uploads de dados de autores <a href="#">aqui</a></p>
            </div>
            <div class="imagem" id="item-2">
                <img src="/img/bill-gates.jpeg" alt="Imagem da bibila" title="Bill Gates">
            </div>
        </div>
    </div>
</section>
@endsection