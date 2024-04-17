<?php
$alltotal = 0;
$items = 0;
 // Database connection
 include('./dbcon.php');

 // sql Statement
 $sql_cart = "SELECT * FROM cart WHERE user_id='$userid' && paid='no'";

 // query
 $query_cart = mysqli_query($dbcon, $sql_cart);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/cart.css">
</head>

<body>
    <div class="">
        <div class="shoppingcart">Shopping Cart</div>
        <div class="text-secondary">2 items in your cart</div>

        <h2 class="pt-2 text-primary">Products</h2>

        <div class="with-table">
            <table>
                <thead>
                    <tr>
                        <th>Products</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>

                </thead>
                <tbody>
                <?php
if(mysqli_num_rows($query_cart) > 0) {
    while($row = mysqli_fetch_assoc($query_cart)) {
        $total = $row['unit_price'] * $row['total_number'];
        echo '
            <tr>
                <td><img src="../uploads/' . $row['image'] . '" alt="" width="100px"></td>
                <td>' . $row['unit_price'] . '</td>
                <td>' . $row['total_number'] . '</td>
                <td>' . $total . '</td>
            </tr>
        ';
        $alltotal +=$total;
        $items +=1;
    }
}
?>

                    
                </tbody>
            </table>

            <div class="cartsum">
                <div class="carttotal">
                    <h2>Cart Total</h2>
                    <div class="t-items">
                        <div class="item-text">Cart Items</div>
                        <div class="item-text"><?php echo $items ?></div>
                    </div>
                    <div class="t-items">
                        <div class="item-text">Shipping Fee</div>
                        <div class="item-text">GHC 50.00</div>
                    </div>
                    <div class="t-items">
                        <div class="item-text">Processing</div>
                        <div class="item-text">GHC 40.00</div>
                    </div>
                    <hr>
                    <div id="total" class="t-items">
                        <div class="item-text">TOTAL</div>
                        <div class="item-text">GHC <?php echo $alltotal + 50 + 40 ?></div>
                    </div>
                    <a href="./checkout.php?userid=<?php echo $userid ?>">
                        <button id="pay" class="btn btn-info">CHECK OUT</button>
                    </a>
                </div>
            </div>

        </div>




    </div>

</body>

</html>