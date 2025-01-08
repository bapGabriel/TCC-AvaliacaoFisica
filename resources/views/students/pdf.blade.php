<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desempenho do Aluno</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Desempenho do Aluno</h2>
        <p><strong>Nome:</strong> {{ $student['name'] ?? 'Nome não disponível' }}</p>
        <p><strong>Peso:</strong> {{ $student['weight'] ?? 'Peso não disponível' }} kg</p>
        <p><strong>Altura:</strong> {{ $student['height'] ?? 'Altura não disponível' }} cm</p>

        <h3>Resultados</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Variável</th>
                    <th>Resultado</th>
                    <th>Classificação</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($resultados) && count($resultados) > 0)
                    @foreach ($resultados as $resultado)
                    <tr>
                        <td>{{ $resultado['variavel'] }}</td>
                        <td>{{ $resultado['resultado'] ?? 'N/A' }}</td>
                        <td class="{{ $resultado['classificacao']['classificacao_cor'] ?? '' }}">
                            {{ $resultado['classificacao']['classificacao'] ?? 'Não disponível' }}
                        </td>
                    </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="3" class="text-center">Nenhum resultado disponível.</td>
                    </tr>
                @endif

            </tbody>
        </table>
    </div>
</body>
</html>
