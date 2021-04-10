<?php
	include "../config/config.php";
	$name = $_POST['f_name'];
	$status = $_POST['f_status'];
	$date = date("yy-m-d");
	
	
	if($name != "" && $status !=""){
		$sql = "insert into add_category (cate_id, cate_name, status, created_date) values ('', '".$name."', '".$status."', '".$date."')";
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