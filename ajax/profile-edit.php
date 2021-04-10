<?php
	include "../config/config.php";

	$file = $_FILES['file'];
	$id = $_POST['id'];
	$img_name = $_POST['img_name'];
	$name = $_POST['u_name'];
	$mobile = $_POST['u_mobile'];
	$email = $_POST['u_email'];
	$pass = $_POST['u_pass'];
	$date = date("yy-m-d");
	
	
	
	if($img_name == ""){
		$round = rand(1000, 9999);
		$fileType = $file['type'];
		$fileType = substr($fileType, 6);
		$filename = 'profile'.$round.'.'.$fileType;
	}
	else{
		$filename = $img_name;
	}
	
	move_uploaded_file($file['tmp_name'], '../asset/upload/'.$filename);
	
	if($name != "" && $email != ""  && $pass !=""){
		$sql = "update vege_user SET profile = '".$filename."', name= '".$name."', mobile='".$mobile."', email= '".$email."', password= '".$pass."'  WHERE user_id ='".$id."'";
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