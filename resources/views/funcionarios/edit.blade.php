@extends('layout')

@section('principal')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h3 mb-0 text-gray-800">Editar Funcionário</h1>
            <p class="text-muted">Atualize os dados do funcionário</p>
        </div>
        <a href="{{ route('funcionarios.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Voltar
        </a>
    </div>

    <div class="card">
        <div class="card-body">
            <form method="post" action="{{ route('funcionarios.update', $funcionario->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="nome_completo" class="form-label">Nome Completo</label>
                        <input type="text" class="form-control @error('nome_completo') is-invalid @enderror" 
                               id="nome_completo" name="nome_completo" value="{{ old('nome_completo', $funcionario->nome_completo) }}" required>
                        @error('nome_completo')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="cpf" class="form-label">CPF</label>
                        <input type="text" class="form-control @error('cpf') is-invalid @enderror" 
                               id="cpf" name="cpf" value="{{ old('cpf', $funcionario->cpf) }}" required>
                        @error('cpf')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="cnh" class="form-label">CNH</label>
                        <input type="text" class="form-control @error('cnh') is-invalid @enderror" 
                               id="cnh" name="cnh" value="{{ old('cnh', $funcionario->cnh) }}" required>
                        @error('cnh')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="dt_nascimento" class="form-label">Data de Nascimento</label>
                        <input type="date" class="form-control @error('dt_nascimento') is-invalid @enderror" 
                               id="dt_nascimento" name="dt_nascimento" 
                               value="{{ old('dt_nascimento', $funcionario->dt_nascimento) }}" required>
                        @error('dt_nascimento')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="endereco" class="form-label">Endereço</label>
                        <input type="text" class="form-control @error('endereco') is-invalid @enderror" 
                               id="endereco" name="endereco" value="{{ old('endereco', $funcionario->endereco) }}" required>
                        @error('endereco')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="text" class="form-control @error('telefone') is-invalid @enderror" 
                               id="telefone" name="telefone" value="{{ old('telefone', $funcionario->telefone) }}" required>
                        @error('telefone')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="cidade_id" class="form-label">Cidade</label>
                        <select class="form-select @error('cidade_id') is-invalid @enderror" 
                                id="cidade_id" name="cidade_id" required>
                            <option value="">Selecione uma cidade</option>
                            @foreach($cidades as $cidade)
                                <option value="{{ $cidade->id }}" 
                                    {{ old('cidade_id', $funcionario->cidade_id) == $cidade->id ? 'selected' : '' }}>
                                    {{ $cidade->descricao }}
                                </option>
                            @endforeach
                        </select>
                        @error('cidade_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="foto" class="form-label">Foto</label>
                        @if($funcionario->foto)
                            <div class="mb-2">
                                <img src="{{ asset('storage/' . $funcionario->foto) }}" 
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