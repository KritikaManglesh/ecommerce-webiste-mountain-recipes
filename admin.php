<?php
include 'configs.php';

session_start();
if (!isset($_SESSION['email'])) {
    header("location:register.php");
}
// if (isset($_REQUEST["logout"])) {
//     session_destroy();
// }
// session_destroy();

?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mountain Recipes</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="/admindasboard/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="/admindasboard/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="/admindasboard/assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="img/favicon.ico" rel="icon">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="/cllgproject/css/wavecafe.css" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'  crossorigin='anonymous'>
        </script>




</head>

<body>
    <div id="wrapper">
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php" style="color: black;"><i
                            class="fa fa-utensils me-3">&#xf0f5;</i>&nbsp;Mountain Recipes</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/cllgproject/views/register.html" class="btn py-2 px-4"
                                style="font: size 25px;color: black;margin-left: 40px;">LOGIN/SGIN UP</a>
                        </li>
                        <a href="/cllgproject/addtocart.php" class="nav-item nav-link"><i class="fa fa-shopping-cart"
                                style="font-size:29px;color: black;margin-left: 40px;"></i></li>
                        </a>
                        <a href="/admindasboard/index.html" class="nav-item nav-link"><i class='fas fa-user-circle'
                                style='font-size:30px;color:black;margin-left: 40px;margin-right: 20px;'></i></li>
                        </a>
                    </ul>
                </div>

            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center user-image-back">
                        <img src="/cllgproject/img/find_user.png" class="img-responsive" />

                    </li>


                    <li>
                        <a href="food.php"><i class="fas fa-hamburger ">&#xf805;</i>Food</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-edit "></i>Your Orders<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="order.php">Orders</a>
                            </li>
                            <li>
                                <a href="#">Cancel Orders</a>
                            </li>
                            <!-- <li>
                                <a href="#">Free Link</a>
                            </li> -->
                        </ul>
                    </li>

                    <li>
                        <a href="addtocart.php"><i class="fa fa-table ">&#xf07a;</i> Shopping Cart</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-edit ">&#xf298;</i>Forms </a>
                    </li>

<!-- 
                    <li>
                        <a href="#"><i class="fa fa-sitemap "></i>Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>

                            </li>
                        </ul>
                    </li> -->
                    <li>
                        <a href="/cllgproject/views/contact.html"><i class="material-icons">&#xe0cf;</i>
                            Contact</a>
                    </li>
                    <li>
                        <a href="#"><i class="material-icons">&#xe8b8;</i>	
</i>
                            Settings</a>
                    </li>

                    <li>
                        <a href="#"><i  class="fas">&#xf590;</i>	
</i>
                            Help Center </a>
                    </li>
                    <li>
                        <!-- <a href="admin.php?logout=1"><i class="fa fa-logout "></i>logout</a> -->
                        <a href="logout.php"><i class="fa">&#xf08b;</i>logout</a>

                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                    <?php 
$userid=$_SESSION['email'];
$query=mysqli_query($link,"SELECT * FROM sign_up WHERE email='$userid'");
while($result=mysqli_fetch_array($query))
{?>
<h3><?php echo $result['username'];?></h3>
<?php
}?>
<hr>
<?php
$email=$_SESSION['email'];


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



</div>
    </body>
    </html>




<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<script src=/cllgproject/js/quantity.js>
</script>

    </a>

                        </div>
                </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>

</html>