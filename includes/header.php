<?php 
include 'config/config.php';
$sql = 'select * from add_category';
$query = mysqli_query($conn, $sql);
session_start();
if(isset($_SESSION["id"])){
$profile = $_SESSION["profile"];	
}

?>
<html>
<head></head>
<body>
<!----section-one--->
<section class="section-one">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="logo">
					<a href="index.php"><img src="asset/logo2.jpg" /></a>
				</div>
			</div>
			<div class="col-md-8">
				<div class="main-menu">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li class="drop-menu"><a href="more.php">Products</a>
							<ul class="submenu">
							<?php
							while($row = mysqli_fetch_array($query)){
							?>
								<li><a href="more.php?id=<?php echo $row['cate_id'] ?>" ><?php echo $row['cate_name'] ?></a></li>
							<?php
								}
							?>
							</ul>
						</li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Contact Us</a></li>
						<?php 
							if(isset($_SESSION["id"])){
								$username = $_SESSION["user"];
								?>	
								<li class="profile">
									<a href="javascript:void(0)" id="dropdown">
										<img src="asset/profile2.jpg" /> <?php echo $username; ?></a>
										<ul id="submenu" class="profile-menu">
											<li><a href="profile-edit.php">Profile</a></li>
											<li><a href="user-order-list.php">Order</a></li>
											<li><a href="logout.php">Logout</a></li>
										</ul>
									
								</li>
								
								<?php
							}else{
								?>
								<li class="green"><a href="login.php">SignIn</a></li>
								<li class="green"><a href="register.php">SignOut</a></li>
								<?php
							}
						?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
</body>
</html>