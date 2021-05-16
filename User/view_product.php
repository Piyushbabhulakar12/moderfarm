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
	<title></title>
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

nameaa("Product Detail");

?>




<?php

$id = $_GET['id'];

include '../conn.php';

$sql = " select * from addproduct where id = '$id' ";

$run = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($run);

?>



<div class="container mt-4">
	<div class="row">
		<div class="col-md-12">
			<div class="">
				
              <div style="background: #fff; padding-bottom: 20px;">

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../Image/<?php echo $row['img1']; ?>" class="d-block w-100" alt="..." style="height: 500px; object-fit: contain;">
    </div>
    <div class="carousel-item">
      <img src="../Image/<?php echo $row['img2']; ?>" class="d-block w-100" alt="..." style="height: 500px; object-fit: contain;">
    </div>
    <div class="carousel-item">
     <img src="../Image/<?php echo $row['img3']; ?>" class="d-block w-100" alt="..." style="height: 500px; object-fit: contain;">
    </div>
  </div>
 <div class="container mt-3" style="text-align: right;">
 	 <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <button type="button" class="btn btn-success rounded-pill"><i class="las la-angle-left"></i></button>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
   <button type="button" class="btn btn-success rounded-pill"><i class="las la-angle-right"></i></button>
  </button>
 </div>
</div>



<div class="container mt-4">
	<div class="row">
		<div class="col-md-6">
			<h4><?php echo $row['i_name']; ?></h4>
			<h3 class="text-success" style="padding-top: 11px;">&#x20B9;<?php echo $row['i_price']; ?></h3>
		</div>
		<div class="col-md-6" style="text-align: right;">

<?php

error_reporting(0);

include '../conn.php';

$sqa = " select * from cart ";

$tat = mysqli_query($conn,$sqa);

$rar = mysqli_fetch_array($tat);

$id = $_GET['id'];

if ($rar['p_id'] == $id) 
{
	?>

	<a href="cart.php"><button type="button" class="btn btn-success rounded-pill" style="width: 190px;">View Cart</button></a>

	<?php
}
else
{
	?>
	<a href="cart_a.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-success rounded-pill" style="width: 190px;">Add To Cart</button></a>
	<?php
}

?>

		
		</div>
	</div>
</div>






              	
              </div>
			</div>


<div class=" mt-4">
	 <div class="row">
	 	<div class="col-xl-3 col-md-6 col-sm-12 mt-2">
	 		<div style="background: #fff; padding: 10px;">
	 			<h5 style="padding-top: 8px; text-align: center;">Secured Payment</h5>
	 		</div>
	 	</div>
	 	<div class="col-xl-3 col-md-6 col-sm-12 mt-2">
	 		<div style="background: #fff; padding: 10px;">
	 			<h5 style="padding-top: 8px; text-align: center;">Free Returns</h5>
	 		</div>
	 	</div>
	 	<div class="col-xl-3 col-md-6 col-sm-12 mt-2">
	 		<div style="background: #fff; padding: 10px;">
	 			<h5 style="padding-top: 8px; text-align: center;">24/7 Support</h5>
	 		</div>
	 	</div>
	 	<div class="col-xl-3 col-md-6 col-sm-12 mt-2">
	 		<div style="background: #fff; padding: 10px;">
	 			<h5 style="padding-top: 8px; text-align: center;">No Dilivery Charges</h5>
	 		</div>
	 	</div>
	 </div>
</div>



<div class=" mt-4">
	 <div class="row">
	 	<div class="col-md-12">
	 		<div style="background: #fff; padding: 12px;">
	 			<h5 style="padding-top: 8px;">Description</h5>
	 			<h6 style="padding-top: 10px; font-size: 12px;"><?php echo $row['i_des']; ?></h6>
	 		</div>
	 	</div>
	 </div>
</div>



<div class=" mt-3">
	<div class="row">
<?php 

$id = $_GET['id'];

include '../conn.php';

$sql = " select * from addproduct where status = 'Active' and id != '$id' ";

$run = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($run)) 
{
	
?>

		<div class="col-xl-3 col-md-6 col-sm-6 mt-4">
			<div class="">
				<div style="background: #fff;">
					<img src="../Image/<?php echo $row['img1']; ?>" style="width: 100%; height: 230px; object-fit: cover;">
                    <a href="view_product.php?id=<?php echo $row['id']; ?>"><h6 style="font-size: 16px; padding: 10px; text-align: center;  padding-top: 15px; width:100%; text-overflow: ellipsis; overflow: hidden; white-space: nowrap; color: #001;"><?php echo $row['i_name']; ?></h6></a>
      				<h5 style="margin-top: 15px; text-align: center; padding-bottom: 20px;" class="text-success">&#x20B9;<?php echo $row['i_price']; ?></h5>
				</div>
			</div>
		</div>

<?php } ?>
	</div>
</div>


<?php

include '../conn.php';

$email = $_SESSION['email'];

$sql = " select * from regi where email = '$email' ";

$run = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($run);

$name = $row['f_name'];

?> 


<div class=" mt-4">
	 <div class="row">
	 	<div class="col-md-12">
	 		<div style="background: #fff; padding: 10px; padding-bottom: 25px;">
	 			<h5 style="padding-top: 8px;">Send Review</h5>

	 			<div class="container mt-3">
	 				<div class="row">
	 				<div class="col-md-11">
	 					<input type="text" name="review" placeholder="Place Your Review" class="form-control" style="margin-top: 6px;">
	 				</div>
	 				<div class="col-md-1"> 
	 					<button type="submit" name="submit" class="btn btn-success" style="margin-top: 6px;">Review</button>
	 				</div>
	 			</div>
	 			</div>
	 			
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

