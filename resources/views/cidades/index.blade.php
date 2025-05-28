@extends('layout')

@section('principal')
<div class="container-fluid py-4">
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="h3 mb-0 text-gray-800">Cidades</h1>
            <p class="text-muted">Gerencie as cidades cadastradas</p>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex justify-content-between align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">Lista de Cidades</h6>
                    <a href="/cidades/create" class="btn btn-primary">
                        <i class="bi bi-plus-circle"></i> Nova Cidade
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
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Descrição</th>
                                    <th>Estado</th>
                                    <th>IBGE</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody> 
                                @foreach ($cidades as $cidade)
                                    <tr>
                                        <td>{{ $cidade->id }}</td>
                                        <td>{{ $cidade->descricao }}</td>
                                        <td>{{ $cidade->estado }}</td>
                                        <td>{{ $cidade->ibge }}</td>
                                        <td>
                                            <a href="/cidades/{{ $cidade->id }}/edit" class="btn btn-warning btn-sm">
                                                <i class="bi bi-pencil"></i> Editar
                                            </a>
                                            <a href="/cidades/{{ $cidade->id }}" class="btn btn-info btn-sm">
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