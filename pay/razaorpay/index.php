<?php

session_start();
$link=mysqli_connect("localhost","root","","cllgproject") or die("connection failed");

$email=$_SESSION['email'];
$qry="SELECT * FROM sign_up WHERE email='$email'";
$res=mysqli_query($link,$qry);
$data=mysqli_fetch_array($res);
$name=$data['username'];
$number=$data['phone'];
$total=$_REQUEST['total']; 

?>


<html>
    <head>
    <link href="css/index.css" rel="stylesheet">

</head>
<form method="GET" action="pay.php">
<div class="form">
      <div class="title">MOUNTAIN RECIPES</div>
      <div class="subtitle">PAYMENT FORM</div>
      <div class="input-container ic1">
      <label for="firstname" style="color:white;">Name</label>

        <input id="firstname" class="input" type="text" name="name" value="<?php echo $name;?>">
        <div class="cut"></div>
      </div>
      <div class="input-container ic2">
      <label for="phone number" style="color:white;">Phone Number</label>

        <input id="phone" class="input" type="phone" name="phone" value="<?php echo $number;?>">
        <div class="cut"></div>
      </div>
      <div class="input-container ic2">
      <label for="email" style="color:white;">Email</label>

        <input id="email" class="input" type="text" name="email" value="<?php echo $email;?>">
        <div class="cut cut-short"></div>
      </div> 
      <div class="input-container ic2">
      <label for="amount"style="color:white;" >Amount</label>

        <input id="amount" class="input" type="text" name="total" value="<?php echo $total;?>">
        <div class="cut"></div>
      </div>
      <div class="input-container ic1">
      <label for="address" style="color:white;">Address</label>

        <input id="address" class="input" type="text" name="name" placeholder="ADDRESS">
        <div class="cut"></div>
      </div>
      
      <div class="input-container ic2">
      <label for="user id" style="color:white;">User ID</label>

        <input id="user id" class="input" type="text" name="uid" value="<?php echo $name.rand();?>">
        <div class="cut"></div>
      </div>
      <div class="input-container ic2">
      <label for="transaction id" style="color:white;">Transaction ID</label>

      <input id="transaction id" class="input" type="text" name="tid" value="<?php echo rand();?>"> 
        <div class="cut"></div>
      </div>
      <button type="text" class="submit">Pay</button>
    </div>
</form>
</html>