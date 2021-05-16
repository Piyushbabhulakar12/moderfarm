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
		input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
	</style>
</head>
<body>
<form method="post">
<?php include 'navbar.php'; ?>

 <?php
          
            include '../conn.php';

            $sql = " select * from cart where user_id = '$id' ";

            $run = mysqli_query($conn,$sql);

            $tota_cart = mysqli_num_rows($run);
 
             ?>

<?php

nameaa("Cart $tota_cart");

?>

<br>

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


<?php

if ($tota_cart == '0') 
{
	?>
     
     <center><h2>Oops! No Item Found On Your Cart</h2></center>

	<?php
}
else
{

	?>


			

<div class="container">
    <div class="row">
        <div class="col-md-8 mt-4">
            <div style="background: #fff; padding: 10px; border-radius: 10px;">
                <div class="container">
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

while ($row = mysqli_fetch_array($run)) 
{
           $p_id = $row['p_id'];

                $sqa = " select * from addproduct where id = '$p_id' ";

                $uau = mysqli_query($conn,$sqa);

                while ($ra = mysqli_fetch_array($uau)) 
                {                    
                    @$toatl += $ra['i_price']*$row['p_qty'];

?>
                    <div class="row mt-2">
                        <div class="col-md-3 col-6">
                            <img src="../Image/<?php echo $ra['img1']; ?>" style="width: 100%; height: 160px; object-fit: cover;">
                        </div>
                        <div class="col-md-9 col-6">
                            <h5 style="font-size: 16px; margin-top: 15px;"><?php echo $ra['i_name']; ?></h5>
                            <h5 class="text-success">&#x20B9;<?php echo $ra['i_price'] ?></h5>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-3 col-8">
                            <?php
                 
                 if ($row['p_qty'] == '1') 
                 {
                    ?>
<a href="cart_min.php?id=<?php echo $row['id']; ?>&p_qty=<?php echo $row['p_qty']; ?>"><input type="button" name="" value="-" class="btn" disabled></a>
                    <?php
                 }
                 else
                 {
                    ?>
                   <a href="cart_min.php?id=<?php echo $row['id']; ?>&p_qty=<?php echo $row['p_qty']; ?>"><input type="button" name="" value="-" class="btn"></a>
                    <?php
                 }

                ?>
                
                <input type="number" name="p_qty" value="<?php echo $row['p_qty']; ?>" style="width: 25px; text-align: center;">
                <a href="cart_plus.php?id=<?php echo $row['id']; ?>&p_qty=<?php echo $row['p_qty']; ?>"><input type="button" class="btn" name="" value="+"></a>
                        </div>
                         <div class="col-md-9 col-4">
                            <a href="remove_c.php?id=<?php echo $row['id']; ?>"><input type="button" name="" value="Remove" class="btn"></a>
                        </div>
                    </div>

                <?php } } ?>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-4">
            <div style="background: #fff; border-radius: 10px; padding: 10px; padding-bottom: 16px;">
                <h5>Payment</h5>
                <div class="row mt-4">
                    <div class="col-md-6">
                        Price (<?php echo $tota_cart; ?> Item)
                    </div>
                    <div class="col-md-6" style="text-align: right;">
                        &#x20B9;<?php echo $toatl; ?>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-6">
                        Shipping Charges
                    </div>
                    <div class="col-md-6" style="text-align: right;">
                        Free
                    </div>
                </div>
                
                <hr>

              <div class="row mt-3">
                    <div class="col-md-6">
                        <h6 style="font-size: 21px;">Total</h6>
                    </div>
                    <div class="col-md-6" style="text-align: right;">
                       <h6 style="font-size: 21px;"> &#x20B9;<?php echo $toatl; ?></h6>
                    </div>
                </div>

<center><a href="checkout.php"><button type="button" class="btn btn-success rounded-pill w-100 mt-3">Let's Check Out</button></a></center>


 

            </div>
        </div>
    </div>
</div>





<?php } ?>

<br><br><br>

</form>
</body>
</html>