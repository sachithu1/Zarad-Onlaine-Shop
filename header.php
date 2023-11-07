<?php

session_start();

require "connection.php";

?>

<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="resourses/zarad.svg">

</head>

<body>

       <!--HEDDRE-DIV-->

    <section id="header">
        <a href="home.php"><img src="resourses/img/logo.png.png" class="logo" alt=""></a>




        <div>
            <ul id="navbar" class="   ">
                <li class="  d-md-block d-none"><a href="home.php">Home</a></li>
                <!-- <li><a href="shop.php">Shop</a></li> -->
                <li class="  d-md-block  d-none"><a class="active"  href="addProduct.php">Add Product</a></li>
                <li class="  d-md-block  d-none"> <a href="watchlist.php">Watchlist</a></li>
                <li class="  d-md-block  d-none"> <a href="advancedSearch.php">Advanced</a></li>
                <li class="  d-md-block  d-none"><a href="about.php">About</a></li>
                
                <li class=" d-lg-block d-none"><a href="cart.php"><img style="size: 100px;margin-top:2px;width:20px;height:20px;" src="resourses/Shopping Bag.png" alt=""></></a></li>
                <li class=" d-lg-block d-none"><a href="userProfile.php"><img style="size: 100px;margin-top:2px;width:20px;height:20px;" src="resourses/Male User.png" alt=""></></a></li>
                <li class=" d-lg-block d-none"> <a href="index.php#"><img  style="size: 100px;margin-top:2px;width:20px;height:20px;" src="resourses/Logout.png" alt=""></></a></li>
               
                
               

                <div class="dropdown d-xxl-none d-xl-none d-lg-none d-md-none d-sm-inline-block" >
  <!-- <button class=" " type="button" data-bs-toggle="dropdown" aria-expanded="false"> -->
  <i data-bs-toggle="dropdown" class="bi bi-list " style="font-size: 30px;color: #1E1E1E;font-weight: 500;"></i>
  </button>
  <ul class="dropdown-menu " style="width:600px;">
    <li><button class="dropdown-item" type="button"><a href="home.php"><img  style="size: 100px;margin-top:2px;width:20px;height:20px;" src="resourses/img.svg/Home.png" alt=""></></a></button></li>
    <li><button class="dropdown-item" type="button"><a href="cart.php"><img style="size: 100px;margin-top:2px;width:20px;height:20px;" src="resourses/Shopping Bag.png" alt=""></></a></button></li>
    <li><button class="dropdown-item" type="button"><a href="userProfile.php"><img style="size: 100px;margin-top:2px;width:20px;height:20px;" src="resourses/Male User.png" alt=""></></a></button></li>
    <li><button class="dropdown-item" type="button" ><a href="addProduct.php" >Add Product</button></a></li>
    <li><button class="dropdown-item" type="button"><a href="watchlist.php" >Watchlist</button></a></li>
    <li><button class="dropdown-item" type="button"><a href="advancedSearch.php" >Advanced</button></a></li>
    <li><button class="dropdown-item" type="button"><a href="about.php" >About</button></a></li>
    <li><button class="dropdown-item" type="button"><a href="index.php#"><img  style="size: 100px;margin-top:2px;width:20px;height:20px;" src="resourses/Logout.png" alt=""></></a></button></li>
   
  </ul>
</div>
                

                
            </ul>
        </div>

        <!-- <div id="mobile">
            <i id="bar" class="fas fa-outdent"></i>
        </div> -->

    </section>


    <!--HEDDRE-DIV-->
   

    <script src="script.js"></script>
</body>

</html>



