<?php

session_start();
$link=mysqli_connect("localhost","root","","cllgproject") or die("connection failed");
$email=$_SESSION['email'];
$name=$_SESSION['name'];
$phone = $_SESSION['phone'];
$uid =$_SESSION['service'];
$temp = $_SESSION['typeProduct'];
$orderid=$_SESSION['razorpay_order_id'];


$r=$_GET['response'];
if($r==1){
    // echo "<h1>TRANSACTION IS SUCCESSFULL</h1>";

// echo "<html>
// <head>
// <link href='css/success.css' rel='stylesheet'>

// </head>
// <form method='GET>
// <div class='form'>
//   <div class='title'>MOUNTAIN RECIPES</div>
//   <br>
//   <br>
//   <br>
  
//   <div class='subtitle'>PAYMENT INFORMATION</div>
//   <br>
  
//   <div style='color:blue;font-weight:40px;'>TRANSACTION IS SUCCESSFULL</div>
//     <h2><u>Name:</u></h2>
//     <h3>$name</h3>
//     <h2><u>Order ID:</u></h2>
//     <h3>$orderid</h3>
//     <h2><u>Payment ID:</u></h2>
//     <h3>$temp
//     </h3>
//   </div>
//   <button class='submit'><a href='/cllgproject/index.php?1'>Okay</a></button>
// </div>
// </form>
// </html>";

$query="SELECT * FROM cart WHERE user_id='$email'";
$result=mysqli_query($link,$query);
while($data=mysqli_fetch_row($result))
{
  $query1="INSERT INTO orders VALUES(null,'$data[1]','$data[2]','order confirmed')";
  mysqli_query($link,$query1);

}
$query1="DELETE FROM cart WHERE user_id='$email'";
mysqli_query($link,$query1);
header("location:../razaorpay/orders.php");
echo"Redirecting in 5 seconds....";
}
?>