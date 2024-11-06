<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desempenho do Aluno: {{ $student->name }}</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h1>Desempenho do Aluno: {{ $student->name }}</h1>

    <!-- Armazena o studentId -->
    <div id="student-data" data-student-id="{{ $student->id }}"></div>

    <!-- Seção de Seleção de Exercício e Geração de Gráfico -->
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
        <h2>Gráfico de Percentis por Idade</h2>
        <canvas id="grafico" style="display: none; width: 600px; height: auto;"></canvas>
    </div>

    <!-- Script para Gerar o Gráfico com Chart.js -->
    <script>
    function gerarGrafico() {
        const studentId = document.getElementById('student-data').dataset.studentId;
        const exercicio = document.getElementById('exercicio').value;

        const url = `http://127.0.0.1:8000/performance/percentis/${exercicio}`;

        fetch(url)
            .then(response => response.json())
            .then(data => {
                if (data.percentis) {
                    const percentisData = data.percentis;

                    // Extrai as idades e percentis para o gráfico
                    const idades = percentisData.map(item => item.idade);
                    const percentilFraco = percentisData.map(item => item.percentil_fraco);
                    const percentilRazoavel = percentisData.map(item => item.percentil_razoavel);
                    const percentilBom = percentisData.map(item => item.percentil_bom);
                    const percentilMuitoBom = percentisData.map(item => item.percentil_muito_bom);
                    const percentilExcelente = percentisData.map(item => item.percentil_excellente);

                    const ctx = document.getElementById('grafico').getContext('2d');
                    document.getElementById('grafico').style.display = 'block';

                    if (window.performanceChart) {
                        window.performanceChart.destroy();
                    }

                    window.performanceChart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: idades,
                            datasets: [
                                {
                                    label: 'Percentil Fraco',
                                    data: percentilFraco,
                                    borderColor: 'red',
                                    borderDash: [5, 5],
                                    fill: false
                                },
                                {
                                    label: 'Percentil Razoável',
                                    data: percentilRazoavel,
                                    borderColor: 'orange',
                                    borderDash: [5, 5],
                                    fill: false
                                },
                                {
                                    label: 'Percentil Bom',
                                    data: percentilBom,
                                    borderColor: 'green',
                                    borderDash: [5, 5],
                                    fill: false
                                },
                                {
                                    label: 'Percentil Muito Bom',
                                    data: percentilMuitoBom,
                                    borderColor: 'blue',
                                    borderDash: [5, 5],
                                    fill: false
                                },
                                {
                                    label: 'Percentil Excelente',
                                    data: percentilExcelente,
                                    borderColor: 'purple',
                                    borderDash: [5, 5],
                                    fill: false
                                }
                            ]
                        },
                        options: {
                            responsive: true,
                            title: {
                                display: true,
                                text: `Gráfico de Percentis para ${exercicio}`
                            },
                            scales: {
                                y: {
                                    beginAtZero: true
                                },
                                x: {
                                    title: {
                                        display: true,
                                        text: 'Idade'
                                    }
                                }
                            }
                        }
                    });
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
