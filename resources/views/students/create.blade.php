<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Aluno</title>
</head>
<body>
    <h1>Adicionar Aluno</h1>
    <form action="{{ route('students.store') }}" method="POST">
    @csrf
    <label for="name">Nome:</label>
    <input type="text" name="name" required>

    <label for="gender">Gênero:</label>
    <select name="gender">
        <option value="M">Masculino</option>
        <option value="F">Feminino</option>
    </select>

    <label for="birth_date">Data de Nascimento:</label>
    <input type="date" name="birth_date" required> <!-- Adicionando campo birth_date -->

    <button type="submit">Adicionar Aluno</button>
</form>

</body>
</html>
