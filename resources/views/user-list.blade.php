<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <h1>Lista de Usuários cadastrados</h1>

    <a class="btn btn-secondary" href='{{ asset('usuario/register') }}'>Criar Usuário</a>
    <table class="table">

        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <a class='btn btn-warning' href='{{ asset('usuario/edit/' . $user->id ) }}'>Editar</a>
                /
                <form method="post" action="{{ url('usuario/delete/' . $user->id) }}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <input type="submit" value="Deletar" id='submit' class="btn btn-danger mt-3">
                </form>
            </td>
          </tr>
        </tbody>
        @endforeach
      </table>

</body>
</html>
