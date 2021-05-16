<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
	<title>Registration</title>
	<style type="text/css">
		body
		{
			font-family: 'Poppins', sans-serif;
			background: #f4f4f6;
		}
		.text_p
		{
			font-size: 12px;
			color: gray;
			padding-top: 20px;
		}
	</style>
</head>
<body>

<form method="post">
	

<div class="container mt-3">
	<div class="row">
		<div class="col-md-12">
			<div class="container">
				<div style="background: #fff; border-radius: 10px;" class="shadow-sm">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<br>
								
								<div class="row">
									<div class="col-md-7 m-auto">
										<h5 style="text-align: center;">Registration</h5>
                                      
                                      <h6 class="text_p">First Name</h6>
                                      <input type="text" name="f_name" placeholder="Enter First Name" class="form-control">
                                      <h6 class="text_p">Last Name</h6>
                                      <input type="text" name="l_name" placeholder="Enter Last Name" class="form-control">
                                      <h6 class="text_p">Email Id</h6>
                                      <input type="text" name="email" placeholder="Enter Email Id" class="form-control">
                                      <h6 class="text_p">Phone Number</h6>
                                      <input type="text" name="phone" placeholder="Enter Phone Number" class="form-control">
                                      <h6 class="text_p">Password</h6>
                                      <input type="text" name="pass" placeholder="Enter Password" class="form-control">
                                      <h6 class="text_p">Confirm Password</h6>
                                      <input type="Password" name="cpass" placeholder="Enter Confirm Password" class="form-control">
                                      <input type="submit" name="submit" value="Registration" class="btn btn-success w-100 mt-4 rounded-pill" style="background: #045D2F;">
                                      <h6 style="font-size: 12px; margin-top: 10px;">I Have Already Account ? <a href="sign.php">Sign In</a></h6>

 

									</div>
								</div>

							</div>
							<div class="col-md-6">
								<img src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/8bf89b118243775.60859be3ea626.jpg" style="width: 100%; height: 630px;">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>




<?php

include '../../conn.php';

if (isset($_POST['submit'])) 
{
	$f_name = $_POST['f_name'];
	$l_name = $_POST['l_name'];
	$email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];

    $pass = md5($pass);
    $cpass = md5($cpass);

    $sql = " insert into regi (f_name,l_name,email,phone,pass,cpass) values ('$f_name','$l_name','$email','$phone','$pass','$cpass') ";

    if (mysqli_query($conn,$sql)) 
    {
    	echo "Done";
    }
    else
    {
    	echo "Not Done";
    }

}


?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</form>
</body>
</html>