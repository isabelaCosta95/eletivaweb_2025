<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistema de Gerenciamento de Transportadora</title>
  <!-- Bootstrap 5 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    .sidebar {
      min-height: 100vh;
      background-color: #343a40;
      padding-top: 20px;
    }
    .sidebar .nav-link {
      color: #fff;
      padding: 10px 20px;
      margin: 5px 0;
    }
    .sidebar .nav-link:hover {
      background-color: #495057;
    }
    .sidebar .nav-link.active {
      background-color: #0d6efd;
    }
    .sidebar .nav-link i {
      margin-right: 10px;
    }
    .main-content {
      padding: 20px;
    }
    .card {
      transition: transform 0.2s;
    }
    .card:hover {
      transform: translateY(-5px);
    }
  </style>
</head>
<body>

  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      <div class="col-md-3 col-lg-2 d-md-block sidebar collapse">
        <div class="position-sticky">
          <div class="text-center mb-4">
            <h4 class="text-white">Menu Principal</h4>
          </div>
          <ul class="nav flex-column">
            @if (Auth::user()->role == "ADM")
              <li class="nav-item">
                <a class="nav-link {{ request()->is('home-adm') ? 'active' : '' }}" href="/home-adm">
                  <i class="bi bi-speedometer2"></i> Dashboard
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('cidades*') ? 'active' : '' }}" href="/cidades">
                  <i class="bi bi-geo-alt"></i> Cidades
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('plano_contas*') ? 'active' : '' }}" href="/plano_contas">
                  <i class="bi bi-journal-text"></i> Plano de Contas
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('cargos*') ? 'active' : '' }}" href="/cargos">
                  <i class="bi bi-person-badge"></i> Cargos
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('funcionarios*') ? 'active' : '' }}" href="/funcionarios">
                  <i class="bi bi-people"></i> Funcionários
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('veiculos*') ? 'active' : '' }}" href="/veiculos">
                  <i class="bi bi-truck"></i> Veículos
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('seguradoras*') ? 'active' : '' }}" href="/seguradoras">
                  <i class="bi bi-shield"></i> Seguradoras
                </a>
              </li>
            @endif

            @if (Auth::user()->role == "CLI")
              <li class="nav-item">
                <a class="nav-link {{ request()->is('home-cli') ? 'active' : '' }}" href="/home-cli">
                  <i class="bi bi-speedometer2"></i> Dashboard
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('clientes*') ? 'active' : '' }}" href="/clientes">
                  <i class="bi bi-person"></i> Clientes
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('categorias*') ? 'active' : '' }}" href="/categorias">
                  <i class="bi bi-tags"></i> Categorias
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('produtos*') ? 'active' : '' }}" href="/produtos">
                  <i class="bi bi-box"></i> Produtos
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('tipo_manutencaos*') ? 'active' : '' }}" href="/tipo_manutencaos">
                  <i class="bi bi-tools"></i> Tipos de Manutenção
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('pecas*') ? 'active' : '' }}" href="/pecas">
                  <i class="bi bi-gear"></i> Peças
                </a>
              </li>
            @endif

            <li class="nav-item">
              <a class="nav-link {{ request()->is('editar') ? 'active' : '' }}" href="/editar">
                <i class="bi bi-person-circle"></i> Meus Dados
              </a>
            </li>
            <li class="nav-item">
              <form method="POST" action="/logout" class="d-inline">
                @csrf
                <button type="submit" class="nav-link border-0 bg-transparent text-white w-100 text-start">
                  <i class="bi bi-box-arrow-right"></i> Sair
                </button>
              </form>
            </li>
          </ul>
        </div>
      </div>

      <!-- Main content -->
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
        @if(session('sucesso'))
          <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            {{ session('sucesso') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        @if(session('erro'))
          <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
            {{ session('erro') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        @yield('principal')
      </main>
    </div>
  </div>

  <!-- Bootstrap JS Bundle (com Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>