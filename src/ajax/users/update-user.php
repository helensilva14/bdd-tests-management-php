<?php
    // include Database connection file
    include("db-connection.php");
     
    // check request
    if(isset($_POST['submit']))
    {
        session_start();
	    // get logged user
	    $id = $_SESSION['iduser'];
        
        // get values
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $senha = $_POST['password'];
     
        // Updaste User details
        $query = "UPDATE user SET name = '$first_name', lastname = '$last_name', email = '$email', password = '$password' WHERE iduser = '$id'";
        
        if (!$result = mysqli_query($con, $query)) {
            exit(mysqli_error($con));
        }
    }
?>