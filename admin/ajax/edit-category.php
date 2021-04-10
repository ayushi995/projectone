<?php
	include "../config/config.php";

	$id = $_POST['u_id'];
	$name = $_POST['f_name'];
	$status = $_POST['f_status'];
	$date = date("yy-m-d");
	
	if($name != "" && $status != "" ){
		$sql = "UPDATE add_category SET cate_name = '".$name."', status= '".$status."' WHERE cate_id ='".$id."'";
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