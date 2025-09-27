@extends('layouts.main')

@section('title', 'Todos os livros que eu li')

@section('content')
    <section id="index-livros">
        <div id="all-livros">
            <h2>Todos os livros que eu já li</h2>
            <div id="all-books-card">
                @foreach ($livros as $livro)
                    <div class="card-book">
                        <div class="img-content">
                            <img src="/img/uploads/{{ $livro->imagem_1 }}" alt="imagem do livro">
                        </div>
                        <div class="info">
                            <h3>{{ $livro->titulo }}</h3>
                            <div id="acoes">
                                <a href="#">
                                    <i class="fa-solid fa-pen-to-square" id="green"></i>
                                </a>

                                <a href="#">
                                    <i class="fa-solid fa-trash-can" id="red"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                @endforeach
            </div>
        </div>
    </section>
@endsection