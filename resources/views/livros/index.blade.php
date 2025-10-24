@extends('layouts.main')

@section('title', 'Todos os livros que eu li')

@section('content')
    <section id="index-livros">
        @if (count($livros) > 0)
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
                                <a href="/livros/{{ $livro->id }}/edit">
                                    <i class="fa-solid fa-pen-to-square" id="green"></i>
                                </a>
                            <form action="/livros/{{$livro->id}}" method="POST">
                                @method('Delete')
                                @csrf
                                <button class="fa-solid fa-trash-can" id="red"></button>
                            </form>
                            </div>
                        </div>
                    </div>
         
                @endforeach
            </div>
        </div>
    
        @else
            <h1 >Nenhum livro ainda. <a href="/livros/create">Clica aqui para adicionar</a></h1>
        @endif
    </section>
@endsection