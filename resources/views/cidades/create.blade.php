@extends('layout')

@section('principal')
<div class="container-fluid py-4">
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="h3 mb-0 text-gray-800">Nova Cidade</h1>
            <p class="text-muted">Cadastre uma nova cidade</p>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Formulário de Cadastro</h6>
                </div>
                <div class="card-body">
                    <form method="post" action="/cidades">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="estado" class="form-label">Estado:</label>
                            <input type="text" id="estado" name="estado" class="form-control" required>
                        </div>
                    
                        <div class="mb-3">
                            <label for="descricao" class="form-label">Descrição:</label>
                            <input type="text" id="descricao" name="descricao" class="form-control" required>
                        </div>
                    
                        <div class="mb-3">
                            <label for="ibge" class="form-label">Código IBGE:</label>
                            <input type="text" id="ibge" name="ibge" class="form-control" required>
                        </div>
                    
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-save"></i> Salvar
                            </button>
                            <a href="/cidades" class="btn btn-secondary">
                                <i class="bi bi-x-circle"></i> Cancelar
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection