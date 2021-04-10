<?php 
	include 'config/config.php';
	$sql = 'select * from vege_pro_add' ;
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
				<td style="height:50px;">Category Id</td>
				<td>Product Name</td>
				<td>Product Weight</td>
				<td>Image Name</td>
				<td>Price</td>
				<td>Featured</td>
				<td>Action</td>
			</tr>
			<?php
			while($row = mysqli_fetch_array($query)){
				?>
				<tr>
					<td style="height:50px;"><?php echo $row['pro_id'] ?></td>
					<td><?php echo $row['cate_id'] ?></td>
					<td><?php echo $row['pro_name'] ?></td>
					<td><?php echo $row['pro_weight'] ?></td>
					<td><?php echo $row['pro_image'] ?></td>
					<td><?php echo $row['pro_price'] ?></td>
					<td><?php if($row['status'] == 1){ 
						?>
						<button onclick="startmark(<?php echo $row['pro_id']; ?>, <?php echo $row['status']; ?> )"><i class="fas fa-star yellow-color" style="color:#ff8100;"></i></button>
						<?php
					} else {
						?>
						<button onclick="startmark(<?php echo $row['pro_id']; ?>, <?php echo $row['status']; ?>)"><i class="far fa-star"></i></button>
						<?php
					} ?></td>
					<td class="edit"><a href="product-edit.php?id=<?php echo $row['pro_id'] ?>">Edit</a>
					<a onclick="deleterecord(<?php echo $row['pro_id'] ?>)" href="javascript:void(0)">Delete</a></td>
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
	
		function startmark(id, status){
			var u_status = 0;
			if(status == '0'){
				u_status = 1;
			}
				$.ajax({
					type: "POST",
					url: 'ajax/star-add-pro.php',
					data: {f_id: id, f_status: u_status},
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