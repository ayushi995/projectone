<?php
	include "../config/config.php";

	$cat = $_POST['u_cat'];		
	$u_name = $_POST['u_name'];
	$u_weight = $_POST['u_weight'];
	$file = $_FILES['file'];
	$u_price = $_POST['u_price'];
	$date = date("yy-m-d");
	
	$round = rand(1000, 9999);
	$fileType = $file['type'];
	$fileType = substr($fileType, 6);
	$filename = 'pro'.$round.'.'.$fileType;
	move_uploaded_file($file['tmp_name'], '../asset/upload/'.$filename);
	
	if($u_name != "" && $u_weight != "" &&  $u_price !=""){
		$sql = "insert into vege_pro_add (pro_id, cate_id,  pro_name, pro_weight, pro_image,  pro_price, status, created_date) values ('', '".$cat."', '".$u_name."', '".$u_weight."', '".$filename."', '".$u_price."', 1, '".$date."')";
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