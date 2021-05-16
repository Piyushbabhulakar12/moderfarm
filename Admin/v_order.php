<?php

include '../conn.php';

$id = $_GET['id'];

$sql = " update order_i set action = 'Confirm' where id = '$id' ";

if (mysqli_query($conn,$sql)) 
{
	
     $id = $_GET['id'];

     $aka = " select * from order_i where id = '$id' ";

     $raia = mysqli_query($conn,$aka);
      
     $pro = mysqli_fetch_array($raia);

      $f_name = $pro['f_name'];
      $email = $pro['email'];
      $phone = $pro['phone'];
      $addr = $pro['addr'];
      $city = $pro['city'];
      $pin = $pro['pin'];
      $state = $pro['state'];
      $user_id = $pro['user_id'];
      $i_id = $pro['id'];
      $i_img = $pro['i_img'];
      $i_name = $pro['i_name'];
      $i_qty = $pro['i_qty'];
      $i_price = $pro['i_price'];
      $total_price = $pro['total_price'];
      $total_item = $pro['total_item'];
      $order_id = $pro['order_id'];
      $action = $pro['action'];
      $payment = $pro['payment'];

     $sqaa = " insert into a_hit (f_name,email,phone,addr,city,pin,state,user_id,i_id,i_img,i_name,i_qty,i_price,total_price,total_item,order_id,action,payment) values ('$f_name','$email','$phone','$addr','$city','$pin','$state','$user_id','$i_id','$i_img','$i_name','$i_qty','$i_price','$total_price','$total_item','$order_id','$action','$payment') ";

     if (mysqli_query($conn,$sqaa)) 
     {
         header("location:order.php");
     }
     else
     {
          echo "Not Done";
     }


}
else
{
	echo "Not Done";
}

?>