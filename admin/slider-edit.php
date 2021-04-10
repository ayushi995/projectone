<?php
if(!isset($_GET['id']) || $_GET['id'] == null){
	header("Location: slider-list.php");
}
include 'config/config.php';
$id = $_GET['id'];
$sql = 'select * from vege_slid_add where slid_id="'.$id.'"';
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
$img_name = $row['sider_image'];
?>
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
<!--section-one--->
	<div class="admin-main-two">
		<div class="editimg">
			<img src="asset/slider/<?php echo $img_name; ?>" width="100px" height="100px" />
		</div>
		<div class="form-group">
			<label for="pwd">Product-Name:</label>
			<input type="text" class="form-control" value="<?php echo $row['mess_one']; ?>" placeholder="Enter Product-Name" id="mess_one">
		</div>
		<div class="form-group">
			<label for="pwd">Weight:</label>
			<input type="text" class="form-control" value="<?php echo $row['mess_two']; ?>" placeholder="Enter Weight" id="mess_two">
		</div>
		<div class="form-group">
			<label for="pwd">Product image:</label>
			<input type="file" accept="image/x-png,image/gif,image/jpeg" class="form-control" placeholder="Enter image" id="file">
		</div>
		<button class="btn btn-primary" id="update">Update</button>
	</div>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script>
	$(document).ready(function(){
		$("#update").click(function(){
			var id = "<?php echo $id; ?>";
			var imagename = "<?php echo $img_name; ?>";
			
			var u_mess_one = $("#mess_one").val();
			var u_mess_two = $("#mess_two").val();
			var u_file = $('#file')[0].files[0];
			
			let fData = new FormData();
			fData.append('id', id);
			fData.append('img_name', imagename);
			fData.append('u_mess_one', u_mess_one);
			fData.append('u_mess_two', u_mess_two);
			fData.append('file', u_file);
						
			
			if(u_mess_one == ""){
				$("#error").html("Please enter your mess_one");
				return false;
			}
			else if(u_mess_two == ""){
				$("#error").html("Please enter your mess_two");
				return false;
			}
			
			else{
				$.ajax({
					type: "POST",
					url: 'ajax/edit-slider.php',
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