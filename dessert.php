<?php
session_start();
include "views/header2.html";

include "views/foodmenu.html";


include "configs.php";
$query2="SELECT * FROM dessert";
$result1=mysqli_query($link,$query2);


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
          <a href='dessert.php' class='tm-tab-link active' data-id='hot'>DESERTS</a>
        </li>
        <li>
          <a href='coffee.php' class='tm-tab-link' data-id='juice'>COFFEE</a>
        </li>
      </ul>
    </nav>
";

       while ($data1 = mysqli_fetch_array($result1))  {


echo"  <div id='hot' class='tm-tab-content'>
<div class='tm-list'>
  <div class='tm-list-item'>          
    <img src=img/$data1[image] alt='Image' class='tm-list-item-img'>
    <div class='tm-black-bg tm-list-item-text'>
      <h3 class='tm-list-item-name'>$data1[Dessret]<span class='tm-list-item-price'>$data1[Price]</span></h3>
                  
      <p class='tm-list-item-description'>$data1[Description]</p>
      <span style='align-items:'right';'><A HREF='addtocart.php?addid=$data1[id]'><button type='button' class='btn btn-primary'>Add </button></A></span>
                 <span> <A HREF='/razaorpay/index.php?buyid=$data1[id]'><button type='button' class='btn btn-danger'>Buy</button></A>
                   </span>
      
    </div>
  </div>
</div>
</div>
";}


echo"</div></main></div>";

// echo "<div class='container-xxl py-5'>
// <div class='container'>
//     <div class='text-center wow fadeInUp' data-wow-delay='0.1s'>
//         <h5 class='section-title ff-secondary text-center text-primary fw-normal'>Food Menu</h5>
//         <h1 class='mb-5'>Most Popular Items</h1>
//     </div>
//     <div class='tab-class text-center wow fadeInUp' data-wow-delay='0.1s'>
//         <ul class='nav nav-pills d-inline-flex justify-content-center border-bottom mb-5'>
//             <li class='nav-item'>
//                 <a class='d-flex align-items-center text-start mx-3 ms-0 pb-3 active' data-bs-toggle='pill' href='#tab-1'>
//                     <i class='fa fa-coffee fa-2x text-primary'></i>
//                     <div class='ps-3'>
//                         <small class='text-body'>Popular</small>
//                         <h6 class='mt-n1 mb-0'>Breakfast</h6>
//                     </div>
//                 </a>
//             </li>
//             <li class='nav-item'>
//                 <a class='d-flex align-items-center text-start mx-3 pb-3' data-bs-toggle='pill' href='#tab-2'>
//                     <i class='fa fa-hamburger fa-2x text-primary'></i>
//                     <div class='ps-3'>
//                         <small class='text-body'>Special</small>
//                         <h6 class='mt-n1 mb-0'>Launch</h6>
//                     </div>
//                 </a>
//             </li>
//             <li class='nav-item'>
//                 <a class='d-flex align-items-center text-start mx-3 me-0 pb-3' data-bs-toggle='pill' href='#tab-3'>
//                     <i class='fa fa-utensils fa-2x text-primary'></i>
//                     <div class='ps-3'>
//                         <small class='text-body'>Lovely</small>
//                         <h6 class='mt-n1 mb-0'>Dinner</h6>
//                     </div>
//                 </a>
//             </li>
//         </ul>
// ";






//       while ($data1 = mysqli_fetch_row($result1))  {

//          echo " <div class='tab-content'>
//           <div id='tab-2' class='tab-pane fade show p-0 active'>
//               <div class='row g-4'>
//                   <div class='col-lg-6'>
//                       <div class='d-flex align-items-center'>
//                           <img class='flex-shrink-0 img-fluid rounded' src=img/$data1[1] alt='' style='width: 80px;'>
//                           <div class='w-100 d-flex flex-column text-start ps-4'>
//                               <h5 class='d-flex justify-content-between border-bottom pb-2'>";
    
//                                  echo" <span>".$data1[2]."</span>";
//                                   echo "<span class='text-primary'>".$data1[4]."</span>
//                                   <span><A HREF='starters.php?addid=$data1[0]'><button type='button' class='btn btn-primary'>Add </button></A></span>
//                                 <span> <A HREF='starters.php?buyid=$data1[0]'><button type='button' class='btn btn-danger'>Buy</button></A>
//                                 </span>
//                               </h5>";
//                               echo"<small class='fst-italic'>".$data1[3]."</small>
//                           </div>
//                       </div>
//                   </div>
//                   </div>
//                   </div>";
//           }
//     echo"</div></div></div>";






include "views/footer.html";

      ?>