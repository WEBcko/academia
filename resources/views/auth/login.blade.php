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
            <h2>login</h2>
            <div class="teste-login">
                <input type="email" name="email" id="email" placeholder="email">
                <input type="password" name="password" id="senha" placeholder="senha">
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
                            <label for="tabone">Dados pessoais</label>
                            <div class="tab">
                                    <div class="campo-dados">
                                        <input type="text" name="nome" id="nome" placeholder="nome">
                                        <input type="email" name="email" id="email" placeholder="email">

                                    </div>
                                </div>
                            <input type="radio" name="tabs" id="tabtwo">
                            <label for="tabtwo">Endereco</label>
                            <div class="tab">
                                <div>
                                    <input type="text" name="rua" id="rua" placeholder="rua">
                                    <input type="text" name="cep" id="cep" placeholder="cep">
                                    <input type="text" name="num_casa" id="num_casa" placeholder="num casa">
                                </div>
                            </div>
                            <input type="radio" name="tabs" id="tabthree">
                            <label for="tabthree">Login</label>
                            <div class="tab">
                                <div class="campo-login">
                                    <input type="password" name="password" id="senha" placeholder="senha">
                                    <input type="password_again" name="password_again" id="password_again" placeholder="senha novamente">
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
