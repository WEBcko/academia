@extends('layout.sidebar')

@section('title', 'Grupo Muscular - Editar')
@section('nome_da_pagina', 'Grupo Muscular - Editar')

@section('content')

    <form action="{{ route('grupo.update', ['id' => $data->id]) }}" method="post">

        @csrf
        @method('PUT')
        <input type="text" name="nome" id="nome" value="{{ $data->nome }}">

        <button id="button" type="submit" disabled>Salvar</button>

    </form>

    {{-- Script para verificar se algum campo foi modificado e habilitar o botão --}}
    <script>
        // Armazena os valores iniciais das tags input
        let initialValues = {};

        // Obtém todas as tags input
        let inputTags = document.getElementsByTagName('input');

        // Armazena os valores iniciais das tags input
        for (let i = 0; i < inputTags.length; i++) {
            let inputTag = inputTags[i];
            initialValues[inputTag.id] = inputTag.value;
        }

        // Função para verificar se as tags input foram alteradas
        function checkInputChanges() {
            let botao = document.getElementById('button');
            for (let i = 0; i < inputTags.length; i++) {
                let inputTag = inputTags[i];
                if (inputTag.value !== initialValues[inputTag.id]) {
                    botao.disabled = false;
                }
                else
                {
                    botao.disabled = true;
                }
            }
        }

        // Verifica as alterações a cada segundo
        setInterval(checkInputChanges, 1000);
    </script>


@endsection
