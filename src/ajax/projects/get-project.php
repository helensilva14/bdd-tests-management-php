<?php
    // include database connection file
    include("../db-connection.php");
     
    // check request
    if(isset($_GET['project']))
    {
        $id = $_GET['project'];
     
        $query = "SELECT * FROM projeto WHERE idprojeto = '$id'";
        
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