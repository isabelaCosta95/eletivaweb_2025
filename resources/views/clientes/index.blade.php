<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container">
    <h1>Clientes</h1>

    <a class="btn btn-primary mb-3" href="/clientes/create" enctype="multipart/form-data">Novo Cliente</a> 

    @if (session('erro'))
        <div class="alert alert-danger">
            {{ session('erro')}}
        </div>
    @endif

    @if (session('sucesso'))
        <div class="alert alert-success">
            {{ session('sucesso')}}
        </div>
    @endif

    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome Completo</th>
                <th>CPF</th>
                <th>Telefone</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody> 
            @foreach ($clientes as $p)
                <tr>
                    <td> {{ $p->id }}</td>
                    <td> {{ $p->nome_completo }}</td>
                    <td> {{ $p->cpf }}</td>
                    <td> {{ $p->telefone }}</td>
                    <td>
                        <a href="/clientes/{{ $p->id }}/edit" class="btn btn-warning">Editar</a>
                        <a href="/clientes/{{ $p->id }}" class="btn btn-info">Consultar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>