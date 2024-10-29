<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistema de Testes Físicos')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <nav>
        <a href="{{ route('students.index') }}">Alunos</a>
        <a href="{{ route('login') }}">Login</a>
    </nav>
    
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
