@extends('layouts.main')

@section('title', 'Dashboard')
    
@section('content')
    <section id="dashboard">
        @if (count($livros) >= 1)
        <div id="table">
            <table>
                <caption>Livros</caption>
                <thead>
                    <tr>
                        <th>Titulo do livro</th>
                        <th>Ano de lançamento</th>
                        <th>Data de inicio de leitura</th>
                        <th>Data de fim de leitura</th>
                        <th>Autor</th>
                        <th>Ver mais</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($livros as $livro)
                    <tr>
                        <td>{{ ucwords($livro->titulo) }}</td>
                        <td>{{ $livro->data_de_lancamento->format('d/m/Y') }}</td>
                        <td>{{ $livro->comeco_da_leitura->format('d/m/Y') }}</td>
                        <td>{{ $livro->fim_da_leitura?->format('d/m/Y') }}</td>
                        <td>{{ $livro?->nome_autor }}</td>
                        <td><a href="/livro/{{ $livro->id }}">Ver livro</a></td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot >
                    <tr>
                        <th colspan="5">Total de livros</th>
                        <td>{{ $quantidade_de_livros }}</td>
                    </tr>
                </tfoot> 
            </table>
        </div>
        @else    
            <h1>Nenhum livro ainda. <a href="/livros/create">Clica aqui para adicionar</a></h1>
            
        @endif    
{{--         <div id="relatorios">
            <h2>Relátorios</h2>
        </div> --}}
    </section>
@endsection
