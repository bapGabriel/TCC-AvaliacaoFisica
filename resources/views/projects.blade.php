<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo - Projeto TCC</title>
    <link ler="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>
    <!-- Google Fonts - Lato -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    
    <!-- CSS Booststrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- CSS do projeto -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- JS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top bg-primary-color" id="navbar">
        <div class="container py-3">
            <a href="{{ route('home') }}" class="navbar-brand primary-color">
            <img src="{{ asset('img/tcc-icon.png') }}" alt="TCC">
            <span>TCC</span>
            </a>
            <button class="navbar-toggler" 
            type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#navbar-items" 
            aria-controls= "navbar-items" 
            aria-expanded="false" 
            aria-label="Toggle navigation"
            >
                <i class="bi bi-list"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbar-items">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" 
                        class="nav-link primary-color" 
                        aria-current="page">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('projects') }}" class="nav-link active primary-color">Projetos</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('about') }}" class="nav-link primary-color">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('contacts') }}" class="nav-link primary-color">Contatos</a>
                    </li>
                </ul>
                <div class="d-flex gap-2">
                    <a href="{{ route('login') }}" class="btn btn-outline-dark btn-sm">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-dark btn-sm">Registrar</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container pt-5">
    <hr class="mb-5">
    <h1 class="text-center mb-3 primary-color">Projetos e Trabalhos Desenvolvidos</h1>
    <p class=" mb-5 secondary-color fs-5 px-md-5">
    Conheça as iniciativas que fazem parte do nosso sistema e os próximos passos planejados para melhorar a experiência de professores e alunos.
    </p>
    </div>

    <div class="container my-4">
        <div class="row mb-5">
            <div class="col-md-12">
                <h4 class="primary-color">Objetivo do Sistema</h4>
                <p class="secondary-color fs-5">
                    O sistema foi criado com a finalidade de registrar, acompanhar e avaliar os desempenhos físicos dos alunos em diferentes testes. Através de uma interface simples e moderna, buscamos facilitar o acompanhamento da evolução dos estudantes ao longo do tempo, promovendo a prática da educação física baseada em dados reais.
                </p>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-12">
                <h4 class="primary-color">Funcionalidades Disponíveis</h4>
                <ul class="fs-5 secondary-color">
                    <li>Cadastro de alunos e turmas</li>
                    <li>Registro detalhado dos testes físicos realizados</li>
                    <li>Gráficos comparativos por aluno e por turma</li>
                    <li>Visualização da evolução ao longo do tempo</li>
                    <li>Acesso restrito por perfil (professor e aluno)</li>
                </ul>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-12">
                <h4 class="primary-color">Trabalhos Futuros</h4>
                <ul class="fs-5 secondary-color">
                    <li>Geração de relatórios em PDF por turma ou por aluno</li>
                    <li>Exportação de dados para planilhas Excel</li>
                    <li>Aplicativo móvel para registro rápido de avaliações</li>
                    <li>Dashboard visual de desempenho por categoria</li>
                    <li>Inclusão de novos testes físicos e personalização das avaliações</li>
                </ul>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-12">
                <h4 class="primary-color">Sobre o Desenvolvimento</h4>
                <p class="secondary-color fs-5">
                    Este projeto foi idealizado e desenvolvido como parte do Trabalho de Conclusão de Curso do curso de Sistemas para Internet do Instituto Federal. A proposta é entregar uma solução real e prática para o ambiente escolar, contribuindo com a rotina de professores de Educação Física e seus alunos.
                </p>
            </div>
        </div>
    </div>
  </script>
</body>
</html>