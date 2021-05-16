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

 $_SESSION['order_id'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Payment</title>
</head>
<body>
<form method="post">

<?php include 'navbar.php'; ?>


<?php

nameaa("Payment");

?>



<div class="container mt-4">
	<div class="row">
		<div class="col-md-8">
			<div style="background: #fff; border-radius: 10px; padding: 10px; padding-bottom: 20px;">
				
				<div class="row">
					<div class="col-md-6">
						<h6 class="text_p">Cardholder Name</h6>
						<input type="text" name="" placeholder="Enter Cardholder Name" class="form-control">
					</div>
					<div class="col-md-6">
						<h6 class="text_p">Card Number</h6>
						<input type="text" name="" placeholder="Enter Card Number" class="form-control">
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<h6 class="text_p">Name Of Card</h6>
						<input type="text" name="" placeholder="Enter Name Of Card" class="form-control">
					</div>
					<div class="col-md-6">
						<h6 class="text_p">Card Typer</h6>
						<select class="form-control bg-light">
				         	<option>Debit Card</option>
					        <option>Credit Card</option>
				        </select>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<h6 class="text_p">Card Expirey</h6>
						<input type="text" name="" placeholder="Enter Card Expirey" class="form-control">
					</div>
					<div class="col-md-6">
						<h6 class="text_p">Card Expirey</h6>
						<input type="text" name="" placeholder="Enter Card Expirey" class="form-control">
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<h6 class="text_p">CVV</h6>
						<input type="text" name="" placeholder="Enter CVV" class="form-control">
					</div>
				</div>




			</div>
		</div>
		<div class="col-md-4">
			<div style="background: #fff; border-radius: 10px; padding: 10px; padding-bottom: 15px;">
                 <h5>Order Summary</h5>
<?php

include '../conn.php';

$email = $_SESSION['email'];

$sql = " select * from regi where email = '$email' ";

$run = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($run);

$id = $row['id'];

?> 
<?php
error_reporting(0);
            include '../conn.php';

            $sql = " select * from cart where user_id = '$id' ";

            $run = mysqli_query($conn,$sql);

            while ($row = mysqli_fetch_array($run)) 
            {
            	$p_id = $row['p_id'];

            	$sqa = " select * from addproduct where id = '$p_id' ";

            	$uau = mysqli_query($conn,$sqa);

            	while ($ra = mysqli_fetch_array($uau)) 
            	{

            		$toatl += $ra['i_price']*$row['p_qty'];
            		
            	}
            }
            
          ?>


          <div class="row mt-4">
          	<div class="col-md-6">
          		Total
          	</div>
          	<div class="col-md-6" style="text-align: right;">
          		&#x20B9;<?php echo $toatl; ?>
          	</div>
          </div>

          <hr>

<input type="submit" name="submit" value="Confirm Order" class="btn btn-success w-100 rounded-pill">


			</div>
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

if (isset($_POST['submit'])) 
{
	$order_id =  $_SESSION['order_id'];
    
    $sql = " update order_i set payment = 'Successful' where order_id = '$order_id' ";
 
    if (mysqli_query($conn,$sql)) 
    {
    	
    	$saaql = " delete from cart where user_id = '$id' ";

    	if (mysqli_query($conn,$saaql)) 
    	{
    		?>

<script>
                       
       location.href = "confirm.php";

 </script>


    		<?php
    	}
    	else
    	{
    		echo "Not Done";
    	}


    }
    else
    {
    	echo "Not Done";
    }

}

?>




	</center>


</form>
</body>
</html>