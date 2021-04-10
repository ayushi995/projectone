<?php
	include "../config/config.php";

	
	$id = $_POST['f_id'];
	$status = $_POST['f_status'];
	

		$sql = "UPDATE vege_pro_add SET status = '".$status."' WHERE pro_id ='".$id."'";
		$query = mysqli_query($conn, $sql);
		if($query){
			echo 1;
		}
		else{
			echo 2;
		}


?>