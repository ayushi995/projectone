<?php
include 'config/config.php';
$sql = 'select * from vege_pro_add';
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
$sql2 = 'select * from add_category';
$query2 = mysqli_query($conn, $sql2);
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
<!---section-one-->
<section class="pa-section">
	<div class="pa-main">
	<div id="error"></div>
		<div>
			  <div class="form-group">
				<label for="pwd">Product-Name:</label>
				<input type="text" class="form-control" placeholder="Enter Product-Name" id="name">
			  </div>
			  <div class="form-group">
				<label for="pwd">Weight:</label>
				<input type="text" class="form-control" placeholder="Enter Weight" id="weight">
			  </div>
			  <div class="form-group">
				<label for="pwd">Product image:</label>
				<input type="file" accept="image/x-png,image/gif,image/jpeg" class="form-control" placeholder="Enter Price" id="file">
			  </div>
			  <div class="form-group">
				<label for="pwd">Price:</label>
				<input type="text" class="form-control" placeholder="Enter Price" id="price">
			  </div>
			  <div class="form-group">
				<label for="pwd">Category:</label>
				<select class="form-control" id="category">
				<option>Select Category</option>
				
				<?php
				while($row = mysqli_fetch_array($query2)){
				?>
					<option value="<?php echo $row['cate_id'] ?>"><?php echo $row['cate_name'] ?></option>
				<?php
					}
				?>
				</select>
			  </div>
			  <button class="btn btn-primary" id="register">Submit</button>
		</div>
	</div>
</section>

<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
	$(document).ready(function(){
		$("#register").click(function(){
			var u_name = $("#name").val();
			var u_weight = $("#weight").val();
			var u_price = $("#price").val();
			var u_cat = $("#category").val();
			var u_file = $('#file')[0].files[0];
			
			
			
			
			let fData = new FormData();
			fData.append('u_name', u_name);
			fData.append('u_weight', u_weight);
			fData.append('u_price', u_price);
			fData.append('u_cat', u_cat);
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
			}
			$.ajax({
					type: "POST",
					url: 'ajax/add_product.php',
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
		});
	});
</script>
</body>
</html>