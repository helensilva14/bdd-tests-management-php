<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Novo Usuário</title>
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
      <!-- Material form register -->
      <div class="card">
        <!--Heading-->
        <h5 class="card-header info-color white-text text-center py-4">
            <strong>Nova conta</strong>
        </h5>
        <!--Card content-->
        <div class="card-body px-lg-5 pt-0">
          <!-- Form -->
          <form class="text-center" style="color: #757575;" action="register-user.php" method="post">
  
            <div class="form-row">
              <div class="col">
                <!-- First name -->
                <div class="md-form">
                  <input type="text" id="name" name="name" class="form-control">
                  <label>Nome</label>
                </div>
              </div>
              <div class="col">
                <!-- Last name -->
                <div class="md-form">
                  <input type="text" id="last_name" name="last_name" class="form-control">
                  <label>Sobrenome</label>
                </div>
              </div>
            </div>
            
            <!-- E-mail -->
            <div class="md-form mt-0">
              <input type="email" id="email" name="email" class="form-control">
              <label>E-mail</label>
            </div>

            <!-- Password -->
            <div class="md-form">
              <input type="password" id="password" name="password" class="form-control">
              <label>Senha</label>
              <small class="form-text text-muted mb-4">Digite pelo menos 8 caracteres</small>
            </div>

            <!-- Sign up button -->
            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit" name="submit">Cadastrar</button>
            
          </form>
          <!-- Form -->
          
         <?php
        
            $con = mysqli_connect("localhost", "helensilva", "", "bddtm") or die("A conexão com o servidor não foi estabelecida.");
        
            if (isset($_POST['submit']) && $con) {
        	    $name = $_POST['name'];
        	    $last_name = $_POST['last_name'];
        	    $email = $_POST['email'];
        	    $password = $_POST['password'];
        	    
        	    $sql = "INSERT INTO usuario(nome, sobrenome, email, senha) values ('$name', '$last_name', '$email', '$password');";
        	    $rs = mysqli_query($con, $sql);
        		if ($rs) {
        			echo "<center><h3>Usuário cadastrado com sucesso!</h3></center>";
        			
        			header('Location: login.php');
        		}
        		else {
        			echo "<center><h3>Erro de inclusão: </h3></center> " . mysqli_error($con);
        		}
        	}
        
        ?>
          
        </div>
      </div>
      <!-- Material form register -->
    </body>
</html>