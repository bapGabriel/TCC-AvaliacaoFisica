<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <!-- Header -->
    <header class="bg-dark text-white py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <h1 class="h4">Projeto TCC</h1>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger btn-sm">Sair</button>
            </form>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container py-5">
        <div class="text-center mb-4">
            <h2 class="h3">Bem-vindo, {{ Auth::user()->name }}!</h2>
        </div>

        <!-- Gerenciamento de Alunos -->
        <div class="card shadow mb-4">
            <div class="card-header bg-primary text-white">
                <h3 class="h5 mb-0">Gerenciamento de Alunos</h3>
            </div>
            <div class="card-body">
            <a href="{{ route('students.create') }}" class="btn btn-success mb-3">Adicionar Novo Aluno</a>
            <h4 class="h6 text-secondary mb-3">Alunos Cadastrados</h4>
                <ul class="list-group">
                    @foreach ($students as $student)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span>{{ $student->name }} - {{ $student->age }} anos</span>
                            <div>
                                <a href="{{ route('tests.create', $student->id) }}" class="btn btn-sm btn-outline-primary me-2">Adicionar Teste</a>
                                <a href="{{ route('students.show', ['student' => $student->id]) }}" class="btn btn-sm btn-outline-secondary">Ver Desempenho</a>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p class="mb-0">&copy; 2024 Projeto TCC. Todos os direitos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
