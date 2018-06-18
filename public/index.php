<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>You Turismo</title>
    <link rel="icon" href="assets/img/logo.png">

    <!-- Bootstrap -->
    <link href="assets/bootstrapv3/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/estilo.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <nav class="navbar navbar-fixed-top navbar-inverse navbar-transparent">
        <div class="container">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand">
            <span class="img-logo">
              You Turismo
            </span>
          </a>

                <!-- button toggle -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barra-navegacao">
          <span class="sr-only">alternar navegação</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

            </div>
            <!-- /navbar-header -->

            <!-- navbar -->
            <div class="collapse navbar-collapse" id="barra-navegacao">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#sobre">Sobre</a></li>
                    <li><a href="#planos">Planos de Viagens</a></li>
                    <li><a href="#contato">Contato</a></li>
                    <li class="divisor" rol="separator"></li>
                    <li><a href="cadastro.php">Cadastre-se</a></li>
                    <li><a href="login.php">Entrar</a></li>
                </ul>
            </div>

        </div>
        <!-- /container -->
    </nav>
    <!-- /nav -->

    <div class="capa">
        <div class="texto-capa">
            <h1>Saia da rotina venha viajar com a You Turismo. ;)</h1>
            <a href="login.php" class="btn btn-custom btn-roxo btn-lg">Agendar Viagem</a>
            <a href="#sobre" class="btn btn-custom btn-branco btn-lg">Como Funciona?</a>
        </div>
        <!-- /texto-capa -->
    </div>
    <!-- /capa -->

    <!-- conteudo servicos -->
    <section id="servicos">
        <div class="container">
            <div class="row">

                <!-- conteudo albuns -->
                <div class="col-md-6">
                    <div class="row albuns">
                        <div class="col-md-6">
                            <img src="assets/img/fernando.jpg" class="img-responsive">
                        </div>
                        <div class="col-md-6">
                            <img src="assets/img/paris.jpeg" class="img-responsive">
                        </div>
                    </div>

                    <div class="row albuns-baixo">
                        <div class="col-md-6">
                            <img src="assets/img/rio.jpg" class="img-responsive">
                        </div>
                        <div class="col-md-6">
                            <img src="assets/img/roma.jpg" class="img-responsive">
                        </div>
                    </div>
                </div>
                <!-- /col-md-6 albuns -->

                <!-- servicos detalhes -->
                <div class="col-md-6">
                    <h2>Sobre nós</h2>
                    <h3>Amamos o que fazemos!</h3>
                    <p>Viajamos para todos os lugares do mundo, desde de 2010 atendemos a mais de 2000 pessoas que tinha o sonho de conhecer novos lugares e novas culturas.</p>
                </div>
                <!-- /col-md-6 detalhes -->
            </div>
        </div>
    </section>

    <!-- recursos -->
    <section id="recursos">
        <div class="container">
            <div class="row">

            </div>
        </div>
    </section>


    <!-- rodapé -->
    <footer id="rodape">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <span class="img-logo">
                      Spotify
                    </span>
                </div>
                <div class="col-md-2">
                    <h4>Company</h4>
                    <ul class="nav">
                        <li><a href="#">Sobre</a></li>
                        <li><a href="#">Empregos</a></li>
                        <li><a href="#">Imprensa</a></li>
                        <li><a href="#">Novidades</a></li>
                    </ul>
                </div>
                
                <div class="col-md-2">
                    <h4>Comunidades</h4>
                    <ul class="nav">
                        <li><a href="#">Destinos</a></li>
                        <li><a href="#">Desenvolvedores</a></li>
                        <li><a href="#">Marcas</a></li>
                    </ul>
                </div>
                
                <div class="col-md-2">
                    <h4>Links úteis</h4>
                    <ul class="nav">
                        <li><a href="#">Ajuda</a></li>
                        <li><a href="#">Presentes</a></li>

                    </ul>
                </div>
                
                <div class="col-md-4">
                    <ul class="nav">
                        <li><a class="itens-rede-sociais" href="#"><img src="assets/img/facebook.png" alt="facebook"></a></li>
                        
                        <li><a class="itens-rede-sociais" href="#"><img src="assets/img/twitter.png" alt="twitter"></a></li>
                        
                        <li><a class="itens-rede-sociais" href="#"><img src="assets/img/instagram.png" alt="instagram"></a></li>
                        
                    </ul>
                </div>

            </div>
        </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>