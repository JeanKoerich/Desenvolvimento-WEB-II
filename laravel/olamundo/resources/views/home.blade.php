@extends('layout.app')
@section('title', 'Olá Mundo - Home')
@section('content')
    <h1> <?php echo $cabecalho?> </h1>
    <a href="jean.koerich@unidavi.edu.br">jean.koerich@unidavi.edu.br</a>
    <br>   
    <p>Nome Script: {{$script}} executado em {{$data}}</p>
    <hr>
    <p>Obrigado por visitar: <?php echo $title.' - '.$cabecalho ?></p>
    <br>
    <a href="/">Voltar a Home</a>
@endsection