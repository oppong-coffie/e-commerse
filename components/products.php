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
    <link rel="stylesheet" href="../css/electronics.css" />
</head>

<body>
    <div id="electronicsbody">


        <img src="../images/shop.webp" width="100%" height="300vh" alt="">

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
            <div>
                <div class="itemName">' . $row['product_name'] . '</div>
                <div class="itemprice text-secondary">GHC ' . $row['price'] . '</div>
            </div>
            <a href="./dashboard.php?page=detail&product_id='. $row['id'] .'">
                <div class="btn btn-info">Add to cart</div>
            </a>
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