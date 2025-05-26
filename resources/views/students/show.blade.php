<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desempenho do Aluno: {{ $student->name }}</title>

    <!-- Google Fonts - Lato -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- CSS do projeto -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<meta name="csrf-token" content="{{ csrf_token() }}">
<body class="d-flex flex-column min-vh-100 bg-light">

   <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary-color border-bottom" id="navbar">
        <div class="container py-3 d-flex justify-content-between align-items-center">
            <a href="{{ route('home') }}" class="navbar-brand primary-color d-flex align-items-center">
                <img src="{{ asset('img/tcc-icon.png') }}" alt="TCC" style="height: 40px;">
                <span class="ms-2">TCC</span>
            </a>
            <div>
                <a href="{{ route('dashboard') }}" class="btn btn-sm btn-outline-dark me-2">Voltar</a>
                <button onclick="enviarGraficosParaPDF()" id="export-pdf" class="btn btn-sm btn-warning">Gerar PDF</button>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container my-5">
        <h2 class="text-center mb-4 primary-color">Desempenho do Aluno: <strong>{{ $student->name }}</strong></h2>
        <h5 class="text-center mb-3 secondary-color">Massa Corporal (kg): <strong>{{ $weight ?? 'Não disponível' }}</strong></h5>
        <h5 class="text-center mb-3 secondary-color">Estatura (mts): <strong>{{ $height ?? 'Não disponível' }}</strong></h5>
        <h5 class="text-center mb-4 secondary-color">IMC: 
            <strong class="primary-color">
                {{ number_format($weight / (pow($height / 100, 2)), 2) }}
            </strong>
        </h5>

        <!-- Tabela de Resultados -->
        <section class="mb-5">
            <h4 class="primary-color">Resultados</h4>
            <table class="table table-striped table-hover">
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
                                <td>{{ $resultado['resultado'] ?? 'Não disponível' }}</td>
                                <td class="{{ $resultado['classificacao']['classificacao_cor'] }}">
                                    {{ $resultado['classificacao']['classificacao'] }}
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
        </section>

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
                            { label: 'Bom', data: bomData, borderColor: 'green', fill: false, tension: 0.4 },
                            { label: 'Muito Bom', data: muitoBomData, borderColor: 'lightblue', fill: false, tension: 0.4 },
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
    // Obtenha os dados do aluno e resultados como strings JSON diretamente
    const student = JSON.parse(`{!! json_encode(['name' => $student->name, 'weight' => $weight ?? null, 'height' => $height ?? null]) !!}`);
    const resultados = JSON.parse(`{!! json_encode($resultados ?? []) !!}`);

    fetch('/generate-pdf', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({ student, resultados }) // Envia os dados para o backend
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Erro ao gerar PDF');
        }
        return response.blob();
    })
    .then(blob => {
        const url = window.URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.style.display = 'none';
        a.href = url;
        a.download = 'desempenho-aluno.pdf';
        document.body.appendChild(a);
        a.click();
        window.URL.revokeObjectURL(url);
    })
    .catch(error => {
        console.error('Erro:', error);
    });
}

    </script>
</body>
</html>