@extends('layout')

@section('principal')
<div class="container-fluid py-4">
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="h3 mb-0 text-gray-800">Detalhes da Cidade</h1>
            <p class="text-muted">Visualize os dados da cidade</p>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Informações da Cidade</h6>
                </div>
                <div class="card-body">
                    <form method="post" action="/cidades/{{ $cidade->id }}">
                        @csrf
                        @method('DELETE')
                        
                        <div class="mb-3">
                            <label for="estado" class="form-label">Estado:</label>
                            <input type="text" id="estado" name="estado" value="{{ $cidade->estado }}" class="form-control" disabled>
                        </div>
                    
                        <div class="mb-3">
                            <label for="descricao" class="form-label">Descrição:</label>
                            <input type="text" id="descricao" name="descricao" value="{{ $cidade->descricao }}" class="form-control" disabled>
                        </div>
                    
                        <div class="mb-3">
                            <label for="ibge" class="form-label">Código IBGE:</label>
                            <input type="text" id="ibge" name="ibge" value="{{ $cidade->ibge }}" class="form-control" disabled>
                        </div>
                    
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir esta cidade?')">
                                <i class="bi bi-trash"></i> Excluir
                            </button>
                            <a href="/cidades" class="btn btn-secondary">
                                <i class="bi bi-arrow-left"></i> Voltar
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection