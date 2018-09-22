<!DOCTYPE html>
<html lang="en">

<head>
    <title>Projetos</title>

<?php
    include("base/header_template.php");
?>

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
                        
                        // get logged user id
	                    $user_id = $_SESSION['iduser'];
                        
                        $query = "SELECT * FROM project WHERE iduser = $user_id";
 
                        if (!$result = mysqli_query($con, $query)) {
                            exit(mysqli_error($con));
                        }
                     
                        // if query results contains rows then featch those rows 
                        if(mysqli_num_rows($result) > 0)
                        {
                            while($row = mysqli_fetch_assoc($result))
                            {
                                echo '<hr class="mb-2">';
                                echo '<div class="col-lg-12 col-xl-12 ml-xl-4 mb-4">';
                                echo '<h3 class="mb-3 font-weight-bold dark-grey-text">';
                                echo '<strong>'.$row['name'].'</strong>';
                                echo '</h3>';
                                echo '<p>'.$row['description'].'</p>';
                                echo '<a href="maintain-sprint.php?projeto='.$row['idproject'].'" class="btn btn-primary btn-md">VER ESTÓRIAS<i class="fa fa-play ml-2"></i></a>';
                                echo '<button onclick="GetProject('.$row['idproject'].')" class="btn btn-warning btn-md">EDITAR</button>';
                                echo '<button onclick="DeleteProject('.$row['idproject'].')" class="btn btn-danger btn-md">APAGAR</button>';
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