

<?php 
 session_start();
if (!isset($_SESSION['email'])) {
    // header("location:/cllgproject/index.php");
}
// if (isset($_REQUEST["logout"])) {
//     session_destroy();
// }

// ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Favicon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="img/favicon.ico" rel="icon">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>



    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="/cllgproject/css/index.css" type="text/css">
    <!-- <link rel="stylesheet" href="/cllgproject/css/bootstrap.min.css" type="text/css"> -->



    <title>Mountain Recipes</title>

</head>

<body>


    <div class="container-xxl position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
            <a href="index.php" class="navbar-brand p-0">
                <b>
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Mountain Recipes
                    </h1>
                </b>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0 pe-4">
                    <a href="/cllgproject/index.php" class="nav-item nav-link active">Home</a> 
                    <a href="/cllgproject/about.php" class="nav-item nav-link">About</a>
                    <!-- <a href="/cllgproject/services.php" class="nav-item nav-link">Service</a> -->
                    <a href="/cllgproject/food.php" class="nav-item nav-link">Menu</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="/cllgproject/tablebooking.php" class="dropdown-item">Booking</a>
                            <a href="/cllgproject/services.php" class="dropdown-item">Service</a>

                            <a href="/cllgproject/team.php" class="dropdown-item">Our Team</a>
                            <a href="/cllgproject/testomonial.php" class="dropdown-item">Testimonial</a>


                        </div>
                    </div>
                    <a href="/cllgproject/views/contact.html" class="nav-item nav-link">Contact</a>
                    <a href="/cllgproject/tablebooking.php" class="nav-item nav-link">Book A Table</a>



                </div>
                <a href="/cllgproject/views/register.html" class="btn btn-primary py-2 px-4">Register</a>
                <a href="/cllgproject/addtocart.php" class="nav-item nav-link"><i class="fa fa-shopping-cart"
                        style="font-size:29px;color: white;margin-left: 10px;"></i>
                </a>
                <a href="/cllgproject/admin.php" class="nav-item nav-link"><i class='fas fa-user-circle'
                        style='font-size:30px;color:white;float: right;margin-left: 10px;'></i>
                </a>



            </div>

        </nav>

        <div class="container-xxl py-5 bg-dark hero-header mb-5" id="top1">
            <div class="container my-5 py-5">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6 text-center text-lg-start">
                        <h1 class="display-3 text-white animated slideInLeft">Enjoy Our<br>Delicious Meal</h1>
                        <p class="text-white font-weight-bold animated slideInLeft mb-4 pb-2">Mountain recipes embody the essence of rustic, hearty cuisine, drawing inspiration from the bountiful ingredients found in mountainous regions. These recipes often feature locally sourced produce, wild game, and aromatic herbs, resulting in flavorful and nourishing dishes.</p>
                        <a href="/cllgproject/tablebooking.php"
                            class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Book A
                            Table</a>
                    </div>
                    <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                        <img class="img-fluid" src="" alt="">
                    </div>
                </div>
            </div>
        </div>
        </nav>
    </div>
    