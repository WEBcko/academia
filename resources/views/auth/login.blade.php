<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body style="background-color:rgb(36, 34, 34)">

    <form action="{{route('login.act')}}" method="post">
        @csrf
        <input type="email" name="email" id="email">
        <input type="password" name="password" id="senha">
        <button type="submit">Login</button>
    </form>


</body>
</html>
