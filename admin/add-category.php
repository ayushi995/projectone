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
				<label for="pwd">Category-Name:</label>
				<input type="text" class="form-control" placeholder="Enter Product-Name" id="name">
			  </div>
			  <div class="form-group">
				<label for="pwd">Status:</label>
				<select id="status" class="form-control">
					<option value="">Select</option>
					<option value="1">Active</option>
					<option value="0">Deactive</option>
				</select>
			  </div>
			  <button class="btn btn-primary" id="submit">Submit</button>
		</div>
	</div>
</section>

<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
	$(document).ready(function(){
		$("#submit").click(function(){
			var u_name = $("#name").val();
			var u_status = $("#status").val();
			
			
			if(u_name == ""){
				$("#error").html("Please enter your Category Name");
				return false;
			}else if(u_status == ''){
				$("#error").html("Please select status");
				return false;
			}
			else{
			
				$.ajax({
					type: "POST",
					url: 'ajax/category-add.php',
					data: {f_name: u_name,f_status: u_status},
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