@extends('layout.sidebar')

@section('title', 'Grupo Muscular')
@section('nome_da_pagina', 'Grupo Muscular')

@section('content')

    <a href="{{route('grupo.create')}}">NOVO</a>

  <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($dados as $dado)
                <tr>
                    <td>{{$dado->id}}</td>
                    <td>{{$dado->nome}}</td>
                    <td>
                        <a href="{{route('grupo.edit', ['id' => $dado->id])}}">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection

