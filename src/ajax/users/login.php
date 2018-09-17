<?php 

include("../db-connection.php");

if ($con){
	if(isset($_POST['entrar'])){
		$email = $_POST['email'];
		$password = $_POST['password'];

		$sql = "select * from user where email = '$email' and password = '$password'";
		$rs = mysqli_query($con, $sql);
		if(mysqli_num_rows ($rs)==1){
			$value = mysqli_fetch_array($rs);
			session_destroy();
			session_start();

			$_SESSION['iduser'] = $value['iduser'];
			$_SESSION['name'] = $value['name'];
			header("Location: ../../home.php");		
		}
		else{
			session_destroy();
			header("Location: ../../login-page.php?msg=1");
		}

	}
}
else{
		session_destroy();
		header("Location: ../../login-page.php?msg=erro-con");
	}


 ?>