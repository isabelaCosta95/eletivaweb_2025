<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistema de Gerenciamento de transportadora</title>
  <!-- Bootstrap 5 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body { 
      background: #f8f9fa; 
      min-height: 100vh;
    }
    .sidebar {
      min-height: 100vh;
      background: #212529;
      color: #fff;
      padding-top: 1rem;
      position: fixed;
      width: 250px;
    }
    .sidebar .nav-link {
      color: #adb5bd;
      border-radius: 0.375rem;
      margin: 0.2rem 1rem;
      transition: all 0.2s;
    }
    .sidebar .nav-link:hover, .sidebar .nav-link.active {
      background: #0d6efd;
      color: #fff;
    }
    .sidebar .nav-link i {
      margin-right: 0.75rem;
    }
    .sidebar .sidebar-header {
      font-size: 1.3rem;
      font-weight: bold;
      margin-bottom: 2rem;
      text-align: center;
      padding: 1rem;
      border-bottom: 1px solid rgba(255,255,255,0.1);
    }
    .main-content {
      margin-left: 250px;
      padding: 2rem;
    }
    .card {
      border: none;
      box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
    }
    .card-header {
      background-color: #fff;
      border-bottom: 1px solid #e3e6f0;
    }
    @media (max-width: 768px) {
      .sidebar {
        width: 100%;
        position: relative;
        min-height: auto;
      }
      .main-content {
        margin-left: 0;
      }
    }
  </style>
</head>
<body>
  <div class="d-flex">
    <!-- Sidebar -->
    <nav class="sidebar">
      <div class="sidebar-header">
        <i class="bi bi-truck"></i> Transportadora
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
            <a class="nav-link {{ request()->is('cidades*') ? 'active' : '' }}" href="/cidades">
              <i class="bi bi-geo-alt"></i> Cidades
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('pecas*') ? 'active' : '' }}" href="/pecas">
              <i class="bi bi-tools"></i> Peças
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('produtos*') ? 'active' : '' }}" href="/produtos">
              <i class="bi bi-box"></i> Produtos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('tipo_manutencaos*') ? 'active' : '' }}" href="/tipo_manutencaos">
              <i class="bi bi-wrench"></i> Tipos de Manutenção
            </a>
          </li>
        @endif
        <li class="nav-item mt-4">
          <a class="nav-link {{ request()->is('editar*') ? 'active' : '' }}" href="/editar">
            <i class="bi bi-person-circle"></i> Meus Dados
          </a>
        </li>
        <li class="nav-item">
          <form method="POST" action="/logout">
            @csrf
            <button type="submit" class="nav-link border-0 bg-transparent text-start w-100">
              <i class="bi bi-box-arrow-right"></i> Sair
            </button>
          </form>
        </li>
      </ul>
    </nav>

    <!-- Main Content -->
    <main class="main-content">
      @yield('principal')
    </main>
  </div>

  <!-- Bootstrap JS Bundle (com Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>