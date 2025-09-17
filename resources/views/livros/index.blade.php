@extends('layouts.main')

@section('title', 'Todos os livros que eu li')

@section('content')
    <section id="index-livros">
        <div id="all-livros">
            <h2>Todos os livros que eu já li</h2>
            <div id="all-books-card">
                <div class="card-book">
                    <div class="img-content">
                        <img src="/img/augusto-cury.png" alt="imagem do livro">
                    </div>
                    <div class="info">
                        <h3>Titulo</h3>
                        <p>
                            Breve descrição
                        </p>
                    </div>
                </div>

                <div class="card-book">
                    <div class="img-content">
                        <img src="/img/augusto-cury.png" alt="imagem do livro">
                    </div>
                    <div class="info">
                        <h3>Titulo</h3>
                        <p>
                            Breve descrição
                        </p>
                    </div>
                </div>

                <div class="card-book">
                    <div class="img-content">
                        <img src="/img/augusto-cury.png" alt="imagem do livro">
                    </div>
                    <div class="info">
                        <h3>Titulo</h3>
                        <p>
                            Breve descrição
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection