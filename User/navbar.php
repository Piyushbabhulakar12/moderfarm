<?php

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
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
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
        a
        {
        	text-decoration: none;
        }
        a:hover
        {
          color: #111;
        }
        .nav_name
        {
           color: #111;
           font-size: 13px;
           margin-top: 10px;
        }
        .hide
        {
           display: none;
           font-size: 10px;
           text-align: center;
           margin-top: -1px;
        }
        .myDIV:hover + .hide
        {
          color: #045D2F;
          display: block;
        }
        .navbar-toggler
        {
        	border: none;
        }
        .navbar-toggler:focus,
.navbar-toggler:active,
.navbar-toggler-icon:focus {
    outline: none;
    box-shadow: none;
    border: none;
}
button:focus {

outline: 1px dotted;
outline: 5px auto -webkit-focusring-color;

}

@media only screen and (max-width: 1000px) {
  .timaeaa
{
display: none;
}
}
        
    </style>
</head>
<body>

	

<?php

function nameaa($value)
{
  $vav = $value;
?>


<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1"> <?php echo $vav; ?>  </span>
  </div>
</nav>
<?php

}


?>


	<?php

include '../conn.php';

$email = $_SESSION['email'];

$sql = " select * from regi where email = '$email' ";

$run = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($run);

$id = $row['id'];

?>

<nav class="navbar navbar-expand-lg fixed-bottom navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand nav_name" href="index.php"><?php echo $row['f_name']; ?> <?php echo $row['l_name']; ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <img src="https://www.flaticon.com/svg/vstatic/svg/16/16139.svg?token=exp=1620982765~hmac=16c7e6f2e409c3f7a6f7f1386615f124" style="height: 15px; width: 15px;">
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
      
<ul class="nav justify-content-center">
  <li class="nav-item">

    <a class="nav-link active myDIV" href="index.php"><button type="button" class="btn btn-light rounded-pill shadow-sm"><i class="las la-home"></i></button></a>
  	<div class="hide">Home</div>

  </li>
  <li class="nav-item">
    <a class="nav-link myDIV" href="allproduct.php"><button type="button" class="btn btn-light rounded-pill shadow-sm"><i class="las la-grip-horizontal"></i></button></a>
    <div class="hide">Product</div>
  </li>
   <li class="nav-item">
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

            $sql = " select * from cart where user_id = '$id' ";

            $run = mysqli_query($conn,$sql);

            $tota_cart = mysqli_num_rows($run);
 
             ?>
    <a class="nav-link myDIV" href="cart.php"><button type="button" class="btn btn-light rounded-pill shadow-sm"><i class="las la-shopping-bag"></i> <span class="badge bg-success sm-badge rounded-pill"><?php echo $tota_cart; ?></span></button></a>
    <div class="hide">Cart</div>
  </li>
   <li class="nav-item">
    <a class="nav-link myDIV" href="u_order.php"><button type="button" class="btn btn-light rounded-pill shadow-sm"><i class="lar la-bell"></i></button></a>
    <div class="hide">Order</div>
  </li>
   <li class="nav-item">
    <a class="nav-link myDIV" href="blog.php"><button type="button" class="btn btn-light rounded-pill shadow-sm"><i class="las la-blog"></i></button></a>
    <div class="hide">Blog</div>
  </li>
   <li class="nav-item">
    <a class="nav-link myDIV" href="services.php"><button type="button" class="btn btn-light rounded-pill shadow-sm"><i class="las la-users"></i></button></a>
    <div class="hide">Services</div>
  </li>
   <li class="nav-item">
    <a class="nav-link myDIV" href="about.php"><button type="button" class="btn btn-light rounded-pill shadow-sm"><i class="las la-tasks"></i></button></a>
    <div class="hide">About Us</div>
  </li>
   <li class="nav-item">
    <a class="nav-link myDIV" href="contact.php"><button type="button" class="btn btn-light rounded-pill shadow-sm"><i class="las la-phone"></i></button></a>
    <div class="hide">Contact Us</div>
  </li>
  <li class="nav-item">
    <a class="nav-link myDIV" href="logout.php"><button type="button" class="btn btn-light rounded-pill shadow-sm"><i class="las la-sign-out-alt"></i></button></a>
    <div class="hide" style="color: red;">Log Out</div>
  </li>
</ul>

    </div>

<?php
date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
$timea = date('H:i');
?>

<h6 class="nav_name timaeaa"><?php echo $timea; ?></h6>

  </div>
</nav>














 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html>