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

nameaa("Services");

?>



<div class="container mt-5">
   <div class="row">
      <div style="background: #fff;">
         <div class="row">
            <div class="col-md-6">
         <img src="https://images.unsplash.com/photo-1466692476868-aef1dfb1e735?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80" style="width: 100%; height: 400px; object-fit: cover;">
      </div>
       <div class="col-md-6" style="padding: 10px;">
        <div class="container" style="padding-top: 50px;">
            <h3 class="text-success">Are you using your available space effectively?</h3>
         <span style="font-size: 15px;">Do you have available space that you are not utilising? Perhaps you have an outdoor space with optimal sunlight, an indoor space that isn’t being used efficiently or a rooftop that currently sits unused. It may be worth reaching out to us and discussing how we could leverage your space into growing healthy plants for aesthetic or for consumption!</span>
        </div>
      </div>
         </div>
      </div>
   </div>
</div>


<div class="container mt-5">
   <div class="row">
      <div style="background: #fff;">
         <div class="row">
       <div class="col-md-6" style="padding: 10px;">
        <div class="container" style="padding-top: 50px;">
            <h3 class="text-success">We are experts in our field</h3>
         <span style="font-size: 15px;">We are a company built around the pursuit for excellence in the efficient production of healthy produce. We use our technology and experience to enable others to meet the growing demand for the highest quality produce. Don’t fall victim to the practice of the old adage, that just because something has been done one way in the past, that it can’t be improved upon for the future.</span>
        </div>
      </div>
      <div class="col-md-6">
         <img src="https://images.unsplash.com/photo-1582012107971-5aae799a70f2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80" style="width: 100%; height: 400px; object-fit: cover;">
      </div>
         </div>
      </div>
   </div>
</div>


<div class="container mt-5">
   <div class="row">
      <div style="background: #fff;">
         <div class="row">
            <div class="col-md-6">
         <img src="https://images.unsplash.com/photo-1518994603110-1912b3272afd?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=366&q=80" style="width: 100%; height: 400px; object-fit: cover;">
      </div>
       <div class="col-md-6" style="padding: 10px;">
        <div class="container" style="padding-top: 50px;">
            <h3 class="text-success">Do you have a need to control inputs?</h3>
         <span style="font-size: 15px;">Do you have a need or desire to truly understand exactly what goes into your garden or the food you’re consuming on a daily basis? With our ability to customise hydroponic systems to your needs, we provide you with the ability to control the growing process from the base level. This provides you with an in-depth knowledge of exactly what goes into the end product.</span>
        </div>
      </div>
         </div>
      </div>
   </div>
</div>


<div class="container mt-5">
   <div class="row">
      <div style="background: #fff;">
         <div class="row">
       <div class="col-md-6" style="padding: 10px;">
        <div class="container" style="padding-top: 50px;">
            <h3 class="text-success">We are experts in our field</h3>
         <span style="font-size: 15px;">We are a company built around the pursuit for excellence in the efficient production of healthy produce. We use our technology and experience to enable others to meet the growing demand for the highest quality produce. Don’t fall victim to the practice of the old adage, that just because something has been done one way in the past, that it can’t be improved upon for the future.</span>
        </div>
      </div>
      <div class="col-md-6">
         <img src="https://images.unsplash.com/photo-1516253593875-bd7ba052fbc5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80" style="width: 100%; height: 400px; object-fit: cover;">
      </div>
         </div>
      </div>
   </div>
</div>


<div class="container mt-5">
   <center><h4>Contact us to see if a custom hydroponic system <br> could suit your needs?</h4></center>
</div>
 

<div class="container mt-5">
   <div class="row">
      <div style="background: #fff;">
         <div class="row">
            <div class="col-md-6 mt-2">
              <div class="container">
               <h6 class="text_p">Name</h6>
              <input type="text" name="name" placeholder="Enter Name" class="form-control">
               <h6 class="text_p">Email Id</h6>
              <input type="text" name="email" placeholder="Enter Name" class="form-control">
               <h6 class="text_p">Message</h6>
               <textarea name="mess" cols="10" rows="5" class="form-control" placeholder="Enter Message"></textarea>
               <input type="submit" name="submit" value="Send" class="btn btn-success mt-3 rounded-pill" style="width: 120px;">
              </div>
            </div>
            <div class="col-md-6 mt-2">
               <img src="https://images.unsplash.com/photo-1506801842916-2927e4dcf498?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=375&q=80" style="width: 100%; height: 400px; object-fit: cover;">
            </div>
         </div>
      </div>
   </div>
</div>


<?php

include '../conn.php';

if (isset($_POST['submit'])) 
{
   $name = $_POST['name'];
   $email = $_POST['email'];
   $mess = $_POST['mess'];

   $sql = " insert into contact (name,email,mess) values ('$name','$email','$mess') ";

   if (mysqli_query($conn,$sql)) 
   {
     echo '<meta http-equiv="refresh" content="0">';
   }
   else
   {
      echo "Not DOne";
   }
   
}

?>


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