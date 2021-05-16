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
	<title>Order</title>
</head>
<body>
<form method="post">
	<?php include 'navbar.php'; ?>

	








<div class="container mt-4">
  <div class="row">
    <div class="col-md-8 m-auto">
      <div style="background: #fff;" class="">
        <div class="row">

 <?php
            
            include '../conn.php';

            $sql = " select * from order_i where action = 'Pending' ";

            $run = mysqli_query($conn,$sql);

           while ($row = mysqli_fetch_array($run)) 
           {

            
           ?>

          <div class="col-md-4 mt-4 border-end">
            <img src="../Image/<?php echo $row['i_img']; ?>" style="height: 150px; width: 100%; object-fit: contain;">
          </div> 
          <div class="col-md-8 mt-4">
            <b class="text-success">#<?php echo $row['order_id']; ?></b>
            <h6><?php echo $row['i_name']; ?></h6>
           <div class="row">
             <div class="col-md-6 ">
               
         
           <h6 style="color: gray; font-size: 12px;">Product Qty - <?php echo $row['i_qty']; ?></h6>
           <h6 style="color: gray; font-size: 12px;">Price Paid - <?php echo $row['i_price']; ?></h6>
           <h6 style="color: gray; font-size: 12px;">Payment - <b style="color: green;"><?php echo $row['payment']; ?></b></h6>
             </div>
             <div class="col-md-6 ">
               Name - <?php echo $row['f_name']; ?>,<br>
          Phone - <?php echo $row['phone']; ?>,<br>
          Address - <?php echo $row['addr']; ?>,<?php echo $row['city']; ?> ,<br>
          <?php echo $row['state']; ?> - <?php echo $row['pin']; ?>
             </div>
           </div>

            <div class="row mt-3">
             <div class="col-md-12">
             <center> <a href="v_order.php?id=<?php echo $row['id']; ?>"><input type="button" name="" value="Confirm Order" class="btn btn-success"></a> </center>
             </div>
              
              </a>
            </div>
          </div>
            
           

        <?php }  ?>
        </div>
      </div>
    </div>
  </div>
</div>





