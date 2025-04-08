<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detalhes do Plano de Conta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container">
    <h1>Detalhes do Plano de Conta</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">ID: {{ $planoConta->id }}</h5>
            <p class="card-text"><strong>Descrição:</strong> {{ $planoConta->descricao }}</p>
            <p class="card-text"><strong>Ativo:</strong> {{ $planoConta->ativo == 'S' ? 'Sim' : 'Não' }}</p>
            <p class="card-text"><strong>Natureza:</strong> {{ $planoConta->natureza == 'C' ? 'Crédito' : 'Débito' }}</p>
            <p class="card-text"><strong>Tipo:</strong> {{ $planoConta->tipo }}</p>
            <p class="card-text"><strong>Observação:</strong> {{ $planoConta->observacao }}</p>
            <p class="card-text"><small class="text-muted">Criado em: {{ $planoConta->created_at->format('d/m/Y H:i:s') }}</small></p>
            <p class="card-text"><small class="text-muted">Última atualização: {{ $planoConta->updated_at->format('d/m/Y H:i:s') }}</small></p>
        </div>
    </div>

    <div class="mt-3">
        <a href="{{ route('plano_contas.edit', $planoConta->id) }}" class="btn btn-warning">Editar</a>
        <a href="{{ route('plano_contas.index') }}" class="btn btn-secondary">Voltar</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html> 