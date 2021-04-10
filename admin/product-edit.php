<?php
if(!isset($_GET['id']) || $_GET['id'] == null){
	header("Location: product-list.php");
}
include 'config/config.php';
$id = $_GET['id'];
$sql = 'select * from vege_pro_add where pro_id="'.$id.'"';
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
$img_name = $row['pro_image'];
?>
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
	<div class="admin-main-two">
		<div class="editimg">
			<img src="asset/upload/<?php echo $img_name; ?>" width="100px" height="100px" />
		</div>
		<div class="form-group">
			<label for="pwd">Product-Name:</label>
			<input type="text" class="form-control" value="<?php echo $row['pro_name']; ?>" placeholder="Enter Product-Name" id="name">
		</div>
		<div class="form-group">
			<label for="pwd">Weight:</label>
			<input type="text" class="form-control" value="<?php echo $row['pro_weight']; ?>" placeholder="Enter Weight" id="weight">
		</div>
		<div class="form-group">
			<label for="pwd">Product image:</label>
			<input type="file" accept="image/x-png,image/gif,image/jpeg" class="form-control" placeholder="Enter image" id="file">
		</div>
		<div class="form-group">
			<label for="pwd">Price:</label>
			<input type="text" value="<?php echo $row['pro_price']; ?>" class="form-control" placeholder="Enter Price" id="price">
		</div>
		<button class="btn btn-primary" id="update">Update</button>
	</div>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script>
	$(document).ready(function(){
		$("#update").click(function(){
			var id = "<?php echo $id; ?>";
			var imagename = "<?php echo $img_name; ?>";
			
			var u_name = $("#name").val();
			var u_weight = $("#weight").val();
			var u_price = $("#price").val();
			var u_file = $('#file')[0].files[0];
			
			let fData = new FormData();
			fData.append('id', id);
			fData.append('img_name', imagename);
			fData.append('u_name', u_name);
			fData.append('u_weight', u_weight);
			fData.append('u_price', u_price);
			fData.append('file', u_file);
						
			
			if(u_name == ""){
				$("#error").html("Please enter your product_name");
				return false;
			}
			else if(u_weight == ""){
				$("#error").html("Please enter your weight");
				return false;
			}
			else if(u_price == ""){
				$("#error").html("Please enter your price");
				return false;
			}
			
			else{
				$.ajax({
					type: "POST",
					url: 'ajax/edit_product.php',
					data: fData,
					processData: false,
					contentType: false,
					success: function(response)
					{
						console.log(response);
						if(response == 1){
							location.reload();
						}
					}
			   });
			}
			
		});
	});
</script>

</body>
</html>