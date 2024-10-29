<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <h1>Registro</h1>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <label for="name">Nome:</label>
        <input type="text" name="name" required>
        
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        
        <label for="password">Senha:</label>
        <input type="password" name="password" required>
        
        <label for="password_confirmation">Confirmar Senha:</label>
        <input type="password" name="password_confirmation" required>
        
        <button type="submit">Registrar</button>
    </form>
    <p>Já tem uma conta? <a href="{{ route('login') }}">Entrar</a></p>
</body>
</html>
