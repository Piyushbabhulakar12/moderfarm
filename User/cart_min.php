<?php

include '../conn.php';

$id = $_GET['id'];

$p_qty = --$_GET['p_qty'];

$sql = " update cart set p_qty = '$p_qty' where id = '$id' ";

if (mysqli_query($conn,$sql)) 
{
	header("location:cart.php");
}
else
{
	echo "Not DOne";
}

?>