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
            <h2>DPSC: Digital Privacy and Security Conference 2021</h2>
            <img src="img/dpsc_2021.jpg" alt="COVID-19" width="200" height="200">
            <p><br>A Conferência de Privacidade e Segurança Digital (DPSC2021) foi publicada pela primeira vez em 2018
                com o objetivo de divulgar as mais recentes pesquisas académicas sobre vários assuntos relacionados à
                privacidade e segurança digital. Os objetivos da nossa missão vêm a crescer, assim como o sucesso das
                edições desta conferência.<br><br>

                Os trabalhos apresentados na conferência têm como objetivo publicar pesquisas de qualidade para o
                benefício da comunidade académica global. Acreditamos na importância da educação para a sociedade e na
                necessidade de facilitar o conhecimento em escala global.<br><br>

                À medida que a era digital amadurece, a segurança cibernética evolui e as vulnerabilidades de software
                diminuem, as pessoas, no entanto, como indivíduos, estão mais expostas hoje do que nunca. No contexto da
                privacidade e segurança digital, o invasor viola as defesas para aceder a dados e recursos
                confidenciais.<br><br>Site:

                <a href="http://privacyandsecurityconference.pt">http://privacyandsecurityconference.pt</a>
            </p>
        </div>
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fas fa-calendar-alt"></i></span>
            </div>
            &nbsp 20 e 21 de Janeiro de 2021
        </div>

        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fas fa-map-marker-alt"></i></span>
            </div>
            &nbsp Universidade Lusófona do Porto (ULP)
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
