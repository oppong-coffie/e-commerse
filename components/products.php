<?php
$category = $_GET['category'];
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
    <title>Collections</title>
    <link rel="stylesheet" href="../css/products.css" />
</head>

<body>
    <div id="electronicsbody">


        <img class="product_hero" src="../images/shop.webp" alt="">

        <hr>

        <h2>Our Products</h2>
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