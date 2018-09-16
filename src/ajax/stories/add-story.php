<?php
    // include database connection file 
    include("../db-connection.php");

    if (isset($_POST['submit']) && $con) {
        
	    $name = $_POST['name'];
	    $project_id = $_POST['project'];
	  
	    $sql = "INSERT INTO story(nome, idsprint) values ('$name', '$project_id');";
	    $rs = mysqli_query($con, $sql);
		if ($rs) {
			echo "<center><h3>Estória cadastrada com sucesso!</h3></center>";
		}
		else {
			echo "<center><h3>Erro de inclusão: </h3></center> " . mysqli_error($con);
		}
		
		header("Location: ../../stories-page.php");
	}
?>