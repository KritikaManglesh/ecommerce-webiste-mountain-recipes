<?php

$deleteid = $_REQUEST["cart_id"];

include "configs.php";

$qry="DELETE FROM cart WHERE cart_id={$deleteid}";

mysqli_query($link, $qry);
header("location:addtocart.php");
    

?>