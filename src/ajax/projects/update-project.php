<?php
    // include database connection file
    include("../db-connection.php");

    // check request
    if(isset($_POST['submit']) && $con)
    {
        // get values
        $id = $_POST['id'];
        $name = $_POST['edit_name'];
        $description = $_POST['edit_description'];
     
        $query = "UPDATE projeto SET nome = '$name', descricao = '$description' WHERE idprojeto = '$id'";
        
        $rs = mysqli_query($con, $query);
        
		if ($rs) {
			echo "<center><h3>Projeto atualizado com sucesso!</h3></center>";
		}
		else {
			echo "<center><h3>Erro de atualização: </h3></center> " . mysqli_error($con);
		}
		
        header("Location: ../../projects-page.php");
    }
    
?>