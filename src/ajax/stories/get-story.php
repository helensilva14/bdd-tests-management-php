<?php
    // include database connection file
    include("../db-connection.php");
     
    // check request
    if(isset($_GET['story']))
    {
        $id = $_GET['story'];
<<<<<<< HEAD

        $query = "SELECT * FROM story WHERE idstory = '$id' ";
        
        //echo $query;
=======
     
        $query = "SELECT * FROM story WHERE idstory = '$id'";
        
        $con->query("SET CHARACTER SET utf8;");
        $con->query("SET collation_connection = utf8_unicode_ci;");
>>>>>>> b4d7ade8a0f952910ce4f1ace2ddc24415daa0c5
        
        if (!$result = mysqli_query($con, $query)) {
            mysqli_error($con);
        }
        
        $response = array();
        
        if(mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $response = json_encode($row);
            }
        }
        else
        {
            $response['status'] = 200;
            $response['message'] = "Nenhum dado foi encontrado";
        }
        
        // display JSON data
        echo json_encode($response);
    }
    else
    {
        $response['status'] = 200;
        $response['message'] = "Requisição inválida";
    }
?>