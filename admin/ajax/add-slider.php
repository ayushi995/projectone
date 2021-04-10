<?php
	include "../config/config.php";


	$file = $_FILES['file'];
	$u_mess_one = $_POST['u_mess_one'];
	$u_mess_two = $_POST['u_mess_two'];
	$date = date("yy-m-d");
	
	$round = rand(1000, 9999);
	$fileType = $file['type'];
	$fileType = substr($fileType, 6);
	$filename = 'sli'.$round.'.'.$fileType;
	move_uploaded_file($file['tmp_name'], '../asset/slider/'.$filename);
	
	if($u_mess_one != ""){
		$sql = "insert into vege_slid_add (slid_id, sider_image, mess_one, mess_two, status, created_date) values ('', '".$filename."', '".$u_mess_one."', '".$u_mess_two."', 1, '".$date."')";
		$query_two = mysqli_query($conn, $sql);
		if($query_two){
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