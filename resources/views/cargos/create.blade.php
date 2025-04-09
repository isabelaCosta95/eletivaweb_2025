<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Novo Cargo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container">
    <h1>Novo Cargo</h1>
    
    <form method="post" action="{{ route('cargos.store') }}">
        @csrf
        
        <div class="mb-3">
            <label for="nome" class="form-label">Nome do Cargo:</label>
            <input type="text" id="nome" name="nome" class="form-control" required maxlength="50">
        </div>
    
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição:</label>
            <textarea id="descricao" name="descricao" class="form-control" required maxlength="150"></textarea>
        </div>
    
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{ route('cargos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html> 