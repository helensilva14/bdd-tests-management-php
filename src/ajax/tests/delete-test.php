<?php
    // include database connection file
    include("../db-connection.php");
     
    // check request
    if(isset($_POST['test']))
    {
        $id = $_POST['test'];
     
        $query = "DELETE FROM test WHERE idtest = '$id'";
        $rs = mysqli_query($con, $query);
        
		if ($rs) {
			echo "<center><h3>Caso de teste removido com sucesso!</h3></center>";
		}
		else {
			echo "<center><h3>Erro de remoção: </h3></center> " . mysqli_error($con);
		}
		
        header("Location: ../../tests-page.php");
    }
?>