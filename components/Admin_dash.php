<?php
 // Database connection
 include('./dbcon.php');

 // sql Statement
 $sql_cart = "SELECT c.*, u.*, p.* 
 FROM cart c 
 INNER JOIN users u ON c.user_id = u.id 
 INNER JOIN products p ON c.product_id = p.id 
 WHERE c.paid='yes'";

 // query
 $query_cart = mysqli_query($dbcon, $sql_cart);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../Assets/bootstrap-5.3/css/bootstrap.css">
</head>

<body>
    <form action="./product_submit.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">PRODUCT NAME</label>
            <input name="product_name" type="text" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">category</label>
            <input name="category" type="text" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Price</label>
            <input name="price" type="text" class="form-control price" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Image</label>
            <input name="image" type="file" class="form-control" id="exampleInputPassword1">
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>

    <hr>

    <div class="container bg-secondary p-5">

    <h2>payed Products</h2>
        <table>
            <thead>
                <tr>
                    <th>ITEM NAME</th>
                    <th>CUSTOMER</th>
                    <th>ITEM NAME</th>
                    <th>QUANTITY</th>
                </tr>

            </thead>
            <tbody>
                <?php
              if(mysqli_num_rows($query_cart) > 0) {
                while($row = mysqli_fetch_assoc($query_cart)) {
                  $total = $row['unit_price'] * $row['total_number'];
                     echo '
                      <tr>
                          <td><img src="../uploads/' . $row['image'] . '" alt="" width="50px"></td>
                          <td>' . $row['fullName'] . '</td>
                          <td>' . $row['product_name'] . '</td>
                          <td>' . $row['total_number'] . '</td>
                      </tr>
                          ';
    }
}
?>
            </tbody>
        </table>
    </div>

    <script src="../Assets/bootstrap-5.3/js/bootstrap.js"></script>
</body>

</html>