

<?php

session_start();
// include 'views/header2.html';


if(!isset($_SESSION['email']))
{
    header('location:register.php');
}


include_once 'configs.php';



if(isset($_POST['add_cart'])){
     $id=$_POST['addid'];
     $user_id=$_SESSION['email'];
    //  echo $user_id;
     $quantity=1;
     $qry="SELECT cart_id,quantity FROM cart WHERE product_id='$id' AND user_id='$user_id'";
     $res=mysqli_query($link,$qry);
     if(mysqli_num_rows($res)>0)
     {
        $data=mysqli_fetch_array($res);
        $quantity=$data['quantity'];
        $quantity++;
        $cart_id=$data['cart_id'];
        $qry="UPDATE cart SET quantity=$quantity WHERE cart_id='$cart_id'";
        mysqli_query($link,$qry);

     }
     else {
     
     $qry="INSERT INTO cart (cart_id,product_id,user_id,quantity) VALUES (null,'$id','$user_id','$quantity')";
     $res=mysqli_query($link,$qry);
}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Mountain Recipes</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>


    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/menu.css" rel="stylesheet">
    <title>SHOPPING CART</title>
        <link href="/cllgproject/css/wavecafe.css" rel="stylesheet">

</head>

<body>
    <div class="container-xxl bg-white p-0">



        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Mountain Recipes</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="/cllgproject/index.php" class="nav-item nav-link">Home</a>
                        <a href="/cllgproject/about.php" class="nav-item nav-link active">About</a>
                        <a href="/cllgproject/services.php" class="nav-item nav-link">Service</a>
                        <a href="/cllgproject/food.php" class="nav-item nav-link">Menu</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="/cllgproject/tablebooking.php" class="dropdown-item">Booking</a>
                                <a href="/cllgproject/team.php" class="dropdown-item">Our Team</a>
                                <a href="/cllgproject/testomonial.php" class="dropdown-item">Testimonial</a>
                            </div>
                        </div>
                        <a href="/cllgproject/views/contact.html" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="/cllgproject/tablebooking.php" class="btn btn-primary py-2 px-4">Booking</a>
                    <a href="/cllgproject/addtocart.php" class="nav-item nav-link"><i class="fa fa-shopping-cart"
                            style="font-size:29px;color: white;margin-left: 10px;"></i>
                    </a>
                    <a href="/cllgproject/admin.php" class="nav-item nav-link"><i class='fas fa-user-circle'
                            style='font-size:30px;color:white;float: right;margin-left: 10px;'></i>

                    </a>

                </div>
            </nav>



            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Shopping Cart</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="/cllgproject/index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="pages.php">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Shopping Cart</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class='tm-right'>
<main class='tm-main'>
  <div id='drink' class='tm-page-content'>
    <!-- Drink Menu Page -->
    <nav class='tm-black-bg tm-drinks-nav'>
      <ul>
        <center><h3 style="color:white;"> SHOPPING CART </h3></center>
</ul>
    </nav>
        <?php   
        $total=0;
        $email=$_SESSION['email'];
        $qry="SELECT product.product_id,product.product_name,product.product_img,product.product_price,cart.quantity,cart.cart_id FROM product,cart WHERE cart.user_id='$email'AND product.product_id=cart.product_id";
        $res=mysqli_query($link,$qry);
        while ($data=mysqli_fetch_assoc($res)) {
            $cid=$data['cart_id'];
            $quan=$data['quantity'];

            $price=$data['product_price']*$data['quantity'];
            $total+=$price;
               echo " <div id='hot' class='tm-tab-content'> 
               <div class='tm-list'>
                 <div class='tm-list-item'>          
                 <img src='img/".$data['product_img']."' alt='Image' class='tm-list-item-img'>
                 <div class='tm-black-bg tm-list-item-text'>
                   <h3 class='tm-list-item-name'>".$data['product_name']."<span class='tm-list-item-price'>Rs ".$price."</span></h3>
                               
                   <p class='tm-list-item-description'><input type='hidden' id='userid' value='$email'></p>
                   <span style='align-items:'right';'><input type='hidden' id='userid' value=".$data['product_id']."></span>"?>
                 
                 <span> 
                 <button onclick="sub(<?php echo$cid.','.$quan;?>);" style="border-radius:5px">-</button>
                 <input type='text' disabled style='background-color:skyblue;border-radius:8px;width:30px'  id='quantity' value="<?php echo $quan;?>"></span>
                 <button onclick="add(<?php echo $cid.','.$quan;?>);" style="border-radius:5px"?>+</button>
                 <?php echo"
                <span style='align-items:'right';'><A HREF='delete.php?cart_id=".$data['cart_id']."'><button type='button' class='btn btn-primary'> Remove</button></A></span>

                                    <span> <input type='hidden' id='cartid' value=".$data['cart_id']."></span>
                                    ";

                //    $total+=$price ;
            
                              
                echo " </div>
               </div>
             </div>
             </div>
             ";
        }

             

        ?> 

<hr>
<a href="pay/razaorpay/index.php?total=<?php echo $total;?>">
<button style="background-color:green;border-radius:5px">CHECKOUT<?php echo "Rs $total";?></button></a> 

</div></center>
    </body>
    </html>
<?php

include 'views/footer.html';
?>

<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<script>
    function add(cid, quan) {
    let quant = quan;
    let id = cid;
    quant++;
    if (quant < 10) {
        $.ajax({
            url: "quantity.php",
            type: "POST",
            data: {
                quantity: quant, cartid: id
            },
            success: function (data) {
                if (data == true) {
                    location.reload();
                }
            }
        })

    }
}

function sub(cid, quan) {
    let quant = quan;
    let id = cid;
    quant--;
    if (quant > 0) {
        $.ajax({
            url: "quantity.php",
            type: "POST",
            data: {
                quantity: quant, cartid: id
            },
            success: function (data) {
                if (data == true) {
                    location.reload();
                }
            }
        })

    }
}
</script>
<script>

    if(window.history.replaceState)
{
    window.history.replaceState(null,null,window.location.href);
}
    </script>