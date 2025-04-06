<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nova Veiculo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container">
    <h1>Nova Veiculo</h1>
    
    <form method="post" action="/veiculos">
        @CSRF
        
        <div class="mb-3">
            <label for="placa" class="form-label">Informe a placa:</label>
            <input type="text" id="placa" name="placa" class="form-control" required="">
        </div>
    
        <div class="mb-3">
            <label for="proprietario" class="form-label">Informe o proprietário:</label>
            <input type="text" id="proprietario" name="proprietario" class="form-control" required="">
        </div>
    
        <div class="mb-3">
            <label for="renavam" class="form-label">Informe o Renavam:</label>
            <input type="text" id="renavam" name="renavam" class="form-control" required="">
        </div>

        <div class="mb-3">
            <label for="rntc" class="form-label">Informe o rntc:</label>
            <input type="text" id="rntc" name="rntc" class="form-control" required="">
        </div>
    
        <div class="mb-3">
            <label for="combustivel" class="form-label">Informe o tipo de combustível:</label>
            <input type="text" id="combustivel" name="combustivel" class="form-control" required="">
        </div>
    
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>