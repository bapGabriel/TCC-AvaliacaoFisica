<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Dashboard</h1>
    <p>Bem-vindo, {{ Auth::user()->name }}!</p>

    <div style="margin-top: 20px;">
        <h2>Gerenciamento de Alunos</h2>
        
        <a href="{{ route('students.create') }}" style="display: inline-block; padding: 10px 20px; background-color: #28a745; color: white; text-decoration: none; border-radius: 5px;">
            Adicionar Novo Aluno
        </a>

        <h3 style="margin-top: 20px;">Alunos Cadastrados</h3>
        <ul>
            @foreach ($students as $student)
                <li>
                    {{ $student->name }} - {{ $student->age }} anos
                    <a href="{{ route('tests.create', $student->id) }}" style="margin-left: 10px; color: #007bff;">Adicionar Teste</a>
                    <a href="{{ route('students.show', ['student' => $student->id]) }}" style="margin-left: 10px; color: #007bff;">Ver Desempenho</a>
                </li>
            @endforeach
        </ul>
    </div>

    <form action="{{ route('logout') }}" method="POST" style="margin-top: 20px;">
        @csrf
        <button type="submit" style="padding: 10px 20px; background-color: #dc3545; color: white; border: none; border-radius: 5px;">Sair</button>
    </form>
</body>
</html>
