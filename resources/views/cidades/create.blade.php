<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nova Cidade</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container">
    <h1>Nova Cidade</h1>
    
    <form method="post" action="/cidades">
        @CSRF
        
        <div class="mb-3">
            <label for="estado" class="form-label">Informe o estado:</label>
            <input type="text" id="estado" name="estado" class="form-control" required="">
        </div>
    
        <div class="mb-3">
            <label for="descricao" class="form-label">Informe a descrição:</label>
            <input type="text" id="descricao" name="descricao" class="form-control" required="">
        </div>
    
        <div class="mb-3">
            <label for="ibge" class="form-label">Informe o IBGE:</label>
            <input type="text" id="ibge" name="ibge" class="form-control" required="">
        </div>
    
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>