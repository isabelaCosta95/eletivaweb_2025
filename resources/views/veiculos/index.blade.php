@extends('layout')

@section('principal')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h3 mb-0 text-gray-800">Veículos</h1>
            <p class="text-muted">Gerencie os veículos cadastrados no sistema</p>
        </div>
        <a href="{{ route('veiculos.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-lg"></i> Novo Veículo
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
                            <th>Foto</th>
                            <th>ID</th>
                            <th>Placa</th>
                            <th>Proprietário</th>
                            <th>Renavam</th>
                            <th>RNTC</th>
                            <th>Combustível</th>
                            <th class="text-end">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($veiculos as $v)
                        <tr>
                            <td>
                                @if($v->foto)
                                    <img src="{{ asset('storage/' . $v->foto) }}" alt="Foto do veículo" class="rounded-circle" style="width: 40px; height: 40px; object-fit: cover;">
                                @else
                                    <div class="rounded-circle bg-secondary d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                        <i class="bi bi-car-front text-white"></i>
                                    </div>
                                @endif
                            </td>
                            <td>{{ $v->id }}</td>
                            <td>{{ $v->placa }}</td>
                            <td>{{ $v->proprietario }}</td>
                            <td>{{ $v->renavam }}</td>
                            <td>{{ $v->rntc }}</td>
                            <td>{{ $v->combustivel }}</td>
                            <td class="text-end">
                                <div class="btn-group">
                                    <a href="{{ route('veiculos.edit', $v->id) }}" class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <form method="POST" action="{{ route('veiculos.destroy', $v->id) }}" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger" 
                                                onclick="return confirm('Tem certeza que deseja excluir este veículo?')">
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