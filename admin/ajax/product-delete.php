<?php
	include "../config/config.php";

	$id = $_POST['u_id'];
	if($id != ''){
		$sql = "DELETE FROM vege_pro_add WHERE pro_id=".$id; 
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