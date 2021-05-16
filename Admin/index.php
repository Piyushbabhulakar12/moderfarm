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
	<title>Inventory</title>
</head>
<body>
<form method="post">
	

<?php include 'navbar.php'; ?>

<?php

include '../conn.php';

$sql = " select * from a_hit ";

$run = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($run)) 
{
@$tot += $row['total_price'];	
}

?>

<div class="container mt-4">
	<div class="row">
		<div class="col-md-3 mt-3">
            <div style="background: #fff; padding: 15px;" class="border-top border-success border-3">
            	<h4>Total</h4>
            	<h5 style="color: #0005; margin-top: 10px;">&#8377;<?php echo $tot; ?></h5>
            </div>

		</div>
		<div class="col-md-3 mt-3">
			<div style="background: #fff; padding: 15px;" class="border-top border-success border-3">

			<h4>Order</h4>
			<?php
             
             include '../conn.php';

             $sql = " select * from order_i where action = 'Pending' ";

             $run = mysqli_query($conn,$sql);

             $tot_orde = mysqli_num_rows($run);
 
			?>
			<h5 style="color: #0005; margin-top: 10px;"><?php echo $tot_orde; ?></h5>
			</div>
		</div>
		<div class="col-md-3 mt-3">
			<div style="background: #fff; padding: 15px;" class="border-top border-success border-3">
			<h4>Product</h4>
			<?php
             
             include '../conn.php';

             $sql = " select * from addproduct ";

             $run = mysqli_query($conn,$sql);

             $tot_prp = mysqli_num_rows($run);
 
			?>

			<h5 style="color: #0005; margin-top: 10px;"><?php echo $tot_prp; ?></h5>
		</div>
		</div>
		<div class="col-md-3 mt-3">
			<div style="background: #fff; padding: 15px;" class="border-top border-success border-3">
			<h4>Order Confiremd</h4>
			<?php

include '../conn.php'; 

$sql = " select * from a_hit";

$run = mysqli_query($conn,$sql);

$tota_pro = mysqli_num_rows($run);

?>
<h5 style="color: #0005; margin-top: 10px;"><?php echo $tota_pro; ?></h5>
</div>
		</div>
	</div>
</div>








<div class="container">
	<div class="row">
		<div class="col-md-6">



         <div class="container mt-4">
         	<h6>All Product</h6>
	<div class="row">
		<div class="col-md-12">
			<div class="row bg-success p-3">
				<div class="col-3">
					Image
				</div>
				<div class="col-5">
					Name
				</div>
				<div class="col-2">
					Price
				</div>
				<div class="col-2">
					Status
				</div>
			</div>
		</div>
	</div>
</div>



<div class="container ">
	<div class="row">
		<div class="col-md-12">
<?php

include '../conn.php';

$sql = " select * from addproduct ";

$run = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($run)) 
{
	
?>
			<div class="row bg-light p-3">
				<div class="col-3">
					<img src="../Image/<?php echo $row['img1']; ?>" style="height: 100px; width: 100%; object-fit: cover;">
				</div>
				<div class="col-5">
					<?php echo $row['i_name']; ?>
				</div>
				<div class="col-2">
					<?php echo $row['i_price']; ?>
				</div>
				<div class="col-2">
					<?php
                    
                    if ($row['status'] == 'Active') 
                    {
                       ?>
                        <span style="color: green;"><?php echo $row['status']; ?></span>
                       <?php
                    }
                    else
                    {
                    	?>
                      <span style="color: red;"> <?php echo $row['status']; ?></span>
                    	<?php
                    }

          		?>
				</div>
				
			</div>
				<?php } ?>
		</div>

	</div>
</div>



			
		</div>
		<div class="col-md-6">


              
              <div class="container mt-4">
              	<h6>Recent Order</h6>
	<div class="row">
		<div class="col-md-12">
			<div class="row bg-success p-3">
				<div class="col-3">
					Image
				</div>
				<div class="col-5">
					Name
				</div>
				<div class="col-2">
					Price
				</div>
				<div class="col-2">
					Status
				</div>
			</div>
		</div>
	</div>
</div>



<div class="container ">
	<div class="row">
		<div class="col-md-12">
<?php

include '../conn.php';

$sql = " select * from order_i ";

$run = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($run)) 
{
	
?>
			<div class="row bg-light p-3">
				<div class="col-3">
					<img src="../Image/<?php echo $row['i_img']; ?>" style="height: 100px; width: 100%; object-fit: cover;">
				</div>
				<div class="col-5">
					<?php echo $row['i_name']; ?>
				</div>
				<div class="col-2">
					<?php echo $row['i_price']; ?>
				</div>
				<div class="col-2">
					<?php
                    
                    if ($row['action'] == 'Confirm') 
                    {
                       ?>
                        <span style="color: green;"><?php echo $row['action']; ?></span>
                       <?php
                    }
                    else
                    {
                    	?>
                      <span style="color: red;"> <?php echo $row['action']; ?></span>
                    	<?php
                    }

          		?>
				</div>
				
			</div>
				<?php } ?>
		</div>

	</div>
</div>







			
		</div>
	</div>
</div>









</form>
</body>
</html>