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
            <a href="/" class="navbar-brand primary-color">
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
                        <a href="/" 
                        class="nav-link primary-color" 
                        aria-current="page">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="/projects" class="nav-link primary-color">Projetos</a>
                    </li>
                    <li class="nav-item">
                        <a href="/about" class="nav-link active primary-color">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a href="/contacts" class="nav-link primary-color">Contatos</a>
                    </li>
                </ul>
                <div class="d-flex gap-2">
                    <a href="/login" class="btn btn-outline-dark btn-sm">Login</a>
                    <a href="/register" class="btn btn-dark btn-sm">Registrar</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container pt-5">
    <hr class="mb-5">
    <h1 class="text-center mb-3 primary-color">Sobre o Projeto</h1>
    <p class=" mb-5 secondary-color fs-5 px-md-5">
    Este sistema foi criado com o objetivo de registrar, acompanhar e avaliar os desempenhos físicos de alunos de forma simples, moderna e acessível. A plataforma permite que professores e avaliadores registrem avaliações físicas com precisão, organizem os dados por aluno e ano, e acompanhem a evolução de cada estudante ao longo do tempo. <br><br>
    O projeto visa facilitar a rotina escolar no que diz respeito às atividades físicas e avaliações padronizadas, fornecendo um ambiente intuitivo e visualmente agradável. Além disso, promove a importância do acompanhamento físico e incentiva a prática de atividades de maneira contínua e monitorada.
    </p>


    <div class="col-12">
            <h2 class="title primary-color">Testes Aplicados</h2>
            <p class="subtitle secondary-color">
                Conheca os testes realizados
            </p>
        </div>

        <div class="row row-cols-1 row-cols-md-2 g-4">
            <!-- Teste: Sentar e Alcançar -->
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('img/teste-sentar-alcancar.png') }}" class="card-img-top" alt="Sentar e Alcançar">
                    <div class="card-body d-flex flex-column justify-content-end">
                        <h5 class="card-title">Teste de Sentar e Alcançar</h5>
                        <p class="card-text">O aluno, com os joelhos estendidos e os pés fixos, tenta alcançar a maior distância à frente com as mãos. A distância é registrada em centímetros.</p>
                        <a href="https://www.youtube.com/watch?v=cdugHSL6C_o" target="_blank" class="btn btn-outline-primary btn-sm">Ver Vídeo</a>
                    </div>
                </div>
            </div>

            <!-- Teste: Abdominais -->
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('img/teste-abdominais.png') }}" class="card-img-top" alt="Abdominais">
                    <div class="card-body d-flex flex-column justify-content-end">
                        <h5 class="card-title">Teste de Abdominais em 1 Minuto</h5>
                        <p class="card-text">O aluno realiza o maior número de abdominais corretos em 1 minuto. Avalia a resistência abdominal.</p>
                        <a href="https://www.youtube.com/watch?v=Y2ppstBWUfg" target="_blank" class="btn btn-outline-primary btn-sm">Ver Vídeo</a>
                    </div>
                </div>
            </div>

            <!-- Teste: Corrida 6 min -->
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('img/teste-corrida-6min.png') }}" class="card-img-top" alt="Corrida de 6 Min">
                    <div class="card-body d-flex flex-column justify-content-end">
                        <h5 class="card-title">Teste de Corrida/Caminhada de 6 Min</h5>
                        <p class="card-text">O aluno corre ou caminha pelo maior tempo possível durante 6 minutos. A distância percorrida é registrada em metros.</p>
                        <a href="https://www.youtube.com/watch?v=1YxMuyf6cVs" target="_blank" class="btn btn-outline-primary btn-sm">Ver Vídeo</a>
                    </div>
                </div>
            </div>

            <!-- Teste: Arremesso medicine ball -->
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('img/teste-arremesso.png') }}" class="card-img-top" alt="Arremesso medicine ball">
                    <div class="card-body d-flex flex-column justify-content-end">
                        <h5 class="card-title">Teste de Arremesso de Medicine Ball</h5>
                        <p class="card-text">O aluno lança uma bola de 2kg da posição sentada. Mede-se a distância do arremesso em centímetros.</p>
                        <a href="https://www.youtube.com/watch?v=MiIxu4vovzI" target="_blank" class="btn btn-outline-primary btn-sm">Ver Vídeo</a>
                    </div>
                </div>
            </div>

            <!-- Teste: Salto Horizontal -->
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('img/teste-salto.png') }}" class="card-img-top" alt="Salto Horizontal">
                    <div class="card-body d-flex flex-column justify-content-end">
                        <h5 class="card-title">Teste de Salto Horizontal</h5>
                        <p class="card-text">O aluno salta o mais longe que conseguir, com os dois pés, a partir de uma linha. Mede-se a distância em centímetros.</p>
                        <a href="https://www.youtube.com/watch?v=XhYAobKfh9M" target="_blank" class="btn btn-outline-primary btn-sm">Ver Vídeo</a>
                    </div>
                </div>
            </div>

            <!-- Teste: Quadrado 4x4 -->
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('img/teste-quadrado.png') }}" class="card-img-top" alt="Quadrado 4x4">
                    <div class="card-body d-flex flex-column justify-content-end">
                        <h5 class="card-title">Teste do Quadrado 4x4 Metros</h5>
                        <p class="card-text">O aluno corre dentro de um quadrado de 4x4 metros, tocando os cones indicados. Mede-se o tempo em segundos e centésimos.</p>
                        <a href="https://www.youtube.com/watch?v=UmtKjnxLJGo" target="_blank" class="btn btn-outline-primary btn-sm">Ver Vídeo</a>
                    </div>
                </div>
            </div>

            <!-- Teste: Corrida 20 metros -->
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('img/teste-corrida-20m.png') }}" class="card-img-top" alt="Corrida de 20m">
                    <div class="card-body d-flex flex-column justify-content-end">
                        <h5 class="card-title">Teste de Corrida de 20 Metros</h5>
                        <p class="card-text">Avalia a velocidade do aluno em uma corrida de 20 metros. O tempo é registrado com cronômetro.</p>
                        <a href="https://www.youtube.com/watch?v=G3BoIAaTX-U" target="_blank" class="btn btn-outline-primary btn-sm">Ver Vídeo</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p>&copy; 2024 Projeto TCC. Todos os direitos reservados.</p>
    </footer>

</body>
</html>
