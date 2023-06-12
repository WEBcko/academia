@extends('layout.sidebar')

@section('title', 'Exercicio')
@section('nome_da_pagina', 'Exercicio')

@section('content')

    <a href="{{route('exercicio.create')}}">NOVO</a>