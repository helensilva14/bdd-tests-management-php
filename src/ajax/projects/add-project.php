<?php
    // include database connection file 
    include("../db-connection.php");

    if (isset($_POST['submit']) && $con) {
        
	    $name = $_POST['name'];
	    $description = $_POST['description'];
	    
	    // get logged user
	    $user_id = $_SESSION['iduser'];
	    
	    $response = array();
	    
	    $sql = "INSERT INTO project(name, description, iduser) values ('$name', '$description', '$user_id');";
	    $rs = mysqli_query($con, $sql);
		if ($rs) {
			echo "<center><h3>Projeto cadastrado com sucesso!</h3></center>";
		}
		else {
			echo "<center><h3>Erro de inclusão: </h3></center> " . mysqli_error($con);
		}
		
		header("Location: ../../projects-page.php");
	}
?>