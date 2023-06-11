<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body style="background-color:rgb(36, 34, 34)">
    <section class="container">
        <div class="div-login-form">
            <form action="{{route('login.act')}}" method="post" class="login-form">
            @csrf
            <div class="div-teste-login ci">
                <h2>login</h2>
                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                </div>
                <div>
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha">
                </div>
                <div>
                    <button type="submit" class="botao-login">Login</button>
                    <button class="botao-cadastrar">Cadastrar</button>
                </div>
            </div>
            </form>
        </div>
        <div class="div-cadastro-form">
            <form action="" class="cadastro-form">
                @csrf
                <div class="div-teste-cadastro">
                    <h2>cadastro</h2>
                        <div class="tabs">
                            <input type="radio" name="tabs" id="tabone" checked="checked">
                            <label for="tabone" class="label-tabs">Dados pessoais</label>
                            <div class="tab">
                                    <div class="campo-dados ci">
                                        <label for="nome">Nome</label>
                                        <input type="text" name="nome" id="nome">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" id="email">

                                    </div>
                                </div>
                            <input type="radio" name="tabs" id="tabtwo">
                            <label for="tabtwo" class="label-tabs">Endereco</label>
                            <div class="tab">
                                <div class="campo-endereco ci">
                                    <label for="rua">Rua</label>
                                    <input type="text" name="rua" id="rua">
                                    <label for="cep">Cep</label>
                                    <input type="text" name="cep" id="cep">
                                    <label for="num_casa">num Casa</label>
                                    <input type="" name="num_casa" id="num_casa">
                                </div>
                            </div>
                            <input type="radio" name="tabs" id="tabthree">
                            <label for="tabthree" class="label-tabs">Login</label>
                            <div class="tab">
                                <div class="campo-login ci">
                                    <label for="senha">Senha</label>
                                    <input type="password" name="senha" id="senha">

                                    <label for="senha_novamente">Senha novamente</label>
                                    <input type="password" name="senha_novamente" id="senha_novamente">
                                </div>
                                <button>Confirmar cadastro</button>
                            </div>
                        </div>
                </div>
            </form>
        </div>
    </section>
</body>
</html>
