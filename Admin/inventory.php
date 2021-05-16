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
	<title>Inventory</title>
</head>
<body>
<form method="post">
	

<?php include 'navbar.php'; ?>



<div class="container mt-4">
	<div class="row">
		<div class="col-md-12">
			<div class="row bg-success p-3">
				<div class="col-2">
					Image
				</div>
				<div class="col-4">
					Name
				</div>
				<div class="col-2">
					Price
				</div>
				<div class="col-2">
					Status
				</div>
				<div class="col-2">
					Action
				</div>
			</div>
		</div>
	</div>
</div>


<div class="container ">
	<div class="row">
		<div class="col-md-12">
<?php

include '../conn.php';

$sql = " select * from addproduct ";

$run = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($run)) 
{
	
?>
			<div class="row bg-light p-3">
				<div class="col-2">
					<img src="../Image/<?php echo $row['img1']; ?>" style="height: 100px; width: 100%; object-fit: cover;">
				</div>
				<div class="col-4">
					<?php echo $row['i_name']; ?>
				</div>
				<div class="col-2">
					<?php echo $row['i_price']; ?>
				</div>
				<div class="col-2">
					<?php
                    
                    if ($row['status'] == 'Active') 
                    {
                       ?>
                        <span style="color: green;"><?php echo $row['status']; ?></span>
                       <?php
                    }
                    else
                    {
                    	?>
                      <span style="color: red;"> <?php echo $row['status']; ?></span>
                    	<?php
                    }

          		?>
				</div>
				<div class="col-2">
					<a href="update_p.php?id=<?php echo $row['id']; ?>"><input type="button" name="" value="Update" class="btn btn-success rounded-pill"></a>
				</div>
			</div>
				<?php } ?>
		</div>

	</div>
</div>







</form>
</body>
</html>