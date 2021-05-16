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
         .bg
         {
         	background-image: url(https://images.unsplash.com/photo-1546260357-734c06422ec6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80);
         	width: 100%;
         	height: 600px;
         	background-repeat: no-repeat;
         	background-size: cover;
         	object-fit: cover;
         	background-position: center;
         }

		.text_h1
		{
			color: #fff;
			font-size: 51px;

		}

	</style>
</head>
<body>
<form method="post">

<?php include 'navbar.php'; ?>
<?php

nameaa("Blog");

?>



<div class="container">
   <div class="row">
       <?php

include '../conn.php';

$sql = " select * from blog ";

$run = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($run)) 
{
   
?>
      <div class="col-md-3 mt-4">
         <div style="background: #fff;">
            <img src="../Image/<?php echo $row['b_img']; ?>" style="width: 100%; height: 220px; object-fit: cover;">
            <h6 style="font-size: 18px; padding: 10px; text-align: center;  padding-top: 15px; width:100%; text-overflow: ellipsis; overflow: hidden; white-space: nowrap;"><a href="v_blog.php?id=<?php echo $row['id']; ?>" class="text-dark"><?php echo $row['b_name']; ?></a></h6>

            <a href="v_blog.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn text-success">Read More</button></a>
            
         </div>
      </div>
        <?php } ?>
   </div>
</div>








<br><br><br>

</form>
</body>
</html>