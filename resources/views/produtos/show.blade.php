<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Consultar Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container">
    <h1>Consultar Produto</h1>
    
    <form method="post" action="/produtos/{{ $produto-> id }}">
        @CSRF
        @method('DELETE')
    
        <div class="mb-3">
            <label for="descricao" class="form-label">Informe o descrição:</label>
            <input type="text" id="descricao" name="descricao" value="{{ $produto->descricao }}" class="form-control" disabled>
        </div>
    
        <div class="mb-3">
            <label for="preco" class="form-label">Informe o preço:</label>
            <input type="text" id="preco" name="preco" value="{{ $produto->preco}}" class="form-control" disabled>
        </div>

        <div class="mb-3">
            <label for="estoque" class="form-label">Informe o estoque:</label>
            <input type="number" id="estoque" name="estoque" value="{{ $produto->estoque}}" class="form-control" disabled>
        </div>

        <div class="mb-3">
            <label for="categoria_id" class="form-label">Selecione a Cidade:</label>
            <select id="categoria_id" name="categoria_id" class="form-select" disabled>
                @foreach ($categorias as $c)
                    <option value="{{ $c->id }}" {{ $produto->categoria_id == $c->id ? "selected" : "" }} >
                        {{ $c->nome }}
                    </option>
                @endforeach
            </select>
        </div>

        <p>Deseja excluir o registro?</p>
        <button type="submit" class="btn btn-danger">Excluir</button>
        <a href="/produtos" class="btn btn-primary">Cancelar</a>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>