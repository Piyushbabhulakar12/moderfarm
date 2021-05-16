<?php

session_start();

if ($_SESSION['email'] == true) 
{
	 $_SESSION['email'];
}
else
{
	header("location:sign/sign.php");
}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Add Blog</title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
	
<?php include 'navbar.php'; ?>



<div class="container mt-3">
	<div class="row">
		<div class="col-md-8 m-auto">
			<?php

include '../conn.php';

$sql = " select * from blog ";

$run = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($run)) 
{
	
?>
			<div style="background: #fff; border-radius: 10px;" class="mt-3">
				<div class="row">
					<div class="col-md-4">
						<img src="../Image/<?php echo $row['b_img']; ?>" style="width: 100%; height: 200px; border-radius: 10px 0px 0px 10px;">
					</div>
					<div class="col-md-8">
						<div class="container" style="padding: 15px;">
							<h6><?php echo $row['b_name']; ?></h6>
							<h6 style="font-size: 12px; color: gray; text-overflow: ellipsis; overflow: hidden; white-space: nowrap; max-height: 3.6em; -webkit-line-clamp: 3; "><?php echo $row['b_des']; ?></h6>
							<h6 style="font-size: 12px;" class="text-success"><?php echo $row['b_date']; ?></h6>
						</div>
					</div>
				</div>
			</div>

	<?php } ?>
		</div>
	</div>
</div>







<br>



</form>
</body>
</html>