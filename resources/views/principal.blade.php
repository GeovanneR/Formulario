<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            color: #343a40;
            font-family: Arial, sans-serif;
        }
        .navbar {
            background-color: #343a40;
        }
        .navbar-brand, .nav-link {
            color: #fff !important;
        }
        .header-text {
            color: #343a40;
            font-weight: bold;
            text-align: center;
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
            margin-bottom: 20px;
        }
        .content-section h2 {
            color: #007bff;
            font-weight: bold;
            margin-bottom: 10px;
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
                        <a class="nav-link active" aria-current="page" href="{{ route('principal') }}">Principal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('quem-somos') }}">Quem Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contato') }}">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="header-text">Bem-vindo à Página Principal</h1>
        <p style="text-align: center;">Geovanne Rodrigues de Paula</p>
    </div>

    <div class="container mt-5">
        <div class="row align-items-center">
            <div class="col-md-4">
                <img src="{{ asset('images/minha-imagem.jpg') }}" class="img-fluid rounded" alt="Minha Imagem">
            </div>
            <div class="col-md-8">
                <div class="content-section">
                    <h2>Sobre Mim</h2>
                    <p>Aluno do 3° ano do ensino médio, estudante da Etec da Zona Leste. Desde o início, os desafios foram imensos. O volume de conteúdo é enorme, e a exigência dos professores é alta. As madrugadas em claro estudando para as provas, os projetos que parecem intermináveis e a pressão constante para entregar trabalhos dentro dos prazos são parte da rotina.</p>
                    <p>Apesar das dificuldades, tenho aprendido muito. A cada obstáculo superado, sinto que estou um passo mais próximo de me tornar um desenvolvedor competente. Aprendi a programar em diversas linguagens, a criar bancos de dados eficientes e a desenvolver aplicativos funcionais. As competências técnicas adquiridas são valiosas, mas o que mais me orgulha é a resiliência que desenvolvi ao longo desse tempo.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row align-items-center">
            <div class="col-md-8 order-md-2">
                <div class="content-section">
                    <h2>Minha História</h2>
                    <p>Além disso, sou conhecido como o aluno mais bonito que essa escola já viu. Embora a beleza não ajude a resolver problemas de programação ou a entender algoritmos complexos, é um detalhe que me diferencia. Muitas vezes, as pessoas têm uma percepção errada de que a aparência facilita as coisas, mas no mundo do Desenvolvimento de Sistemas, o que conta mesmo é a habilidade e o conhecimento.</p>
                    <p>Ainda há um caminho a percorrer até a formatura, mas estou determinado a seguir em frente. Cada desafio vencido é uma prova de que estou no caminho certo. A Etec da Zona Leste, com todas as suas dificuldades, tem sido um lugar de crescimento e aprendizado contínuo. E quem sabe, um dia, além de ser lembrado pela beleza, serei lembrado também como um dos desenvolvedores de sistemas mais talentosos que essa escola já formou.</p>
                </div>
            </div>
            <div class="col-md-4 order-md-1">
                <img src="{{ asset('images/minha-imagem1.jpg') }}" class="img-fluid rounded" alt="Minha Imagem">
            </div>
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
