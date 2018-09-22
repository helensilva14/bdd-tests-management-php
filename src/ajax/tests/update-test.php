<?php
    // include database connection file
    include("../db-connection.php");

    // check request
    if(isset($_POST['submit']))
    {
        // get values
        $id = $_POST['id'];
        $description = $_POST['edit_description'];    
        
        $con->query("SET CHARACTER SET utf8;");
        $con->query("SET collation_connection = utf8_unicode_ci;"); 
     
        $query = "UPDATE test SET description = '$description' WHERE idtest  = '$id'";

        $rs = mysqli_query($con, $query);
        
		if ($rs) {
			echo "<center><h3>Caso de teste atualizado com sucesso!</h3></center>";
		}
		else {
			echo "<center><h3>Erro de atualização: </h3></center> " . mysqli_error($con);
		}
		
        header("Location: ../../tests-page.php");
    }
    
?>