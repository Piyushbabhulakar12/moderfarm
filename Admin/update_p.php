<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title></title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
	

<?php

$id = $_GET['id'];

include '../conn.php';

$sql = " select * from addproduct where id = '$id' ";

$run = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($run);
	
?>

<br>
<center>
	<table border="1">
		<tr>
			<td>Item Name</td>
			<td><input type="text" name="i_name" value="<?php echo $row['i_name']; ?>"></td>
		</tr>
		<tr>
			<td>Item Price</td>
			<td><input type="number" name="i_price" value="<?php echo $row['i_price']; ?>"></td>
		</tr>
		<tr>
			<td>Description</td>
			<td>
				<textarea name="i_des" rows="10"><?php echo $row['i_des']; ?></textarea>
			</td>
		</tr>
		<tr>
			<td><img src="../Image/<?php echo $row['img1']; ?>" height="100" width="100"></td>
			<td><input type="file" name="img1">
                <input type="submit" name="img1" value="Upload Image 1">

<?php

$id = $_GET['id'];

include '../conn.php';

if (isset($_POST['img1'])) 
{

	  $img1 = $_FILES['img1'] ['name'];

    $image_tmp_name = $_FILES['img1']['tmp_name'];
   
    move_uploaded_file($image_tmp_name, "../Image/$img1");

    $sql = " update addproduct set img1 = '$img1' where id = '$id' ";

    if (mysqli_query($conn,$sql)) 
    {
     echo '<meta http-equiv="refresh" content="0">';
    }
    else
    {
    	echo "Not Done";
    }

}

?>


			</td>
		</tr>
		<tr>
			<td><img src="../Image/<?php echo $row['img2']; ?>" height="100" width="100"></td>
			<td><input type="file" name="img2">
                <input type="submit" name="img2" value="Upload Image 2">
                <?php

$id = $_GET['id'];

include '../conn.php';

if (isset($_POST['img2'])) 
{

	  $img2 = $_FILES['img2'] ['name'];

    $image_tmp_name = $_FILES['img2']['tmp_name'];
   
    move_uploaded_file($image_tmp_name, "../Image/$img2");

    $sql = " update addproduct set img2 = '$img2' where id = '$id' ";

    if (mysqli_query($conn,$sql)) 
    {
     echo '<meta http-equiv="refresh" content="0">';
    }
    else
    {
    	echo "Not Done";
    }

}

?>
			</td>
		</tr>
		<tr>
			<td><img src="../Image/<?php echo $row['img3']; ?>" height="100" width="100"></td>
			<td><input type="file" name="img3">
                <input type="submit" name="img3" value="Upload Image 3">
                 <?php

$id = $_GET['id'];

include '../conn.php';

if (isset($_POST['img3'])) 
{

	  $img3 = $_FILES['img3'] ['name'];

    $image_tmp_name = $_FILES['img3']['tmp_name'];
   
    move_uploaded_file($image_tmp_name, "../Image/$img3");

    $sql = " update addproduct set img3 = '$img3' where id = '$id' ";

    if (mysqli_query($conn,$sql)) 
    {
     echo '<meta http-equiv="refresh" content="0">';
    }
    else
    {
    	echo "Not Done";
    }

}

?>
			</td>
		</tr>
		<tr>
			<td><img src="../Image/<?php echo $row['img4']; ?>" height="100" width="100"></td>
			<td><input type="file" name="img4">
                <input type="submit" name="img4" value="Upload Image 4">
                 <?php

$id = $_GET['id'];

include '../conn.php';

if (isset($_POST['img4'])) 
{

	  $img4 = $_FILES['img4'] ['name'];

    $image_tmp_name = $_FILES['img4']['tmp_name'];
   
    move_uploaded_file($image_tmp_name, "../Image/$img4");

    $sql = " update addproduct set img4 = '$img4' where id = '$id' ";

    if (mysqli_query($conn,$sql)) 
    {
     echo '<meta http-equiv="refresh" content="0">';
    }
    else
    {
    	echo "Not Done";
    }

}

?>
			</td>
		</tr>

          
          <tr>
          	<td>Active</td>
          	<td>
          		<?php
                    
                    if ($row['status'] == 'Active') 
                    {
                       ?>
                        <button type="submit" name="submitoff" value="Off"><i class="fa fa-toggle-on" aria-hidden="true" style="font-size: 25px; color: green;"></i></button>
                       <?php
                    }
                    else
                    {
                    	?>
                       <button type="submit" name="submiton" value="On"> <i class="fa fa-toggle-off" aria-hidden="true" style="font-size: 25px; color: red;"></i></button>
                    	<?php
                    }

          		?>


<?php

$id = $_GET['id'];

include '../conn.php';

if (isset($_POST['submitoff'])) 
{
    
    $sql = " update addproduct set status = 'Inactive' where id = '$id' ";

    if (mysqli_query($conn,$sql)) 
    {
      echo '<meta http-equiv="refresh" content="0">';
    }
    else
    {
    	echo "Not Done";
    }

}


?>

<?php

$id = $_GET['id'];

include '../conn.php';

if (isset($_POST['submiton'])) 
{
    
    $sql = " update addproduct set status = 'Active' where id = '$id' ";

    if (mysqli_query($conn,$sql)) 
    {
      echo '<meta http-equiv="refresh" content="0">';
    }
    else
    {
    	echo "Not Done";
    }

}


?>






          	</td>
          </tr>


		<tr>
			<th colspan="2">
               <a href="inventory.php"><input type="button" name="" value="Cancel"></a>
				<input type="submit" name="submit" value="Add"></th>
		</tr>
	</table>
</center>




<?php

$id = $_GET['id'];

include '../conn.php';

if (isset($_POST['submit'])) 
{
	$i_name = $_POST['i_name'];
	$i_price = $_POST['i_price'];
    $i_des = $_POST['i_des'];


 $sql = " update addproduct set i_name = '$i_name' , i_price = '$i_price' , i_des = '$i_des' where id = '$id' ";


 if (mysqli_query($conn,$sql)) 
 {
  echo '<meta http-equiv="refresh" content="0">';
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