<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo - Projeto TCC</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        :root {
            --primary-color: #007bff;
            --secondary-color: #ff5722;
            --background-light: #f8f9fa;
            --text-dark: #212529;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: var(--background-light);
            color: var(--text-dark);
        }
        .hero-section {
            background-color: var(--primary-color);
            color: white;
            padding: 60px 20px;
            text-align: center;
        }
        .hero-section h1 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .hero-section p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }
        .hero-section .btn {
            font-size: 1.2rem;
            padding: 10px 30px;
            border-radius: 5px;
            font-weight: bold;
        }
        .hero-section .btn-login {
            background-color: var(--secondary-color);
            color: white;
        }
        .hero-section .btn-login:hover {
            background-color: #e64a19;
        }
        .hero-section .btn-register {
            background-color: white;
            color: var(--primary-color);
            border: 2px solid white;
        }
        .hero-section .btn-register:hover {
            background-color: var(--background-light);
            color: var(--primary-color);
        }
        .section-info {
            text-align: center;
            padding: 50px 20px;
        }
        .section-info h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        .benefits {
            padding: 50px 20px;
            background-color: white;
        }
        .benefits h3 {
            font-size: 2rem;
            text-align: center;
            margin-bottom: 30px;
        }
        .benefits-list {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
        }
        .benefit-item {
            background-color: var(--background-light);
            padding: 20px;
            border-radius: 10px;
            flex: 1 1 300px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .benefit-item i {
            font-size: 2rem;
            color: var(--secondary-color);
            margin-bottom: 10px;
        }
        footer {
            text-align: center;
            padding: 20px;
            background-color: var(--background-light);
            font-size: 0.9rem;
            color: var(--text-dark);
        }
        footer a {
            color: var(--primary-color);
            text-decoration: none;
        }
        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <div class="hero-section">
        <h1>Bem-vindo ao Projeto TCC</h1>
        <p>Plataforma para acompanhar e avaliar o desempenho dos alunos em atividades físicas.</p>
        <a href="/login" class="btn btn-login">Login</a>
        <a href="/register" class="btn btn-register">Registro</a>
    </div>

    <!-- Sobre o Projeto -->
    <div class="section-info">
        <h2>Sobre o Projeto</h2>
        <p>Esta plataforma foi desenvolvida para permitir que professores e alunos monitorem o progresso em atividades físicas com métricas personalizadas e relatórios detalhados.</p>
    </div>

    <!-- Benefícios -->
    <div class="benefits">
        <h3>Benefícios</h3>
        <div class="benefits-list">
            <div class="benefit-item">
                <i class="fas fa-check-circle"></i>
                <p>Facilidade no acompanhamento de desempenho</p>
            </div>
            <div class="benefit-item">
                <i class="fas fa-chart-bar"></i>
                <p>Relatórios detalhados por idade e gênero</p>
            </div>
            <div class="benefit-item">
                <i class="fas fa-user-cog"></i>
                <p>Avaliações precisas e personalizadas</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Projeto TCC. Todos os direitos reservados. <a href="#">Contato</a> | <a href="#">Sobre</a></p>
    </footer>

    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
</body>
</html>
