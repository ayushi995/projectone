<?php 
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
<!---section-one--->
<section class="section-one">
	<div class="main-one">
		<div class="box box-one">
			<div class="overlay"></div>
			<div class="testomonial">
				<h2>Hello</h2>
				<h2 class="world">World <span>&#9679;</span></h2>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				<h3>Login With Social media</h3>
				<a href="" class="facebook"><i class="fab fa-facebook-f"></i></a>
				<a href="" class="twitter"><i class="fab fa-twitter"></i><span>Login With Twitter</span></a>
			</div>
		</div>
		<div class="box box-two">
			<div class="login-p">
				<h2>Login</h2>
				<p>Don't have anb account?Create Your account,it takes less than a minute</p>
				<div class="input-main">
					<input type="text" class="input-field" placeholder="Enter Your Name" id="email" />
					<input type="password" class="input-field" placeholder="Enter Your Password" id="pass" />
				<div class="check-box">
					<input type="checkbox" class="check-field"/><span>Remember me</span>
					<h4>Forgot Password?</h4>
				</div>
				</div>
				<div class="login-btn">
					<button id="login">Login</button>
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
		$("#login").click(function(){
			var u_email = $("#email").val();
			var u_pass = $("#pass").val();
			
			if(u_email == ""){
				$("#login-error").html("Please enter your email");
				return false;
			}
			else if(u_pass == ""){
				$("#login-error").html("Please enter your password");
				return false;
			}
			else{
				$.ajax({
					type: "POST",
					url: 'ajax/login.php',
					data: {f_email: u_email, f_pass: u_pass},
					success: function(response)
					{
						console.log(response);
						if(response == 1){
							window.location.href = "http://localhost/project/vegetable/";
						}
					}
			   });
			}
		});
	});
</script>
</body>
</html>
