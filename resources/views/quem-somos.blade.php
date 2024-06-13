<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quem Somos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: #343a40;
        }
        .navbar-brand, .nav-link {
            color: #fff !important;
        }
        .header-text {
            color: #343a40;
        }
        .content-section {
            background-color: #fff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .content-section img {
            border-radius: 10px;
        }
        .content-section h2 {
            color: #007bff;
        }
        .content-section p {
            color: #6c757d;
            font-size: 1.1em;
            line-height: 1.6;
        }
        footer {
            background-color: #343a40;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('principal') }}">Meu Projeto</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('principal') }}">Principal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('quem-somos') }}">Quem Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contato') }}">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="header-text">Quem Somos</h1>
        
        <!-- Carousel Section -->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/escola1.jpg') }}" class="d-block w-100 img-fluid" alt="Imagem da Escola 1">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/amigos.jpg') }}" class="d-block w-100 img-fluid" alt="Imagem de Amigos">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/curso-ds.jpg') }}" class="d-block w-100 img-fluid" alt="Imagem do Curso DS">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        
        <!-- Content Section -->
        <div class="content-section mt-5">
            <h2>Sobre a Escola</h2>
            <p>A Etec da Zona Leste é conhecida por sua excelência em ensino técnico. Com uma infraestrutura moderna e professores altamente qualificados, a escola oferece um ambiente propício para o desenvolvimento acadêmico e pessoal dos alunos.</p>
            <h2>Amigos e Parceiros</h2>
            <p>A amizade e a parceria entre os alunos são essenciais para superar os desafios do curso. Juntos, compartilhamos conhecimentos, enfrentamos dificuldades e celebramos nossas vitórias. A colaboração é a chave para o nosso sucesso.</p>
            <h2>O Curso de Desenvolvimento de Sistemas</h2>
            <p>O curso de Desenvolvimento de Sistemas é um dos mais exigentes da Etec. Envolve o aprendizado de diversas linguagens de programação, banco de dados, desenvolvimento web e mobile, além de práticas de gestão de projetos. Apesar das dificuldades, cada obstáculo superado nos aproxima de nos tornarmos desenvolvedores competentes e preparados para o mercado de trabalho.</p>
        </div>
    </div>
    @extends('layout')

@section('title', 'Principal')

@section('principal-active', 'active')

@section('content')

    <footer>
        <div class="container">
            <p>&copy; 2024 Meu Projeto. Todos os direitos reservados.</p>
            <p>Etec da Zona Leste - Desenvolvimento de Sistemas</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
