<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container">
    <h1>Editar Produtos</h1>
    
    <form method="post" action="/produtos/{{ $produto-> id }}" enctype="multipart/form-data"> 
        @CSRF
        @method('PUT')
        <div class="mb-3">
            <label for="descricao" class="form-label">Informe a descricao:</label>
            <input type="text" id="descricao" name="descricao" value="{{ $produto->descricao}}" class="form-control" required="">
        </div>
    
        <div class="mb-3">
            <label for="preco" class="form-label">Informe preco:</label>
            <input type="text" id="preco" name="preco" value="{{ $produto->preco }}" class="form-control" required="">
        </div>

        <div class="mb-3">
            <label for="estoque" class="form-label">Informe estoque:</label>
            <input type="number" id="estoque" name="estoque" value="{{ $produto->estoque }}" class="form-control" required="">
        </div>

        <div class="mb-3">
            <label for="categoria_id" class="form-label">Selecione a categoria:</label>
            <select id="categoria_id" name="categoria_id" class="form-select" required="">
                @foreach ($categorias as $c)
                    <option value="{{ $c->id }}" {{ $produto->categoria_id == $c->id ? "selected" : "" }} >
                        {{ $c->nome }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            @if ($produto->foto)
                <img src="{{ asset('storage/'. $produto->foto) }}" height="50"/>
            @endif
            <input type="file" name="foto" id="foto" class="form-control">
        </div>
    
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>