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
				<label for="pwd">Slider image:</label>
				<input type="file" accept="image/x-png,image/gif,image/jpeg" class="form-control" placeholder="Enter Price" id="file">
			  </div>
			  <div class="form-group">
				<label for="pwd">Description:</label>
				<input type="text" class="form-control" placeholder="Enter Price" id="mess_one">
			  </div>
			   <div class="form-group">
				<label for="pwd">Description:</label>
				<input type="text" class="form-control" placeholder="Enter Price" id="mess_two">
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
			var u_mess_one = $("#mess_one").val();
			var u_mess_two = $("#mess_two").val();
			var u_file = $('#file')[0].files[0];
			
			
			
			
			let fData = new FormData();
			fData.append('u_mess_one', u_mess_one);
			fData.append('u_mess_two', u_mess_two);
			fData.append('file', u_file);
						
			if(u_mess_one == ""){
				$("#error").html("Please enter your description");
				return false;
			}
			
			else{
			}
			$.ajax({
					type: "POST",
					url: 'ajax/add-slider.php',
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