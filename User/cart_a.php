<?php

session_start();

if ($_SESSION['email'] == true) 
{
	echo $_SESSION['email'];
}
else
{
  header("location:sign/sign.php");
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


<?php

include '../conn.php';

$p_id = $_GET['id'];

$sql = " insert into cart (p_id,p_qty,user_id) values ('$p_id','1','$id') ";

if (mysqli_query($conn,$sql)) 
{
echo $id = $_GET['id'];

?>

<script>
                       
       location.href = "view_product.php?id=<?php echo $_GET['id']; ?>";

 </script>

<?php
}
else
{
	echo "Not Done";
}



?>