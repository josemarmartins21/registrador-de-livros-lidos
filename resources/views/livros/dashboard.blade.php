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
                        <th>Ano de lançamento</th>
                        <th>Data de inicio de leitura</th>
                        <th>Data de fim de leitura</th>
                        <th>Nª de páginas</th>
                        <th>Ver mais</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($livros as $livro)
                    <tr>
                        <td>{{ ucwords($livro->titulo) }}</td>
                        <td>{{ $livro->data_de_lancamento->format('d/m/Y') }}</td>
                        <td>{{ $livro->comeco_da_leitura->format('d/m/Y') }}</td>
                        <td>{{ $livro->fim_da_leitura->format('d/m/Y') }}</td>
                        <td>{{ $livro->numero_de_paginas }}</td>
                        <td><a href="/livro/{{ $livro->id }}">Ver livro</a></td>
                    </tr>
                        
                    @endforeach
                </tbody>
                <tfoot >
                    <tr>
                        <th colspan="6" style="text-align: left">Total de livros</th>
                        <td>{{ $quantidade_de_livros }}</td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div id="relatorios">
            <h2>Relátorios</h2>
        </div>
    </section>
@endsection
