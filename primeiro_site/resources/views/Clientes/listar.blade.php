@extends('layouts.externo')
@section('title', 'Lista de Clientes')
@section('sidebar')
    @parent
    <hr>
@endsection
@section('content')
    
    <table class='table'>
        <tr><td>ID</tr></td>
        <tr><td>Nome</tr></td>
        <tr><td>Telefone</tr></td>
        <tr><td>E-mail</tr></td>
        @foreach($clientes as $cliente)
            <tr>
                 <td>{{$cliente->id}}</td>
                 <td>{{$cliente->nome}}</td>
                 <td>{{$cliente->telefone}}</td>
                 <td>{{$cliente->email}}</td>
    </tr>
    @endforeach
    
</table>
@endsection