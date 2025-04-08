<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Novo Plano de Conta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container">
    <h1>Novo Plano de Conta</h1>
    
    <form method="post" action="{{ route('plano_contas.store') }}">
        @csrf
        
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição:</label>
            <input type="text" id="descricao" name="descricao" class="form-control" required maxlength="50">
        </div>
    
        <div class="mb-3">
            <label for="ativo" class="form-label">Ativo:</label>
            <select id="ativo" name="ativo" class="form-select" required>
                <option value="S">Sim</option>
                <option value="N">Não</option>
            </select>
        </div>
    
        <div class="mb-3">
            <label for="natureza" class="form-label">Natureza:</label>
            <select id="natureza" name="natureza" class="form-select" required>
                <option value="C">Crédito</option>
                <option value="D">Débito</option>
            </select>
        </div>
    
        <div class="mb-3">
            <label for="tipo" class="form-label">Tipo:</label>
            <input type="text" id="tipo" name="tipo" class="form-control" required maxlength="2">
        </div>
    
        <div class="mb-3">
            <label for="observacao" class="form-label">Observação:</label>
            <textarea id="observacao" name="observacao" class="form-control" maxlength="100"></textarea>
        </div>
    
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{ route('plano_contas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html> 