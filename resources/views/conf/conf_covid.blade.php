@include('components.head')

<body>
<header>
    @include('layouts.nav')
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
            <h2>COVID-19: Implicações em Crianças e Jovens</h2>
            <img src="img/covid.jpg" alt="COVID-19" width="500" height="300">
            <p><br>O Rotary Club Porto Aliados está a organizar palestra virtual "Implicações da Covid-19 na Saúde das
                Crianças e Jovens", na qual participarão o Prof. Dr. Carlos Neto, catedrático da Faculdade de
                Motricidade Humana da Universidade de Lisboa e Alexandre Homem Cristo, colunista, politólogo e autor do
                estudo "Escolas para o Século XXI". <br><br> O encontro acontecerá na próxima sexta-feira, dia 15 de
                Janeiro,
                pelas 19h. O objetivo desta sessão é debatermos as consequências da pandemia na saúde física e mental
                das crianças e jovens, neste mês da Educação Básica e Alfabetização.<br><br>
                Contamos com a vossa participação!</p>
        </div>
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fas fa-calendar-alt"></i></span>
            </div>
            &nbsp 15 de Janeiro de 2021, às 19:00
        </div>

        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fas fa-map-marker-alt"></i></span>
            </div>
            &nbsp Online, via Zoom: https://zoom.us/j/95471843563
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
