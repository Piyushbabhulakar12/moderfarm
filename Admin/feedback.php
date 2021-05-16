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
	<title>History</title>
</head>
<body>
<form method="post">

	<?php include 'navbar.php'; ?>




<div class="container mt-4">
	 <div class="row">
	 	<div class="col-md-12">
	 		<div style="background: #fff; padding: 15px; padding-bottom: 10px;">
	 		<?php
             
             include '../conn.php';

             $sql = " select * from contact ";

             $run = mysqli_query($conn,$sql);
             
             while ($row = mysqli_fetch_array($run)) 
             {
             	$name = $row['name'];
             
	 		?>

	 			<div class="row mt-2">
	 				<div class="col-md-1 col-2">
	 					<center><h3 style="background: #0001; border-radius: 50px; text-align: center; line-height: 50px; width: 52px; height: 50px;"><?php echo $a = $name[0]; ?></h3></center>
	 				</div>
	 				<div class="col-md-11  col-12">
	 					<h6 style="margin-top: 4px;"><?php echo $row['name']; ?></h6>
	 					<h6 style="font-size: 13px;"><?php echo $row['mess']; ?></h6>
	 				</div>
	 			</div>

	 	<?php } ?>
	 			
	 		</div>
	 	</div>
	 </div>
</div>







</form>
</body>
</html>