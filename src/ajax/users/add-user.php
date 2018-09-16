<?php
    // include database connection file 
    include("../db-connection.php");

    if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']))
    {
        // get values 
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
 
        $query = "INSERT INTO usuario(nome, sobrenome, email) VALUES('$first_name', '$last_name', '$email')";
	    $rs = mysqli_query($con, $sql);
		if ($rs) {
			echo "<center><h3>Usuário cadastrado com sucesso!</h3></center>";
		}
		else {
			echo "<center><h3>Erro de inclusão: </h3></center> " . mysqli_error($con);
		}
		
		header("Location: ../../login.php");
    }
?>