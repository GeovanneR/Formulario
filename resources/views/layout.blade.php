<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
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
            transition: background-color 0.3s ease, color 0.3s ease;
            color: #fff;
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
        .dark-mode {
            background-color: #343a40;
            color: #fff;
        }
        .dark-mode .navbar {
            background-color: #343a40;
        }
        .dark-mode .navbar-brand, .dark-mode .nav-link {
            color: #fff !important;
        }
        .dark-mode .btn-primary {
            background-color: #6c757d;
            border-color: #6c757d;
        }
        .dark-mode .btn-primary:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }
        .dark-mode .btn-primary:focus, .dark-mode .btn-primary.focus {
            box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
        }
        #dark-mode-toggle {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1000;
            background-color: #007bff;
            border-color: #007bff;
            color: #fff;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        #dark-mode-toggle:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }
        #dark-mode-toggle:focus, #dark-mode-toggle.focus {
            box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
        }
        #dark-mode-toggle .bi-moon {
            margin-right: 5px;
        }
        .dark-mode #dark-mode-toggle {
            background-color: #6c757d;
            border-color: #6c757d;
            color: #fff;
        }
        .dark-mode #dark-mode-toggle:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }
        .dark-mode #dark-mode-toggle:focus, .dark-mode #dark-mode-toggle.focus {
            box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
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
                        <a class="nav-link @yield('principal-active')" href="{{ route('principal') }}">Principal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('quem-somos-active')" href="{{ route('quem-somos') }}">Quem Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('contato-active')" href="{{ route('contato') }}">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        @yield('content')
    </div>

    <button class="btn btn-primary dark-mode" id="dark-mode-toggle">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon" viewBox="0 0 16 16">
            <path d="M11.033 2.612a.5.5 0 0 1 .478.09 5 5 0 0 0-7.111 6.536 5.001 5.001 0 0 1 7.11-6.537a.5.5 0 0 1-.477.09zm3.066 8.304a7 7 0 0 0-9.818 0 .5.5 0 0 1-.664-.747 8 8 0 0 1 11.194 0 .5.5 0 0 1-.665.747z"/>
        </svg>
        Modo Escuro
    </button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const darkModeToggle = document.getElementById('dark-mode-toggle');
        const body = document.body;

        darkModeToggle.addEventListener('click', () => {
            body.classList.toggle('dark-mode');
        });
    </script>
</body>
</html>
