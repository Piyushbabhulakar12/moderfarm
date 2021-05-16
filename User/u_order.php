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
	<title>Order</title>
	<style type="text/css">
		a
		{
			color: #001;
		}
		a:hover
		{
			color: #001;
		}
	</style>
</head>
<body>
<form method="post">

<?php include 'navbar.php'; ?>
<?php

nameaa("Order");

?>

<br>





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

$sql = " select * from order_i where user_id = '$id' ";

$run = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($run)) 
{

?>
<div style="background: #fff;">
			 <div class="row mt-3">
				<div class="col-md-4">
					<img src="../Image/<?php echo $row['i_img']; ?>" style="height: 180px; width: 100%; object-fit: cover;">
				</div>
				<div class="col-md-8" style="padding: 10px;">
					<div class="container">
						<h6 style="font-size: 12px; color: gray;">Order Id - <?php echo $row['order_id']; ?></h6>
					<a href="order_detail.php?id=<?php echo $row['id']; ?>" style="color: #001;"><h6><?php echo $row['i_name']; ?></h6></a>
					<h6 style="font-size: 12px; color: gray;">Qty - <?php echo $row['i_qty']; ?></h6>
					<h6 style="font-size: 12px; color: gray;">Paid - <?php echo $row['payment']; ?></h6>
					<h5 class="text-success">&#x20B9;<?php echo $row['i_price']; ?></h5>
					</div>
				</div>
				</div>
				</div>
			<?php } ?>
			
		</div>
	</div>
</div>











<br><br><br>

</form>
</body>
</html>