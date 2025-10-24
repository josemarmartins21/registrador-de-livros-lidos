@extends('layouts.main')

@section('title', 'Dashboard')
    
@section('content')
    <section id="home">
        <div id="hero">
            <div id="img-hero">
                <img src="/img/uploads/{{ $livro[0]?->imagem_1?? "biblia.jpg" }}" alt="{{$livro[0]?->titulo??''}}" title="{{ $livro[0]->titulo?? "Biblia" }}">    
            </div>

            <div id="card-hero">

                <h1>Último livro que eu li</h1>
                <h2>{{ $livro[0]->titulo ?? "Nenhum livro adicionado "}}</h2>
                
                <p>
                    {{ $livro?? "" }}
                </p>
                
                <div id="links">
                    <a href="#">Saber mais acerca deste livro</a>
                    <a href="#">Ver outros livros</a>
                </div>
            </div>
        </div>
        <h2>{{ $nome_autor??'' }}</h2>

        <hr id="hr">

        <div id="livros">
            <h2>Livros</h2>

            <p>
                Os ultimos 5 livros que eu li.
            </p>

            <div id="container">
                @foreach ($livros as $livro)
                <div class="card">
                    <div class="pequena">
                        <img src="/img/uploads/{{ $livro->imagem_1 }}" alt="{{ $livro->titulo }}">
                    </div>

                    <div id="content">
                        <h3>{{ ucwords($livro->titulo) }}</h3>
                        <a href="/livros/{{ $livro->id }}">Ver mais</a>
                    </div>
                </div>
                @endforeach
            </div>      
        </div>
    </section>
@endsection