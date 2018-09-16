

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Projetos</title>
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
                <a class="navbar-brand waves-effect" href="home.php">
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
                            <a class="nav-link waves-effect" href="home.php">Home</a>
                        </li>
                        <li class="nav-item active">
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
                            <a href="#" class="nav-link border border-light rounded waves-effect">
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
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="h1 text-center" style="display: inline-block; margin-left: 25px;">Projetos</h2>
                        <button class="btn btn-success" data-toggle="modal" data-target="#add_new_project_modal" 
                            style="display: inline-block; vertical-align:top; margin:  0; margin-left: 69%;">Novo Projeto</button>
                    </div>
                </div>
                <!-- Heading & Description -->
                
                <hr class="mb-3">

                <!--Grid row-->
                <div class="row wow fadeIn">
                    
                    <?php
                        // include Database connection file 
                        include("ajax/db-connection.php");
                        
                        # TODO: get logged user id
	                    $user_id = 1;
                        
                        $query = "SELECT * FROM projeto WHERE idusuario = $user_id";
 
                        if (!$result = mysqli_query($con, $query)) {
                            exit(mysqli_error($con));
                        }
                     
                        // if query results contains rows then featch those rows 
                        if(mysqli_num_rows($result) > 0)
                        {
                            $number = 1;
                            while($row = mysqli_fetch_assoc($result))
                            {
                                echo '<hr class="mb-2">';
                                echo '<div class="col-lg-12 col-xl-12 ml-xl-4 mb-4">';
                                echo '<h3 class="mb-3 font-weight-bold dark-grey-text">';
                                echo '<strong>'.$row['nome'].'</strong>';
                                echo '</h3>';
                                echo '<p>'.$row['descricao'].'</p>';
                                echo '<a href="maintain-sprint.php?projeto='.$row['idprojeto'].'" class="btn btn-primary btn-md">VER ESTÓRIAS<i class="fa fa-play ml-2"></i></a>';
                                echo '<button onclick="GetProject('.$row['idprojeto'].')" class="btn btn-warning btn-md">EDITAR</button>';
                                echo '<button onclick="DeleteProject('.$row['idprojeto'].')" class="btn btn-danger btn-md">APAGAR</button>';
                                echo '</div>';
                            }
                        }
                        else
                        {
                            // records now found 
                            echo 'Você ainda não tem projetos cadastrados';
                        }
                        
                    ?>

                </div>
                <!--Grid row-->

                <hr class="mb-5">

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

<!-- Bootstrap Modals -->
<!-- Modal - Add New Record -->
<div class="modal fade" id="add_new_project_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Novo Projeto</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <form action="ajax/projects/add-project.php" method="post">
                <div class="modal-body">
                   <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" id="name" name="name" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="description">Descrição</label>
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" name="submit" class="btn btn-primary">Adicionar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- // Modal -->

<!-- Modal - Update Record -->
<div class="modal fade" id="update_project_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Editar Projeto</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <form action="ajax/projects/update-project.php" method="post">
                <div class="modal-body">
                   <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" id="edit_name" name="edit_name" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="description">Descrição</label>
                        <textarea class="form-control" id="edit_description" name="edit_description" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" id="id" name="id">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" name="submit" class="btn btn-primary">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- // Modal -->

    <!-- SCRIPTS -->
    
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <script type="text/javascript" src="js/src/projects.js"></script>
    
</body>

</html>