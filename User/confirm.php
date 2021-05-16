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

 $_SESSION['order_id'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Confirm Page</title>
</head>
<body>

<?php include 'navbar.php'; ?>
<br>
	<center><h2>Order Confirm</h2>
            <p>Thanks For Shopping With Us</p>
            <a href="index.php"><button type="button" class="btn btn-success rounded-pill" style="width: 120px;">Ok</button></a>
	</center>

</body>
</html>