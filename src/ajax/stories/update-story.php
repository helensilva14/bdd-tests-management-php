<?php
    // include database connection file
    include("../db-connection.php");

    // check request
    if(isset($_POST['submit']) && $con)
    {
        // get values
        $id = $_POST['id'];
        $description = $_POST['edit_description'];
     
        $query = "UPDATE story SET description = '$description' WHERE idstory  = '$id'";
        
        $rs = mysqli_query($con, $query);
        
		if ($rs) {
			echo "<center><h3>Estória atualizada com sucesso!</h3></center>";
		}
		else {
			echo "<center><h3>Erro de atualização: </h3></center> " . mysqli_error($con);
		}
		
        header("Location: ../../stories-page.php");
    }
    
?>