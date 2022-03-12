@extends('exercicio.externo')
@section('title', 'Exercicio')
@section('sidebar')
    @parent
    <hr>
@endsection
@section('content')
    @if($mostrar)
    <div class="alert alert-danger" role="alert">
        ATENÇÃO: Não esqueça Dessas Coisas!
    </div>
    @else
    <div></div>
    @endif    
    <table class='table'>
        <tr><td>Quadro de avisos de {{$nome}}</tr></td>
        @foreach($notificaçao as $notificaçao)
        <tr><td>Aviso #{{$aviso['id']}} <br>{{$notificaçao['notificaçao']}} </tr></td><br><tr><td>Ola rapaziadinha</tr></td>
        @endforeach
        <tr><td>Aviso #1</tr></td><br><tr><td>Boa noite</tr></td>
        <tr><td>Aviso #2</tr></td><br><tr><td>Boa Tarde</tr></td>
    </table>
@endsection