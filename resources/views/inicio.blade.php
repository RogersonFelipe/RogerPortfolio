@extends('layouts.main')

@section('content')
<section id="sobre">
    <div class="pt-5 backgroud-effect">
    </div>
    <div class="banner pb-3">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="resumo  d-flex flex-column">
                <div class="titulo">
                    <h1>Olá, eu sou o <span class="fw-bold nome">Rogerson Ramos</span></h1>
                    <p>Desenvolvedor Full-Stack | React | Angular | TS | Java | PHP | Javascript | Laravel</p>
                </div>
            </div>
            <div class="perfil">
                <div class="img-content">
                    <a href="https://www.linkedin.com/in/rogerson-ramos/">
                        <img class="rounded-circle w-100" src="{{ asset('assets/Img/Avatar.png') }}" alt="Perfil">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="detalhe py-3">
        <div class="container">
            <div class="position-relative d-flex text-center mb-5">
                <h2 class="w-100 text-back">Sobre Mim</h2>
                <p class="position-absolute text-front text-center w-100">
                    Um pouco sobre mim
                    <span class="separador mx-auto"></span>
                </p>
            </div>
            <div class="row justify-content-between">
                <div class="col-lg-8">
                    <h2 class="titulo-detalhe">Desenvolvedor Software</h2>
                    <p class="conteudo-detalhe">Sou Desenvolvedor de Software com experiência na criação de interfaces e soluções digitais para e-commerces B2B e B2C. Atuo no desenvolvimento frontend e backend utilizando tecnologias como React, Angular, TypeScript, Java, PHP, JavaScript e CSS, além de frameworks como Bootstrap e Laravel. Tenho um perfil colaborativo, analítico e orientado à experiência do usuário, sempre buscando unir design, tecnologia e resultados.</p>
                </div>
                <div class="col-lg-3 contato">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-transparent text-center">
                            <span>
                                Contato
                            </span>
                        </li>
                        <li class="list-group-item bg-transparent text-center">
                            <span>
                                Rogerson Ramos
                            </span>
                        </li>
                        <li class="list-group-item bg-transparent text-center">
                            <span>
                                rogersonfilipi@hotmail.com
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="habilidade">
    <div class="py-5">
        <div class="topo-skills py-2">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="titulo-skill">Minhas Habilidades</h2>
                    <div class="box">
                        <form name="search">
                            <input id="skill-search" type="text" class="input" name="txt" autocomplete="off">
                        </form>
                        <i class="bi bi-search"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="skills py-4">
            <div class="container">
                <div id="skills-cards" class="cards d-flex flex-wrap gap-4">
                    <div class="box">
                        <p>HTML5</p>
                        <img src="{{ asset('assets/linguagens/html.svg') }}" alt="">
                    </div>
                    <div class="box">
                        <p>CSS3</p>
                        <img src="{{ asset('assets/linguagens/css3.svg') }}" alt="" style="color: red;">
                    </div>
                    <div class="box">
                        <p>JavaScript</p>
                        <img src="{{ asset('assets/linguagens/javascript.svg') }}" alt="">
                    </div>
                    <div class="box">
                        <p>TypeScript</p>
                        <img src="{{ asset('assets/linguagens/typescript.svg') }}" alt="">
                    </div>
                    <div class="box">
                        <p>Bootstrap</p>
                        <img src="{{ asset('assets/linguagens/bootstrap.svg') }}" alt="">
                    </div>
                    <div class="box">
                        <p>PHP</p>
                        <img src="{{ asset('assets/linguagens/php.svg') }}" alt="">
                    </div>
                    <div class="box">
                        <p>Laravel</p>
                        <img src="{{ asset('assets/linguagens/laravel.svg') }}" alt="">
                    </div>
                    <div class="box">
                        <p>Tailwind CSS</p>
                        <img src="{{ asset('assets/linguagens/tailwind.svg') }}" alt="">
                    </div>
                    <div class="box">
                        <p>React.js</p>
                        <img src="{{ asset('assets/linguagens/react.svg') }}" alt="">
                    </div>
                    <div class="box">
                        <p>Angular</p>
                        <img src="{{ asset('assets/linguagens/angular.svg') }}" alt="">
                    </div>
                    <div class="box">
                        <p>PostgreSQL</p>
                        <img src="{{ asset('assets/linguagens/postgresql.svg') }}" alt="">
                    </div>
                    <div class="box">
                        <p>Java</p>
                        <img src="{{ asset('assets/linguagens/java.svg') }}" alt="">
                    </div>
                    <div class="box">
                        <p>Spring Boot</p>
                        <img src="{{ asset('assets/linguagens/spring.svg') }}" alt="">
                    </div>
                    <div class="box">
                        <p>Docker</p>
                        <img src="{{ asset('assets/linguagens/docker.svg') }}" alt="">
                    </div>
                    <div class="box">
                        <p>SQL</p>
                        <img src="{{ asset('assets/linguagens/sql.svg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="projetos">
    <div class="py-5">
        <div class="container">
            <div class="position-relative d-flex text-center mb-5">
                <h2 class="w-100 text-back">Projetos</h2>
                <p class="position-absolute text-front text-center w-100">
                    Meus Projetos
                    <span class="separador mx-auto"></span>
                </p>
            </div>
        </div>
        <div class="container mb-5">
            <h3 class="text-white">Projetos mais Recente</h3>
            <span class="separador sub"></span>
            <div class="row py-4 cards-projeto" id="cards-projeto">
            </div>
        </div>
        <div class="container">
            <h3 class="text-white">Todos os Projetos</h3>
            <span class="separador sub"></span>
            <div class="row py-4 cards-projeto" id="cards-projetoall">
            </div>
        </div>
    </div>
