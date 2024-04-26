<?php
session_start();

include 'configs.php';

 //sign_up
    $suemail = $_POST["suemail"];
    $username = $_POST["username"];
    $supassword = $_POST["supassword"];
    // $cpassword = $_POST["cpassword"];
    $phone=$_POST["phone"];
    // $address=$_POST["address"];
    $hash=password_hash($supassword, PASSWORD_DEFAULT);


    $sql=mysqli_query($link,"SELECT id FROM sign_up WHERE email='$suemail'");
    $row=mysqli_num_rows($sql);
    if($row>0)
    {
        echo 0;
    } 
    else{
        if($supassword==$supassword){
        $query = "INSERT INTO sign_up(email,username,password,phone) VALUES('$suemail','$username','$hash','$phone')";
    $result = mysqli_query($link, $query);}
    if ($query) {
        echo 1;
    } 
}
    
    // else{
    //    echo "password is not matched";
    // }


    


   

    
