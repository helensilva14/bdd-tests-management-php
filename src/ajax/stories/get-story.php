<?php
    // include database connection file
    include("../db-connection.php");

    // check request
    if(isset($_GET['story']))
    {
        $id = $_GET['story'];

        $query = "SELECT * FROM story WHERE idstory = '$id' ";
        
        //echo $query;
        
        if (!$result = mysqli_query($con, $query)) {
            exit(mysqli_error($con));
        }
        
        $response = array();
        
        if(mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $response = $row;
            }
        }
        else
        {
            $response['status'] = 200;
            $response['message'] = "Nenhum dado foi encontrado";
            
            echo 'erro';
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