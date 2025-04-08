<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detalhes do Cargo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container">
    <h1>Detalhes do Cargo</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">ID: {{ $cargo->id }}</h5>
            <p class="card-text"><strong>Nome:</strong> {{ $cargo->nome }}</p>
            <p class="card-text"><strong>Descrição:</strong> {{ $cargo->descricao }}</p>
            <p class="card-text"><small class="text-muted">Criado em: {{ $cargo->created_at->format('d/m/Y H:i:s') }}</small></p>
            <p class="card-text"><small class="text-muted">Última atualização: {{ $cargo->updated_at->format('d/m/Y H:i:s') }}</small></p>
        </div>
    </div>

    <div class="mt-3">
        <a href="{{ route('cargos.edit', $cargo->id) }}" class="btn btn-warning">Editar</a>
        <a href="{{ route('cargos.index') }}" class="btn btn-secondary">Voltar</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html> 