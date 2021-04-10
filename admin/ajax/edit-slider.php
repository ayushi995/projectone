<?php
	include "../config/config.php";

	$file = $_FILES['file'];
	$id = $_POST['id'];
	$img_name = $_POST['img_name'];
	$u_mess_one = $_POST['u_mess_one'];
	$u_mess_two = $_POST['u_mess_two'];
	$date = date("yy-m-d");
	
	move_uploaded_file($file['tmp_name'], '../asset/slider/'.$img_name);
	if($u_mess_one != "" && $u_mess_two != ""){
		$sql = "UPDATE vege_slid_add SET sider_image = '".$img_name."', mess_one= '".$u_mess_one."', mess_two='".$u_mess_two."' WHERE slid_id ='".$id."'";
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