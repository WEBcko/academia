@extends('layout.sidebar')

@section('title', 'Exercicio > Novo')
@section('nome_da_pagina', 'Exercicio > Novo')

@section('content')

    <form action="{{route('exercicio.store')}}" method="post">

        @csrf

        <input type="text" name="nome" id="nome" placeholder="Nome do exercicio..." required>

        <button type="submit">Criar</button>
    </form>