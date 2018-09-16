<?php
    // include Database connection file 
    include("db-connection.php");
 
    // Design initial table header 
    $data = '<table id="tbUsuarios" class="table table-striped table-bordered">
                 </thead>
                        <tr>
                            <th>No.</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email Address</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                </thead>
                <tbody>';
 
    $query = "SELECT * FROM usuario";
 
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
 
    // if query results contains rows then featch those rows 
    if(mysqli_num_rows($result) > 0)
    {
        $number = 1;
        while($row = mysqli_fetch_assoc($result))
        {
            $data .= '<tr>
                <td>'.$number.'</td>
                <td>'.$row['nome'].'</td>
                <td>'.$row['sobrenome'].'</td>
                <td>'.$row['email'].'</td>
                <td>
                    <button onclick="GetUserDetails('.$row['idusuario'].')" class="btn btn-warning">Update</button>
                </td>
                <td>
                    <button onclick="DeleteUser('.$row['idusuario'].')" class="btn btn-danger">Delete</button>
                </td>
            </tr>';
            $number++;
        }
    }
    else
    {
        // records now found 
        $data .= '<tr><td colspan="6">Records not found!</td></tr>';
    }
 
    $data .= '          </tbody>
            </table>';
 
    echo $data;
?>