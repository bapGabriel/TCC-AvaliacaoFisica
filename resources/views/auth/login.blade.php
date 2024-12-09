<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <!-- Header -->
    <header class="bg-primary text-white py-3 text-center">
        <h1>Projeto TCC</h1>
    </header>

    <!-- Login Form -->
    <main class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h2 class="text-center mb-4">Login</h2>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Senha</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary w-100">Entrar</button>
                            </div>
                        </form>
                        <p class="text-center mt-3">Não tem uma conta? <a href="{{ route('register') }}" class="text-primary">Registre-se</a></p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Projeto TCC. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
