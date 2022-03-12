@extends('layouts.externo')
@section('title', 'Minha primeira view')
@section('sidebar')
    @parent
    <hr>
@endsection
@section('content')
    @if($mostrar)
    <div class="alert alert-danger" role="alert">
        ATENÇÃO: lembre dos avisos
    </div>
    @else
    <div></div>
    @endif    
    <table class='table'>
        <tr><td>Quadro de avisos de {{$nome}}</tr></td>
        @foreach($avisos as $aviso)
        <tr><td>Aviso #{{$aviso['id']}} <br>{{$aviso['aviso']}} </tr></td><br><tr><td>Ola rapaziadinha</tr></td>
        @endforeach
        <tr><td>Aviso #1</tr></td><br><tr><td>Ola rapaziadinha</tr></td>
        <tr><td>Aviso #2</tr></td><br><tr><td>Adeus rapaziadinha</tr></td>
    </table>
@endsection
    