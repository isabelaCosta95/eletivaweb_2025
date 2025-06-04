@extends('layout')

@section('principal')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h3 mb-0 text-gray-800">Funcionários</h1>
            <p class="text-muted">Gerencie os funcionários cadastrados no sistema</p>
        </div>
        <a href="{{ route('funcionarios.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-lg"></i> Novo Funcionário
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
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>CNH</th>
                            <th>Data Nascimento</th>
                            <th>Endereço</th>
                            <th>Telefone</th>
                            <th>Cidade</th>
                            <th class="text-end">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($funcionarios as $f)
                        <tr>
                            <td>
                                @if($f->foto)
                                    <img src="{{ asset('storage/' . $f->foto) }}" alt="Foto do funcionário" class="rounded-circle" style="width: 40px; height: 40px; object-fit: cover;">
                                @else
                                    <div class="rounded-circle bg-secondary d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                        <i class="bi bi-person text-white"></i>
                                    </div>
                                @endif
                            </td>
                            <td>{{ $f->id }}</td>
                            <td>{{ $f->nome_completo }}</td>
                            <td>{{ $f->cpf }}</td>
                            <td>{{ $f->cnh }}</td>
                            <td>{{ \Carbon\Carbon::parse($f->dt_nascimento)->format('d/m/Y') }}</td>
                            <td>{{ $f->endereco }}</td>
                            <td>{{ $f->telefone }}</td>
                            <td>{{ $f->cidade->descricao ?? 'Não informada' }}</td>
                            <td class="text-end">
                                <div class="btn-group">
                                    <a href="{{ route('funcionarios.edit', $f->id) }}" class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <form method="POST" action="{{ route('funcionarios.destroy', $f->id) }}" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger" 
                                                onclick="return confirm('Tem certeza que deseja excluir este funcionário?')">
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