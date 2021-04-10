<?php
	include "../config/config.php";

	$id = $_POST['u_id'];
	if($id != ''){
		$sql = "DELETE FROM add_category WHERE cate_id=".$id; 
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