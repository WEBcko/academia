@extends('layout.sidebar')

@section('title', 'Exercicio - Editar')
@section('nome_da_pagina', 'Exercicio - Editar')

@section('content')

<form action="{{ route('exercicio.update', ['id' => $data->id]) }}" method="post">

    @csrf
    @method('PUT')
    <input type="text" name="nome" id="nome" value="{{ $data->nome }}">

    <button id="button" type="submit" disabled>Salvar</button>

</form>