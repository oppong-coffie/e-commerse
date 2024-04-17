<?php
   // Start session
   session_start();

   // Set session variables
   $userid = $_SESSION['id'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HOME</title>
    <link rel="stylesheet" href="../Assets/bootstrap-5.3/css/bootstrap.css">
    <link rel="stylesheet" href="../css/dashboard.css" />
    <link rel="stylesheet" href="../Assets/package/swiper-bundle.min.css">
</head>

<body>

    <!-- START:: Navbar -->
    <ul class="navbar">
        <li>
            <div class="logo">HazelMarket</div>
        </li>
        <li><a href="./dashboard.php">Home</a></li>
        <li>
            <a class href="#">Categories</a>
            <ul class="dropdown">
                <li><a href="./dashboard.php?page=products&category=electronics">Electricals</a></li>
                <li><a href="./dashboard.php?page=products&category=collections">Collections</a></li>
            </ul>
        </li>
        <li><a href="#"><input placeholder="Search for products, categories or shops" class="search" type="text"></a>
        </li>
        <li><a class="text-secondary" href="./dashboard.php?page=cart">Cart</a></li>
        <li><a class="text-secondary" href="../index.html">Logout</a></li>
    </ul>
    <!-- END:: Navbar -->

    <?php
    @$page=$_GET["page"];
    if($page==""){
        include('./home.php');
    } else{
        if($page=="products"){
            include('./products.php');
        }
        elseif($page=="detail"){
            include('./detail.php');
        }
        elseif($page=="cart"){
            include('./cart.php');
        }
        else {
            // Handle unknown page parameter value here
            echo "Page not found.";
        }
    }
?>




    <!-- START:: footer -->
    <footer class="bg-secondary pb-5 pt-5">
        <h2>HazelMarket</h2>
        <p>Takoradi</p>
        <p>hazelquayson@gmail.com</p>
        <p>+233 246 414 97</p>
<hr>
        <div class="media">
            <img class="rounded-circle" src="../images/ig2.png" width="60px" height="60px" alt="">
            <img class="rounded-circle" src="../images/fb.jpg" width="60px" height="60px" alt="">
            <img class="rounded-circle" src="../images/twitter.png" width="60px" height="60px" alt="">
            <img class="rounded-circle" src="../images/whatsapp.png" width="60px" height="60px" alt="">
        </div> 
        <h4>GET IN THOUCH</h4> 
    </footer>
    <!-- END:: footer -->

    <script src="../Assets/bootstrap-5.3/js/bootstrap.js"></script>
    <script src="../Assets/package/swiper-bundle.min.js"></script>
    <script src="../js/dashboard.js"></script>
</body>

</html>