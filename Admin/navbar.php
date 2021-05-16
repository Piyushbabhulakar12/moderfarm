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

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <title></title>
    <style type="text/css">
      body
      {
        font-family: 'Poppins', sans-serif;
        background: #f4f4f6;
      }
      a
      {
        text-decoration: none;
        color:#0009;
        padding: 10px;
      }
      a:hover
      {
        color: #fff;
      }
      .butn_h
      {
        text-align: left;
      }
      .butn_h:hover
      {
         background: #198754;
      }
    </style>
  </head>
  <body>
   
    




<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="btn btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
   <img src="https://www.flaticon.com/svg/vstatic/svg/16/16139.svg?token=exp=1620982765~hmac=16c7e6f2e409c3f7a6f7f1386615f124" style="height: 15px; width: 15px;">
</button>
    <span class="navbar-brand">Admin</span>
    
    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      <ul class="nav justify-content-end">
 
        </ul>
    </div>
  </div>
</nav>






<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" style="width: 250px;">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Admin</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
   <div class="offcanvas-body">
     
     <h6><button class="btn butn_h w-100"><a href="index.php"><i class="las la-tachometer-alt"></i> &nbsp Admin Pannel</a></button></h6>
     
     <h6><button class="btn butn_h w-100"><a href="add_product.php"><i class="lab la-product-hunt"></i> &nbsp Add Product</a></button></h6>
      
     <h6><button class="btn butn_h w-100"><a href="add_blog.php"><i class="las la-blog"></i> &nbsp Add Blog</a></button></h6>
      
     <h6><button class="btn butn_h w-100"><a href="m_blog.php"><i class="las la-rss"></i> &nbsp Manage Blog</a></button></h6>
     
     <h6><button class="btn butn_h w-100"><a href="inventory.php"><i class="las la-warehouse"></i> &nbsp Inventory</a></button></h6>
     
     <h6><button class="btn butn_h w-100"><a href="order.php"><i class="las la-border-all"></i> &nbsp Order</a></button></h6>
      
     <h6><button class="btn butn_h w-100"><a href="history.php"><i class="las la-history"></i> &nbsp History</a></button></h6>
     
     <h6><button class="btn butn_h w-100"><a href="feedback.php"><i class="las la-comment"></i> &nbsp Feedback</a></button></h6>
<br><br><br><br>
     <h6><button class="btn butn_h w-100 mt-5"><a href="../logout.php"><i class="las la-sign-out-alt"></i> &nbsp Logout</a></button></h6>

    </div>
  </div>
</div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>