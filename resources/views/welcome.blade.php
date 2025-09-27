@extends('layouts.main')

@section('title', 'Home')
    
@section('content')
    <section id="home">
        <div id="hero">
            <div id="img-hero">
                <img src="/img/uploads/{{ $livro[0]->imagem_1 ?? ""}}" alt="iPhone 6 normal" title="iPhone 6 normal">
            </div>

            <div id="card-hero">

                <h1>Último livro que eu li</h1>
                <h2>{{ $livro[0]->titulo ?? "'Nenhum adicionado! '"}}</h2>
                
                <p>
                    {{ $livro[0]->nota_do_leitor ?? "" }}
                </p>
                
                <div id="links">
                    <a href="#">Saber mais acerca deste livro</a>
                    <a href="#">Ver outros livros</a>
                </div>
            </div>
        </div>
        <h2>{{ $nome_autor }}</h2>

        <hr id="hr">

        <div id="livros">
            <h2>Livros</h2>

            <p>
                Os ultimos 5 livros que eu li.
            </p>

            <div id="container">
                @foreach ($livros as $livro)
                <div class="card">
                    <img src="/img/uploads/{{ $livro->imagem_1 }}" alt="p diddy">
                    <div id="content">
                        <div id="info">
                            <span>Data de lançamento</span>
                            <span>{{ $livro->data_de_lancamento->format('d/m/Y') }}</span>
                        </div>
                        <h3>{{ ucwords($livro->titulo) }}</h3>
                        <a href="/livros/{{ $livro->id }}">Ver mais</a>
                    </div>
                </div>
                @endforeach
            </div>      
        </div>
    </section>
@endsection