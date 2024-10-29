<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desempenho do Aluno: {{ $student->name }}</title>
</head>
<body>
    <h1>Desempenho do Aluno: {{ $student->name }}</h1>

    <!-- Armazena o studentId -->
    <div id="student-data" data-student-id="{{ $student->id }}"></div>

    <!-- Seção de Geração de Gráfico -->
    <div>
        <label for="exercicio">Selecione o exercício:</label>
        <select id="exercicio" name="exercicio">
            <option value="flexibilidade">Flexibilidade</option>
            <option value="abdominais">Abdominais</option>
            <option value="corrida">Corrida de 6 Minutos</option>
        </select>
        <button onclick="gerarGrafico()">Gerar Gráfico</button>
    </div>

    <!-- Exibição do Gráfico -->
    <div id="grafico-container" style="margin-top: 20px;">
        <h2>Gráfico de Desempenho</h2>
        <img id="grafico" src="" alt="Gráfico de Performance" style="display: none; width: 600px; height: auto;">
    </div>

    <!-- Script para Gerar o Gráfico -->
    <script>
        function gerarGrafico() {
            const studentId = document.getElementById('student-data').dataset.studentId;
            const exercicio = document.getElementById('exercicio').value;

            const url = `/generate-chart/${studentId}/${exercicio}`;

            fetch(url)
                .then(response => response.json())
                .then(data => {
                    if (data.imagem) {
                        const graficoImg = document.getElementById('grafico');
                        graficoImg.src = data.imagem;
                        graficoImg.style.display = 'block';
                    } else {
                        alert('Erro ao gerar o gráfico: ' + data.mensagem);
                    }
                })
                .catch(error => {
                    console.error('Erro ao solicitar gráfico:', error);
                    alert('Erro ao gerar gráfico. Consulte o console para mais detalhes.');
                });
        }
    </script>
</body>
</html>
