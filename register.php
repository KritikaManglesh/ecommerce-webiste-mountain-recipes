<?php
session_start();
// isset($_SESSION['email']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="/cllgproject/css/contact.css" type="text/css">
    <link rel="stylesheet" href="/cllgproject/css/style1.css" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
        crossorigin="anonymous"></script>




</head>

<body>
    <!-- Navbar & Hero Start -->
    <div class="container-xxl position-absolute p-0">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Mountain Recipes</h1>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0 pe-4">
                    <a href="/cllgproject/index.php" class="nav-item nav-link">Home</a>
                    <a href="/cllgproject/about.php" class="nav-item nav-link">About</a>
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
                <a href="/cllgproject/tablebooking.php" class="btn btn-primary py-2 px-4">Book A Table</a>
                <a href="/cllgproject/addtocart.php" class="nav-item nav-link"><i class="fa fa-shopping-cart"
                        style="font-size:29px;color: white;margin-left: 10px;"></i>
                </a>
                <a href="/admindasboard/index.html" class="nav-item nav-link"><i class='fas fa-user-circle'
                        style='font-size:30px;color:white;float: right;margin-left: 10px;'></i>

                </a>

            </div>
        </nav>

        <div class="container-xxl py-5 bg-dark hero-header mb-5">
            <div class="container text-center my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">CONTACT</h1>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->
    <div class="cotn_principal">

        <div class="cont_centrar">

            <div class="cont_login">
                <div class="cont_info_log_sign_up">

                    <div class="col_md_login">
                        <div class="cont_ba_opcitiy">


                            <h2>LOGIN</h2>
                            <p>Food is symbolic of love when words are inadequate.

                            </p>
                            <button class="btn_login" onclick="change_to_login()">LOGIN</button>
                        </div>
                    </div>
                    <div class="col_md_sign_up">
                        <div class="cont_ba_opcitiy">
                            <h2>SIGN UP</h2>


                            <p>People who love to eat are always the best people.

                            </p>

                            <button class="btn_sign_up" onclick="change_to_sign_up()">SIGN
                                UP</button>
                        </div>
                    </div>
                </div>


                <div class="cont_back_info">
                    <div class="cont_img_back_grey">
                        <img src="/cllgproject/img/pancake.jpg" alt="" />
                    </div>

                </div>
                <div class="cont_forms">
                    <div class="cont_img_back_">
                        <img src="/cllgproject/img/pancake.jpg" alt="" />
                    </div>
                    <form>
                        <div class="cont_form_login">
                            <a href="#login" onclick="hidden_login_and_sign_up()"><i
                                    class="material-icons">&#8592;</i></a>
                            <h2>LOGIN</h2>
                            <input type="email" placeholder="Email" id="email" name="email" />
                            <input type="password" placeholder="Password" id="password" name="password" />
                            <button type="button" class="btn_login" onclick="change_to_login()" id="login"
                                name="login">LOGIN</button>
                        </div>
                    </form>
                    <form name="signup" onsubmit="return checkpass()">
                        <div class="cont_form_sign_up">
                            <a href="#signup" onclick="hidden_login_and_sign_up()"><i
                                    class="material-icons">&#8592;</i></a>
                            <h2>SIGN UP</h2>
                            <input type="email" placeholder="Email" id="suemail" name="suemail" />
                            <input type="text" placeholder="Username" id="username" name="username" />
                            <input type="phone" placeholder="Phone" id="phone" name="phone" />

                            <input type="password" placeholder="Password" id="supassword" name="supassword">
                            <!-- <input type="password" placeholder="Confirm Password" id="cpassword" name="cpassword" /> -->
                            <!-- <input type="text" placeholder="Address" id="address" name="address" /> -->

                            <button type="button" class="btn_sign_up" onclick="change_to_sign_up()" id="sign_up"
                                name="sign_up">SIGN
                                UP</button>

                        </div>
                    </form>
                </div>

            </div>
        </div>



</body>

<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
    crossorigin="anonymous"></script>



<script>
    /* ------------------------------------ Click on login and Sign Up to  changue and view the effect
---------------------------------------
*/

    const time_to_show_login = 400;
    const time_to_hidden_login = 200;

    function change_to_login() {
        document.querySelector('.cont_forms').className = "cont_forms cont_forms_active_login";
        document.querySelector('.cont_form_login').style.display = "block";
        document.querySelector('.cont_form_sign_up').style.opacity = "0";

        setTimeout(function () { document.querySelector('.cont_form_login').style.opacity = "1"; }, time_to_show_login);

        setTimeout(function () {
            document.querySelector('.cont_form_sign_up').style.display = "none";
        }, time_to_hidden_login);
    }

    const time_to_show_sign_up = 100;
    const time_to_hidden_sign_up = 400;

    function change_to_sign_up(at) {
        document.querySelector('.cont_forms').className = "cont_forms cont_forms_active_sign_up";
        document.querySelector('.cont_form_sign_up').style.display = "block";
        document.querySelector('.cont_form_login').style.opacity = "0";

        setTimeout(function () {
            document.querySelector('.cont_form_sign_up').style.opacity = "1";
        }, time_to_show_sign_up);

        setTimeout(function () {
            document.querySelector('.cont_form_login').style.display = "none";
        }, time_to_hidden_sign_up);


    }

    const time_to_hidden_all = 500;

    function hidden_login_and_sign_up() {

        document.querySelector('.cont_forms').className = "cont_forms";
        document.querySelector('.cont_form_sign_up').style.opacity = "0";
        document.querySelector('.cont_form_login').style.opacity = "0";

        setTimeout(function () {
            document.querySelector('.cont_form_sign_up').style.display = "none";
            document.querySelector('.cont_form_login').style.display = "none";
        }, time_to_hidden_all);

    }

</script>



<!-- login -->
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
    crossorigin="anonymous"></script>

<script type="text/javascript">


    $(document).ready(function () {

        $("#login").on("click", function (e) {
            e.preventDefault();

            var email = $("#email").val();
            var password = $("#password").val();
            console.log(email, password);
            $.ajax({
                url: "login.php",
                type: "POST",
                data: {
                    email: email,
                    password: password
                },
                success: function (data) {
                    console.log(data);
                    if (data == 4) {

                        alert("Wrong Email Id");


                    } else if (data == 2) {
                        window.location = "index.php";
                    }

                    else {
                        console.log(data)
                        alert("Wrong Password");
                    }
                    console.log(data)
                }
            });

        });
    });
</script>
<!-- sign_up -->
<script type="text/javascript">
    $(document).ready(function () {
        $("#sign_up").on("click", function (e) {
            e.preventDefault();

            //inserting data in database
            var suemail = $("#suemail").val();
            var username = $("#username").val();
            var supassword = $("#supassword").val();
            // var cpassword = $("#cpassword").val();
            var phone=$("#phone").val();
            // var address=$("#address").val();
            console.log(username,
                suemail,
                supassword,
                cpassword,
                phone,
                address
            );

            $.ajax({
                url: "signup.php",
                type: "POST",
                data: {
                    suemail: suemail,
                    username: username,
                    supassword: supassword,
                    // cpassword: cpassword,
                    phone:phone
                    // address:address


                },

                success: function (data) {
                    console.log(data)
                    if (data == 1) {
                        // window.location = '#login'
                        alert("Your account has been  created.");


                    }
                    else if (data == 0) {
                        alert("Email id already exist with another account. Please try with other email id");

                    }
                    else {
                        alert("Password dosen't match");

                    }
                    console.log(data);

                },
            });

        });
    });
</script>



</html>

