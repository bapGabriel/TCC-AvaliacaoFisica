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
                        <a href="/about" class="nav-link primary-color">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a href="/contacts" class="nav-link active primary-color">Contatos</a>
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
    <h1 class="text-center mb-3 primary-color">Entre em Contato</h1>
    <p class="text-center mb-5 secondary-color fs-5 px-md-5">
    Ficou com alguma dúvida, sugestão ou encontrou algum problema? Entre em contato conosco!
    </p>
    </div>

    <div class="container my-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form>
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nome" placeholder="Seu nome completo" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="email" placeholder="seuemail@exemplo.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="mensagem" class="form-label">Mensagem</label>
                        <textarea class="form-control" id="mensagem" rows="5" placeholder="Escreva sua mensagem aqui..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-dark">Enviar Mensagem</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Informações adicionais -->
    <div class="container my-5">
        <div class="row text-center">
            <div class="col-md-4">
                <i class="bi bi-envelope-fill fs-2 primary-color"></i>
                <p class="mt-2">contato@tcc-avaliacao.com</p>
            </div>
            <div class="col-md-4">
                <i class="bi bi-whatsapp fs-2 primary-color"></i>
                <p class="mt-2">(11) 99999-9999</p>
            </div>
            <div class="col-md-4">
                <i class="bi bi-instagram fs-2 primary-color"></i>
                <p class="mt-2">@tcc.avaliacao</p>
            </div>
        </div>
    </div>
  </script>
</body>
</html>