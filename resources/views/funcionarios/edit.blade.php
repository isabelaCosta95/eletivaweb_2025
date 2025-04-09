<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Funcionario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container">
    <h1>Editar Funcionario</h1>
    
    <form method="post" action="/funcionarios/{{ $funcionario-> id }}">
        @CSRF
        @method('PUT')
        <div class="mb-3">
            <label for="nome_completo" class="form-label">Informe o nome_completo:</label>
            <input type="text" id="nome_completo" name="nome_completo" value="{{ $funcionario->nome_completo}}" class="form-control" required="">
        </div>

        <div class="mb-3">
            <label for="cpf" class="form-label">Informe o cpf:</label>
            <input type="text" id="cpf" name="cpf" value="{{ $funcionario->cpf}}" class="form-control" required="">
        </div>
    
        <div class="mb-3">
            <label for="cnh" class="form-label">Informe cnh:</label>
            <input type="number" id="cnh" name="cnh" value="{{ $funcionario->cnh }}" class="form-control" required="">
        </div>

        <div class="mb-3">
            <label for="dt_nascimento" class="form-label">Informe a data de nascimento:</label>
            <input type="date" id="dt_nascimento" name="dt_nascimento" value="{{ $funcionario->dt_nascimento }}" class="form-control" required="">
        </div>

        <div class="mb-3">
            <label for="telefone" class="form-label">Informe telefone:</label>
            <input type="number" id="telefone" name="telefone" value="{{ $funcionario->telefone }}" class="form-control" required="">
        </div>

        <div class="mb-3">
            <label for="endereco" class="form-label">Informe endereco:</label>
            <input type="text" id="endereco" name="endereco" value="{{ $funcionario->endereco }}" class="form-control" required="">
        </div>

        <div class="mb-3">
            <label for="funcionario_id" class="form-label">Selecione a categoria:</label>
            <select id="funcionario_id" name="funcionario_id" class="form-select" required="">
                @foreach ($cidades as $c)
                    <option value="{{ $c->id }}" {{ $funcionario->funcionario_id == $c->id ? "selected" : "" }} >
                        {{ $c->descricao }}
                    </option>
                @endforeach
            </select>
        </div>
    
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>