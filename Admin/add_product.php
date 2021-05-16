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
	<title>Add Product</title>
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
	<h3>Add Product</h3>
</div>




<div class="container">
	<div class="row">
		<div class="col-md-8 m-auto">
			<div style="background: #fff; border-radius: 10px; padding: 10px; padding-bottom: 15px;">
				
				<div class="row">
					<div class="col-md-6">
						<h6 class="text_p">Item Name</h6>
				        <input type="text" name="i_name" placeholder="Enter Item Name" class="form-control">
					</div>
					<div class="col-md-6">
						<h6 class="text_p">Item Price</h6>
						<input type="number" name="i_price" placeholder="Enter Item Price" class="form-control">
					</div>
				</div>
                 
                <div class="row">
                	<div class="col-md-12">
                		<h6 class="text_p">Description</h6>
                		<textarea name="i_des" rows="8" placeholder="Enter Description" class="form-control"></textarea>
                	</div>
                </div>

                <div class="row">
                	<div class="col-md-6">
                		<h6 class="text_p">Image 1</h6>
                		<input type="file" name="img1" id="actual-btn" hidden>
                		<label for="actual-btn">Chosse Image</label>
                	</div>
                	<div class="col-md-6">
                		<h6 class="text_p">Image 2</h6>
                		<input type="file" name="img2" id="actual-btn" hidden>
                		<label for="actual-btn">Chosse Image</label>
                	</div>
                </div>

                <div class="row">
                	<div class="col-md-6">
                		<h6 class="text_p">Image 3</h6>
                		<input type="file" name="img3" id="actual-btn" hidden>
                		<label for="actual-btn">Chosse Image</label>
                	</div>
                	<div class="col-md-6">
                		<h6 class="text_p">Image 4</h6>
                		<input type="file" name="img4" id="actual-btn" hidden>
                		<label for="actual-btn">Chosse Image</label>
                	</div>
                </div>

               <div class="row mt-3">
                	<div class="col-md-6">
                		 <input type="submit" name="submit" value="Add" class="btn btn-success mt-2 w-50 rounded-pill">
                	</div>
                </div>



			</div>
		</div>
	</div>
</div>




<br>




<?php

include '../conn.php';

if (isset($_POST['submit'])) 
{
	$i_name = $_POST['i_name'];
	$i_price = $_POST['i_price'];
    $i_des = $_POST['i_des'];

    $img1 = $_FILES['img1'] ['name'];

    $image_tmp_name = $_FILES['img1']['tmp_name'];
   
    move_uploaded_file($image_tmp_name, "../Image/$img1");

    $img2 = $_FILES['img2'] ['name'];

    $image_tmp_name = $_FILES['img2']['tmp_name'];
   
    move_uploaded_file($image_tmp_name, "../Image/$img2");

    $img3 = $_FILES['img3'] ['name'];

    $image_tmp_name = $_FILES['img3']['tmp_name'];
   
    move_uploaded_file($image_tmp_name, "../Image/$img3");

    $img4 = $_FILES['img4'] ['name'];

    $image_tmp_name = $_FILES['img4']['tmp_name'];
   
    move_uploaded_file($image_tmp_name, "../Image/$img4");

   
    


 
 $sql = " insert into addproduct (i_name,i_price,i_des,img1,img2,img3,img4) values ('$i_name','$i_price','$i_des','$img1','$img2','$img3','$img4') ";


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