<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/homepage.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Projeto LABPROG</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

    <!-- Custom styles for this template -->
    <link href="css/homepage.css" rel="stylesheet">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <td><img src="img/navbar_logo.png" alt="logo"></td>
            <a class="navbar-brand" href="#">Conferências - Ciência & Sociedade</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item active">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sobre Nós</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<main>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
            <h2 class="featurette-heading">Detalhes<p></p></h2>

            <p>Consulta abaixo toda a informação relativa à conferência selecionada:</p>
            <h2>Webinar de Desinfeção UV-C Zoom</h2>
            <img src="{{asset('img/webinar_desinf.jpg')}}" alt="covid" width="350" height="150">
            <p><br>O mundo vive novamente uma pandemia e os seus impactos são visíveis a nível económico, social e
                político na tomada de medidas extraordinárias para combater a SARS-CoV-2.<br><br>

                Os germes e agentes patogénicos estão presentes em todo o lado e vão aumentar. Segundo o cientista de
                radiação David Brenner, na conferência TED Talk em 2017: “Bactérias resistentes a medicamentos
                conhecidas como superbactérias mataram quase 700.000 pessoas no ano passado e, em 2050, esse número pode
                chegar a 10 milhões”.<br><br>

                Para conhecer mais sobre o tema, convidamos a assistir a Webinar sobre a desinfeção UV-C no dia 14 de
                janeiro pelas 11h na plataforma Zoom.<br><br>

                Abordaremos nesta Webinar vários aspetos:
                Como podemos prevenir e eliminar os germes e agentes patogénicos?
                Quais são as melhores soluções no mercado para a desinfeção?
                O quê a luz ultravioleta UV-C e quais os seus efeitos?
                O quê é Zenzoe e o porquê do ZenZoe?
                O orador da Webinar é o Engenheiro Alberto Vanzeller, membro do CPI e Director Geral da Aura Light
                Portugal, com mais de 20 anos no mercado da iluminação e um dos principais a nível internacional.
                Não perca esta oportunidade de conhecer mais sobre a desinfeção UV-C.<br><br>
            </p>
        </div>

        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fas fa-calendar-alt"></i></span>
            </div>
            &nbsp 14 de Janeiro de 2021, às 11h
        </div>

        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fas fa-map-marker-alt"></i></span>
            </div>
            &nbsp Online, via Zoom: https://zoom.us/j/59195189854
        </div>


    </div><!-- /.container -->


    <!-- FOOTER -->
    <footer class="container">
        <p class="float-end"><a href="#">Voltar ao Início</a></p>
        <p>&copy; André Nogueira & Flávio Silva - Projeto Laboratório Programação </p>
    </footer>
</main>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
