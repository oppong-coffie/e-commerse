<?php
    $product_id = $_GET['product_id'];
    $category = $_GET['category'];
    echo $product_id;
    echo $userid;
 // Database connection
 include('./dbcon.php');

 // sql Statement
 $sql_detail = "SELECT * FROM products WHERE id='$product_id'";

 // query
 $query_detail = mysqli_query($dbcon, $sql_detail);
 $row = mysqli_fetch_assoc($query_detail)
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" href="../css/detail.css">
</head>

<body>
    <div id="main" class="container">
        <div class="product_image">
            <img src="../uploads/<?php echo $row['p_image'];?>">
        </div>
        <div class="description">
            <h2><?php echo $row['product_name'];?></h2>
            <p>Be the first to impress the Society</p>
            <h1> GHC <?php echo $row['price'];?></h1>
            <hr>
            <form action="./add_to_cart.php?product_id=<?php echo $product_id;?>&userid=<?php echo $userid;?>&price=<?php echo $row['price'];?>&p_image=<?php echo $row['p_image'];?>&category=<?php echo $category; ?>" method="POST">
                <input name="total_number" type="number" required> <br><br>
                <button class="btn btn-info" type="submit" name="addToCart">Add to cart</button>
            </form>

        </div>
    </div>

</body>

</html>