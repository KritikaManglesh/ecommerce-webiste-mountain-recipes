<?php

session_start();
include 'views/header2.html';
include "views/foodmenu.html";

include_once("configs.php");

$email=$_SESSION['email'];
?>
 <link href='css/wavecafe.css' rel='stylesheet'>
 <?php

$qry="SELECT * FROM orders,product WHERE orders.user_id='$email' AND orders.product_id=product.product_id";
$res=mysqli_query($link,$qry);
while($data=mysqli_fetch_assoc($res)){
    echo"  <table> <tr> <div class='tm-right'>
    <main class='tm-main'>
     
    <div class='tm-tab-content'>
    <div class='tm-list'>
      <div class='tm-list-item'>          
        <a href='item.php?addid=".$data['product_id']."'><img src='img/".$data['product_img']."' alt='Image' class='tm-list-item-img'></a>
        <div class='tm-black-bg tm-list-item-text'>
          <h3 class='tm-list-item-name'>".$data['product_name']."<span class='tm-list-item-price'> ".$data['status']."</span></h3>
                      
          <p class='tm-list-item-description'>".$data['product_des']."</p></div>
          </div>
        </div>
        </div>
        </main>
        </div>
        </tr>
        </table>";}
          ?>
    