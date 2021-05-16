
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

<?php include 'u_navbar.php'; ?>
<?php

nameaa("Products");

?>


<div class="container mt-3">
	<div class="row">
<?php 

include 'conn.php';

$sql = " select * from addproduct where status = 'Active' ";

$run = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($run)) 
{
	
?>

		<div class="col-xl-4 col-md-6 col-sm-12 mt-4">
			<div class="container">
				<div style="background: #fff;">
					<img src="Image/<?php echo $row['img1']; ?>" style="width: 100%; height: 230px; object-fit: cover;">
                    <a href="User/view_product.php?id=<?php echo $row['id']; ?>"><h6 style="font-size: 16px; padding: 10px; text-align: center;  padding-top: 15px; width:100%; text-overflow: ellipsis; overflow: hidden; white-space: nowrap; color: #001;"><?php echo $row['i_name']; ?></h6></a>
      				<h5 style="margin-top: 15px; text-align: center; padding-bottom: 20px;" class="text-success">&#x20B9;<?php echo $row['i_price']; ?></h5>
				</div>
			</div>
		</div>

<?php } ?>
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