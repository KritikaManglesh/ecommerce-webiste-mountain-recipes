<?php

include "configs.php";


if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $datetime = $_POST["datetime"];
    $people = $_POST["people"];
    $table = $_POST["table"];
    $message = $_POST["message"];

$st="SELECT * FROM booking WHERE datetime='$datetime' AND table1='$table'";
$res=mysqli_query($link,$st);
if(mysqli_num_rows($res)>0) { 
    $error="TABLE ALREADY BOOKED";
}
else{
    $query = "INSERT INTO booking(email,name,phone,datetime,people,table1,message) VALUES('$email','$name','$phone','$datetime','$people','$table','$message')";
    $result = mysqli_query($link, $query);
    if (mysqli_affected_rows($link) == 1) {
        echo "<br><div class='alert alert-success' role='alert'>
        Your Table Has Been Booked!
      </div>";
      
    } else {
        echo "<br><div class='alert alert-danger' role='alert'>
        Your Table Has Not Been Booked!
      </div>";
      
    }
}
}