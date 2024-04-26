
<?php

// session_start();
// include 'views/header2.html';


// if(!isset($_SESSION['email']))
// {
//     header('location:register.php');
// }

include 'configs.php';

                    $customerName= $_POST["customerName"];
                    $customerEmail= $_POST["customerEmail"];
                    $customerPhone= $_POST["customerPhone"];
                    $customerOrder= $_POST["customerOrder"];
                    $customerNote= $_POST["customerNote"];
$qry="INSERT INTO contact(name,email, phone, orderid, message) VALUES('$customerName','$customerEmail', '$customerPhone', '$customerOrder', '$customerNote')";
$res=mysqli_query($link,$qry);

if(mysqli_affected_rows($link)==1)
{    echo 1;
}

?>