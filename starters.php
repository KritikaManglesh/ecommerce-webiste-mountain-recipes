<?php
include "views/header2.html";

include "views/header2.html";
include "views/foodmenu.html";




include "configs.php";

// include "dessert.php"







$query1="SELECT * FROM food";
$result=mysqli_query($link,$query1);

echo "<div class='tm-right'>
<main class='tm-main'>
  <div id='drink' class='tm-page-content'>
    <!-- Drink Menu Page -->
    <nav class='tm-black-bg tm-drinks-nav'>
      <ul>
        <li>
          <a href='starters.php' class='tm-tab-link active' data-id='cold'>STARTERS</a>
        </li>
        <li>
          <a href='dessert.php' class='tm-tab-link' data-id='hot'>DESERTS</a>
        </li>
        <li>
          <a href='coffee.php' class='tm-tab-link' data-id='juice'>COFFEE</a>
        </li>
      </ul>
    </nav>
";

       while ($data = mysqli_fetch_array($result))  {


      echo"  <div id='cold' class='tm-tab-content'>
              <div class='tm-list'>
                <div class='tm-list-item'>          
                  <img src=img/$data[image] alt='Image' class='tm-list-item-img'>
                  <div class='tm-black-bg tm-list-item-text'>
                    <h3 class='tm-list-item-name'>$data[Starters]<span class='tm-list-item-price'>$data[Price]</span></h3>
                                
                    <p class='tm-list-item-description'>$data[Description]</p>
                    <span style='align-items:'right';'><A HREF='addtocart.php?addid=$data[id]'><button type='button' class='btn btn-primary'>Add </button></A></span>
                               <span> <a href='/razaorpay/index.php?buyid=$data[id]'><button type='button' class='btn btn-danger'>Buy</button></A>
                                 </span>
                    
                  </div>
                </div>
            </div>
            </div>
       ";}


echo"</div></main></div>";







   

      include "views/footer.html";


?>