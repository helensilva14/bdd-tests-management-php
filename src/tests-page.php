<!DOCTYPE html>
<html lang="en">

<head>
    <title>Casos de Teste</title>
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

<?php
    include("base/header_template.php");
?>

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
  
                // get logged user id
                $user_id = $_SESSION['iduser'];
     
                $sql = "SELECT t . * , p.name AS  'project', s.description AS  'story' FROM test t 
                        JOIN story s ON t.idstory = s.idstory JOIN project p ON s.idproject = p.idproject
                        WHERE p.iduser = '$user_id'";
                        
                $con->query("SET CHARACTER SET utf8;");
                $con->query("SET collation_connection = utf8_unicode_ci;");        
                        
                $rs = mysqli_query($con, $sql); 
            ?>
            <?php while($row = mysqli_fetch_array($rs)): ?>
                <div class="row ml-4 mt-2 pt-4">
                    <div class="col-md-12 card">
                      <div class="card-header" style="margin-top: 10px;">
                        <strong>Projeto: </strong><?php echo $row['project']; ?>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title"><?php echo $row['description']; ?></h5>
                        <p class="card-text">
                            <strong>Estória: </strong><?php echo $row['story']; ?>
                            <p>
                                <?php
                                    echo '<button onclick="GetTest('.$row['idtest'].')" class="btn btn-warning btn-md">EDITAR</button>';
                                    echo '<button onclick="DeleteTest('.$row['idtest'].')" class="btn btn-danger btn-md">APAGAR</button>';
                                ?>
                            </p>
                        </p>
                      </div>
                    </div>
                </div>
            <?php endwhile; ?>
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
                    <h4 class="modal-title" id="myModalLabel">Novo Caso de Teste</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <form action="ajax/tests/add-test.php" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Projeto</label>
                            <select class="form-control" name="project" onchange="FetchStories(this.value)">
                                <option value="">Selecione...</option>	
                                    <?php if($con): ?> 
                                        <?php
                                            $sql = "SELECT * FROM project WHERE iduser = '$user_id'";
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
    <div class="modal fade" id="update_test_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Editar Caso de Teste</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <form action="ajax/tests/update-test.php" method="post">
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