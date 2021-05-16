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
         .bg
         {
         	background-image: url(https://images.unsplash.com/photo-1546260357-734c06422ec6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80);
         	width: 100%;
         	height: 600px;
         	background-repeat: no-repeat;
         	background-size: cover;
         	object-fit: cover;
         	background-position: center;
         }

		.text_h1
		{
			color: #fff;
			font-size: 51px;

		}

	</style>
</head>
<body>
<form method="post">

<?php include 'navbar.php'; ?>
<?php

nameaa("Home");

?>



<div class="bg">
	<div class="container">
		<br><br><br><br><br>
	<div class="text_bg">
		<h1 class="text_h1">Modern Farming <br> in Your Own Home</h1>
		<h6 class="text_h1" style="font-size: 15px;">We create high-tech agriculturally minded products that <br> can be used by anyone. Each of these products allows <br> greater access to fresher,healthier & more <br> environmentally conscious produce for the entire community!</h6>
			<button type="button" class="btn btn-success rounded-pill text_h1 mt-2" style="width: 150px;">Shop Now</button>
		</div>
	</div>
</div>



<div class="container mt-4">
	<div class="row">
		<div class="col-md-12">
		  <center><h3>Our Product</h3></center>
		</div>
	</div>
</div>
<br>
<?php

include '../conn.php';

$sql = " select * from addproduct where status = 'Active' and id = '10' ";

$run = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($run);

?>





<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="container">
	<div class="row">
		<div style="background:#fff; border-radius: 20px;">
			
				<div class="row">
					<div class="col-md-6">
						<img src="../Image/<?php echo $row['img1']; ?>" style="width: 100%; height: 500px; border-radius: 40px; padding: 15px; object-fit: cover;">
					</div>
					<div class="col-md-6">
						<h4 class="text-success mt-5"><a href="view_product.php?id=<?php echo $row['id']; ?>" class="text-success"><?php echo $row['i_name']; ?></a></h5>
						<h6 style="font-size: 13px; color: gray; margin-top: 15px;"><?php echo $row['i_des']; ?></h6>
						<button class="btn btn-success rounded-pill mt-2" style="width: 150px;">Buy Now</button>
					</div>
				
			</div>
		</div>
	</div>
</div>
    </div>
    <?php

include '../conn.php';

$sql = " select * from addproduct where status = 'Active' and id = '9' ";

$run = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($run);

?>
    <div class="carousel-item">
     
	<div class="row">
		<div style="background:#fff; border-radius: 20px;">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<img src="../Image/<?php echo $row['img1']; ?>" style="width: 100%; height: 500px; border-radius: 40px; padding: 15px; object-fit: cover;">
					</div>
					<div class="col-md-6">
					 
						<h4 class="text-success mt-5"><a href="view_product.php?id=<?php echo $row['id']; ?>" class="text-success"><?php echo $row['i_name']; ?></a></h5>
						<h6 style="font-size: 13px; color: gray; margin-top: 15px;"><?php echo $row['i_des']; ?></h6>
						<button class="btn btn-success rounded-pill mt-2" style="width: 150px;">Buy Now</button>
					</div>
				
			</div>
		</div>
	</div>
</div>
    </div>
    <?php

include '../conn.php';

$sql = " select * from addproduct where status = 'Active' and id = '5' ";

$run = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($run);

?>
    <div class="carousel-item">
     
	<div class="row">
		<div style="background:#fff; border-radius: 20px;">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<img src="../Image/<?php echo $row['img1']; ?>" style="width: 100%; height: 500px; border-radius: 40px; padding: 15px; object-fit: cover;">
					</div>
					<div class="col-md-6">
						
						<h4 class="text-success mt-5"><a href="view_product.php?id=<?php echo $row['id']; ?>" class="text-success"><?php echo $row['i_name']; ?></a></h5>
						<h6 style="font-size: 13px; color: gray; margin-top: 15px;"><?php echo $row['i_des']; ?></h6>
						<button class="btn btn-success rounded-pill mt-2" style="width: 150px;">Buy Now</button>
					</div>
				</div>
			
		</div>

	</div>
</div>
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
		<div class="col-md-12">
		  <center><h3>Why Us</h3><br>
            <h4 class="text-success">We are on a mission to fundamentally<br>
transform the Agriculture industry.</h4>
<h6 class="mt-4" style="color: gray; font-size: 12px;">We achieve this by manufacturing and operating affordable farms that enable growers <br> the ability to produce locally, flavorful, safe and healthy <br> produce in the most sustainable and socially responsible way possible</h6>
		  </center>
		</div>
	</div>
</div>



<div class="container mt-4">
	<div class="row">
		 <div class="col-md-3 mt-2">
		 	<div class="card" style="border:none; border-radius: 10px; height: 75px;">
		 		<div class="card-body">
		 			<div class="row">
		 				<div class="col-md-3">
		 					<i class="las la-tint" style="font-size: 35px; text-align: center;"></i>
		 				</div>
		 				<div class="col-md-9">
		 					<h6 style="font-size: 15px;" class="text-success">90% Less Water than Traditional Farming</h6>
		 				</div>
		 			</div>
		 		</div>
		 	</div>
		 </div>
		 <div class="col-md-3 mt-2">
		 	<div class="card" style="border:none; border-radius: 10px; height: 75px;">
		 		<div class="card-body">
		 			<div class="row">
		 				<div class="col-md-3">
		 					<i class="las la-spider" style="font-size: 35px; text-align: center;"></i>
		 				</div>
		 				<div class="col-md-9">
		 					<h6 style="font-size: 15px;" class="text-success">Zero Herbicides Zero Pesticides</h6>
		 				</div>
		 			</div>
		 		</div>
		 	</div>
		 </div>
		 <div class="col-md-3 mt-2">
		 	<div class="card" style="border:none; border-radius: 10px; height: 75px;">
		 		<div class="card-body">
		 			<div class="row">
		 				<div class="col-md-3">
		 					<i class="lab la-pagelines" style="font-size: 35px; text-align: center;"></i>
		 				</div>
		 				<div class="col-md-9">
		 					<h6 style="font-size: 15px;" class="text-success">Precision Farming</h6>
		 				</div>
		 			</div>
		 		</div>
		 	</div>
		 </div>
		 <div class="col-md-3 mt-2">
		 	<div class="card" style="border:none; border-radius: 10px; height: 75px;">
		 		<div class="card-body">
		 			<div class="row">
		 				<div class="col-md-3">
		 					<i class="las la-recycle" style="font-size: 35px; text-align: center;"></i>
		 				</div>
		 				<div class="col-md-9">
		 					<h6 style="font-size: 15px;" class="text-success">Non-GMO Seeds</h6>
		 				</div>
		 			</div>
		 		</div>
		 	</div>
		 </div>
	</div>
</div>




<div class="container mt-5">
	<div class="row">
		<div class="col-md-6">
			<div style="background-image: url(https://images.unsplash.com/photo-1533038590840-1cde6e668a91?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cGxhbnR8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60); height: 504px; width: 100%;">
				
				
				<div style="padding:20px;">
					<h3 style="color: #0003;">01</h3>
					<h3>Organic Product</h3>
					
				</div>

			</div>
		</div>
		<div class="col-md-6">
			
			<div style="background-image: url(https://images.unsplash.com/photo-1463320898484-cdee8141c787?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjF8fHBsYW50fGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60); height: 240px; width: 100%; background-repeat: no-repeat;">
				
				<div style="padding:20px;">
					<h3 style="color: #0003;">02</h3>
					<h3 style="color: #fff;">Plant</h3>
					
				</div>
			</div>
<br>
			<div style="background-image: url(https://images.unsplash.com/photo-1483794344563-d27a8d18014e?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mjd8fHBsYW50fGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60); height: 240px; width: 100%; background-repeat: no-repeat;">
				<div style="padding:20px;">
					<h3 style="color: #0003;">03</h3>
					<h3 style="color: #001;">Plant</h3>
					
				</div>
			</div>


		</div>
	</div>
</div>



<div class="container mt-4">
	<div class="row">
		<div class="col-md-12">
		  <center><h3>Exclusive Offer</h3></center>
		</div>
	</div>
</div>



<div class="container">
      	<div class="row">
      	<?php

include '../conn.php';

$sql = " select * from addproduct where status = 'Active' ";

$run = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($run)) 
{
?>

      		<div class="col-md-4 mt-3">
      			<div class="container">
      				<div style="background: #fff;">
      				<img src="../Image/<?php echo $row['img1']; ?>" style="width: 100%; height: 250px; object-fit: cover; ">
      				<h6 style="font-size: 16px; padding: 10px; text-align: center;  padding-top: 15px; width:100%; text-overflow: ellipsis; overflow: hidden; white-space: nowrap;"><a href="view_product.php?id=<?php echo $row['id']; ?>" class="text-dark"><?php echo $row['i_name']; ?></a></h6>
      				<h5 style="margin-top: 15px; text-align: center; padding-bottom: 20px;" class="text-success">&#x20B9;<?php echo $row['i_price']; ?></h5>
                    
      			</div>
      			</div>
      		</div>

      	<?php } ?>
      	</div>
      </div>



