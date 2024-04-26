<?php
session_start();

include 'views/header2.html';
include "views/foodmenu.html";

include 'configs.php';

// Fetch all categories from the "category" table
$categoryQuery = "SELECT * FROM category";
$categoryResult = mysqli_query($link, $categoryQuery);

// Loop through each category
while ($category = mysqli_fetch_assoc($categoryResult)) {
    echo "<table>
    <tr>
    <div class='tm-right'>
<main class='tm-main'>
  <div id='drink' class='tm-page-content'>
    <nav class='tm-black-bg tm-drinks-nav'>
      <ul>
        <li>
          <a href='starters.php'>" . $category['category_name'] . "</a>
        </li>
      </ul>
    </nav>
";

    // Fetch products belonging to the current category
    $productQuery = "SELECT * FROM product WHERE category_id = " . $category['category_id'];
    $productResult = mysqli_query($link, $productQuery);

    // Display the products

    
    echo "<ul>";
    while ($data1 = mysqli_fetch_assoc($productResult)) {
        echo"  <div class='tm-tab-content'>
<div class='tm-list'>
  <div class='tm-list-item'>          
    <a href='item.php?addid=".$data1['product_id']."'><img src='img/".$data1['product_img']."' alt='Image' class='tm-list-item-img'></a>
    <div class='tm-black-bg tm-list-item-text'>
      <h3 class='tm-list-item-name'>".$data1['product_name']."<span class='tm-list-item-price'> Rs ".$data1['product_price']."</span></h3>
                  
      <p class='tm-list-item-description'>".$data1['product_des']."</p>";
      ?>
      <form action="addtocart.php" method="post">
        <div style='display:inline-block;'>
        <input type="hidden" value="<?php echo $data1['product_id'];?>" name='addid'>
      <span style='align-items:right'><button class='btn btn-primary' name="add_cart">Add </button></span>
       </form>
       <?php echo"
                 <span style='margin-left:10px'> <A HREF='pay/razaorpay/buy.php?price=".$data1['product_price']."'><button type='button' class='btn btn-danger'>Buy</button></A>
                   </span>
                   </div>
      
    </div>
  </div>
</div>
</div>
";}



    }
    echo "</div></main></div>";


// Close the database connection
mysqli_close($link);
?>
<script src=/cllgproject/js/quantity.js>