</section>
<section id="educacao">
    <div class="py-5">
        <div class="container">
            <div class="position-relative d-flex text-center mb-5">
                <h2 class="w-100 text-back">Educação</h2>
                <p class="position-absolute text-front text-center w-100">
                    Meus Estudos
                    <span class="separador mx-auto"></span>
                </p>
            </div>
        </div>
        <div class="container">
            <div class="edu-list">
                <div class="edu-item">
                    <div class="edu-icon">
                        <i class="bi bi-mortarboard-fill"></i>
                    </div>

                    <div class="edu-content">
                        <div class="edu-header">
                            <h3>ESUCRI</h3>
                            <span>Fevereiro 2023 – Atualmente</span>
                        </div>

                        <h4>Sistemas de Informação</h4>
                        <p>
                            Formação voltada ao desenvolvimento de software, abrangendo programação, análise de sistemas, 
                            banco de dados, redes de computadores e gestão de projetos, com atuação em empresas de tecnologia,
                            desenvolvimento de software, consultoria ou empreendedorismo na área de TI.
                        </p>
                    </div>
                </div>

                <div class="edu-item">
                    <div class="edu-icon">
                        <i class="bi bi-pc-display-horizontal"></i>
                    </div>

                    <div class="edu-content">
                        <div class="edu-header">
                            <h3>CEDUP Abílio Paulo</h3>
                            <span>Fevereiro 2017 – Dezembro 2019</span>
                        </div>

                        <h4>Técnico de Informática</h4>
                        <ul>
                            <li>Linguagens: C, Java, PHP</li>
                            <li>Web: HTML, CSS, JavaScript</li>
                            <li>Banco de Dados: MySQL</li>
                            <li>Hardware, Redes e Inglês Técnico</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="projectModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content bg-dark text-white">
                <div class="modal-header border-secondary">
                    <h5 class="modal-title" id="modalTitle"></h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body modal-card">
                    <div class="img align-content-center px-4">
                        <img id="modalImage" class="img-fluid rounded mb-3" alt="">
                    </div>
                    <div class="info">
                        <div class="d-flex gap-3 mb-4">
                            <span id="modalLanguage" class="badge bg-primary"></span>
                            <span id="modalCreate" class="badge bg-info text-dark"></span>
                            <span id="modalUpdated" class="badge bg-secondary"></span>
                        </div>
                        <div id="modalDescription" class="markdown-body"></div>
                    </div>
                </div>

                <div class="modal-footer border-secondary">
                    <a id="modalGithub" href="#" target="_blank" class="btn btn-outline-light">
                        Ver no GitHub
                    </a>
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
@endsection