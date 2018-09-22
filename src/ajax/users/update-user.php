<?php
    // include Database connection file
    include("db-connection.php");
     
    // check request
    if(isset($_POST['submit']))
    {
        // get values
        $id = $_POST['id'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
     
        // Updaste User details
        $query = "UPDATE user SET name = '$first_name', lastname = '$last_name', email = '$email' WHERE iduser = '$id'";
        
        if (!$result = mysqli_query($con, $query)) {
            exit(mysqli_error($con));
        }
    }
?>