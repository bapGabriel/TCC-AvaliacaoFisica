<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo - Projeto TCC</title>
    <link ler="shortcut icon" href="{{ asset('img/favicon.ico')}}" type="image/x-icon"/>
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
                        class="nav-link active primary-color" 
                        aria-current="page">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('projects') }}" class="nav-link primary-color">Projetos</a>
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

    <!--SLIDER -->
    <div class="container" id="slider-container">
        <div class="carousel slide" id="slider" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button 
                type="button"
                class="active" 
                data-bs-target="#slider" 
                data-bs-slide-to="0"
                aria-current="true"
                aria-label="Slide 1"
                ></button>
                <button 
                type="button"
                data-bs-target="#slider" 
                data-bs-slide-to="1"
                aria-label="Slide 2"
                ></button>
                <button 
                type="button"
                data-bs-target="#slider" 
                data-bs-slide-to="2"
                aria-label="Slide 3"
                ></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/banner-1.jpg')}}" alt="Imagem 1" class="d-block w-100">
                    <div class="carousel-caption">
                        <h5>Imagem Alunos</h5>
                        <a href="a" class="btn btn-dark">Ver Projetos</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/banner-2.jpg')}}" alt="Imagem 2" class="d-block w-100">
                    <div class="carousel-caption">
                        <h5>Imagem Alunos 2</h5>
                        <a href="a" class="btn btn-dark">Ver Projetos</a>
                    </div>
                </div>
                <div class="carousel-item ">
                    <img src="{{ asset('img/banner-3.jpg')}}" alt="Imagem 3" class="d-block w-100">
                    <div class="carousel-caption">
                        <h5>Imagem Alunos 3</h5>
                        <a href="a" class="btn btn-dark">Ver Projetos</a>
                    </div>
                </div>
            </div>
            <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#slider"
                data-bs-slide="prev"
            >
                <i class="bi bi-chevron-compact-left"></i>
                <span class="visually-hidden">Previous</span>
            </button>
            <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#slider"
                data-bs-slide="next"
            >
                <i class="bi bi-chevron-compact-right"></i>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- MINI BANNERS -->
        <div class="col-12 col-md-10 offset-md-1" id="mini-banners">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class = "card text-center">
                        <i class="bi bi-box primary-color"></i>
                        <div class="card-body">
                            <h5 class="card-title primary-color">Projetos completos</h5>
                            <p class="card-text secondary-color">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            </p>
                            <a href="#" class="btn btn-dark">Saber Mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class = "card text-center">
                        <i class="bi bi-layers primary-color"></i>
                        <div class="card-body">
                            <h5 class="card-title primary-color">Você participa também</h5>
                            <p class="card-text secondary-color">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            </p>
                            <a href="#" class="btn btn-dark">Saber Mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class = "card text-center">
                        <i class="bi bi-lightning-charge primary-color"></i>
                        <div class="card-body">
                            <h5 class="card-title primary-color">Adiantamento de Entregas</h5>
                            <p class="card-text secondary-color">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            </p>
                            <a href="#" class="btn btn-dark">Saber Mais</a>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <!-- DESTAQUES -->
    <div class="container" id="featured-container">
        <div class="col-12">
            <h2 class="title primary-color">Trabalhos em Destaque</h2>
            <p class="subtitle secondary-color">
                Conheca nossos projetos
            </p>
        </div>
        <div class="col-12" id="featured-images">
            <div class="row g-4">
                <div class="col-12 col-md-4">
                    <img src="img/project-1.jpg" alt="Projeto 1" class="img-fluid">
                    <div class="banner-content">
                        <p class="secondary-color">Categoria</p>
                        <h3>Nome do Projeto</h3>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <img src="img/project-1.jpg" alt="Projeto 2" class="img-fluid">
                    <div class="banner-content">
                        <p class="secondary-color">Categoria</p>
                        <h3>Nome do Projeto</h3>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <img src="img/project-1.jpg" alt="Projeto 3" class="img-fluid">
                    <div class="banner-content">
                        <p class="secondary-color">Categoria</p>
                        <h3>Nome do Projeto</h3>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <img src="img/project-1.jpg" alt="Projeto 4" class="img-fluid">
                    <div class="banner-content">
                        <p class="secondary-color">Categoria</p>
                        <h3>Nome do Projeto</h3>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <img src="img/project-1.jpg" alt="Projeto 5" class="img-fluid">
                    <div class="banner-content">
                        <p class="secondary-color">Categoria</p>
                        <h3>Nome do Projeto</h3>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <img src="img/project-1.jpg" alt="Projeto 6" class="img-fluid">
                    <div class="banner-content">
                        <p class="secondary-color">Categoria</p>
                        <h3>Nome do Projeto</h3>
                    </div>
                </div>
        </div>
    <!-- Hero Section
    <div class="hero-section">
        <h1>Bem-vindo ao Projeto TCC</h1>
        <p>Plataforma para acompanhar e avaliar o desempenho dos alunos em atividades físicas.</p>
        <a href="/login" class="btn btn-login">Login</a>
        <a href="/register" class="btn btn-register">Registro</a>
    </div>

     Sobre o Projeto 
    <div class="section-info">
        <h2>Sobre o Projeto</h2>
        <p>Esta plataforma foi desenvolvida para permitir que professores e alunos monitorem o progresso em atividades físicas com métricas personalizadas e relatórios detalhados.</p>
    </div>

     Benefícios 
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

     Footer 
    <footer>
        <p>&copy; 2024 Projeto TCC. Todos os direitos reservados. <a href="#">Contato</a> | <a href="#">Sobre</a></p>
    </footer>

     Font Awesome 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script> -->
</body>
</html>
