<!DOCTYPE html>
<html>
<head>
  <title>Welcome</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Sofia&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/all.min.css" />
  <link rel="stylesheet" href="css/owl.carousel.min.css" />
  <link rel="stylesheet" href="css/owl.theme.default.min.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'includes/header.php'; ?>
<?php
if(!isset($_GET['id']) || $_GET['id'] == null){
                             	
}
include 'config/config.php';
$id = $_GET['id'];
$sql = 'select * from vege_pro_add where pro_id="'.$id.'"';
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
$img_name = $row['pro_image'];
if(isset($_SESSION["id"])){
	$user_id = $_SESSION["id"];
}else{
	$user_id = null;
}
?>
<section class="section-order-one">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="order-image">
					<img src="admin/asset/upload/<?php echo $img_name; ?>" />
				</div>
			</div>
			<div class="col-md-6">
				<div class="row">
				<div class="col-md-12" id="order-error"></div>
					  <div class="col-md-12">
						<div class="order-name"><?php echo $row['pro_name']; ?></div>
					  </div>
					  <div class="col-md-12">
						<select id="quantity">
							<option value="">please select</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
						</select>
					  </div>
					  <div class="col-md-12">
							<input type="text" placeholder="shipping address" id="address" />
						</div>
					  <div class="col-md-12">
						<div class="order-price"><?php echo $row['pro_price']; ?></div>
					  </div>
					  <div class="col-md-12">
						<?php if($user_id == null){
							?>
								<a href="login.php" class="btn btn-primary">Buy</a>
							<?php							
						}else{
							?>
								<a href="javascript:void(0)" class="btn btn-primary" id="order">Buy</a>
							<?php
						}?>
						
					 </div>
				</div>
			</div>
		</div>
	</div>
</section>
	<script src="js/jquery.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/common.js"></script>
<script>
	$(document).ready(function(){
		$("#order").click(function(){
			var p_id = "<?php echo $id; ?>";
			var u_id = "<?php echo $user_id; ?>";
			
			var quantity = $("#quantity").val();
			var address = $("#address").val();
			
			if(quantity == ""){
				$("#order-error").html("Please select quantity");
				return false;
			}
			else if(address == ""){
				$("#order-error").html("Please enter your shipping address");
				return false;
			}

			else{
			
				$.ajax({
					type: "POST",
					url: 'ajax/order.php',
					data: {f_proid: p_id, f_userid: u_id, f_quantity: quantity, f_address: address},
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