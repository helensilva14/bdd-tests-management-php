<?php
    // include database connection file 
    include("../db-connection.php");

    if (isset($_POST['submit']) && $con) {
        
	    $description = $_POST['description'];
	    $project_id = $_POST['project'];
	    
	    $con->query("SET CHARACTER SET utf8;");
        $con->query("SET collation_connection = utf8_unicode_ci;"); 
	  
	    $sql = "INSERT INTO story(description, idproject) values ('$description', '$project_id');";
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