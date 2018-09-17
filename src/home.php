<?php
    include("base/header_template.php");
?>

    <!--Main Navigation-->

    <!--Main layout-->
    <main class="mt-5 pt-5">
        <div class="container">

            <!--Section: Cards-->
            <section class="pt-4">

                <!-- Heading & Description -->
                <div class="wow fadeIn">
                    <!--Section heading-->
                    <?php echo "<h2 class='h1 text-center mb-5'>Olá, ".$_SESSION['name']."</h2>";  ?>
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