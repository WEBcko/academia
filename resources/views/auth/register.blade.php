<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar</title>
</head>
<body style="background-color:rgb(36, 34, 34)">

    <form action="{{route('register.create')}}" method="post">
        @csrf
        @method('POST')
        <input type="text" name="name" id="name">
        <input type="email" name="email" id="email">
        <input type="password" name="password" id="senha">
        <button type="submit">Registrar</button>
    </form>
</body>
</html>
