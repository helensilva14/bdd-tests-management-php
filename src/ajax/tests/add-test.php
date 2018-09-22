<?php
    // include database connection file 
    include("../db-connection.php");

    if (isset($_POST['submit'])) {
        
	    $story_id = $_POST['story'];
	    $description = $_POST['description'];
	  
	    $sql = "INSERT INTO test(description, idstory) values ('$description', '$story_id');";
	    $rs = mysqli_query($con, $sql);
		if ($rs) {
			echo "<center><h3>Caso de teste cadastrado com sucesso!</h3></center>";
		}
		else {
			echo "<center><h3>Erro de inclusão: </h3></center> " . mysqli_error($con);
		}
		
		header("Location: ../../tests-page.php");
	}
?>