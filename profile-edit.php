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
<?php 
	include 'config/config.php';
	$user_id = $_SESSION['id'];
	$sql = 'select * from vege_user where user_id="'.$user_id.'"';
	$query = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($query);
	$img_name = $row['profile'];
	
?>
<!----register-section-one--->
<section class="register-section-one">
	<div class="register-main-div">
	<div id="register-error"></div>
		<div class="row">
			<div class="col-md-12">
				<div class="register-profile">
					<input type="file" id="profilepic" style="display:none" />
					<img src="asset/upload/<?php echo $img_name; ?>" id="dummypic" />
				</div>
				<?php 
					if(isset($_SESSION["id"])){
					$username = $_SESSION["user"];
				?>
				
				<div class="profile-info">
					<h3>Name : <input type="text"  value="<?php echo $row['name']; ?>"  id="name"/></h3>
					<h3>Mobile : <input type="text"  value="<?php echo $row['mobile']; ?>" id="mobile" /></h3>
					<h3>Email : <input type="text" value="<?php echo $row['email']; ?>" id="email" /></h3>
					<h3>Password : <input type="text" value="<?php echo $row['password']; ?>" id="pass" /></h3>					
					<a href="javascript:void(0)" id="register">Upload</a>
				</div>
					
			<?php
			}else{
			?>
				sdfdf
				<?php
			}
			?>

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
		
		$("#dummypic").click(function(){
			$("#profilepic").click();			
		});
		
		$("#register").click(function(){
			var u_id = "<?php echo $user_id; ?>";
			var imagename = "<?php echo $img_name; ?>";
			var u_name = $("#name").val();
			var u_mobile = $("#mobile").val();
			var u_email = $("#email").val();
			var u_pass = $("#pass").val();	
			var u_file = $('#profilepic')[0].files[0];
			 
			var fData = new FormData();
			fData.append('id', u_id);
			fData.append('img_name', imagename);
			fData.append('file', u_file);
			fData.append('u_name', u_name);
			fData.append('u_mobile', u_mobile);
			fData.append('u_email', u_email);
			fData.append('u_pass', u_pass);
		
			if(u_name == ""){
				$("#register-error").html("Please enter your name");
				return false;
			}
			else if(u_email == ""){
				$("#register-error").html("Please enter your email");
				return false;
			}
			else if(u_pass == ""){
				$("#register-error").html("Please enter your password");
				return false;
			}

			else{
			
				$.ajax({
					type: "POST",
					url: 'ajax/profile-edit.php',
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