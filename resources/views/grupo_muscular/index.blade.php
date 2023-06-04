<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grupo Muscular</title>
</head>
<body>
    <h1>{{ $asd }}</h1>

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
                    <td>{{$dado->name}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
