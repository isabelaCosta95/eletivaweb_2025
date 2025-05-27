@extends('layout')

@section('principal')
<div class="container-fluid py-4">
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="h3 mb-0 text-gray-800">Funcionários</h1>
            <p class="text-muted">Gerencie os funcionários da empresa</p>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex justify-content-between align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">Lista de Funcionários</h6>
                    <a href="/funcionarios/create" class="btn btn-primary">
                        <i class="bi bi-plus-circle"></i> Novo Funcionário
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
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Telefone</th>
                                    <th>Cargo</th>
                                    <th width="200">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($funcionarios as $funcionario)
                                    <tr>
                                        <td>{{ $funcionario->id }}</td>
                                        <td>{{ $funcionario->nome }}</td>
                                        <td>{{ $funcionario->email }}</td>
                                        <td>{{ $funcionario->telefone }}</td>
                                        <td>{{ $funcionario->cargo->nome }}</td>
                                        <td>
                                            <a href="/funcionarios/{{ $funcionario->id }}/edit" class="btn btn-warning btn-sm">
                                                <i class="bi bi-pencil"></i> Editar
                                            </a>
                                            <a href="/funcionarios/{{ $funcionario->id }}" class="btn btn-info btn-sm">
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