

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.min.css" rel="stylesheet">
</head>

<body>

    <!--Main Navigation-->
    <header>

        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
            <div class="container">

                <!-- Brand -->
                <a class="navbar-brand waves-effect" href="home.php" target="_blank">
                    <img src="img/logo.png" width="77" height="59"></img>
                </a>

                <!-- Collapse -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Links -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link waves-effect" href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="projects-page.php">Projetos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="#">Estórias</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="tests-page.php">Casos de Teste</a>
                        </li>
                    </ul>

                    <!-- Right -->
                    <ul class="navbar-nav nav-flex-icons">
                        <li class="nav-item">
                            <a href="#" class="nav-link border border-light rounded waves-effect"
                                target="_blank">
                                <i class="fa fa-sign-out"></i>Sair
                            </a>
                        </li>
                    </ul>

                </div>

            </div>
        </nav>
        <!-- Navbar -->

    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main class="mt-5 pt-5">
        <div class="container">

            <!--Section: Cards-->
            <section class="pt-4">

                <!-- Heading & Description -->
                <div class="wow fadeIn">
                    <!--Section heading-->
                    <h2 class="h1 text-center mb-5">Olá, {NOME_USUARIO}</h2>
                </div>
                <!-- Heading & Description -->

                <!--Grid row-->
                <div class="row wow fadeIn">

                    <!--Grid column-->
                    <div class="col-md-3 mb-4">

                    <!--Card-->
                    <div class="card mb-4">
                        
                        <div class="card-header">
                            Itens cadastrados
                        </div>

                        <!--Card content-->
                        <div class="card-body">

                            <!-- List group links -->
                            <div class="list-group list-group-flush">
                                <a class="list-group-item list-group-item-action waves-effect">Projetos
                                    <span class="badge badge-primary badge-pill pull-right">1</span>
                                </a>
                                <a class="list-group-item list-group-item-action waves-effect">Sprints
                                    <span class="badge badge-primary badge-pill pull-right">1</span>
                                </a>
                                <a class="list-group-item list-group-item-action waves-effect">Estórias
                                    <span class="badge badge-primary badge-pill pull-right">10</span>
                                </a>
                                <a class="list-group-item list-group-item-action waves-effect">Casos de Teste
                                    <span class="badge badge-primary badge-pill pull-right">20</span>
                                </a>
                            </div>
                            <!-- List group links -->

                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                    <!--Grid column-->
                    
                    <div class="col-md-9 mb-6">

                        <!--Card-->
                        <div class="card">
                            
                            <div class="card-header">
                                Ações do sistema
                            </div>
    
                            <!--Card content-->
                            <div class="card-body">
                                
                                <div class="row">
                                    <p class="text-center">
                                        Cras eu velit et ante pharetra aliquam at sit amet nisl. Phasellus ut nunc urna. Suspendisse ut rutrum ligula. 
                                        Quisque orci mauris, gravida non tincidunt vel, tincidunt vitae tortor. Donec mattis imperdiet rhoncus. 
                                        Maecenas lacus nisl, sollicitudin eu commodo nec, condimentum ac dui. Vestibulum mi urna, euismod vitae vestibulum eget, convallis eu nisi. 
                                        Vestibulum non suscipit sem. Integer gravida vel neque tristique pretium. 
                                        Nunc luctus mi ut tincidunt mollis. Phasellus vitae felis iaculis, placerat odio eu, porttitor urna.
                                    </p>
                                </div>
    
                                <!-- Row-->
                                <div class="row">
    
                                    <!--Column-->
                                    <div class="col-md-3">
                                        <div class="text-center">
                                            <a class="btn btn-primary btn-sm waves-effect waves-light">NOVO PROJETO</a>
                                        </div>
                                    </div>
                                    <!--Column-->
                                    
                                    <!--Column-->
                                    <div class="col-md-3">
                                        <div class="text-center">
                                            <a class="btn btn-primary btn-sm waves-effect waves-light">NOVA SPRINT</a>
                                        </div>
                                    </div>
                                    <!--Column-->
                                    
                                    <!--Column-->
                                    <div class="col-md-3">
                                        <div class="text-center">
                                            <a class="btn btn-primary btn-sm waves-effect waves-light">NOVA ESTÓRIA</a>
                                        </div>
                                    </div>
                                    <!--Column-->
                                    
                                    <!--Column-->
                                    <div class="col-md-3">
                                        <div class="text-center">
                                            <a class="btn btn-primary btn-sm waves-effect waves-light">NOVO CASO DE TESTE</a>
                                        </div>
                                    </div>
                                    <!--Column-->
    
                                </div>
                                <!-- /.Row-->
    
                            </div>
    
                        </div>
                        <!--/.Card-->
                    </div>

                </div>
                <!--Grid row-->

            </section>
            <!--Section: Cards-->

        </div>
    </main>
    <!--Main layout-->

    <!--Footer-->
    <footer class="page-footer font-small orange pt-4">
    
        <!--Copyright-->
        <div class="footer-copyright text-center py-3">
            <div class="container-fluid">
                 Henrique Grasso e Helen Silva - 2018<br>
                 Template: <a href="https://www.MDBootstrap.com"> MDBootstrap.com </a>
            </div>
        </div>
        <!--/.Copyright-->
    
    </footer>
    <!--/.Footer-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Initializations -->
    <script type="text/javascript">
        // Animations initialization
        new WOW().init();
    </script>
</body>

</html>