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

nameaa("Contact Us");

?>




<div class="container mt-5">
	<div class="row">
		<div style="background: #fff; padding-bottom: 15px;">
			<div class="row">
				<div class="col-md-6">
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
		        <div class="col-md-6">
			      
			      <div class="container mt-4">
			      	<br>
			      	<h5>Office Headquarters:</h5>
			      	<h6 class="mt-4">The Hive Villa – 29 Nguyen Ba Lan, Thao Dien, District 2, Ho Chi Minh City, Vietnam</h6>

			      	<h6 style="font-size: 14px; color: gray;" class="mt-5">MOBILE - +91 5451 554450</h6>
			      	<h6 style="font-size: 14px; color: gray;" class="mt-3">WHATSAPP - +91 5451 554450</h6>
			      	<h6 style="font-size: 14px; color: gray;" class="mt-3">Email Id - moderfarm@gmail.com</h6>

			      </div>

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


<br><br><br>

</form>
</body>
</html>