<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Projeto TCC</title>

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

    <!-- Navbar igual à landing -->
    <nav class="navbar navbar-expand-lg fixed-top bg-primary-color" id="navbar">
        <div class="container py-3">
            <a href="{{ route('home') }}" class="navbar-brand primary-color">
                <img src="{{ asset('img/tcc-icon.png') }}" alt="TCC">
                <span>TCC</span>
            </a>
        </div>
    </nav>

    <!-- Register Form -->
<main class="container py-5" style="margin-top: 100px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h2 class="text-center mb-4 primary-color">Registro</h2>

                    <!-- Exibir erros de validação -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Senha</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirmar Senha</label>
                            <input type="password" name="password_confirmation" class="form-control" required>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-dark w-100">Registrar</button>
                        </div>
                    </form>
                    <p class="text-center mt-3">Já tem uma conta? 
                        <a href="{{ route('login') }}" class="primary-color text-decoration-underline">Entrar</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</main>


    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p>&copy; 2024 Projeto TCC. Todos os direitos reservados.</p>
    </footer>

</body>
</html>
