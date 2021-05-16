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

nameaa("Your Item's $tota_cart");

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


         
        
         			<div class="mt-4" style="background: #fff; border-radius: 10px; padding: 10px; padding-bottom: 16px;">
         				<h5>Address Detail</h5>
                        
                        <div class="row">
                        	<div class="col-md-6">
                        	<h6 class="text_p">Full Name</h6>
                        	<input type="text" name="f_name" placeholder="Enter Full Name" class="form-control">
                        </div>
                        <div class="col-md-6">
                        	<h6 class="text_p">Email Id</h6>
                        	<input type="text" name="email" placeholder="Enter Email Id" class="form-control">
                        </div>
                        </div>

                        <div class="row">
                        	<div class="col-md-6">
                        		<h6 class="text_p">Phone Number</h6>
                        		<input type="text" name="phone" placeholder="Enter Phone Number" class="form-control">
                        	</div>
                        </div>

                         <div class="row">
                        	<div class="col-md-12">
                        		<h6 class="text_p">Address</h6>
                        		<textarea name="addr" rows="6" placeholder="Enter Address" class="form-control"></textarea>
                        	</div>
                        </div>

                        <div class="row">
                        	<div class="col-md-6">
                        	<h6 class="text_p">City</h6>
                        	<input type="text" name="city" placeholder="Enter Full Name" class="form-control">
                        </div>
                        <div class="col-md-6">
                        	<h6 class="text_p">Pin Code</h6>
                        	<input type="text" name="pin" placeholder="Enter Email Id" class="form-control">
                        </div>
                        </div>

                        <div class="row">
                        	<div class="col-md-6">
                        		<h6 class="text_p">State</h6>
                        		<input type="text" name="state" placeholder="Enter State" class="form-control">
                        	</div>
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
                    	<input type="hidden" name="total_item" value="<?php echo $tota_cart; ?>">
                       <h6 style="font-size: 21px;"> &#x20B9;<?php echo $toatl; ?></h6>
                    </div>
                </div>

<center><a href="payment.php"><input type="submit" name="submit" value="Make Payment" class="btn btn-success w-100 rounded-pill"></center>


 

            </div>
        </div>
    </div>
</div>


<input type="hidden" name="total_price" value="<?php echo $toatl; ?>">

<input type="hidden" name="order_id" value="<?php echo uniqid(); ?>">




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

if (isset($_POST['submit'])) 
{

            $sql = " select * from cart where user_id = '$id' ";

            $run = mysqli_query($conn,$sql);

            while ($row = mysqli_fetch_array($run)) 
            {
            	$p_id = $row['p_id'];

            	$sqa = " select * from addproduct where id = '$p_id' ";

            	$uau = mysqli_query($conn,$sqa);

            	while ($ra = mysqli_fetch_array($uau)) 
            	{


	 $f_name = $_POST['f_name'];
	 $email = $_POST['email'];
	 $phone = $_POST['phone'];
	 $addr = $_POST['addr'];
	 $city = $_POST['city'];
	 $pin = $_POST['pin'];
	 $state = $_POST['state'];
	 $user_id = $row['user_id'];
	 $i_id = $ra['id'];
	 $i_img = $ra['img1'];
	 $i_name = $ra['i_name'];
	 $i_qty = $row['p_qty'];
	 $i_price = $ra['i_price'];
	 $total_price = $_POST['total_price'];
	 $total_item = $_POST['total_item'];
     $order_id = $_POST['order_id'];


     $sql = " insert into order_i (f_name,email,phone,addr,city,pin,state,user_id,i_id,i_img,i_name,i_qty,i_price,total_price,total_item,order_id) values ('$f_name','$email','$phone','$addr','$city','$pin','$state','$user_id','$i_id','$i_img','$i_name','$i_qty','$i_price','$total_price','$total_item','$order_id') ";

     if (mysqli_query($conn,$sql)) 
     {
     	$_SESSION['order_id'] = $order_id;
     	?>
<script>
                       
       location.href = "payment.php";

 </script>

     	<?php
     }
     else
     {
     	echo "Not Done";
     }



}

}

}

?>



<br><br><br>


</form>
</body>
</html>