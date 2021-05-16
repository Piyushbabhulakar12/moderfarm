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

nameaa("About");

?>


<br><br>
<div class="container mt-5">
   <center>
      <h6>Wo You Are</h6>
      <h2 class="text-success mt-5">“We are a company built around the belief that our business can be a force for positive change”</h2>
      <img src="https://i.pinimg.com/736x/68/16/3e/68163efb3c2201721d8e681cde6aef2b.jpg" style="width: 100px; height: 100px; border-radius: 50px; margin-top: 25px;">
      <h6 class="mt-3">Founder & CEO</h6>
   </center>
</div>

<br><br>

<div class="container mt-5">
   <div class="row">
      <div style="background: #fff;">
         <div class="row">
      <div class="col-md-6">
        <img src="https://images.pexels.com/photos/348689/pexels-photo-348689.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" style="height: 450px; width: 100%; object-fit: cover;">    
      </div>
      <div class="col-md-6" style="padding: 10px;">
         <div class="container" style="padding-top: 50px;">
            <h3 class="text-success">Benefits for Consumers</h3>
            <ul class="mt-4">
               <li>Harvested at Peak Flavour</li>
               <li>Locally grown</li>
               <li>Harvested ready to eat</li>
               <li>Highly Nutritious</li>
               <li>No Pesticides or Herbicides</li>
               <li>Grown from Non-GMO Seed</li>
               <li>Uses over 90% less water</li>
               <li> Significant Soil & Land Conservation</li>
               <li>Company with Commitment to the Community</li>
            </ul>
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
            <h3 class="text-success">Benefits for Retail Partners</h3>
            <ul class="mt-4">
               <li>Harvested at Peak Flavour</li>
               <li>Locally grown</li>
               <li>Harvested ready to eat</li>
               <li>Highly Nutritious</li>
               <li>No Pesticides or Herbicides</li>
               <li>Grown from Non-GMO Seed</li>
               <li>Uses over 90% less water</li>
               <li> Significant Soil & Land Conservation</li>
               <li>Company with Commitment to the Community</li>
            </ul>
         </div>
      </div>
       <div class="col-md-6">
        <img src="https://images.pexels.com/photos/2334636/pexels-photo-2334636.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" style="height: 450px; width: 100%; object-fit: cover;">    
      </div>
         </div>
      </div>
   </div>
</div>



<br><br>
<div class="container mt-5">
   <center>
      <h2 class="text-success mt-5">Our Food Ethos</h2>
      <h4 class="mt-4">“By 2050, global food production will need to increase by an estimated 70% in developed countries and 100% indeveloping countries. It’s time to rethink the way we grow, share and consume our food.”</h4>
   </center>
</div>

<br>

<div class="container mt-5">
   <div class="row">
      <div style="background: #fff;">
         <div class="row">
            <div class="col-md-3">
               <div class="bg-success" style="padding: 10px;">
                  <center><img src="https://www.flaticon.com/svg/vstatic/svg/3105/3105761.svg?token=exp=1620930749~hmac=18f7833c6c38713753c0a4563a496e23" style="height: 90px; width: 90px;">
                 <h5 class="mt-3 text-light">90% Less Water</h5>
                  </center>
               </div>
            </div>
            <div class="col-md-9 mt-4">
               <span>Water is humanities most precious resource! Our indoor facilities allow us to use purified water and provide the same nutrients you find in the highest quality soil. By doing so, we are able to provide our plants only the exact amount of water they need. Allowing us to use 90% less water than traditional agricultural practices.</span>
            </div>
         </div>
      </div>
   </div>
</div>





<div class="container mt-4">
   <div class="row">
      <div style="background: #fff;">
         <div class="row">
            <div class="col-md-9 mt-5">
               <span>Respect for nature and respect for the end consumer is behind our decision to implement farming practices without pesticides or herbicides. In environments heavily inundated with chemicals our farms are a safe alternative to provide healthy and nutritious produce.</span>
            </div>
            <div class="col-md-3">
               <div class="bg-success" style="padding: 10px;">
                  <center><img src="https://www.flaticon.com/svg/vstatic/svg/4033/4033856.svg?token=exp=1620931125~hmac=a6b5b60c6b99236e8da3c17427c81045" style="height: 90px; width: 90px;">
                 <h5 class="mt-3 text-light">0 Pesticides,0 Herbicides</h5>
                  </center>
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
            <div class="col-md-3">
               <div class="bg-success" style="padding: 10px;">
                  <center><img src="https://www.flaticon.com/svg/vstatic/svg/497/497393.svg?token=exp=1620931273~hmac=ed440a50a4b6ea04b27a5efd3560e7bf" style="height: 90px; width: 90px;">
                 <h5 class="mt-3 text-light">Reduced Carbon Footprint</h5>
                  </center>
               </div>
            </div>
            <div class="col-md-9 mt-5">
               <span>By locally growing our urban farms allow us to be over 100 times more productive than traditional farming on the same footprint of land. We also eliminate the need for waste by harvesting to meet demand.</span>
            </div>
         </div>
      </div>
   </div>
</div>


<div class="container mt-4">
   <div class="row">
      <div style="background: #fff;">
         <div class="row">
            <div class="col-md-9 mt-5">
               <span>Respect for nature and respect for the end consumer is behind our decision to implement farming practices without pesticides or herbicides. In environments heavily inundated with chemicals our farms are a safe alternative to provide healthy and nutritious produce.</span>
            </div>
            <div class="col-md-3">
               <div class="bg-success" style="padding: 10px;">
                  <center><img src="https://www.flaticon.com/svg/vstatic/svg/259/259739.svg?token=exp=1620974647~hmac=c077d06d4eebb374024d7c58d11e9d6c" style="height: 90px; width: 90px;">
                 <h5 class="mt-3 text-light">0 Pesticides,0 Herbicides</h5>
                  </center>
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