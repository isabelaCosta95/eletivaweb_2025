<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Consultar Veículo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container">
    <h1>Consultar Veículo</h1>
    
    <form method="post" action="/veiculos/{{ $veiculo-> id }}">
        @CSRF
        @method('DELETE')
        <div class="mb-3">
            <label for="placa" class="form-label">Informe a placa:</label>
            <input type="text" id="placa" name="placa" value="{{ $veiculo->placa}}" class="form-control" disabled>
        </div>
    
        <div class="mb-3">
            <label for="proprietario" class="form-label">Informe o proprietário:</label>
            <input type="text" id="proprietario" name="proprietario" value="{{ $veiculo->proprietario }}" class="form-control" disabled>
        </div>
    
        <div class="mb-3">
            <label for="renavam" class="form-label">Informe o renavam:</label>
            <input type="number" id="renavam" name="renavam" value="{{ $veiculo->renavam}}" class="form-control" disabled>
        </div>

        <div class="mb-3">
            <label for="rntc" class="form-label">Informe o rntc:</label>
            <input type="text" id="rntc" name="rntc" value="{{ $veiculo->rntc }}" class="form-control" disabled>
        </div>
    
        <div class="mb-3">
            <label for="combustivel" class="form-label">Informe o combustível:</label>
            <input type="text" id="combustivel" name="combustivel" value="{{ $veiculo->combustivel}}" class="form-control" disabled>
        </div>

        <p>Deseja excluir o registro?</p>
        <button type="submit" class="btn btn-danger">Excluir</button>
        <a href="/veiculos" class="btn btn-primary">Cancelar</a>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>