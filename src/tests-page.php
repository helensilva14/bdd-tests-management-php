

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Casos de Teste</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.min.css" rel="stylesheet">
    
    <!-- Template styles -->
								<style rel="stylesheet">
        /* TEMPLATE STYLES */

        main {
            padding-top: 3rem;
            padding-bottom: 2rem;
        }

        .extra-margins {
            margin-top: 1rem;
            margin-bottom: 2.5rem;
        }

        .jumbotron {
            text-align: center;
        }

        .navbar {
            background-color: #274e68;
        }

        footer.page-footer {
            background-color: #274e68;
            margin-top: 2rem;
        }

        .navbar .btn-group .dropdown-menu a:hover {
            color: #000 !important;
        }

        .navbar .btn-group .dropdown-menu a:active {
            color: #fff !important;
        }
    </style>
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
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="projects-page.php">Projetos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="stories-page.php">Estórias</a>
                        </li>
                        <li class="nav-item active">
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
		<!--Main layout-->
		<div class="container">
            <!-- Heading & Description -->
			<section class="pt-4">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="h1 text-center" style="display: inline-block; margin-left: 25px;">Casos de Teste</h2>
                        <button class="btn btn-success" data-toggle="modal" data-target="#add_new_test_modal" 
                            style="display: inline-block; vertical-align:top; margin:  0; margin-left: 54%;">Novo Caso de Teste</button>
                    </div>
                </div>
			</section>
			<!-- Heading & Description -->	
			
			<?php 
			    // include Database connection file 
                include("ajax/db-connection.php"); 
            ?>
			
			<!--Second row-->
			<div class="row mt-5 pt-4">
				<!--First columnn-->
				<div class="col-lg-4">
					<!--Card-->
					<div class="card mb-r wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;">
						<!--Card content-->
						<div class="card-body">
							<!--Title-->
							<h4 class="card-title">
								<strong>This is title</strong>
							</h4>
							<!--Text-->
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn btn-blue-grey btn-md waves-effect waves-light">Read more</a>
						</div>
					</div>
					<!--/.Card-->
				</div>
				<!--First columnn-->
				<!--Second columnn-->
				<div class="col-lg-4">
					<!--Card-->
					<div class="card mb-r wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.4s;">
						<!--Card content-->
						<div class="card-body">
							<!--Title-->
							<h4 class="card-title">
								<strong>This is title</strong>
							</h4>
							<!--Text-->
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn btn-blue-grey btn-md waves-effect waves-light">Read more</a>
						</div>
					</div>
					<!--/.Card-->
				</div>
				<!--Second columnn-->
				<!--Third columnn-->
				<div class="col-lg-4">
					<!--Card-->
					<div class="card wow fadeIn" data-wow-delay="0.6s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.6s;">
						<!--Card content-->
						<div class="card-body">
							<!--Title-->
							<h4 class="card-title">
								<strong>This is title</strong>
							</h4>
							<!--Text-->
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn btn-blue-grey btn-md waves-effect waves-light">Read more</a>
						</div>
					</div>
					<!--/.Card-->
				</div>
				<!--Third columnn-->
			</div>
			<!--/.Second row-->
				
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
    <div class="modal fade" id="add_new_test_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Nova Estória</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <form action="ajax/tests/add-test.php" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Projeto</label>
                            <select class="form-control" name="project" onchange="FetchStories(this.value)">
                                <option value="">Selecione...</option>	
                                    <?php /* TODO: GET FROM SESSION */ $user_id = 1; ?>
                                    <?php if($con): ?> 
                                        <?php
                                            $sql = "select * from project where iduser = $user_id";
                                            $rs = mysqli_query($con, $sql); 
                                        ?>
                                        <?php while($row = mysqli_fetch_array($rs)): ?>
                                            <option <?php echo 'value="'.$row["idproject"].'"'?>>
                                                <?php echo $row['name']; ?>
                                            </option>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Estória</label>
                            <select class="form-control" name="story" id="select_story"></select>
                        </div>
                        <hr />
                        <div class="form-group">
                            <label for="description">Dado</label>
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
    <div class="modal fade" id="update_story_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Editar Estória</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <form action="ajax/stories/update-story.php" method="post">
                    <div class="modal-body">
    
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

    <script type="text/javascript" src="js/src/tests.js"></script>
    
</body>

</html>