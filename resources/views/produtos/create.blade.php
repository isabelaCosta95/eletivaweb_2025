@extends('layout')

@section('principal')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h3 mb-0 text-gray-800">Novo Produto</h1>
            <p class="text-muted">Cadastre um novo produto no sistema</p>
        </div>
        <a href="{{ route('produtos.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Voltar
        </a>
    </div>

    <div class="card">
        <div class="card-body">
            <form method="post" action="{{ route('produtos.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="descricao" class="form-label">Descrição</label>
                        <input type="text" class="form-control @error('descricao') is-invalid @enderror" 
                               id="descricao" name="descricao" value="{{ old('descricao') }}" required>
                        @error('descricao')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="preco" class="form-label">Preço</label>
                        <input type="text" class="form-control @error('preco') is-invalid @enderror" 
                               id="preco" name="preco" value="{{ old('preco') }}" required>
                        @error('preco')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="estoque" class="form-label">Estoque</label>
                        <input type="number" class="form-control @error('estoque') is-invalid @enderror" 
                               id="estoque" name="estoque" value="{{ old('estoque') }}" required>
                        @error('estoque')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="categoria_id" class="form-label">Categoria</label>
                        <select class="form-select @error('categoria_id') is-invalid @enderror" 
                                id="categoria_id" name="categoria_id" required>
                            <option value="">Selecione uma categoria</option>
                            @foreach($categorias as $c)
                                <option value="{{ $c->id }}" {{ old('categoria_id') == $c->id ? 'selected' : '' }}>
                                    {{ $c->nome }}
                                </option>
                            @endforeach
                        </select>
                        @error('categoria_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="foto" class="form-label">Foto do Produto</label>
                        <input type="file" class="form-control @error('foto') is-invalid @enderror" 
                               id="foto" name="foto">
                        @error('foto')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="d-flex justify-content-end gap-2">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> Salvar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection