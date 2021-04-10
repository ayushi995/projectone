<?php
if(!isset($_GET['id']) || $_GET['id'] == null){
	header("Location: category-list.php");
}
include 'config/config.php';
$id = $_GET['id'];
$sql = 'select * from add_category where cate_id="'.$id.'"';
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
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
		<div class="form-group">
			<label for="pwd">Category-Name:</label>
			<input type="text" class="form-control" value="<?php echo $row['cate_name']; ?>" placeholder="Enter Category-Name" id="name">
		</div>
		<div class="form-group">
			<label for="pwd">Status:</label>
			<input type="text" class="form-control" value="<?php echo $row['status']; ?>" placeholder="Enter Status" id="status">
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
			
			var u_name = $("#name").val();
			var u_status = $("#status").val();
						
			
			if(u_name == ""){
				$("#error").html("Please enter your Category-Name");
				return false;
			}
			else if(u_status == ""){
				$("#error").html("Please enter your Status");
				return false;
			}
			
			else{
				$.ajax({
					type: "POST",
					url: 'ajax/edit-category.php',
					data: {u_id: id, f_name: u_name,f_status: u_status},
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