@extends('layout')

@section('principal')
<div class="container-fluid py-4">
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="h3 mb-0 text-gray-800">Dashboard do Cliente</h1>
            <p class="text-muted">Bem-vindo, {{ Auth::user()->name }}!</p>
        </div>
    </div>

    <div class="row">
        <!-- Card de Clientes -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Clientes</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <a href="/clientes" class="text-decoration-none">Gerenciar</a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-person fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card de Produtos -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Produtos</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <a href="/produtos" class="text-decoration-none">Gerenciar</a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-box fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card de Categorias -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Categorias</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <a href="/categorias" class="text-decoration-none">Gerenciar</a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-tags fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card de Peças -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Peças</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <a href="/pecas" class="text-decoration-none">Gerenciar</a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-gear fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Card de Tipos de Manutenção -->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Tipos de Manutenção</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <a href="/tipo_manutencaos" class="text-decoration-none">Gerenciar</a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-tools fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card de Configurações -->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Configurações</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <a href="/editar" class="text-decoration-none">Meus Dados</a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-gear fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection