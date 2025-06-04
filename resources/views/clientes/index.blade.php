@extends('layout')

@section('principal')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h3 mb-0 text-gray-800">Clientes</h1>
            <p class="text-muted">Gerencie os clientes cadastrados no sistema</p>
        </div>
        <a href="{{ route('clientes.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-lg"></i> Novo Cliente
        </a>
    </div>

    @if(session('sucesso'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('sucesso') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session('erro'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('erro') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Foto</th>
                            <th>Nome Completo</th>
                            <th>CPF</th>
                            <th>Telefone</th>
                            <th>Cidade</th>
                            <th class="text-end">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($clientes as $c)
                        <tr>
                            <td>{{ $c->id }}</td>
                            <td>
                                @if($c->foto)
                                    <img src="{{ asset('storage/' . $c->foto) }}" 
                                         alt="Foto do cliente" class="img-thumbnail" style="max-width: 50px;">
                                @else
                                    <i class="bi bi-person-circle fs-4"></i>
                                @endif
                            </td>
                            <td>{{ $c->nome_completo }}</td>
                            <td>{{ $c->cpf }}</td>
                            <td>{{ $c->telefone }}</td>
                            <td>{{ $c->cidade->descricao }}</td>
                            <td class="text-end">
                                <div class="btn-group">
                                    <a href="{{ route('clientes.edit', $c->id) }}" class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <form method="POST" action="{{ route('clientes.destroy', $c->id) }}" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger" 
                                                onclick="return confirm('Tem certeza que deseja excluir este cliente?')">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection