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
<!----register-section-one--->
<section class="register-section-one">
	<div class="register-main-div">
		<div class="row">
			<div class="col-md-12">
				<div class="register-profile">
					<input type="file" id="profilepic" style="display:none;" />
					<img src="asset/profile2.jpg" id="dummypic" />
				</div>
				<div class="register-contain">
					<h1>Get started with a free account</h1>
					<p>Create a free MailChimp account to send beautiful emails to customers, <br>contributors,
					 and fans.Already have a MailChimp account?</p>
					 <div class="register-error"></div>
					 <div class="register-inputs">
						<label>Name</label><br>
						<input type="text" id="name" /><br>
						<label>Mobile</label><br>
						<input type="text" id="mobile" /><br>
						<label>Email</label><br>
						<input type="text" id="email" /><br>
						<label>Password</label><br>
						<input type="password" id="pass" />
					 </div>
					 <button  id="register">Get Started</button>
				</div>
			</div>
		</div>
	</div>
<section>
  <script src="js/jquery.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<script>
	$(document).ready(function(){
		
		$("#dummypic").click(function(){
			$("#profilepic").click();
		});
		
		$("#register").click(function(){
			var u_name = $("#name").val();
			var u_mobile = $("#mobile").val();
			var u_email = $("#email").val();
			var u_pass = $("#pass").val();	
			
			if(u_name == ""){
				$(".register-error").html("Please enter your name");
				return false;
			}
			else if(u_email == ""){
				$(".register-error").html("Please enter your email");
				return false;
			}
			else if(u_pass == ""){
				$(".register-error").html("Please enter your password");
				return false;
			}

			else{
			
				$.ajax({
					type: "POST",
					url: 'ajax/register.php',
					data: {f_name: u_name, f_mobile: u_mobile, f_email: u_email, f_pass: u_pass},
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
