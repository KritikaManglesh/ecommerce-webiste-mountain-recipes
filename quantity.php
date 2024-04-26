<?php
include_once 'configs.php';
$id=$_POST['cartid'];
$quantity=$_POST['quantity'];
$qry="UPDATE cart SET quantity=$quantity WHERE cart_id=$id";
if(mysqli_query($link,$qry)){
echo true;

}



?>