@extends('layouts.main')

@section('title', 'Home')
    
@section('content')
    <section id="home">
        <div id="hero">
            <div id="img-hero">
                <img src="/img/augusto-cury-removebg-preview.png" alt="iPhone 6 normal" title="iPhone 6 normal">
            </div>

            <div id="card-hero">

                <h2>Ultimo livro lido</h2>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum nihil rerum id adipisci ratione quidem optio, quaerat accusantium officiis iste possimus vitae voluptatibus quis, quod qui. Consectetur a perferendis itaque?
                </p>

                <div id="links">
                    <a href="#">Ver outros livros</a>
                    <a href="#">Saber mais acerca deste livro</a>
                </div>
            </div>
        </div>

        <hr id="hr">

        <div id="livros">
            <h2>Livros</h2>

            <p>
                Os ultimos 5 livros que eu li.
            </p>

            <div id="container">
                <div class="card">
                    <img src="/img/p-diddy.jpeg" alt="p diddy">
                    <div id="content">
                        <div id="info">
                            <span>12/06/2005</span>
                            <span>Categoria</span>
                        </div>
                        <h3>Titulo</h3>
                        <a href="#">Ver mais</a>
                    </div>
                </div>
                <div class="card">
                    <img src="/img/p-diddy.jpeg" alt="p diddy">
                    <div id="content">
                        <div id="info">
                            <span>12/06/2005</span>
                            <span>Categoria</span>
                        </div>
                        <h3>Titulo</h3>
                        <a href="#">Ver mais</a>
                    </div>
                </div>
                <div class="card">
                    <img src="/img/p-diddy.jpeg" alt="p diddy">
                    <div id="content">
                        <div id="info">
                            <span>12/06/2005</span>
                            <span>Categoria</span>
                        </div>
                        <h3>Titulo</h3>
                        <a href="#">Ver mais</a>
                    </div>
                </div>             
            </div>
        </div>
    </section>
@endsection