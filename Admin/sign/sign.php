<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <title>Sign In</title>
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
	




<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="container">
                <div style="background: #fff; border-radius: 10px;" class="shadow-sm">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <br><br>
                                
                                <div class="row">
                                    <div class="col-md-7 m-auto mt-5">
                                        <h5 style="text-align: center;">Sign In</h5>
                                      
                                      <h6 class="text_p">Email Id</h6>
                                      <input type="text" name="email" placeholder="Enter Email Id" class="form-control">
                                      <h6 class="text_p">Password</h6>
                                      <input type="Password" name="pass" placeholder="Enter Password" class="form-control">
                                      <input type="submit" name="submit" value="Sign In" class="btn btn-success w-100 mt-4 rounded-pill" style="background: #045D2F;">
                                      <h6 style="font-size: 12px; margin-top: 10px;">User Login - <a href="../../User/sign/sign.php">User</a></h6>

 

                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <img src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/79c1f999262389.5eef11b696d67.png" style="width: 100%; height: 550px; object-fit: cover;">
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
	$email = $_POST['email'];
    $pass = $_POST['pass'];

     $sql = " select * from a_regi where email = '$email' and pass = '$pass' ";

    $run = mysqli_query($conn,$sql);
     
    if (mysqli_num_rows($run))
    {
       $_SESSION['email'] = $email;
       header("location:../add_product.php");
    }
    else
    {
    	echo "Not Done";
    }

}



?>



</form>
</body>
</html>