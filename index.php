<?php
include 'config/config.php';
	$feature_sql = 'select * from vege_pro_add where status = 1';
	$feature_query = mysqli_query($conn,$feature_sql);
	$sql_two = 'select * from vege_slid_add';
	$query_two = mysqli_query($conn,$sql_two);
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
<?php include 'includes/header.php'; ?>
<!----section-two---->
<section class="section-two">
	<div class="container-fluid">
				<div class="row">
				<div class="owl-carousel owl-theme" id="slider">
						<?php
						while($row = mysqli_fetch_array($query_two)){
						?>
						<div class="item" style="width:100%">
							<div class="big-slider">
								<img src="admin/asset/slider/<?php echo $row['sider_image']; ?>" />
							</div>
							<div class="slider-contain">
								<h2 class="h2-two"><?php echo $row['mess_one']; ?></h2>
								<h2 class="h2two"><?php echo $row['mess_two']; ?></h2>
							</div>
						</div>
						<?php
						}
					?>
					</div>
				</div>
	</div>
</section>

<!---section-three--->
<section class="section-three">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="box-three blue">
					<div class="inner-box">
						<h2 class="three-h2-one">Vegetables</h2>
						<p class="three-p">Onion,Potato,Tomato,Cabbage,</br>Cauliflower,Ladies Finger,Bitter guard,Ginger,Raddish,Carrot,</br>Brinjal,Beet Root</p>
						<button class="three-btn yellow-btn">Shop Now</button>
					</div>
					<img src="asset/box1.png" class="abs-img" />
				</div>	
			</div>
			<div class="col-md-6">
				<div class="box-three yellow">
					<div class="inner-box">
						<h2 class="three-h2-two">Fruits</h2>
						<p class="three-p">Lorem Ipsum is simply dummy</br> text of the printing and typeset-</br>ting industry.Lorem ipsum has</br> been the industry's gallery</p>
						<button class="three-btn green-btn">Shop Now</button>
					</div>
					<img src="asset/box2.png" class="rel-img" />
					<img src="asset/box3.png" class="rel2-img" />
				</div>
			</div>
		</div>
	</div>
</section>

<!---section-four---->
<section class="section-four">
	<div class="container-fluid">
		<div class="row">
			<div class="main-four">
				<h2 class="four-h2">Now you can buy products online</h2>
				<p class="four-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
				Lorem Ipsum has</br> been the industry's standard dummy text ever since the 1500s, when an unknown printer took a</br> galley of type and scrambled 
				it to make a type specimen book. It has survived</p> 
				<button class="four-btn">Read More</button>
			</div>
				<img src="asset/image2.png" class="image2" />
				<img src="asset/image1.png" class="image1" />
				<img src="asset/image4.png" class="image3" />
		</div>
	</div>
</section>

<!---section-five---->
<section class="section-five">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="sectionfive-heading">
					<span class="five-span"></span>
					<h2 class="five-h2">Featured Products</h2>
					<span class="five-span"></span>
				</div>
			</div>
			</div>
			<div class="row">
				<div class="owl-carousel owl-theme" id="slider2">
						<?php
						while($row = mysqli_fetch_array($feature_query)){
						?>
						<div class="item">
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
	</div>
</section>

<!-- section six -->
<section class="section-six">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="box-six six-one">
					<img src="asset/vegetable2.png" />
				</div>
			</div>
			<div class="col-md-6">
				<div class="box-six six-two">
					<h1 class="six-h1">Get 50% off</h1>
					<p class="six-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
					Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
					printer took a galley of type and scrambled 
					it to make a type specimen book. It has survived</p>
					<button class="four-btn alagbtn">Shop Now</button>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- section seven -->
<section class="section-seven">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="box-seven seven-one">
					<h2 class="seven-h2">reach us</h2>
					<div class="space-one">
						<i class="fas fa-phone-alt icon1"></i>
						<span class="seven-span-one">+9953328764</span>
					</div>
					<div class="space-two">		
						<i class="far fa-envelope icon1"></i>
						<span class="seven-span-one">info@pgsoftwares.com</span>
					</div>
					<div class="space-three">		
						<i class="fas fa-map-marker-alt icon1"></i>
						<span class="seven-span-one alag-apan">#63,ARPEE CENTER, <div class="alag-div">#320 NSR Road,</div><div class="alag-div">Coimbatore,Tamilnadu</div><div class="alag-div"> INDIA</div></span>
					</div>
					<div class="social-link">
						<div class="f-icon">
							<i class="fab fa-facebook-f"></i>
						</div>
						<div class="f-icon">
							<i class="fab fa-twitter"></i>
						</div>
						<div class="f-icon">
							<i class="fab fa-instagram"></i>
						</div>
						<div class="f-icon">
							<i class="fab fa-youtube"></i>
						</div>
					</div>	
				</div>
			</div>
			<div class="col-md-8">
				<div class="box-seven seven-two">
					<h2 class="section-title">leave a message</h2>
					<div class="fotter-form">
						<input type="text" placeholder="Full Name"class="form-control" />
						<input type="text" placeholder="Email Address"class="form-control" />
						<textarea type="text" placeholder="Your Message"class="form-control"></textarea>
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
	$("#slider").owlCarousel({
    loop:true,
	autoplay:false,
    nav:true,
	dots:false,
	mouseDrag:true,
	navText: ["<i class='fas fa-chevron-left'></i>","<i class='fas fa-chevron-right'></i>"],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
	});
	
	
	$("#slider2").owlCarousel({
    loop:false,
	autoplay:false,
    nav:true,
	dots:true,
	mouseDrag:true,
	navText: ["<i class='fas fa-chevron-left'></i>","<i class='fas fa-chevron-right'></i>"],
    responsive:{
        0:{
            items:4
        },
        600:{
            items:4
        },
        1000:{
            items:4
        }
    }
	});
	
});
</script>
</body>
</html>
