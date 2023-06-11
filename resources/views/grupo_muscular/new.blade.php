@extends('layout.sidebar')

@section('title', 'Grupo Muscular > Novo')
@section('nome_da_pagina', 'Grupo Muscular > Novo')

@section('content')

    <form action="{{route('grupo.store')}}" method="post">

        @csrf

        <input type="text" name="nome" id="nome" placeholder="Nome do grupo..." required>

        <button type="submit">Criar</button>

    </form>


@endsection

