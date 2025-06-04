@extends('layout')

@section('principal')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h3 mb-0 text-gray-800">Produtos</h1>
            <p class="text-muted">Gerencie os produtos cadastrados no sistema</p>
        </div>
        <a href="{{ route('produtos.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-lg"></i> Novo Produto
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
                            <th>Descrição</th>
                            <th>Preço</th>
                            <th>Estoque</th>
                            <th>Categoria</th>
                            <th>Foto</th>
                            <th class="text-end">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($produtos as $p)
                        <tr>
                            <td>{{ $p->id }}</td>
                            <td>{{ $p->descricao }}</td>
                            <td>R$ {{ number_format($p->preco, 2, ',', '.') }}</td>
                            <td>{{ $p->estoque }}</td>
                            <td>{{ $p->categoria->nome }}</td>
                            <td>
                                @if($p->foto)
                                    <img src="{{ asset('storage/'.$p->foto) }}" height="50" alt="Foto do produto">
                                @endif
                            </td>
                            <td class="text-end">
                                <div class="btn-group">
                                    <a href="{{ route('produtos.edit', $p->id) }}" class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <a href="{{ route('produtos.show', $p->id) }}" class="btn btn-sm btn-outline-info">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <form method="POST" action="{{ route('produtos.destroy', $p->id) }}" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger" 
                                                onclick="return confirm('Tem certeza que deseja excluir este produto?')">
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