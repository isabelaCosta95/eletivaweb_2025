@extends('layout')

@section('principal')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h3 mb-0 text-gray-800">Detalhes do Produto</h1>
            <p class="text-muted">Visualize os dados do produto</p>
        </div>
        <a href="{{ route('produtos.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Voltar
        </a>
    </div>

    <div class="card">
        <div class="card-body">
            <form method="post" action="{{ route('produtos.destroy', $produto->id) }}">
                @csrf
                @method('DELETE')
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="descricao" class="form-label">Descrição</label>
                        <input type="text" class="form-control" value="{{ $produto->descricao }}" disabled>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="preco" class="form-label">Preço</label>
                        <input type="text" class="form-control" value="R$ {{ number_format($produto->preco, 2, ',', '.') }}" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="estoque" class="form-label">Estoque</label>
                        <input type="text" class="form-control" value="{{ $produto->estoque }}" disabled>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="categoria" class="form-label">Categoria</label>
                        <input type="text" class="form-control" value="{{ $produto->categoria->nome }}" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Foto do Produto</label>
                        @if($produto->foto)
                            <div>
                                <img src="{{ asset('storage/'.$produto->foto) }}" height="200" alt="Foto do produto" class="img-thumbnail">
                            </div>
                        @else
                            <p class="text-muted">Nenhuma foto cadastrada</p>
                        @endif
                    </div>
                </div>
                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-primary">
                        <i class="bi bi-pencil"></i> Editar
                    </a>
                    <button type="submit" class="btn btn-danger" 
                            onclick="return confirm('Tem certeza que deseja excluir este produto?')">
                        <i class="bi bi-trash"></i> Excluir
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection