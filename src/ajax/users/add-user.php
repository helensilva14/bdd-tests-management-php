<?php
        
    include("../db-connection.php");

    if($_POST['password'] !== $_POST['confirmPassword']){
     
        header('Location: ../../register-user.php?msg=error');   
     
    } else if (isset($_POST['submit']) && $con) {
        $name = $_POST['name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $sql = "insert into user(name, lastname, email, password) values ('$name', '$last_name', '$email', '$password');";
        $rs = mysqli_query($con, $sql);
        if ($rs) {
            echo "<center><h3>Usuário cadastrado com sucesso!</h3></center>";
            
            header('Location: ../../login-page?msg=success.php');
        }
        else {
            echo "<center><h3>Erro de inclusão: </h3></center> " . mysqli_error($con);
        }
    }
    
?>