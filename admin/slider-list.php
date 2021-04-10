<?php 
	include 'config/config.php';
	$sql = 'select * from vege_slid_add';
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
				<td style="height:50px;">Product Id</td>
				<td>Mess-One</td>
				<td>Mess-Two</td>
				<td>Image Name</td>
				<td>Action</td>
			</tr>
			<?php
			while($row = mysqli_fetch_array($query)){
				?>
				<tr>
					<td style="height:50px;"><?php echo $row['slid_id'] ?></td>
					<td><?php echo $row['mess_one'] ?></td>
					<td><?php echo $row['mess_two'] ?></td>
					<td><?php echo $row['sider_image'] ?></td>
					<td class="edit"><a href="slider-edit.php?id=<?php echo $row['slid_id'] ?>">Edit</a>
					<a onclick="deleterecord(<?php echo $row['slid_id'] ?>)" href="javascript:void(0)">Delete</a></td>
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
<script>
	function deleterecord(id){
		console.log(id);
		$.ajax({
					type: "POST",
					url: 'ajax/slider-delete.php',
					data: {u_id:id},
					success: function(response)
					{
						console.log(response);
						if(response == 1){
							location.reload();
						}
					}
			   });
		
	}
</script>
</body>
</html>