<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Projeto TCC</title>

    <!-- Google Fonts - Lato -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Estilo do projeto -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-secondary-color">

    <!-- Navbar com estilo da landing -->
    <nav class="navbar navbar-expand-lg bg-primary-color border-bottom" id="navbar">
        <div class="container py-3 d-flex justify-content-between align-items-center">
            <a href="{{ route('home') }}" class="navbar-brand primary-color d-flex align-items-center">
                <img src="{{ asset('img/tcc-icon.png') }}" alt="TCC" style="height: 40px;">
                <span class="ms-2">TCC</span>
            </a>
            <form action="{{ route('logout') }}" method="POST" class="m-0">
                @csrf
                <button type="submit" class="btn btn-sm btn-outline-danger">Sair</button>
            </form>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container py-5">
        <div class="text-center mb-4">
            <h2 class="primary-color">Bem-vindo, {{ Auth::user()->name }}!</h2>
        </div>

        <!-- Gerenciamento de Alunos -->
        <div class="card shadow-sm border-0 mb-4">
            <div class="card-header bg-dark text-white">
                <h3 class="h5 mb-0">Gerenciamento de Alunos</h3>
            </div>
            <div class="card-body">
                <a href="{{ route('students.create') }}" class="btn btn-dark mb-3">Adicionar Novo Aluno</a>
                <h4 class="h6 text-secondary mb-3">Alunos Cadastrados</h4>
                <ul class="list-group">
                    @forelse ($students as $student)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span>{{ $student->name }} - {{ $student->age }} anos</span>
                            <div>
                                <a href="{{ route('tests.create', $student->id) }}" class="btn btn-sm btn-outline-primary me-2">Adicionar Teste</a>
                                <a href="{{ route('students.show', ['student' => $student->id]) }}" class="btn btn-sm btn-outline-secondary">Ver Desempenho</a>
                            </div>
                        </li>
                    @empty
                        <li class="list-group-item text-center text-muted">Nenhum aluno cadastrado.</li>
                    @endforelse
                </ul>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p class="mb-0">&copy; 2024 Projeto TCC. Todos os direitos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
