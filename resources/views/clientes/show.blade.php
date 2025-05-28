@extends('layout')

@section('principal')
<div class="container-fluid py-4">
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="h3 mb-0 text-gray-800">Detalhes do Cliente</h1>
            <p class="text-muted">Visualize os dados do cliente</p>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Informações do Cliente</h6>
                </div>
                <div class="card-body">
                    <form method="post" action="/clientes/{{ $cliente->id }}" enctype="multipart/form-data">
                        @csrf
                        @method('DELETE')
                        
                        <div class="row">
                            <div class="col-md-4 text-center mb-4">
                                @if ($cliente->foto)
                                    <img src="{{ asset('storage/'.$cliente->foto) }}" class="img-fluid rounded" style="max-height: 300px; width: auto;">
                                @else
                                    <div class="bg-light rounded p-5 text-center">
                                        <i class="bi bi-person-circle" style="font-size: 8rem;"></i>
                                        <p class="mt-2 text-muted">Sem foto</p>
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <label for="nome_completo" class="form-label">Nome Completo:</label>
                                    <input type="text" id="nome_completo" name="nome_completo" value="{{ $cliente->nome_completo }}" class="form-control" disabled>
                                </div>
                            
                                <div class="mb-3">
                                    <label for="cpf" class="form-label">CPF:</label>
                                    <input type="text" id="cpf" name="cpf" value="{{ $cliente->cpf }}" class="form-control" disabled>
                                </div>
                            
                                <div class="mb-3">
                                    <label for="rg" class="form-label">RG:</label>
                                    <input type="text" id="rg" name="rg" value="{{ $cliente->rg }}" class="form-control" disabled>
                                </div>

                                <div class="mb-3">
                                    <label for="dt_nascimento" class="form-label">Data de Nascimento:</label>
                                    <input type="date" id="dt_nascimento" name="dt_nascimento" value="{{ $cliente->dt_nascimento }}" class="form-control" disabled>
                                </div>

                                <div class="mb-3">
                                    <label for="endereco" class="form-label">Endereço:</label>
                                    <input type="text" id="endereco" name="endereco" value="{{ $cliente->endereco }}" class="form-control" disabled>
                                </div>

                                <div class="mb-3">
                                    <label for="telefone" class="form-label">Telefone:</label>
                                    <input type="text" id="telefone" name="telefone" value="{{ $cliente->telefone }}" class="form-control" disabled>
                                </div>

                                <div class="mb-3">
                                    <label for="cidade_id" class="form-label">Cidade:</label>
                                    <select id="cidade_id" name="cidade_id" class="form-select" disabled>
                                        @foreach ($cidades as $c)
                                            <option value="{{ $c->id }}" {{ $cliente->cidade_id == $c->id ? "selected" : "" }} >
                                                {{ $c->descricao }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este cliente?')">
                                <i class="bi bi-trash"></i> Excluir
                            </button>
                            <a href="/clientes" class="btn btn-secondary">
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