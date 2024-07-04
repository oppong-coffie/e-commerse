<?php
$category = "collections";
    // Database connection
    include('./dbcon.php');

    // sql Statement
    $sql = "SELECT * FROM products WHERE category='$category'";

    // query
    $query = mysqli_query($dbcon, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/home.css">
</head>
<body>
        <!-- START:: carousel -->
        <div id="carouselExampleAutoplaying" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../images/login.png" class="d-block" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../images/login2.jpg" class="d-block" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../images/login.png" class="d-block" alt="...">
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- END:: carousel -->

    <div id="same" class="bg-light shadow">
        <div class="fs-5">Same day delivery on All Nationals</div>
        <div class="fs-5">Highest Discount on all items.</div>
        <div class="fs-5">No shipping fee or delivery fee.</div>
    </div>

    <div class="deal">
        Deals of the month
    </div>

    <!-- Start:: Swiper -->
    <div class="container">
        <div class="swiper">
            <div class="swiper-wrapper">
           

                <div class="swiper-slide">
                    <div class="content">
                        <div id="logoimg">-23%</div>
                        <img src="../images/login.png" alt="">
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="content">
                        <div id="logoimg">-23%</div>
                        <img src="../images/login.png" alt="">
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="content">
                        <div id="logoimg">-23%</div>
                        <img src="../images/login.png" alt="">
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="content">
                        <div id="logoimg">-23%</div>
                        <img src="../images/login.png" alt="">
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="content">
                        <div id="logoimg">-23%</div>
                        <img src="../images/login.png" alt="">
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="content">
                        <div id="logoimg">-23%</div>
                        <img src="../images/login.png" alt="">
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="content">
                        <div id="logoimg">-23%</div>
                        <img src="../images/login.png" alt="">
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="content">
                        <div id="logoimg">-23%</div>
                        <img src="../images/login.png" alt="">
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="content">
                        <div id="logoimg">-23%</div>
                        <img src="../images/login.png" alt="">
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="content">
                        <div id="logoimg">-23%</div>
                        <img src="../images/login.png" alt="">
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="content">
                        <div id="logoimg">-23%</div>
                        <img src="../images/login.png" alt="">
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="content">
                        <div id="logoimg">-23%</div>
                        <img src="../images/login.png" alt="">
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="content">
                        <div id="logoimg">-23%</div>
                        <img src="../images/login.png" alt="">
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="content">
                        <div id="logoimg">-23%</div>
                        <img src="../images/login.png" alt="">
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="content">
                        <div id="logoimg">-23%</div>
                        <img src="../images/login.png" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <ul class="control" id="custom-control">
        <li class="prev">Previous</li>
        <li class="next">Next</li>
    </ul>
    <!-- END:: Swiper -->
    
    <div class="popular">
    <h2>Quick Sale</h2>
    <div class="products">


    <?php
                if(mysqli_num_rows($query)>0){
                    while($row = mysqli_fetch_assoc($query)){
                    echo '
                    <div class="item">
                    <img src="../uploads/' . $row['p_image'] . '" alt="' . $row['product_name'] . '">
                    <div class="desc">
                    <div class="itemName">' . $row['product_name'] . '</div>
                        <div id="price_add">
                            <div class="itemprice text-secondary">GHC ' . $row['price'] . '</div>
                            <a href="./dashboard.php?page=detail&product_id='. $row['id'] .'&category='.$category.'">
                                <div class="btn btn-info">Add to cart</div>
                            </a>
                        </div>
                    </div>
                </div>';
                }
                }
                else{
                    echo 'NO DATA FOUND';
                }
                ?>




    </div>

    </div>
</body>
</html>