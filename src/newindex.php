<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>

<?php
    include("base/header_template.php");
?>
    
    <!--Main layout-->
    <main class="mt-5 pt-5">
        
        <!-- Content Section -->
        <div class="container">
            
            <!--Section-->
            <section class="pt-4">

                <!-- Heading -->
                <div class="wow fadeIn">
                    <!--Section heading-->
                    
                </div>
                
                <!--<div class="row">-->
                <!--    <div class="col-md-12">-->
                <!--        <h1>Titulo</h1>-->
                <!--    </div>-->
                <!--</div>-->
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="h1 text-center mb-5" style="display: inline-block;">Projeto</h2>
                        <button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal" style="
                        display: inline-block;
                        vertical-align:top;
                        margin:  0;
                        margin-left: 70%;
                    ">Add New Record</button>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <!-- Table -->
                        <div class="records_content">
                            
                            <table id="tbUsuarios" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email Address</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                            </table>
                                
                            <?php
                                
                                    // include("ajax/db-connection.php");
                                 
                                    // $query = "SELECT * FROM usuario";
                                 
                                    // if (!$result = mysqli_query($con, $query)) {
                                    //     exit(mysqli_error($con));
                                    // }
                                 
                                    // // if query results contains rows then featch those rows 
                                    // if(mysqli_num_rows($result) > 0)
                                    // {
                                    //     $number = 1;
                                    //     while($row = mysqli_fetch_assoc($result))
                                    //     {
                                    //         echo '<tr>';
                                    //         echo '<td>'.$number.'</td>';
                                    //         echo '<td>'.$row['nome'].'</td>';
                                    //         echo '<td>'.$row['sobrenome'].'</td>';
                                    //         echo '<td>'.$row['email'].'</td>';
                                    //         echo '<td>';
                                    //         echo '<button onclick="GetUserDetails('.$row['idusuario'].')" class="btn btn-warning">Update</button>';
                                    //         echo '</td>';
                                    //         echo '<td>';
                                    //         echo '<button onclick="DeleteUser('.$row['idusuario'].')" class="btn btn-danger">Delete</button>';
                                    //         echo '</td>';
                                    //         echo '</tr>';
                                    //         $number++;
                                    //     }
                                    // }
                                    // else
                                    // {
                                    //     // records now found 
                                    //   echo '<tr><td colspan="6">Records not found!</td></tr>';
                                    // }
                                    
                            ?>
                                
                                
                            <!--</table>    -->
                            
                            

                                
                        </div>
                    </div>
                </div>
                
              </section>    
                
        </div>
        <!-- /Content Section -->
        
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
<!-- Modal - Add New Record/User -->
<div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Add New Record</h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" id="first_name" placeholder="First Name" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" id="last_name" placeholder="Last Name" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="text" id="email" placeholder="Email Address" class="form-control"/>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="addRecord()">Add Record</button>
            </div>
        </div>
    </div>
</div>
<!-- // Modal -->

<!-- Modal - Update User details -->
<div class="modal fade" id="update_user_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Update</h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="update_first_name">First Name</label>
                    <input type="text" id="update_first_name" placeholder="First Name" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="update_last_name">Last Name</label>
                    <input type="text" id="update_last_name" placeholder="Last Name" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="update_email">Email Address</label>
                    <input type="text" id="update_email" placeholder="Email Address" class="form-control"/>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" onclick="DeleteUser()">Delete</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="UpdateUserDetails()" >Save Changes</button>
                <input type="hidden" id="hidden_user_id">
            </div>
        </div>
    </div>
</div>
<!-- // Modal -->

<!-- Jquery JS file -->
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>

<!-- Bootstrap JS file -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

<!-- Custom JS file -->
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>