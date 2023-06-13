<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>
    <section class="container">
        <div class="div-login-form" id="div-login-form">
            <form action="{{route('login.act')}}" method="post" class="login-form" id="login-form">
            @csrf
            <div class="div-teste-login ci">
                <h2>login</h2>
                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email-login">
                </div>
                <div>
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha-login">
                </div>
                <div class="div-button">
                    <button type="submit" class="botao-login bt-l">Login</button>
                    <button class="botao-cadastrar bt-l" id="botao-cadastrar" onclick="showForm()">Cadastrar</button>
                </div>
            </div>
            </form>
        </div>
        <div class="div-cadastro-form" id="div-cadastro-form">
            <form action="" class="cadastro-form" id="cadastro-form" style="display:none;">
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
                                        <input type="email" name="email" id="email-cadastro">

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
                                    <label for="bairro">Bairro</label>
                                    <input type="text" name="bairro" id="bairro">
                                    <label for="cidade">Cidade</label>
                                    <input type="text" name="cidade" id="cidade">
                                </div>
                            </div>
                            <input type="radio" name="tabs" id="tabthree">
                            <label for="tabthree" class="label-tabs">Login</label>
                            <div class="tab">
                                <div class="campo-login ci">
                                    <label for="senha">Senha</label>
                                    <input type="password" name="senha" id="senha-cadastro">

                                    <label for="senha_novamente">Senha novamente</label>
                                    <input type="password" name="senha_novamente" id="senha_novamente">
                                </div>
                                <button type="submit" class="botao-conf-cadastro bt-c">Confirmar cadastro</button>
                                <button type="submit" class="bt-c">Login</button>
                            </div>
                        </div>
                </div>
            </form>
        </div>
    </section>
    <script src="js/login.js"></script>
</body>
</html>
