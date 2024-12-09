<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desempenho do Aluno: {{ $student->name }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<meta name="csrf-token" content="{{ csrf_token() }}">
<body class="d-flex flex-column min-vh-100 bg-light">
    <!-- Header -->
    <header class="bg-dark text-white py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <h1 class="h5 mb-0">Desempenho do Aluno</h1>
            <button onclick="window.location.href='/dashboard'" class="btn btn-outline-light">Voltar ao Dashboard</button>
            <button onclick="enviarGraficosParaPDF()" id="export-pdf" class="btn btn-warning ms-2">Gerar PDF</button>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container my-5">
    <h2 class="text-center mb-4">Desempenho do Aluno: <strong class="text-primary">{{ $student->name }}</strong></h2>
    <p class="text-center text-muted">Acompanhe os resultados e veja como {{ $student->name }} está progredindo em diferentes métricas.</p>
    

    <!-- Gráficos -->
    <div id="graficos-container" class="row gy-4"></div>
</main>


    <!-- Footer -->
    <footer class="mt-auto bg-dark text-white py-3">
        <div class="container text-center">
            <small>&copy; 2024 Projeto TCC. Todos os direitos reservados.</small>
        </div>
    </footer>

    <script>
        function gerarGrafico() {
            const studentId = "{{ $student->id }}"; // Obtém o ID do aluno diretamente
            const url = `/api/performance/student/${studentId}/all`;

            const exercicioMapping = {
                'abdominals': 'abdominais',
                'flexibility': 'flexibilidade',
                'run_6min': 'corrida_6min',
                'medicine_ball': 'medicine_ball',
                'horizontal_jump': 'salto_horizontal',
                'square_run': 'corrida_no_quadrado',
                'run_20m': 'corrida_20_metros'
            };

            fetch(url)
                .then(response => {
                    if (!response.ok) {
                        throw new Error("Erro ao obter dados da API");
                    }
                    return response.json();
                })
                .then(data => {
                    if (!data || !data.percentis || !data.desempenho) {
                        console.error("Estrutura de dados inválida:", data);
                        return;
                    }

                    for (const [exercicioKey, apiExercicioKey] of Object.entries(exercicioMapping)) {
                        const percentisData = data.percentis[apiExercicioKey];
                        if (!percentisData) {
                            console.warn(`Percentis para ${apiExercicioKey} não encontrado.`);
                            continue;
                        }

                        const idadeLabels = percentisData.map(p => p.idade);
                        const fracoData = percentisData.map(p => p.percentil_fraco);
                        const razoavelData = percentisData.map(p => p.percentil_razoavel);
                        const bomData = percentisData.map(p => p.percentil_bom);
                        const muitoBomData = percentisData.map(p => p.percentil_muito_bom);
                        const excelenteData = percentisData.map(p => p.percentil_excelente);

                        const desempenhoAlunoData = data.desempenho.map(test => ({
                            x: parseFloat(test.age),
                            y: test[exercicioKey] || 0
                        }));

                        const datasets = [
                            { label: 'Fraco', data: fracoData, borderColor: 'red', fill: false, tension: 0.4 },
                            { label: 'Razoável', data: razoavelData, borderColor: 'orange', fill: false, tension: 0.4 },
                            { label: 'Bom', data: bomData, borderColor: 'yellow', fill: false, tension: 0.4 },
                            { label: 'Muito Bom', data: muitoBomData, borderColor: 'green', fill: false, tension: 0.4 },
                            { label: 'Excelente', data: excelenteData, borderColor: 'blue', fill: false, tension: 0.4 },
                            {
                                label: 'Desempenho do Aluno',
                                data: desempenhoAlunoData,
                                borderColor: 'purple',
                                backgroundColor: 'purple',
                                pointRadius: 5,
                                showLine: false
                            }
                        ];

                        const ctx = document.createElement('canvas');
                        ctx.className = "col-12 col-md-6";
                        document.getElementById('graficos-container').appendChild(ctx);

                        new Chart(ctx, {
                            type: 'line',
                            data: { labels: idadeLabels, datasets: datasets },
                            options: {
                                responsive: true,
                                plugins: {
                                    title: { display: true, text: `Desempenho - ${apiExercicioKey}` }
                                },
                                scales: {
                                    x: { title: { display: true, text: 'Idade (Anos)' } },
                                    y: { title: { display: true, text: 'Percentil' }, beginAtZero: true }
                                }
                            }
                        });
                    }
                })
                .catch(error => {
                    console.error('Erro ao solicitar gráfico:', error);
                });
        }

        gerarGrafico();

        function capturarGraficos() {
        const graficos = document.querySelectorAll('#graficos-container canvas');
        const imagensBase64 = [];

        graficos.forEach((grafico, index) => {
            const imagemBase64 = grafico.toDataURL('image/png');
            imagensBase64.push({ nome: `grafico-${index + 1}.png`, conteudo: imagemBase64 });
        });

        return imagensBase64;
    }

    function enviarGraficosParaPDF() {
        const graficos = capturarGraficos();

        fetch('/generate-pdf', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            },
            body: JSON.stringify({ graficos })
        })
        .then(response => response.blob())
        .then(blob => {
            const url = window.URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.style.display = 'none';
            a.href = url;
            a.download = 'graficos.pdf';
            document.body.appendChild(a);
            a.click();
            window.URL.revokeObjectURL(url);
        })
        .catch(error => {
            console.error('Erro ao gerar PDF:', error);
        });
    }
    </script>
</body>
</html>
