<?php
    // include database connection file
    include("../db-connection.php");
     
    // check request
    if(isset($_POST['story']))
    {
        $id = $_POST['story'];
     
        $query = "DELETE FROM story WHERE idstory = '$id'";
        $rs = mysqli_query($con, $query);
        
		if ($rs) {
			echo "<center><h3>Estória removida com sucesso!</h3></center>";
		}
		else {
			echo "<center><h3>Erro de remoção: </h3></center> " . mysqli_error($con);
		}
		
        header("Location: ../../stories-page.php");
    }
?>