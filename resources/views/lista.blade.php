<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
</head>
<body>
    <h1>Lista de Usuários</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Login</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($us as $u)
            <tr>
                <td>{{ $u->id }}</td>
                <td>{{ $u->nome }}</td>
                <td>{{ $u->login }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>