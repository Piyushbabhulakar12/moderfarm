<?php

include '../conn.php';

$id = $_GET['id'];

$sql = " delete from cart where id = '$id' ";

if (mysqli_query($conn,$sql)) 
{
	header("location:cart.php");
}
else
{
	echo "Not Done";
}

?>