@extends('layout')

@section('principal')
<div class="container-fluid py-4">
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="h3 mb-0 text-gray-800">Detalhes do Produto</h1>
            <p class="text-muted">Visualize os dados do produto</p>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Informações do Produto</h6>
                </div>
                <div class="card-body">
                    <form method="post" action="/produtos/{{ $produto->id }}" enctype="multipart/form-data">
                        @csrf
                        @method('DELETE')
                        
                        <div class="row">
                            <div class="col-md-4 text-center mb-4">
                                @if ($produto->foto)
                                    <img src="{{ asset('storage/'.$produto->foto) }}" class="img-fluid rounded" style="max-height: 300px; width: auto;">
                                @else
                                    <div class="bg-light rounded p-5 text-center">
                                        <i class="bi bi-box-seam" style="font-size: 8rem;"></i>
                                        <p class="mt-2 text-muted">Sem imagem</p>
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <label for="nome" class="form-label">Nome:</label>
                                    <input type="text" id="nome" name="nome" value="{{ $produto->nome }}" class="form-control" disabled>
                                </div>
                            
                                <div class="mb-3">
                                    <label for="descricao" class="form-label">Descrição:</label>
                                    <textarea id="descricao" name="descricao" class="form-control" rows="3" disabled>{{ $produto->descricao }}</textarea>
                                </div>
                            
                                <div class="mb-3">
                                    <label for="preco" class="form-label">Preço:</label>
                                    <input type="text" id="preco" name="preco" value="R$ {{ number_format($produto->preco, 2, ',', '.') }}" class="form-control" disabled>
                                </div>

                                <div class="mb-3">
                                    <label for="estoque" class="form-label">Estoque:</label>
                                    <input type="number" id="estoque" name="estoque" value="{{ $produto->estoque }}" class="form-control" disabled>
                                </div>

                                <div class="mb-3">
                                    <label for="categoria_id" class="form-label">Categoria:</label>
                                    <select id="categoria_id" name="categoria_id" class="form-select" disabled>
                                        @foreach ($categorias as $c)
                                            <option value="{{ $c->id }}" {{ $produto->categoria_id == $c->id ? "selected" : "" }} >
                                                {{ $c->nome }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este produto?')">
                                <i class="bi bi-trash"></i> Excluir
                            </button>
                            <a href="/produtos" class="btn btn-secondary">
                                <i class="bi bi-arrow-left"></i> Voltar
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection