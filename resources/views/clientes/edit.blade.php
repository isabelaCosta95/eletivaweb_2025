@extends('layout')

@section('principal')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h3 mb-0 text-gray-800">Editar Cliente</h1>
            <p class="text-muted">Atualize os dados do cliente</p>
        </div>
        <a href="{{ route('clientes.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Voltar
        </a>
    </div>

    <div class="card">
        <div class="card-body">
            <form method="post" action="{{ route('clientes.update', $cliente->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="nome_completo" class="form-label">Nome Completo</label>
                        <input type="text" class="form-control @error('nome_completo') is-invalid @enderror" 
                               id="nome_completo" name="nome_completo" value="{{ old('nome_completo', $cliente->nome_completo) }}" required>
                        @error('nome_completo')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="cpf" class="form-label">CPF</label>
                        <input type="text" class="form-control @error('cpf') is-invalid @enderror" 
                               id="cpf" name="cpf" value="{{ old('cpf', $cliente->cpf) }}" required>
                        @error('cpf')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="rg" class="form-label">RG</label>
                        <input type="text" class="form-control @error('rg') is-invalid @enderror" 
                               id="rg" name="rg" value="{{ old('rg', $cliente->rg) }}" required>
                        @error('rg')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="dt_nascimento" class="form-label">Data de Nascimento</label>
                        <input type="date" class="form-control @error('dt_nascimento') is-invalid @enderror" 
                               id="dt_nascimento" name="dt_nascimento" value="{{ old('dt_nascimento', $cliente->dt_nascimento) }}" required>
                        @error('dt_nascimento')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="endereco" class="form-label">Endereço</label>
                        <input type="text" class="form-control @error('endereco') is-invalid @enderror" 
                               id="endereco" name="endereco" value="{{ old('endereco', $cliente->endereco) }}" required>
                        @error('endereco')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="text" class="form-control @error('telefone') is-invalid @enderror" 
                               id="telefone" name="telefone" value="{{ old('telefone', $cliente->telefone) }}" required>
                        @error('telefone')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="cidade_id" class="form-label">Cidade</label>
                        <select class="form-select @error('cidade_id') is-invalid @enderror" 
                                id="cidade_id" name="cidade_id" required>
                            <option value="">Selecione uma cidade</option>
                            @foreach($cidades as $c)
                                <option value="{{ $c->id }}" {{ old('cidade_id', $cliente->cidade_id) == $c->id ? 'selected' : '' }}>
                                    {{ $c->descricao }}
                                </option>
                            @endforeach
                        </select>
                        @error('cidade_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="foto" class="form-label">Foto</label>
                        @if($cliente->foto)
                            <div class="mb-2">
                                <img src="{{ asset('storage/' . $cliente->foto) }}" 
                                     alt="Foto atual" class="img-thumbnail" style="max-width: 150px;">
                            </div>
                        @endif
                        <input type="file" class="form-control @error('foto') is-invalid @enderror" 
                               id="foto" name="foto" accept="image/*">
                        @error('foto')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="d-flex justify-content-end gap-2">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> Salvar Alterações
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection