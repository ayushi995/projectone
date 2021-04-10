<?php
	include "../config/config.php";

	$file = $_FILES['file'];
	$id = $_POST['id'];
	$img_name = $_POST['img_name'];
	$u_name = $_POST['u_name'];
	$u_weight = $_POST['u_weight'];
	$u_price = $_POST['u_price'];
	$date = date("yy-m-d");
	
	move_uploaded_file($file['tmp_name'], '../asset/upload/'.$img_name);
	if($u_name != "" && $u_weight != ""  && $u_price !=""){
		$sql = "UPDATE vege_pro_add SET pro_image = '".$img_name."', pro_name= '".$u_name."', pro_weight='".$u_weight."', pro_price= '".$u_price."' WHERE pro_id ='".$id."'";
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