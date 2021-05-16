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
	<title>Add Blog</title>
	<style type="text/css">
		.text_p
		{
			font-size: 12px; 
			color: gray;
			padding-top: 15px;
		}
		label {
  background-color: #fff;
  color: #001;
  padding: 0.5rem;
  border: 1px solid #001;
  border-radius: 20px;
  cursor: pointer;
  
  width: 150px;
  text-align: center;
}
	</style>
</head>
<body>
<form method="post" enctype="multipart/form-data">
	
<?php include 'navbar.php'; ?>



<div class="container mt-2">
	<h3>Add Blog</h3>
</div>





<div class="container">
	<div class="row">
		<div class="col-md-8 m-auto">
			<div style="background: #fff; border-radius: 10px; padding: 10px; padding-bottom: 15px;">
				
				<div class="row">
					<div class="col-md-6">
						<h6 class="text_p">Item Name</h6>
				        <input type="text" name="b_name" placeholder="Enter Item Name" class="form-control">
					</div>
				</div>
                 
                <div class="row">
                	<div class="col-md-12">
                		<h6 class="text_p">Description</h6>
                		<textarea name="b_des" rows="8" placeholder="Enter Description" class="form-control"></textarea>
                	</div>
                </div>

                <div class="row">
                	<div class="col-md-6">
                		<h6 class="text_p">Image</h6>
                		<input type="file" name="b_img" id="actual-btn" hidden>
                		<label for="actual-btn">Chosse Image</label>
                	</div>
                </div>

               <div class="row mt-3">
                	<div class="col-md-6 m-auto">
                		 <center><input type="submit" name="submit" value="Add" class="btn btn-success mt-2 w-50 rounded-pill"></center>
                	</div>
                </div>



			</div>
		</div>
	</div>
</div>




<input type="hidden" name="b_date" value="<?php echo date("Y/m/d"); ?>">


<?php

include '../conn.php';

if (isset($_POST['submit'])) 
{
	$b_name = $_POST['b_name'];
	$b_des = $_POST['b_des'];

    $b_img = $_FILES['b_img'] ['name'];

    $image_tmp_name = $_FILES['b_img']['tmp_name'];
   
    move_uploaded_file($image_tmp_name, "../Image/$b_img");

    $b_date = $_POST['b_date'];

 
 $sql = " insert into blog (b_name,b_des,b_img,b_date) values ('$b_name','$b_des','$b_img','$b_date') ";

 if (mysqli_query($conn,$sql)) 
 {
   echo "Done";
 }
 else
 {
 	echo "Not Done";
 }



}

?>




</form>
</body>
</html>