$p_id = $_GET['id'];

if (isset($_POST['submit'])) 
{
	$review = $_POST['review'];
    $p_id = $_GET['id'];
  
   $sql = " insert into review (review,p_id,user_id) values ('$review','$p_id','$id') ";

   if (mysqli_query($conn,$sql)) 
   {
   	 echo '<meta http-equiv="refresh" content="0">';
   }
   else
   {
   	echo "Not Done";
   }

}

?>



<div class=" mt-4">
	 <div class="row">
	 	<div class="col-md-12">
	 		<div style="background: #fff; padding: 15px; padding-bottom: 10px;">
	 			
	 			<?php
                   
                   $id = $_GET['id'];

                   include '../conn.php';

                   $sql = " select * from review where p_id = '$id' ";

                   $run = mysqli_query($conn,$sql);

                   while ($row = mysqli_fetch_array($run)) 
                   {

                   	$user_id = $row['user_id'];

                   	$sqa = " select * from regi where id = '$user_id' ";

                   	$tta = mysqli_query($conn,$sqa);

                   	while ($tat = mysqli_fetch_array($tta)) 
                   	{

                   		$name = $tat['f_name'];
                   		
	 			?>

	 			<div class="row mt-2">
	 				<div class="col-md-1 col-2">
	 					<center><h3 style="background: #0001; border-radius: 50px; text-align: center; line-height: 50px; width: 52px; height: 50px;"><?php echo $a = $name[0]; ?></h3></center>
	 				</div>
	 				<div class="col-md-11  col-12">
	 					<h6 style="margin-top: 4px;"><?php echo $tat['f_name']; ?> <?php echo $tat['l_name']; ?></h6>
	 					<h6 style="font-size: 13px;"><?php echo $row['review'] ?></h6>
	 				</div>
	 			</div>

	 		<?php } } ?>
	 			
	 		</div>
	 	</div>
	 </div>
</div>







		</div>
	</div>
</div>















<footer class="bg-success mt-5">
	<div style="background: #0001; padding: 9px;">
		<div class="container">
		<div class="row">
		  <div class="col-md-6">
			<h2 style="padding-top: 10px; color: #fff;">Modern Farm</h2>
		  </div>
		  <div class="col-md-6">
			<h6 style="text-align: right; font-size: 12px; color: #DDDCDC; padding-top: 22px;">Modern Farm @ 2021</h6>
		  </div>
		</div>
	</div>
	</div>

    
    <div class="container mt-5">
    	<div class="row">
    		<div class="col-md-3">
              
              <a href="" class="btn w-50" style="background: #F0F0F0;"><i class="las la-map-marker" style="font-size: 18px;"></i> India</a>    
             
             <div class="row mt-2">
             	<div class="col-2">
             		<i class="lab la-facebook" style="font-size: 25px; padding-top: 10px; text-align: center; color: #DDDCDC;"></i>
             	</div>
             	<div class="col-2">
             		<i class="lab la-instagram" style="font-size: 25px; padding-top: 10px; text-align: center; color: #DDDCDC;"></i>
             	</div>
             	<div class="col-2">
             		<i class="lab la-twitter" style="font-size: 25px; padding-top: 10px; text-align: center; color: #DDDCDC;"></i>
             	</div>
             	<div class="col-2">
             		<i class="lab la-youtube" style="font-size: 25px; padding-top: 10px; text-align: center; color: #DDDCDC;"></i>
             	</div>
             </div>

<a href="" class="btn mt-3" style="background: #F0F0F0; width: 190px;">Modern Farm Store</a>

    		</div>
    		<div class="col-md-3">

    			<h5 style="color: #F0F0F0;">About Us</h5>
    			<h6 style="color: #DDDCDC; font-size: 12px; padding-top: 5px;">Blog</h6>
    			<h6 style="color: #DDDCDC; font-size: 12px;">Team</h6>
    			<h6 style="color: #DDDCDC; font-size: 12px;">Poast</h6>
    			
    		</div>
    		<div class="col-md-3">
    			
    			<h5 style="color: #F0F0F0;">Web Page</h5>
    			<h6 style="color: #DDDCDC; font-size: 12px; padding-top: 5px;">Home</h6>
    			<h6 style="color: #DDDCDC; font-size: 12px;">Cart</h6>
    			<h6 style="color: #DDDCDC; font-size: 12px;">View Product</h6>
    			<h6 style="color: #DDDCDC; font-size: 12px;">Order</h6>
    			<h6 style="color: #DDDCDC; font-size: 12px;">Order Detail</h6>
    			<h6 style="color: #DDDCDC; font-size: 12px;">Contact Us</h6>
    			<h6 style="color: #DDDCDC; font-size: 12px;">About Us</h6>


    		</div>
    		<div class="col-md-3">
    			
    			<h5 style="color: #F0F0F0;">Contact Us</h5>
    			<h6 style="color: #DDDCDC; font-size: 12px; padding-top: 5px;">+91 5845 58547</h6>
    			<h6 style="color: #DDDCDC; font-size: 12px;">moderfarm@gmail.com</h6>

    		</div>
    	</div>
    </div>



<div style="background: #0001;" class="mt-5">
		<div class="container">
		<div class="row">
		  <div class="col-md-6" style="padding: 12px;">

			<h6 style="padding-top: 10px; color: #DDDCDC; font-size: 12px;">Terms & Conditions | Privacy Policy</h6>

		  </div>
		</div>
	</div>
	</div>




</footer>











<br><br><br>

</form>
</body>
</html>