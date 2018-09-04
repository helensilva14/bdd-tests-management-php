

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sprint</title>
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
                <a class="navbar-brand waves-effect" href="https://mdbootstrap.com/material-design-for-bootstrap/" target="_blank">
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
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="#">Projetos</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link waves-effect" href="#">Sprints
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link waves-effect" href="#">Estórias</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="#">Casos de Teste</a>
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
            
            <?php
            
                $con = mysqli_connect("localhost", "helensilva", "", "bddtm") or die("A conexão com o servidor não foi estabelecida.");
            
                if (isset($_POST['submit']) && $con) {
            	    $name = $_POST['name'];
            	    
            	    # TODO: get project id
            	    $project_id = 1;
            	    
            	    $sql = "INSERT INTO sprint(nome, idprojeto) values ('$name', '$project_id');";
            	    $rs = mysqli_query($con, $sql);
            		if ($rs) {
            			echo "<center><h3>Sprint cadastrada com sucesso!</h3></center>";
            		}
            		else {
            			echo "<center><h3>Erro de inclusão: </h3></center> " . mysqli_error($con);
            		}
            	}
            
            ?>
            
            <!--Section-->
            <section class="pt-4">

                <!-- Heading -->
                <div class="wow fadeIn">
                    <!--Section heading-->
                    <h2 class="h1 text-center mb-5">Sprint</h2>
                </div>
                
                <!--Form-->
                <div class="bd-example">
                    <form action="maintain-sprint.php" method="post">
                      <!--Name-->
                      <div class="form-group">
                        <label>Nome</label>
                        <input type="text" class="form-control" id="name" name="name">
                      </div>
                      <!--Submit-->
                      <button type="submit" name="submit" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
                <!--Form-->
            
            </section>
            

        </div>
    </main>
    <!--Main layout-->

    <!--Footer-->
    <footer class="page-footer orange mt-4">
    
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