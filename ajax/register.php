<?php
	include "../config/config.php";
	$name = $_POST['f_name'];
	$mobile = $_POST['f_mobile'];
	$email = $_POST['f_email'];
	$pass = $_POST['f_pass'];
	$date = date("yy-m-d");
	
	
	if($name != "" &&  $email != "" && $pass != ""){
		$sql = "insert into vege_user (user_id, name, mobile, email, password, status, created_date) values ('', '".$name."', '".$mobile."', '".$email."',  '".MD5($pass)."', 1,  '".$date."')";
		$query = mysqli_query($conn, $sql);
		if($query){
			echo 1;
		}
		else{
			echo 2;
		}
	}
	else{
		echo 0;
	}

?>