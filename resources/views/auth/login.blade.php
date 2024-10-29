<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        
        <label for="password">Senha:</label>
        <input type="password" name="password" required>

        <button type="submit">Entrar</button>
    </form>
    <p>Não tem uma conta? <a href="{{ route('register') }}">Registre-se</a></p>
</body>
</html>
