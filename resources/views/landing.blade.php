<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo ao Meu Projeto</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <!-- Header da Landing Page -->
    <header class="header bg-green-600 text-white text-center py-20">
        <h1 class="text-5xl font-bold">Bem-vindo ao Projeto TCC</h1>
        <p class="mt-4 text-lg">Plataforma para acompanhar e avaliar o desempenho dos alunos em atividades físicas.</p>
        <a href="/login" class="btn-primary mt-6 inline-block px-6 py-3 font-semibold rounded-full bg-orange-500 text-white hover:bg-orange-600 transition duration-300">
            Login
        </a>
        <a href="/register" class="btn-primary mt-6 inline-block px-6 py-3 font-semibold rounded-full bg-orange-500 text-white hover:bg-orange-600 transition duration-300">
            Registro
        </a>
    </header>

    <!-- Seção Sobre -->
    <section class="text-center py-16 px-4">
        <h2 class="text-3xl font-bold mb-4">Sobre o Projeto</h2>
        <p class="text-gray-700 max-w-xl mx-auto">Esta plataforma foi desenvolvida para permitir que professores e alunos monitorem o progresso em atividades físicas com métricas personalizadas e relatórios detalhados.</p>
    </section>

    <!-- Benefícios -->
    <section class="bg-gray-100 py-16 px-4">
        <h3 class="text-3xl font-bold text-center mb-4">Benefícios</h3>
        <ul class="max-w-lg mx-auto space-y-4 text-left">
            <li class="flex items-center">
                <span class="material-icons text-green-600 mr-2">check_circle</span> Facilidade no acompanhamento de desempenho
            </li>
            <li class="flex items-center">
                <span class="material-icons text-green-600 mr-2">check_circle</span> Relatórios detalhados por idade e gênero
            </li>
            <li class="flex items-center">
                <span class="material-icons text-green-600 mr-2">check_circle</span> Avaliações precisas e personalizadas
            </li>
        </ul>
    </section>

    <!-- Rodapé -->
    <footer class="text-center py-6 bg-gray-200 text-gray-600">
        <p>&copy; 2024 Projeto TCC. Todos os direitos reservados.</p>
        <div class="flex justify-center space-x-4 mt-2">
            <a href="#" class="text-blue-500 hover:text-blue-600">Contato</a>
            <a href="#" class="text-blue-500 hover:text-blue-600">Sobre</a>
        </div>
    </footer>
</body>
</html>
