<?php 
	include 'config/config.php';

	$sql = 'select * from add_category' ; 
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
				<td style="height:50px;">Category Id</td>
				<td>Category Name</td>
				<td>Status</td>
				<td>Action</td>
			</tr>
			<?php
			while($row = mysqli_fetch_array($query)){
				?>
				<tr>
					<td style="height:50px;"><?php echo $row['cate_id'] ?></td>
					<td><?php echo $row['cate_name'] ?></td>
					<td><?php echo $row['status'] ?></td>
					<td class="edit"><a href="product-add.php?id=<?php echo $row['cate_id'] ?>">Edit</a>
					<a onclick="deleterecord(<?php echo $row['cate_id'] ?>)" href="javascript:void(0)">Delete</a></td>
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
		$.ajax({
					type: "POST",
					url: 'ajax/category-delete.php',
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