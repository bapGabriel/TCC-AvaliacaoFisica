<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Teste para {{ $student->name }}</title>

    <!-- Google Fonts - Lato -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- CSS do projeto -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-secondary-color">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary-color border-bottom" id="navbar">
        <div class="container py-3 d-flex justify-content-between align-items-center">
            <a href="{{ route('home') }}" class="navbar-brand primary-color d-flex align-items-center">
                <img src="{{ asset('img/tcc-icon.png') }}" alt="TCC" style="height: 40px;">
                <span class="ms-2">TCC</span>
            </a>
            <a href="{{ route('dashboard') }}" class="btn btn-sm btn-outline-dark">Voltar</a>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container py-5">
        <div class="card shadow-sm border-0 mx-auto" style="max-width: 700px;">
            <div class="card-header bg-dark text-white text-center">
                <h2 class="h5 mb-0">Adicionar Teste para {{ $student->name }}</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('tests.store', $student->id) }}">
                    @csrf

                    <!-- Data do Teste -->
                    <div class="mb-3">
                        <label for="test_date" class="form-label">Data do Teste</label>
                        <input type="date" name="test_date" id="test_date" class="form-control" required>
                    </div>

                    <!-- Altura -->
                    <div class="mb-3">
                        <label for="height" class="form-label">Altura (cm)</label>
                        <input type="number" step="0.1" name="height" id="height" class="form-control" required>
                    </div>

                    <!-- Peso -->
                    <div class="mb-3">
                        <label for="weight" class="form-label">Peso (kg)</label>
                        <input type="number" step="0.1" name="weight" id="weight" class="form-control" required>
                    </div>

                    <!-- Flexibilidade -->
                    <div class="mb-3">
                        <label for="flexibility" class="form-label">Flexibilidade (cm)</label>
                        <input type="number" step="0.1" name="flexibility" id="flexibility" class="form-control" required>
                    </div>

                    <!-- Abdominais -->
                    <div class="mb-3">
                        <label for="abdominals" class="form-label">Abdominais (repetições)</label>
                        <input type="number" name="abdominals" id="abdominals" class="form-control" required>
                    </div>

                    <!-- Corrida de 6 Minutos -->
                    <div class="mb-3">
                        <label for="run_6min" class="form-label">Corrida de 6 Minutos (metros)</label>
                        <input type="number" name="run_6min" id="run_6min" class="form-control" required>
                    </div>

                    <!-- Medicine Ball -->
                    <div class="mb-3">
                        <label for="medicine_ball" class="form-label">Medicine Ball (cm)</label>
                        <input type="number" step="0.1" name="medicine_ball" id="medicine_ball" class="form-control" required>
                    </div>

                    <!-- Salto Horizontal -->
                    <div class="mb-3">
                        <label for="horizontal_jump" class="form-label">Salto Horizontal (cm)</label>
                        <input type="number" step="0.1" name="horizontal_jump" id="horizontal_jump" class="form-control" required>
                    </div>

                    <!-- Corrida no Quadrado -->
                    <div class="mb-3">
                        <label for="square_run" class="form-label">Corrida no Quadrado (segundos)</label>
                        <input type="number" step="0.01" name="square_run" id="square_run" class="form-control" required>
                    </div>

                    <!-- Corrida de 20 Metros -->
                    <div class="mb-3">
                        <label for="run_20m" class="form-label">Corrida de 20 Metros (segundos)</label>
                        <input type="number" step="0.01" name="run_20m" id="run_20m" class="form-control" required>
                    </div>

                    <!-- Botão de Enviar -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-dark">Adicionar Teste</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-auto">
        <p class="mb-0">&copy; 2024 Projeto TCC. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
