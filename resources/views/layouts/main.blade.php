<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio</title>

    <!-- Estilo e js via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/github-markdown-css@5/github-markdown-dark.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
</head>

<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg fixed-top py-3">
        <div class="container">
            <a class="navbar-brand" href="#sobre">
                <h2>Portfólio</h2>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end px-4" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link fw-bold" aria-current="page" href="#sobre">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="#habilidade">Habilidades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="#projetos">Projetos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" aria-disabled="true" href="#educacao">Educação</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Conteudo -->
    @yield('content')

    <!-- Footer -->
    <footer class="footer-main">
        <div class="py-4">
            <div class="container">
                <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                    <li class="nav-item">
                        <a class="nav-link fw-bold" aria-current="page" href="#sobre">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="#habilidade">Habilidades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="#projetos">Projetos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" aria-disabled="true" href="#educacao">Educação</a>
                    </li>
                </ul>
                <div class="d-flex flex-wrap justify-content-between align-items-center">
                    <div class="col-md-4 d-flex align-items-center">
                        <p class="mb-3 me-2 mb-md-0 text-decoration-none lh-1">Rogerson Ramos &copy; 2025</p>
                    </div>
                    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                        <li class="ms-3 fs-2"><a href="https://github.com/RogersonFelipe"><i class="bi bi-github"></i></a></li>
                        <li class="ms-3 fs-2"><a href="https://www.linkedin.com/in/rogerson-ramos/"><i class="bi bi-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


    

</body>

</html>