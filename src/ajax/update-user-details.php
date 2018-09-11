<?php
// include Database connection file
include("db-connection.php");
 
// check request
if(isset($_POST))
{
    // get values
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
 
    // Updaste User details
    $query = "UPDATE usuario SET nome = '$first_name', sobrenome = '$last_name', email = '$email' WHERE idusuario = '$id'";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
}