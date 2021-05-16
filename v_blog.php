

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

<?php include 'u_navbar.php'; ?>
<?php

nameaa("Blog Detail");

?>

<?php

include 'conn.php';

$id = $_GET['id'];

$sql = " select * from blog where id = '$id' ";

$run = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($run);
   
?>

<div class="container mt-4">
   <div class="row">
      <div class="col-md-12">
         <img src="Image/<?php echo $row['b_img']; ?>" style="width: 100%; height: 280px; object-fit: cover;">

         <h4 style="margin-top: 18px;"><?php echo $row['b_name']; ?></h4>

      </div>
   </div>
</div>


<div class="container mt-4">
   <div class="row">
      <div class="col-md-8">
         <div style="background: #fff; padding: 10px;">
            <h6 style="font-size: 12px; padding-top: 15px;" class="text-success"><?php echo $row['b_date']; ?></h6>

            <p style="font-size: 13px; padding-top: 15px;"><?php echo $row['b_des']; ?></p>

         </div>
      </div>
      <div class="col-md-4">

         <h5>Most Popular</h5>
         <?php

include 'conn.php';

$id = $_GET['id'];

$sql = " select * from blog where id != '$id' ";

$run = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($run)) 
{
   
?>

         <div class="row mt-4">
            <div class="col-5">
               <img src="Image/<?php echo $row['b_img']; ?>" style="width: 100%; height: 100px; object-fit: cover;">
            </div>
            <div class="col-7">
               <h6 style="font-size: 15px;  text-align: center;  width:100%; text-overflow: ellipsis; overflow: hidden; white-space: nowrap;"><a href="v_blog.php?id=<?php echo $row['id']; ?>" class="text-dark"><?php echo $row['b_name']; ?></a></h6>
               <h6 style="font-size: 12px; padding-top: 15px;" class="text-success"><?php echo $row['b_date']; ?></h6>

            </div>
         </div>
      <?php } ?>
         
      </div>
   </div>
</div>




<br><br><br>

</form>
</body>
</html>