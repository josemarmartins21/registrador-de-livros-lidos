@extends('layouts.main')

@section('title', 'Dashboard')
    
@section('content')
    <section id="dashboard">
        <div id="table">
            <table>
                <caption>Livros</caption>
                <thead>
                    <tr>
                        <th>Titulo do livro</th>
                        <th>Descrição</th>
                        <th>Comentario acerca do livros</th>
                        <th>Ano de lançamento</th>
                        <th>1ª Data de leitura</th>
                        <th>2ª Data de leitura</th>
                        <th>Nª de páginas</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Poder da esperança</td>
                        <td>Lorem ipsum dol</td>
                        <td>Lorem ipsum dolor sit amet consectetur adi</td>
                        <td>2025-08-12</td>
                        <td>2015-09-04</td>
                        <td>2012-08-07</td>
                        <td>354</td>
                    </tr>
                </tbody>
                <tfoot >
                    <tr>
                        <th colspan="6" style="text-align: left">Total de livros</th>
                        <td>54</td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div id="relatorios">
            <h2>Relátorios</h2>
        </div>
    </section>
@endsection
