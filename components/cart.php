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
                        <div class="item-text">GHC 0.00</div>
                    </div>
                    <div class="t-items">
                        <div class="item-text">Processing</div>
                        <div class="item-text">GHC 00.00</div>
                    </div>
                    <hr>
                    <div id="total" class="t-items">
                        <div class="item-text">TOTAL</div>
                        <div class="item-text">GHC <?php echo $alltotal ?></div>
                    </div>
                    
                    <button id="pay" class="btn btn-info" type="button" onclick="payWithPaystack()">Pay</button>
                    <script src="https://js.paystack.co/v1/inline.js"></script>
                </div>
            </div>

        </div>
    </div>
    <hr>



<script>
  function payWithPaystack(){
    var handler = PaystackPop.setup({
      key: 'pk_test_5ebeff1a4d5dfd19e99707748023aae504b5098b', // Your public test key
      email: 'bcict20099@ttu.edu.gh', // Your customer email
      amount: 1000000, // Amount in pesewas, so 10 GHS is 10000 pesewas
      currency: 'GHS', // Currency code for Ghanaian Cedi
      ref: 'VS' + Math.floor((Math.random() * 1000000000) + 1), // Generating a random reference
      metadata: {
         custom_fields: [
            {
                display_name: "Mobile Number",
                variable_name: "mobile_number",
                value: "+233246414197"
            }
         ]
      },
      callback: function(response){
          alert('success. transaction ref is ' + response.reference);
          window.location = "./verify_payment.php?ref="+response.reference;
      },
      onClose: function(){
          alert('window closed');
      }
    });
    handler.openIframe();
  }
</script>


</body>

</html>