<?php
    // include database connection file
    include("../db-connection.php");
     
    // check request
    if(isset($_POST['project']))
    {
        $id = $_POST['project'];
     
        $query = "DELETE FROM projeto WHERE idprojeto = '$id'";
        $rs = mysqli_query($con, $query);
        
		if ($rs) {
			echo "<center><h3>Projeto removido com sucesso!</h3></center>";
		}
		else {
			echo "<center><h3>Erro de remoção: </h3></center> " . mysqli_error($con);
		}
		
        header("Location: ../../projects-page.php");
    }
?>