<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="utf-8">
    <meta name="vi">
    <title>Health Map</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light box-shadow">
        <a href="index.php" class="nav-brand">
            <h4><span style="color: red">HEALTH</span>MAP</h4>
        </a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link">Início</a>
                </li>
                <li class="nav-item">
                    <a href="#sobre" class="nav-link">
                        Sobre</a>
                </li>
                <li class="nav-item">
                    <a href="#equipe" class="nav-link">
                        Equipe</a>
                </li>
                <li class="nav-item">
                    <a href="registro_usuario.php" class="btn btn-outline-primary ml-md-2">
                        Registrar-se</a>
                </li>
            </ul>
        </div>


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>

    <section class="container-fluid form-style">
        <div class="row bg-primary text-white">
            <div class="col-md-7 col-sm-12 p-0">
                <div id="carouselMaps" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselMaps" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselMaps" data-slide-to="1"></li>
                        <li data-target="#carouselMaps" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="images/01.png" alt="1st slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="images/02.png" alt="2nd slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="images/03.png" alt="3rd slide">
                        </div>
                    </div>

                    <a class="carousel-control-prev" href="#carouselMaps" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    
                    <a class="carousel-control-next" href="#carouselMaps" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-5 col-sm-12">
                <br/><br/><h1 class="text-center text-white display-4">Bem-vindo</h1>
                <form action="index2.php" method="POST">
                    <div class="form-group">
                        <label for="login">Login:</label>
                        <input type="text" class="form-control" name="login" id="login" placeholder="Login">
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha:</label>
                        <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha">
                    </div>
                    <button type="submit" class="btn btn-danger">Entrar</button>
                </form>
            </div>
    </section>
    <br>
    <section class="container-fluid maps">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">MAPA</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form class="form-inline">
                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Escolha o bairro:</label>
                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                        <option selected>Nenhum</option>
                        <option value="1">Tirol</option>
                        <option value="2">Lagoa Nova</option>
                        <option value="3">Candelária</option>
                    </select>
                </form>
            </div>
       
        </div>

        <div class="row">
                <div class="col-12">
                        <div id="map"></div>
                        
                </div>
            </div>
    </section>

    <section class="container" id="about">
        <br/><br/>
        <div class="row">
            <div class="col-12">
                <h1 class="text-center" id="sobre">SOBRE O HEALTHMAP</h1>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-12">
                <p>A saúde pública é um dos fatores mais importantes da vida em sociedade. É importante para a população estar
                    informada sobre surtos de doenças para que possam tomar medidas de prevenção. Para os governantes é importante
                    ter informações sobre regiões mais propensas à ocorrências, para tomar medidas para melhorar o acesso
                    ao tratamento, bem como identificar fatores de risco que podem ajudar na prevenção e redução dos riscos
                    de saúde.
                </p>
                <p>
                    O sistema a ser desenvolvido tem como objetivo mapear as áreas de uma cidade, mostrando quais são os locais que apresentam
                    certos tipos de doença, e com isso ajudar a prefeitura para que a mesma possa criar políticas públicas,
                    UPAs, ações de conscientização, etc, para atender toda a população que sofre com esses problemas.
                </p>
            </div>
        </div>
    </section>


    <section class="container" id="team">
        <br/><br/>
        <div class="row">
            <div class="col-12">
                <h1 class="text-center" id="equipe">EQUIPE</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-4 text-center">
                    <img src="images/eulle.jpg" alt="Eulle" class="rounded">
                    <p class="lead"><strong>Eulle Silva</strong></p>
            </div>
            <div class="col-4 text-center">
                    <img src="images/carlos.png" alt="Carlos" class="rounded">
                    <p class="lead"><strong>Carlos Antônio</strong></p>
            </div>
            <div class="col-4 text-center">
                    <img src="..." alt="..." class="rounded">
                    <p class="lead"><strong>Thales Gomes</strong></p>
            </div>

        </div>
    </section>

    <footer class="container-fluid" id="rodape" >
        <div class="row">
            <div class="col-12 text-center text-white">
                    <h6>Copyright @ 2018</h6>
            </div>
            
        </div>
       
    </footer>

    <script type="text/javascript" src="js/mapa.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC1NhB48ULi3LoVJiqtTnzXEwZhz-jM7u0&callback=initMap"></script>
    <script type="text/javascript" src="js/jquery-3.3.1.slim.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>