<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">Unialfa</span>
        </div>
    </nav>

    <div class="container">
        <div class='card'>
            <div class="card-header">
                Detalhes do cliente {{$client->nome}}
            </div>
            <div class="card-body">
                <p><strong>ID</strong> {{$client->id}} </p>
                <p><strong>Nome</strong>{{$client->nome}}</p>
                <p><strong>Endereco</strong>{{$client->endereco}}</p>
                <p><strong>Observacao</strong>{{$client->observacao}}</p>
                <br>
                <a class="btn btn-success" href="{{ route('clients.index') }}">Voltar a lista de clientes</a>
            </div>
        </div>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
