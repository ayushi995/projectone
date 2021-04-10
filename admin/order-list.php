<?php 
	include 'config/config.php';

	$sql = "select * from vege_pro_order inner join vege_user on vege_pro_order.user_id = vege_user.user_id 
	inner join vege_pro_add on vege_pro_order.pro_id = vege_pro_add.pro_id";
	$query = mysqli_query($conn,$sql);
?>
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
<?php include 'includes/common.php'; ?>
<!--section-one--->
<section class="section-table-one"></section>
	<div class="admin-main-two">
		<table border="1" cellspacing="0" width="100%">
			<tr style="font-weight:600;">
				<td style="height:50px;">Order Id</td>
				<td>User Id</td>
				<td>Product Id</td>
				<td>User Name</td>
				<td>Product Name</td>
				<td>Quantity</td>
			</tr>
			<?php
			while($row = mysqli_fetch_array($query)){
				?>
				<tr>
					<td style="height:50px;"><?php echo $row['order_id'] ?></td>
					<td><?php echo $row['user_id'] ?></td>
					<td><?php echo $row['pro_id'] ?></td>
					<td><?php echo $row['name'] ?></td>
					<td><?php echo $row['pro_name'] ?></td>
					<td><?php echo $row['pro_weight'] ?></td>
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

</body>
</html>