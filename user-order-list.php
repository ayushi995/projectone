<!DOCTYPE html>
<html>
<head>
<title>welcome</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/all.min.css" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php include 'includes/header.php'; ?>
<?php 
if(isset($_SESSION["id"])){
	$user_id = $_SESSION["id"];
}else{
	$user_id = null;
	
}
include 'config/config.php';
	$sql = "SELECT * FROM vege_pro_order 
	INNER JOIN vege_pro_add ON vege_pro_order.pro_id = vege_pro_add.pro_id where vege_pro_order.user_id = '".$user_id."'";
	$query = mysqli_query($conn,$sql);
?>
<!--section-one--->
<section class="section-table-one"></section>
	<div class="admin-main-two">
		<table border="1" cellspacing="0" width="100%">
			<tr style="font-weight:600;">
				<td style="height:50px;">Image</td>
				<td>Name</td>
				<td>Quantity</td>
				<td>Address</td>
			</tr>
			<?php
			while($row = mysqli_fetch_array($query)){
				?>
				<tr>
					<td style="height:50px;"><img src="admin/asset/upload/<?php echo $row['pro_image'] ?>" width="100" height="100" /></td>
					<td><?php echo $row['pro_name'] ?></td>
					<td><?php echo $row['quantity'] ?></td>
					<td><?php echo $row['address'] ?></td>
				</tr>
				<?php
				}
			?>
		</table>
	</div>
</section>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/common.js"></script>
</body>
</html>