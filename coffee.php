<?php

include "views/header2.html";

include "views/foodmenu.html";


include "configs.php";
$query3="SELECT * FROM coffee";
$result3=mysqli_query($link,$query3);


echo "<div class='tm-right'>
<main class='tm-main'>
  <div id='drink' class='tm-page-content'>
    <!-- Drink Menu Page -->
    <nav class='tm-black-bg tm-drinks-nav'>
      <ul>
        <li>
          <a href='starters.php' class='tm-tab-link' data-id='cold'>STARTERS</a>
        </li>
        <li>
          <a href='dessert.php' class='tm-tab-link' data-id='hot'>DESERTS</a>
        </li>
        <li>
          <a href='coffee.php' class='tm-tab-link active' data-id='juice'>COFFEE</a>
        </li>
      </ul>
    </nav>
";

       while ($data2 = mysqli_fetch_array($result3))  {


echo"  <div id='hot' class='tm-tab-content'>
<div class='tm-list'>
  <div class='tm-list-item'>          
    <img src=img/$data2[img] alt='Image' class='tm-list-item-img'>
    <div class='tm-black-bg tm-list-item-text'>
      <h3 class='tm-list-item-name'>$data2[coffee]<span class='tm-list-item-price'>$data2[price]</span></h3>
                  
      <p class='tm-list-item-description'>$data2[description]</p>
      <span style='align-items:'right';'><a href='addtocart.php?addid=$data2[id]'><button type='button' class='btn btn-primary'>Add </button></A></span>
                 <span> <a href='/razaorpay/index.php?buyid=$data2[id]'><button type='button' class='btn btn-danger'>Buy</button></A>
                   </span>
      
    </div>
  </div>
</div>
</div>
";}


echo"</div></main></div>";

include "views/footer.html";





?>