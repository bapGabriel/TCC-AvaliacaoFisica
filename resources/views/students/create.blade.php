<!DOCTYPE html> 
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Aluno - Projeto TCC</title>

    <!-- Google Fonts - Lato -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Estilo do projeto -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-secondary-color">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary-color border-bottom" id="navbar">
        <div class="container py-3 d-flex justify-content-between align-items-center">
            <a href="/" class="navbar-brand primary-color d-flex align-items-center">
                <img src="{{ asset('img/tcc-icon.png') }}" alt="TCC" style="height: 40px;">
                <span class="ms-2">TCC</span>
            </a>
            <a href="{{ route('dashboard') }}" class="btn btn-sm btn-outline-dark">Voltar</a>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container py-5">
        <div class="card shadow-sm border-0 mx-auto" style="max-width: 600px;">
            <div class="card-header bg-dark text-white">
                <h2 class="h5 mb-0">Adicionar Aluno</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('students.store') }}" method="POST">
                    @csrf
                    <!-- Nome -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" name="name" id="name" class="form-control" required placeholder="Digite o nome do aluno">
                    </div>

                    <!-- Gênero -->
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gênero</label>
                        <select name="gender" id="gender" class="form-select" required>
                            <option value="M">Masculino</option>
                            <option value="F">Feminino</option>
                        </select>
                    </div>

                    <!-- Data de Nascimento -->
                    <div class="mb-3">
                        <label for="birth_date" class="form-label">Data de Nascimento</label>
                        <input type="date" name="birth_date" id="birth_date" class="form-control" required>
                    </div>

                    <!-- Botão de Enviar -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-dark">Adicionar Aluno</button>
                    </div>
                </form>
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
