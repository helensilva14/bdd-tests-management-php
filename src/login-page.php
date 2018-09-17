<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Material Design Bootstrap</title>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="css/mdb.min.css" rel="stylesheet">
        <!-- Your custom styles (optional) -->
        <link href="css/style.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="css/custom/signin.css" rel="stylesheet">
    </head>

    <body class="text-center">
        <!-- Material form login -->
        <div class="card">
        
          <h5 class="card-header info-color white-text text-center py-4">
            <strong>Entrar</strong>
          </h5>
        
          <!--Card content-->
          <div class="card-body px-lg-5 pt-0">
          <?php
            if(isset($_GET['msg'])){ 
              echo '
              <div class="alert alert-danger">
                <center><strong>Usuário e/ou senha inválidos</strong></center>
              </div>';
            }
          ?>
            <!-- Form -->
            <form class="text-center" style="color: #757575;" method="post" action="ajax/users/login.php">
        
              <!-- Email -->
              <div class="md-form">
                <input type="email" id="materialLoginFormEmail" class="form-control" name="email">
                <label for="email">E-mail</label>
              </div>
        
              <!-- Password -->
              <div class="md-form">
                <input type="password" id="password" name="password" class="form-control">
                <label for="password">Senha</label>
              </div>
              
              <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" id="" type="submit" name="entrar">Entrar</button>
        
              <!-- Register -->
              <p>Não tem uma conta? <a href="">Cadastre-se</a> </p>
        
            </form>
            <!-- Form -->
        
          </div>
        
        </div>
    </body>
</html>