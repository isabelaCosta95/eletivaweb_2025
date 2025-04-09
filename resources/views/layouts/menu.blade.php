<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Menu de Funcionalidades</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            transition: transform 0.2s ease;
        }
        .card:hover {
            transform: scale(1.02);
            box-shadow: 0 0 15px rgba(0,0,0,0.15);
        }
        .menu-title {
            font-weight: 600;
            margin-top: 30px;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="container">
    <h2 class="text-center menu-title">Menu de Funcionalidades</h2>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

        <div class="col">
            <a href="{{ route('funcionarios.index') }}" class="text-decoration-none text-dark">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="bi bi-person-fill-gear fs-1 text-primary"></i>
                        <h5 class="card-title mt-3">F_B01 - Gerenciar Funcionários</h5>
                    </div>
                </div>
            </a>
        </div>

        <div class="col">
            <a href="{{ route('clientes.index') }}" class="text-decoration-none text-dark">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="bi bi-people-fill fs-1 text-success"></i>
                        <h5 class="card-title mt-3">F_B02 - Gerenciar Clientes</h5>
                    </div>
                </div>
            </a>
        </div>

        <div class="col">
            <a href="{{ route('veiculos.index') }}" class="text-decoration-none text-dark">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="bi bi-truck-front-fill fs-1 text-danger"></i>
                        <h5 class="card-title mt-3">F_B03 - Gerenciar Veículos</h5>
                    </div>
                </div>
            </a>
        </div>

        <div class="col">
            <a href="{{ route('produtos.index') }}" class="text-decoration-none text-dark">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="bi bi-box-seam fs-1 text-warning"></i>
                        <h5 class="card-title mt-3">F_B04 - Gerenciar Produtos</h5>
                    </div>
                </div>
            </a>
        </div>

        <div class="col">
            <a href="{{ route('categorias.index') }}" class="text-decoration-none text-dark">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="bi bi-tags-fill fs-1 text-info"></i>
                        <h5 class="card-title mt-3">F_B05 - Gerenciar Categoria</h5>
                    </div>
                </div>
            </a>
        </div>

        <div class="col">
            <a href="{{ route('tipo_manutencaos.index') }}" class="text-decoration-none text-dark">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="bi bi-tools fs-1 text-secondary"></i>
                        <h5 class="card-title mt-3">F_B06 - Gerenciar Tipo de Manutenção</h5>
                    </div>
                </div>
            </a>
        </div>

        <div class="col">
            <a href="{{ route('planos_conta.index') }}" class="text-decoration-none text-dark">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="bi bi-journal-text fs-1 text-dark"></i>
                        <h5 class="card-title mt-3">F_B07 - Gerenciar Plano de Contas</h5>
                    </div>
                </div>
            </a>
        </div>

        <div class="col">
            <a href="{{ route('pecas.index') }}" class="text-decoration-none text-dark">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="bi bi-puzzle-fill fs-1 text-primary"></i>
                        <h5 class="card-title mt-3">F_B08 - Gerenciar Peças</h5>
                    </div>
                </div>
            </a>
        </div>

        <div class="col">
            <a href="{{ route('seguradoras.index') }}" class="text-decoration-none text-dark">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="bi bi-shield-lock-fill fs-1 text-danger"></i>
                        <h5 class="card-title mt-3">F_B09 - Gerenciar Seguradora</h5>
                    </div>
                </div>
            </a>
        </div>

        <div class="col">
            <a href="{{ route('cargos.index') }}" class="text-decoration-none text-dark">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="bi bi-person-badge-fill fs-1 text-success"></i>
                        <h5 class="card-title mt-3">F_B10 - Gerenciar Cargos</h5>
                    </div>
                </div>
            </a>
        </div>

        <div class="col">
            <a href="{{ route('cidades.index') }}" class="text-decoration-none text-dark">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="bi bi-geo-alt-fill fs-1 text-warning"></i>
                        <h5 class="card-title mt-3">F_B11 - Gerenciar Cidade</h5>
                    </div>
                </div>
            </a>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 