<div class="container mt-4">
	<div class="row">
		<div class="col-md-12">
		  <center><h3>Testimonials</h3></center>
		</div>
	</div>
</div>




<div id="carouselExampleControlsa" class="carousel slide mt-3" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="container">
      	<div style="background: #fff; height: 400px; width: 100%;">
      	<br><br>
      	<div class="container">
      		<center><img src="https://image.emojipng.com/971/35971.jpg" style="height: 100px; width: 100px; border-radius: 50px; object-fit: cover;">
                     <h5 style="margin-top: 15px;">John Deo</h5>
      		</center>
      		<h5 style="text-align: center; padding-top: 20px; font-size: 19px;">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."</h5>
      	</div>

      </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="container">
      	<div style="background: #fff; height: 400px; width: 100%;">
      	<div style="background: #fff; height: 400px; width: 100%;">
      	<br><br>
      	<div class="container">
      		<center><img src="https://image.emojipng.com/971/35971.jpg" style="height: 100px; width: 100px; border-radius: 50px; object-fit: cover;">
                     <h5 style="margin-top: 15px;">John Deo</h5>
      		</center>
      		<h5 style="text-align: center; padding-top: 20px; font-size: 19px;">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."</h5>
      	</div>

      </div>
      </div>
      </div>
    </div>
    <div class="carousel-item">
     <div class="container">
      	<div style="background: #fff; height: 400px; width: 100%;">
      	<div style="background: #fff; height: 400px; width: 100%;">
      	<br><br>
      	<div class="container">
      		<center><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQoqbhdITXYPjKq0qNQB8LAEO2101q8fj75xAF_FqCKDW2apjexGb_7osJXQx6MU26ow-k&usqp=CAU" style="height: 100px; width: 100px; border-radius: 50px; object-fit: cover;">
                     <h5 style="margin-top: 15px;">John Deo</h5>
      		</center>
      		<h5 style="text-align: center; padding-top: 20px; font-size: 19px;">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."</h5>
      	</div>

      </div>
      </div>
      </div>
    </div>
  </div>
  <div class="container mt-3" style="text-align: right;">
 	 <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsa" data-bs-slide="prev">
    <button type="button" class="btn btn-success rounded-circle"><i class="las la-angle-left"></i></button>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsa" data-bs-slide="next">
   <button type="button" class="btn btn-success rounded-circle"><i class="las la-angle-right"></i></button>
  </button>
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