<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Consultar Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container">
    <h1>Consultar Cliente</h1>
    
    <form method="post" action="/clientes/{{ $cliente-> id }}" enctype="multipart/form-data">
        @CSRF
        @method('DELETE')
        <div class="mb-3">
            <label for="nome_completo" class="form-label">Informe o nome completo:</label>
            <input type="text" id="nome_completo" name="nome_completo" value="{{ $cliente->nome_completo}}" class="form-control" disabled>
        </div>
    
        <div class="mb-3">
            <label for="cpf" class="form-label">Informe o cpf:</label>
            <input type="text" id="cpf" name="cpf" value="{{ $cliente->cpf }}" class="form-control" disabled>
        </div>
    
        <div class="mb-3">
            <label for="rg" class="form-label">Informe o rg:</label>
            <input type="number" id="rg" name="rg" value="{{ $cliente->rg}}" class="form-control" disabled>
        </div>

        <div class="mb-3">
            <label for="dt_nascimento" class="form-label">Informe o data de nascimento:</label>
            <input type="number" id="dt_nascimento" name="dt_nascimento" value="{{ $cliente->dt_nascimento}}" class="form-control" disabled>
        </div>

        <div class="mb-3">
            <label for="endereco" class="form-label">Informe o endereço:</label>
            <input type="number" id="endereco" name="endereco" value="{{ $cliente->endereco}}" class="form-control" disabled>
        </div>

        <div class="mb-3">
            <label for="telefone" class="form-label">Informe o telefone:</label>
            <input type="number" id="telefone" name="telefone" value="{{ $cliente->telefone}}" class="form-control" disabled>
        </div>

        <div class="mb-3">
            <label for="cidade_id" class="form-label">Selecione a Cidade:</label>
            <select id="cidade_id" name="cidade_id" class="form-select" disabled>
                @foreach ($cidades as $c)
                    <option value="{{ $c->id }}" {{ $cliente->cidade_id == $c->id ? "selected" : "" }} >
                        {{ $c->descricao }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            @if ($cliente->foto)
                <img src="{{ asset('storage/'.$cliente->foto) }}" height="50" />
            @endif
        </div>

        <p>Deseja excluir o registro?</p>
        <button type="submit" class="btn btn-danger">Excluir</button>
        <a href="/clientes" class="btn btn-primary">Cancelar</a>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>