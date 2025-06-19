@extends('layout')

@section('title', 'Relatórios')

@section('principal')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="h3 mb-0 text-gray-800">Relatórios</h1>
            <p class="text-muted">Acesse e gere os relatórios do sistema em PDF.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 mb-3">
            <div class="card h-100">
                <div class="card-body text-center">
                    <i class="bi bi-truck fs-1 text-primary"></i>
                    <h5 class="card-title mt-3">Movimentação da Carga e Descarga</h5>
                    <p class="card-text">Histórico das cargas transportadas por período.</p>
                    <a href="{{ route('relatorios.movimentacao-carga') }}" class="btn btn-outline-primary" target="_blank">
                        <i class="bi bi-file-earmark-pdf"></i> Gerar PDF
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card h-100">
                <div class="card-body text-center">
                    <i class="bi bi-box-seam fs-1 text-success"></i>
                    <h5 class="card-title mt-3">Gerenciar Paletes</h5>
                    <p class="card-text">Tipo de movimentação dos paletes por período.</p>
                    <a href="{{ route('relatorios.gerenciar-paletes') }}" class="btn btn-outline-success" target="_blank">
                        <i class="bi bi-file-earmark-pdf"></i> Gerar PDF
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card h-100">
                <div class="card-body text-center">
                    <i class="bi bi-geo-alt fs-1 text-danger"></i>
                    <h5 class="card-title mt-3">Extrato das Viagens</h5>
                    <p class="card-text">Resumo das viagens por período.</p>
                    <a href="{{ route('relatorios.extrato-viagens') }}" class="btn btn-outline-danger" target="_blank">
                        <i class="bi bi-file-earmark-pdf"></i> Gerar PDF
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 