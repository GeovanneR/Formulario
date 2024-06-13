<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            color: #343a40;
            font-family: Arial, sans-serif;
        }
        .navbar {
            background-color: #495057; /* Cor de fundo da navbar */
        }
        .navbar-brand, .nav-link {
            color: #fff !important; /* Cor do texto */
        }
        .header-text {
            color: #343a40;
            font-weight: bold;
            text-align: center;
        }
        .container {
            max-width: 800px;
        }
        form {
            background-color: #fff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }
        .form-label {
            font-weight: bold;
            color: #343a40;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }
        .btn-primary:focus, .btn-primary.focus {
            box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
        }
        .list-group-item {
            background-color: #f8f9fa;
            border-color: rgba(0, 0, 0, 0.125);
        }
        footer {
            background-color: #495057;
            color: #fff;
            padding: 20px 0;
            text-align: center;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
                        <a class="nav-link" href="{{ route('quem-somos') }}">Quem Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('contato') }}">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="header-text">Contato</h1>
        <form action="{{ route('contato') }}" method="POST" class="p-4 border rounded bg-light shadow-sm">
            @csrf
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" required>
            </div>
            <div class="mb-3">
                <label for="endereco" class="form-label">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco" required>
            </div>
            <div class="mb-3">
                <label for="sexo" class="form-label">Sexo</label>
                <select class="form-select" id="sexo" name="sexo" required>
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                    <option value="outro">Outro</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        
        @isset($dados)
            <div class="mt-5">
                <h2>Dados enviados:</h2>
                <ul class="list-group">
                    <li class="list-group-item"><strong>Nome:</strong> {{ $dados['nome'] }}</li>
                    <li class="list-group-item"><strong>Telefone:</strong> {{ $dados['telefone'] }}</li>
                    <li class="list-group-item"><strong>Endereço:</strong> {{ $dados['endereco'] }}</li>
                    <li class="list-group-item"><strong>Sexo:</strong> {{ $dados['sexo'] }}</li>
                </ul>
            </div>
        @endisset
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
