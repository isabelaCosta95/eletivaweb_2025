<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de Planos de Conta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container">
    <h1>Lista de Planos de Conta</h1>

    @if(session('sucesso'))
        <div class="alert alert-success">
            {{ session('sucesso') }}
        </div>
    @endif

    @if(session('erro'))
        <div class="alert alert-danger">
            {{ session('erro') }}
        </div>
    @endif

    <a href="{{ route('plano_contas.create') }}" class="btn btn-primary mb-3">Novo Plano de Conta</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Descrição</th>
                <th>Ativo</th>
                <th>Natureza</th>
                <th>Tipo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($planoContas as $planoConta)
                <tr>
                    <td>{{ $planoConta->id }}</td>
                    <td>{{ $planoConta->descricao }}</td>
                    <td>{{ $planoConta->ativo }}</td>
                    <td>{{ $planoConta->natureza }}</td>
                    <td>{{ $planoConta->tipo }}</td>
                    <td>
                        <a href="{{ route('plano_contas.show', $planoConta->id) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('plano_contas.edit', $planoConta->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('plano_contas.destroy', $planoConta->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir este plano de conta?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html> 