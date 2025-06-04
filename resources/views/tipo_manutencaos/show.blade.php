@extends('layout')

@section('principal')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h3 mb-0 text-gray-800">Detalhes do Tipo de Manutenção</h1>
            <p class="text-muted">Visualize os dados do tipo de manutenção</p>
        </div>
        <a href="{{ route('tipo_manutencaos.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Voltar
        </a>
    </div>

    <div class="card">
        <div class="card-body">
            <form method="post" action="{{ route('tipo_manutencaos.destroy', $tipo_manutencao->id) }}">
                @csrf
                @method('DELETE')
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" value="{{ $tipo_manutencao->nome }}" disabled>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="descricao" class="form-label">Descrição</label>
                        <input type="text" class="form-control" value="{{ $tipo_manutencao->descricao }}" disabled>
                    </div>
                </div>
                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('tipo_manutencaos.edit', $tipo_manutencao->id) }}" class="btn btn-primary">
                        <i class="bi bi-pencil"></i> Editar
                    </a>
                    <button type="submit" class="btn btn-danger" 
                            onclick="return confirm('Tem certeza que deseja excluir este tipo de manutenção?')">
                        <i class="bi bi-trash"></i> Excluir
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection