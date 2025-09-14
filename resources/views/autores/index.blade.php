@extends('layouts.main')

@section('title', 'Autores')
    
@section('content')
      <section id="autores">
          <div id="table">
                <table>
                    <caption>Autores</caption>
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Nacionalidade</th>
                            <th>Data de nascimento</th>
                            <th>Sobre autor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Poder da esperança</td>
                            <td>Lorem ipsum dol</td>
                            <td>Lorem ipsum dolor sit amet consectetur adi</td>
                            <td><a href="#">Mais sobre o autor</a></td>
          
                        </tr>
                        <tr>
                            <td>Poder da esperança</td>
                            <td>Lorem ipsum dol</td>
                            <td>Lorem ipsum dolor sit amet consectetur adi</td>
                            <td><a href="#">Mais sobre o autor</a></td>
                        </tr>
                        <tr>
                            <td>Poder da esperança</td>
                            <td>Lorem ipsum dol</td>
                            <td>Lorem ipsum dolor sit amet consectetur adi</td>
                            <td><a href="#">Mais sobre o autor</a></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="3" style="text-align: left">Total de autores</th>
                            <td>54</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
      </section>
@endsection