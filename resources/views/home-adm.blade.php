@extends('layout')

@section('title', 'Dashboard ADM')

@section('principal')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="h3 mb-0 text-gray-800">Dashboard Administrativo</h1>
            <p class="text-muted">Bem-vindo, {{ Auth::user()->name }}! Acesse rapidamente as principais áreas do sistema.</p>
        </div>
    </div>
    <div class="row">
        @component('components.dashboard-card', [
            'icon' => 'bi-geo-alt',
            'title' => 'Cidades',
            'desc' => 'Gerencie as cidades cadastradas',
            'link' => url('/cidades')
        ])@endcomponent
        @component('components.dashboard-card', [
            'icon' => 'bi-journal-text',
            'title' => 'Plano de Contas',
            'desc' => 'Controle financeiro e contábil',
            'link' => url('/plano_contas')
        ])@endcomponent
        @component('components.dashboard-card', [
            'icon' => 'bi-person-badge',
            'title' => 'Cargos',
            'desc' => 'Funções e cargos dos funcionários',
            'link' => url('/cargos')
        ])@endcomponent
        @component('components.dashboard-card', [
            'icon' => 'bi-people',
            'title' => 'Funcionários',
            'desc' => 'Cadastro e gestão de funcionários',
            'link' => url('/funcionarios')
        ])@endcomponent
        @component('components.dashboard-card', [
            'icon' => 'bi-truck',
            'title' => 'Veículos',
            'desc' => 'Controle da frota de veículos',
            'link' => url('/veiculos')
        ])@endcomponent
        @component('components.dashboard-card', [
            'icon' => 'bi-shield',
            'title' => 'Seguradoras',
            'desc' => 'Gerencie as seguradoras parceiras',
            'link' => url('/seguradoras')
        ])@endcomponent
    </div>
</div>
@endsection