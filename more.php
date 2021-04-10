<?php 
include 'config/config.php';
if(!isset($_GET['id']) || $_GET['id'] == null){
	$sql_prod = 'select * from vege_pro_add';
}
else{
	$catId = $_GET['id'];
	$sql_prod = 'select * from vege_pro_add where cate_id="'.$catId.'"';
}
$query_prod = mysqli_query($conn, $sql_prod);

?>
<!DOCTYPE html>
<html lang="en">
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
<!----section-one--->
<?php include 'includes/header.php'; ?>
<!---section-five---->
<section class="more-main-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="sectionfive-heading">
					<span class="five-span"></span>
					<h2 class="five-h2 more-page-heading">Products</h2>
					<span class="five-span"></span>
				</div>
			</div>
			</div>
			<div class="row">
				<?php
					while($row = mysqli_fetch_array($query_prod)){
					?>
					<div class="col-md-3">
						<div class="box-five five-one">
							<span class="text-five" style="text-transform:capitalize"><?php echo $row['pro_name'] ?></span>
							<span class="text-five"><?php echo $row['pro_weight'] ?>kg</span>
							<img src="admin/asset/upload/<?php echo $row['pro_image']; ?>" height="250px" />
							<div class="gray-one-box">
								<span class="text-five-one">Rs - <?php echo $row['pro_price'] ?></span>
								<a href="order.php?id=<?php echo $row['pro_id'] ?>"><span class="fas fa-shopping-cart icon"></span></a>
							</div>
						</div>
					</div>
					<?php
					}
				?>
			</div>
			
	</div>
</section>
  <script src="js/jquery.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/common.js"></script>

</body>
</html>
