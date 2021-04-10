<?php
	include "../config/config.php";

	$proid = $_POST['f_proid'];
	$userid = $_POST['f_userid'];
	$quantity = $_POST['f_quantity'];
	$address = $_POST['f_address'];
	$date = date("yy-m-d");
	
	
	if($quantity != "" && $address !=""){
		$sql = "insert into vege_pro_order (order_id, user_id, pro_id, quantity, address, status, created_date) values ('', '".$userid."', '".$proid."', '".$quantity."',  '".$address."',  1, '".$date."')";
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