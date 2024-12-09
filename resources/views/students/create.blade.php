<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Aluno</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <!-- Header -->
    <header class="bg-dark text-white py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <h1 class="h4">Projeto TCC</h1>
            <a href="{{ route('dashboard') }}" class="btn btn-outline-light btn-sm">Voltar</a>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container py-5">
        <div class="card shadow mx-auto" style="max-width: 600px;">
            <div class="card-header bg-primary text-white">
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
                        <button type="submit" class="btn btn-success">Adicionar Aluno</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p class="mb-0">&copy; 2024 Projeto TCC. Todos os direitos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
