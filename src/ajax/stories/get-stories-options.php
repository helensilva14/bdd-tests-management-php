<?php
    // include database connection file
    include("../db-connection.php");    
    
    if(isset($_POST['project']))
    {
        $project_id = $_POST['project'];
        
        $query = "SELECT description FROM story where idproject = '$project_id'";
        
        echo $query;
        
        $rs = mysql_query($con, $query);
        
        while($row = mysql_fetch_array($rs))
        {
            echo "<option>".$row['description']."</option>";
        }
        
        exit;
    }
?>