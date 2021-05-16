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
	<title>Order Detail</title>
</head>
<body>
<form method="post">
	
	<?php include 'navbar.php'; ?>

	<?php

nameaa("Order Detail");

?>


<div class="container">
	<div class="row">
		<div class="col-md-8 m-auto">
			
				<?php

include '../conn.php';

$email = $_SESSION['email'];

$sql = " select * from regi where email = '$email' ";

$run = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($run);

$id = $row['id'];

?> 
<?php

include '../conn.php';

$id = $_GET['id'];

$sql = " select * from order_i where id = '$id' ";

$run = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($run);

$order_id = $row['order_id'];

?>
<div style="background: #fff;">
			 <div class="row mt-3">
				<div class="col-md-4">
					<img src="../Image/<?php echo $row['i_img']; ?>" style="height: 180px; width: 100%;">
				</div>
				<div class="col-md-8" style="padding: 10px;">
					<h6 style="font-size: 12px; color: gray;">Order Id - <?php echo $row['order_id']; ?></h6>
					<a href="order_detail.php?id=<?php echo $row['id']; ?>" style="color: #001;"><h6><?php echo $row['i_name']; ?></h6></a>
					<h6 style="font-size: 12px; color: gray;">Qty - <?php echo $row['i_qty']; ?></h6>
					<h6 style="font-size: 12px; color: gray;">Paid - <?php echo $row['payment']; ?></h6>
					<h5 class="text-success">&#x20B9;<?php echo $row['i_price']; ?></h5>
				</div>
				</div>
				</div>
			
		</div>
	</div>
</div>






<div class="container mt-4">
	<div class="row">
		<div class="col-md-8 m-auto">
           <div style="background: #fff; padding: 10px;">
           	<h6>Personal Detail</h6>

           	<h6 style="font-size: 15px; color: gray;"><?php echo $row['f_name']; ?><br>
	        <?php echo $row['email']; ?><br>
		    <?php echo $row['phone']; ?><br>
		    <?php echo $row['addr']; ?><br>
		    <?php echo $row['city']; ?><br>
		    <?php echo $row['pin']; ?><br>
		    <?php echo $row['state']; ?></h6>

           </div>
		</div>
	</div>
</div>





<div class="container mt-4">
	<h6 style="text-align: center;">Some Other Order On This</h6>
</div>




<div class="container">
	<div class="row">
		<div class="col-md-8 m-auto">
			
<?php

$id = $_GET['id'];

include '../conn.php';

$sql = " select * from order_i where order_id = '$order_id' and id != '$id' ";

$run = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($run)) 
{

?>
<div style="background: #fff;">
			 <div class="row mt-3">
				<div class="col-md-4">
					<img src="../Image/<?php echo $row['i_img']; ?>" style="height: 180px; width: 100%;">
				</div>
				<div class="col-md-8" style="padding: 10px;">
					<h6 style="font-size: 12px; color: gray;">Order Id - <?php echo $row['order_id']; ?></h6>
					<a href="order_detail.php?id=<?php echo $row['id']; ?>" style="color: #001;"><h6><?php echo $row['i_name']; ?></h6></a>
					<h6 style="font-size: 12px; color: gray;">Qty - <?php echo $row['i_qty']; ?></h6>
					<h6 style="font-size: 12px; color: gray;">Paid - <?php echo $row['payment']; ?></h6>
					<h5 class="text-success">&#x20B9;<?php echo $row['i_price']; ?></h5>
				</div>
				</div>
				</div>
			<?php } ?>
			
		</div>
	</div>
</div>


<?php

include '../conn.php';

$email = $_SESSION['email'];

$sql = " select * from regi where email = '$email' ";

$run = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($run);

$id = $row['id'];

?> 
<?php

include '../conn.php';

$sql = " select * from order_i where user_id = '$id' ";

$run = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($run)

?>


<div class="container mt-4">
	<div class="row">
		<div class="col-md-8 m-auto">
			<div style="background: #fff; border-radius: 10px;">
				<div class="row mt-3" style="padding: 10px;">
					<div class="col-md-6 mt-3">
						<h3>Total Price </h3>
					</div>
					<div class="col-md-6 mt-3" style="text-align: right;">
						<h3>&#x20B9;<?php echo $row['total_price']; ?></h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>




<br>
<center>


<input type="button" name="" value="Invoice" onclick="window.print()" class="btn btn-light">
<a href="u_order.php"><input type="button" name="" value="Back" class="btn btn-light"></a>



</center>





<br><br><br>
</form>
</body>
</html>