<?php

include_once 'views/header2.html';
include_once 'configs.php';
?>

<div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <!-- <h1 class="display-3 text-white mb-3 animated slideInDown">Shopping Cart</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="/cllgproject/index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="pages.php">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Shopping Cart</li>
                        </ol>
                    </nav> -->
                </div>
            </div>
        </div>


        <?php
if(isset($_REQUEST['addid'])){
    $id=$_REQUEST['addid'];

    $qry="SELECT * FROM product,category WHERE product_id=$id AND category.category_id=product.category_id";
    $res=mysqli_query($link,$qry);
    while($data=mysqli_fetch_array($res))
    {
        $name=$data['product_name'];
        $image=$data['product_img'];
        $price=$data['product_price'];
        $description=$data['product_des'];
        $category=$data['category_name'];

    };
};
?>
            
            
    <link rel="stylesheet" href="css/item.css" />

    

    

    <script defer src="js/script.js"></script>


    <!-- Feel free to remove these styles or customise in your own stylesheet 👍 -->
  </head>
  <body>
    <div class="body-wrapper"></div>


   <main class="item">
      <section class="img">
      <img src="img/<?php echo $image;?>" alt="image"
class="img-main" />
      </section>

      <section class="price">
        <h2 class="price-sub__heading">Mountain Recipes</h2>
        <h1 class="price-main__heading">                <?php echo $name;?>
</h1>
<h2 class="price-main__heading2">Category:<?php echo $category;?></h2>

        <p class="price-txt"><?php echo $description;?>
        </p>
        <div class="price-box">
          <div class="price-box__main">
            <span class="price-box__main-new"> Rs <?php echo $price;?></span>
          </div>
        </div>
        <div class="price-btnbox">
        <form action="addtocart.php" method="post">
        <input type="hidden" value="<?php echo $data['product_id'];?>" name='addid'>
      <span style='align-items:right'><button class='btn--orange' name="add_cart">            ADD TO CART
 </button></span>
       </form>
      
          
          
          <?php echo "<a href='pay/razaorpay/buy.php?price=$price'>
          <button class='btn--orange' style='margin-left:10px; font-size:2000;'>
            BUY
          </button>
          </a>";
          ?>
        </div>
      </section>
    </main>

  </body>
</html>

    

<?php
include 'views/footer.html';
?>
</body>
</html>