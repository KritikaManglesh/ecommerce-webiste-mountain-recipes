<?php 
session_start();


include "configs.php";
//login
$email = $_POST["email"];
$password = $_POST["password"];

// login query
$query = "SELECT password FROM sign_up WHERE email='$email'";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
$pass=$row['password'];

if (isset($row)) {
    if(password_verify($password,$pass)) {
        $_SESSION['email'] = $email;

        echo 2;
    } else {
        echo 3;
    }
} else { 
    echo 4;
}


?>