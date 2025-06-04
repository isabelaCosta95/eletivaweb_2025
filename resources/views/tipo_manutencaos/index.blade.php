@extends('layout')

@section('principal')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h3 mb-0 text-gray-800">Tipos de Manutenção</h1>
            <p class="text-muted">Gerencie os tipos de manutenção cadastrados no sistema</p>
        </div>
        <a href="{{ route('tipo_manutencaos.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-lg"></i> Novo Tipo de Manutenção
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
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th class="text-end">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tipo_manutencaos as $tm)
                        <tr>
                            <td>{{ $tm->id }}</td>
                            <td>{{ $tm->nome }}</td>
                            <td>{{ $tm->descricao }}</td>
                            <td class="text-end">
                                <div class="btn-group">
                                    <a href="{{ route('tipo_manutencaos.edit', $tm->id) }}" class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <a href="{{ route('tipo_manutencaos.show', $tm->id) }}" class="btn btn-sm btn-outline-info">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <form method="POST" action="{{ route('tipo_manutencaos.destroy', $tm->id) }}" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger" 
                                                onclick="return confirm('Tem certeza que deseja excluir este tipo de manutenção?')">
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