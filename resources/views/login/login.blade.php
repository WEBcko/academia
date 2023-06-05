@extends('layout.sidebar')

@section('title', 'Login')

@section('content')
    <section class="container">
        <div class="login-div">
            <div class="titulo">
                <h2>Pro Life Trainning Academia</h2>
            </div>
            <div class="content">
                <div class="input">
                    <input type="text" name="password" id="password" placeholder="senha">
                    <input type="text" name="email" id="email" placeholder="email">
                </div>
                <div class="button">
                    <button>Enviar</button>
                </div>

            </div>
            <div class="links">
                <a href="">Esqueceu a senha?</a>
                <a href="">Cadastrar</a>
            </div>
        </div>
    </section>
    <p>Walter &copy; 2023</p>
@endsection
