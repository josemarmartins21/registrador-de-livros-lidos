@extends('layouts.main')

@section('title', 'Home')
    
@section('content')
    <section id="home">
        <div id="hero">
            <div id="img-hero">

            </div>
            
            <div id="card-hero">
                <h3>Heading</h3>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum nihil rerum id adipisci ratione quidem optio, quaerat accusantium officiis iste possimus vitae voluptatibus quis, quod qui. Consectetur a perferendis itaque?
                </p>

                <div id="links">
                    <a href="#">Ver outros livros</a>
                    <a href="#">Saber mais acerca deste livro</a>
                </div>
            </div>
        </div>
        <div id="livros">
            <h2>Livros</h2>
            <div id="container">
                <div class="card">
                    <img src="" alt="">
                    <span>12/06/2005</span>
                    <span>Categoria</span>
                    <h3>Titulo</h3>
                    <a href="#">Ver mais</a>
                </div>

                <div class="card">
                    <img src="" alt="">
                    <span>12/06/2005</span>
                    <span>Categoria</span>
                    <h3>Titulo</h3>
                    <a href="#">Ver mais</a>
                </div>

                <div class="card">
                    <img src="" alt="">
                    <span>12/06/2005</span>
                    <span>Categoria</span>
                    <h3>Titulo</h3>
                    <a href="#">Ver mais</a>
                </div>
                
            </div>
        </div>
    </section>
@endsection