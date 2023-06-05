<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sidebar.css">

    <script src="https://kit.fontawesome.com/9ede36cb5d.js" crossorigin="anonymous"></script>

    @section('title', 'SideBar')
    @section('nome_da_pagina', 'SIDEBAR')
    <title>@yield('title')</title>
    

</head>
<body>
    
    <!--SIDEBAR-->
    <nav class="side_bar">
        <ul class="categorias">

            <li class="category_opc">
                <a class ="category_button" href="#">
                    <i class ="fa-solid fa-house"></i>
                    <span>HOME</span>
                </a>
            </li>

            <li class ="category_opc">
            <a class ="category_button" href="#">
                    <i class ="fa-solid fa-user"></i>
                    <span>ALUNOS</span>
                </a>
            </li>

            <li class ="category_opc">
            <a class ="category_button" href="#">
                    <i class ="fa-solid fa-dumbbell"></i>
                    <span>EXERCÍCIOS</span>
                </a>
            </li>

            <li class ="category_opc">
            <a class ="category_button" href="#">
                    <i class ="fa-solid fa-users"></i>
                    <span>PERSONAIS</span>
                </a>
            </li>

            <li class ="category_opc">
            <a class ="category_button" href="#">
                    <i class ="fa-solid fa-dollar-sign"></i>
                    <span>FINANCEIRO</span>
                </a>
            </li>

            <li class ="category_opc">
            <a class ="category_button" href="#">
                    <i class ="fa-solid fa-gear"></i>
                    <span>CONFIGURAÇÃO</span>
                </a>
            </li>
        </ul>
</nav>
<!--NAVBAR-->
    <header>
        <ul class="nav-bar">

            <li class ="option">
                <a href="Home">@yield('nome_da_pagina')</a>
            </li>

            <li class ="option">
                <a href="aa">
                <i class="fa-solid fa-bell"></i>
                </a>
            </li>
        </ul>
    </header>

    @yield('content')
</body>
</html>