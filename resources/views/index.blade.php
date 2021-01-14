@include('components.head')
<body>
<header>
    <!DOCTYPE html>
    <link href="{{ asset('css/index/index.css') }}" rel="stylesheet">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <img id="img_logo" src="{{asset('img/navbar_logo.png')}}" alt="logo">
            <a class="navbar-brand">Conferências - Ciência & Sociedade</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item active">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/conf') }}" class="nav-link">Conferências</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/about') }}" class="nav-link">Sobre Nós</a>
                    </li>
                </ul>
                <div
                    class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
                    @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="#">
                                    <button type="button" class="btn btn-light">Área Pessoal</button>
                                </a>
                            @else
                                <a href="{{ route('login') }}" class="#">
                                    <button type="button" class="btn btn-light">Login</button>
                                </a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                       class="#">
                                        <button type="button" class="btn btn-light">Registar</button>
                                    </a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </nav>

</header>
<main>
    <style>
        h2 {
            text-align: center;
        }
    </style>

    <div class="container marketing">
        <div class="row">
            <h2 class="featurette-heading">Conferências Mais Populares na Plataforma<br><br>
                <p></p></h2>
            <div class="col-lg-4">
                <img src="{{asset('img/covid.jpg')}}" alt="covid" width="350" height="150"> </td>
                <h2><br>COVID-19: Implicações em Crianças e Jovens</h2>
                <p>O Rotary Club Porto Aliados está a organizar uma palestra virtual "Implicações da Covid-19 na Saúde
                    das
                    Crianças e Jovens", na qual participarão o Prof. Dr. Carlos Neto, catedrático da Faculdade de
                    Motricidade Humana da Universidade de Lisboa e Alexandre Homem Cristo, colunista, politólogo e autor
                    do estudo "Escolas para o Século XXI".</p>
                <p><a class="btn btn-secondary" href="/conf_covid" role="button">Detalhes &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <img src="{{asset('img/dpsc_2021.jpg')}}" alt="covid" width="350" height="150"> </td>
                <h2><br>DPSC: Digital Privacy and Security Conference</h2>
                <p>A Conferência de Privacidade e Segurança Digital (DPSC2021) foi publicada pela primeira vez em 2018
                    com o objetivo de divulgar as mais recentes pesquisas académicas sobre vários assuntos relacionados
                    à privacidade e segurança digital. Os objetivos da nossa missão vêm a crescer, assim como o sucesso
                    das edições desta conferência.</p>
                <p><a class="btn btn-secondary" href="/conf_dpsc" role="button">Detalhes &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <img src="{{asset('img/conversa_rap.jpg')}}" alt="covid" width="350" height="150"> </td>
                <h2><br>Conversas com História: Ricardo Araújo Pereira</h2>
                <p>A historiadora Raquel Varela recebe no dia 3 de junho, no âmbito do ciclo Conversas com História,
                    Ricardo Araújo Pereira. O humorista vai-nos ajudar a pensar o que é isto do humor, como e quando nos
                    começámos a rir na longa linha do tempo do género humano, e abordaremos a inevitável pergunta: «há
                    limites para o humor?»</p>
                <p><a class="btn btn-secondary" href="/conf_conversa" role="button">Detalhes &raquo;</a></p>
            </div>
        </div>
    </div>
</main>

<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

@include('components.footer')
</body>
