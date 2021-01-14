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
            <h2>Violência contra a Mulher em debate na Casa da Juventude</h2>
            <img src="{{asset('img/violencia_mulher.jpg')}}" alt="covid" width="350" height="150">
            <p><br>“O Flagelo da Violência contra a Mulher” é o mote para a iniciativa “Leituras Partilhadas”, promovida
                Associação Dínamo em conjunto com a Câmara Municipal de Sintra, que irá acontecer no dia 8 de janeiro,
                às 9h00, na Casa da Juventude.<br><br>

                A iniciativa “Leituras Partilhadas” pretende ser um encontro informal de leitura e troca de impressões e
                reflexões de excertos de textos que mais nos marcam. Os participantes podem levar para as sessões
                livros, poemas, manifestos, artigos, entre outros documentos, associados ao tema em debate.<br><br>

                A Associação Dínamo – Associação de Dinamização Sócio Cultural – é uma associação não-governamental
                juvenil sem fim lucrativos que nasceu em Sintra com a missão de promover e melhorar a participação
                juvenil na sociedade.<br><br>

                Composta por jovens entre os 15 e os 30 anos, a Associação visa empoderar os jovens, desenvolvendo para
                isso diversos projetos e atividades, como por exemplo a defesa dos Direitos Humanos. As suas iniciativas
                pretendem não só chamar a atenção dos jovens, mas também potenciar o crescimento destas ações no
                concelho de Sintra.<br><br>

                A Dínamo compreende que todas estas lutas são, também, compromisso dos jovens, por isso assume como
                prioridade a formação política e cívica dos mesmos, assim como a capacitação para a participação
                juvenil, apoio à mobilidade internacional, iniciativas de educação e mobilização por direitos sociais e
                reivindicações políticas, formação de youth workers e o apoio às associações de estudantes na sua ação –
                lutando por espaços reais e democráticos de decisão para os jovens.<br><br>

                A participação desta atividade carece de inscrição prévia através da <a href="http://www.dinamo.pt/">Associação
                    Dínamo</a>.<br><br>Site:

                <a href="https://cm-sintra.pt/atualidade/agenda/497-violencia-contra-a-mulher-em-debate-na-casa-da-juventude?date=2021-01-08-09-00">https://cm-sintra.pt/atualidade/agenda/497-violencia-contra-a-mulher-em-debate-na-casa-da-juventude?date=2021-01-08-09-00</a>

            </p>
        </div>

        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fas fa-calendar-alt"></i></span>
            </div>
            &nbsp 8 de Janeiro, às 9:00
        </div>

        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fas fa-map-marker-alt"></i></span>
            </div>
            &nbsp Casa da Juventude de Sintra
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
