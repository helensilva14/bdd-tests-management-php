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
     
        $query = "UPDATE project SET name = '$name', description = '$description' WHERE idproject = '$id'";
        
        $rs = mysqli_query($con, $query);
        
		if ($rs) {
			header("Location: ../../projects-page.php?msg=upd_success");
		}
		else {
			header("Location: ../../projects-page.php?msg=upd_error");
		}
		
        
    }
    
?>