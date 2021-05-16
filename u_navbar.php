
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


	

<nav class="navbar navbar-expand-lg fixed-bottom navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand nav_name" href="index.php"><img src="https://i.pinimg.com/736x/68/16/3e/68163efb3c2201721d8e681cde6aef2b.jpg" style="height: 35px; width: 35px; border-radius: 50px; object-fit: cover;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-grid-3x3-gap" viewBox="0 0 16 16">
  <path d="M4 2v2H2V2h2zm1 12v-2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V7a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm5 10v-2a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V7a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zm0-5V2a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1zM9 2v2H7V2h2zm5 0v2h-2V2h2zM4 7v2H2V7h2zm5 0v2H7V7h2zm5 0h-2v2h2V7zM4 12v2H2v-2h2zm5 0v2H7v-2h2zm5 0v2h-2v-2h2zM12 1a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1h-2zm-1 6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V7zm1 4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1h-2z"/>
</svg>
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
   	
    <a class="nav-link myDIV" href="User/cart.php"><button type="button" class="btn btn-light rounded-pill shadow-sm"><i class="las la-shopping-bag"></i> <span class="badge bg-success sm-badge rounded-pill">0</span></button></a>
    <div class="hide">Cart</div>
  </li>
   <li class="nav-item">
    <a class="nav-link myDIV" href="User/u_order.php"><button type="button" class="btn btn-light rounded-pill shadow-sm"><i class="lar la-bell"></i></button></a>
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
    <a class="nav-link myDIV" href="User/sign/sign.php"><button type="button" class="btn btn-light rounded-pill shadow-sm"><i class="las la-sign-in-alt"></i></button></a>
    <div class="hide">Log In</div>
  </li>
  <li class="nav-item">
    <a class="nav-link myDIV" href="User/sign/regi.php"><button type="button" class="btn btn-light rounded-pill shadow-sm"><i class="las la-registered"></i></button></a>
    <div class="hide">Register</div>
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