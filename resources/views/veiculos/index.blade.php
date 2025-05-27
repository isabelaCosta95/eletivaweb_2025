@extends('layout')

@section('principal')
<div class="container-fluid py-4">
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="h3 mb-0 text-gray-800">Veículos</h1>
            <p class="text-muted">Gerencie os veículos da frota</p>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex justify-content-between align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">Lista de Veículos</h6>
                    <a href="/veiculos/create" class="btn btn-primary">
                        <i class="bi bi-plus-circle"></i> Novo Veículo
                    </a>
                </div>
                <div class="card-body">
                    @if (session('erro'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('erro') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if (session('sucesso'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('sucesso') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Placa</th>
                                    <th>Modelo</th>
                                    <th>Marca</th>
                                    <th>Ano</th>
                                    <th>Status</th>
                                    <th width="200">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($veiculos as $veiculo)
                                    <tr>
                                        <td>{{ $veiculo->id }}</td>
                                        <td>{{ $veiculo->placa }}</td>
                                        <td>{{ $veiculo->modelo }}</td>
                                        <td>{{ $veiculo->marca }}</td>
                                        <td>{{ $veiculo->ano }}</td>
                                        <td>
                                            @if($veiculo->status == 'Ativo')
                                                <span class="badge bg-success">Ativo</span>
                                            @elseif($veiculo->status == 'Em Manutenção')
                                                <span class="badge bg-warning">Em Manutenção</span>
                                            @else
                                                <span class="badge bg-danger">Inativo</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="/veiculos/{{ $veiculo->id }}/edit" class="btn btn-warning btn-sm">
                                                <i class="bi bi-pencil"></i> Editar
                                            </a>
                                            <a href="/veiculos/{{ $veiculo->id }}" class="btn btn-info btn-sm">
                                                <i class="bi bi-eye"></i> Consultar
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection