<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Novo Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container">
    <h1>Novo Cliente</h1>
    
    <form method="post" action="/clientes" enctype="multipart/form-data">
        @CSRF
        
        <div class="mb-3">
            <label for="nome_completo" class="form-label">Informe o nome completo:</label>
            <input type="text" id="nome_completo" name="nome_completo" class="form-control" required="">
        </div>
    
        <div class="mb-3">
            <label for="cpf" class="form-label">Informe o CPF:</label>
            <input type="text" id="cpf" name="cpf" class="form-control" required="">
        </div>
    
        <div class="mb-3">
            <label for="rg" class="form-label">Informe o número da rg:</label>
            <input type="text" id="rg" name="rg" class="form-control" required="">
        </div>
    
        <div class="mb-3">
            <label for="dt_nascimento" class="form-label">Informe o dt_nascimento:</label>
            <input type="date" id="dt_nascimento" name="dt_nascimento" class="form-control" required="">
        </div>

        <div class="mb-3">
            <label for="endereco" class="form-label">Informe o Endereço:</label>
            <input type="text" id="endereco" name="endereco" class="form-control" required="">
        </div>
    
        <div class="mb-3">
            <label for="telefone" class="form-label">Informe o número de telefone:</label>
            <input type="text" id="telefone" name="telefone" class="form-control" required="">
        </div>
    
        <div class="mb-3">
            <label for="cidade_id" class="form-label">Selecione a cidade:</label>
            <select id="cidade_id" name="cidade_id" class="form-select" required="">
                @foreach ($cidades as $c)
                    <option value="{{ $c->id }}">
                        {{ $c->descricao }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="foto" class="form-label">Foto do Cliente </label>
            <input type="file" name="foto" id="foto" class="form-control">
        </div>
    
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>