<?php
    // include database connection file 
    include("../db-connection.php");

    if (isset($_POST['submit']) && $con) {
        
	    $name = $_POST['name'];
	    $description = $_POST['description'];
	    
	    // get logged user
	    $user_id = $_SESSION['iduser'];
	    
	    $response = array();
	    
	    $sql = "INSERT INTO project(name, description, iduser) values ('$name', '$description', '$user_id');";
	    $rs = mysqli_query($con, $sql);
		if ($rs) {
			header("Location: ../../projects-page.php?msg=add_success");
		}
		else {
			header("Location: ../../projects-page.php?msg=add_error");
		}
		
	}
?>