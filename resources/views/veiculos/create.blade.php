@extends('layout')

@section('principal')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h3 mb-0 text-gray-800">Novo Veículo</h1>
            <p class="text-muted">Cadastre um novo veículo no sistema</p>
        </div>
        <a href="{{ route('veiculos.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Voltar
        </a>
    </div>

    <div class="card">
        <div class="card-body">
            <form method="post" action="{{ route('veiculos.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="placa" class="form-label">Placa</label>
                        <input type="text" class="form-control @error('placa') is-invalid @enderror" 
                               id="placa" name="placa" value="{{ old('placa') }}" required>
                        @error('placa')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="proprietario" class="form-label">Proprietário</label>
                        <input type="text" class="form-control @error('proprietario') is-invalid @enderror" 
                               id="proprietario" name="proprietario" value="{{ old('proprietario') }}" required>
                        @error('proprietario')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="renavam" class="form-label">Renavam</label>
                        <input type="text" class="form-control @error('renavam') is-invalid @enderror" 
                               id="renavam" name="renavam" value="{{ old('renavam') }}" required>
                        @error('renavam')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="rntc" class="form-label">RNTC</label>
                        <input type="text" class="form-control @error('rntc') is-invalid @enderror" 
                               id="rntc" name="rntc" value="{{ old('rntc') }}" required>
                        @error('rntc')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="combustivel" class="form-label">Combustível</label>
                        <input type="text" class="form-control @error('combustivel') is-invalid @enderror" 
                               id="combustivel" name="combustivel" value="{{ old('combustivel') }}" required>
                        @error('combustivel')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="foto" class="form-label">Foto</label>
                        <input type="file" class="form-control @error('foto') is-invalid @enderror" 
                               id="foto" name="foto" accept="image/*">
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