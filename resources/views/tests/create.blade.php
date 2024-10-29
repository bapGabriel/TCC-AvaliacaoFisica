<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Teste para {{ $student->name }}</title>
</head>
<body>
    <h1>Adicionar Teste para {{ $student->name }}</h1>
    <form method="POST" action="{{ route('tests.store', $student->id) }}">
        @csrf
        <label for="height">Altura (cm):</label>
        <input type="number" step="0.1" name="height" required>

        <label for="weight">Peso (kg):</label>
        <input type="number" step="0.1" name="weight" required>

        <label for="flexibility">Flexibilidade (cm):</label>
        <input type="number" step="0.1" name="flexibility" required>

        <label for="abdominals">Abdominais (repetições):</label>
        <input type="number" name="abdominals" required>

        <label for="run_6min">Corrida de 6 min (metros):</label>
        <input type="number" name="run_6min" required>

        <label for="medicine_ball">Medicine Ball (cm):</label>
        <input type="number" step="0.1" name="medicine_ball" required>

        <label for="horizontal_jump">Salto Horizontal (cm):</label>
        <input type="number" step="0.1" name="horizontal_jump" required>

        <label for="square_run">Corrida no Quadrado (segundos):</label>
        <input type="number" step="0.01" name="square_run" required>

        <label for="run_20m">Corrida de 20m (segundos):</label>
        <input type="number" step="0.01" name="run_20m" required>

        <button type="submit">Adicionar Teste</button>
    </form>
</body>
</html>
