<?php
 // Database connection
 include('./dbcon.php');

 // sql Statement
$sql_cart="SELECT cart.*, users.*, products.*
        FROM cart
        JOIN users ON cart.user_id = users.id
        JOIN products ON cart.product_id = products.id
        WHERE cart.paid = 'yes'";

 // query
 $query_cart = mysqli_query($dbcon, $sql_cart);

 // sql statement for users
$sql_users = "SELECT * FROM users";

// query
$query_users = mysqli_query($dbcon, $sql_users);

 // Admin statement for users
$sql_admin = "SELECT * FROM `admins`";

// query
$query_admin = mysqli_query($dbcon, $sql_admin);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../Assets/bootstrap-5.3/css/bootstrap.css">
    <link rel="stylesheet" href="../css/adminDash.css">
    <link rel="stylesheet" href="../Assets/fontawesome-5/css/all.css">
</head>

<body>


<div class="container text-center">
  <div class="row align-items-center justify-center item-center">
  <div id="col1" class="col h-xl" data-bs-toggle="modal" data-bs-target="#adminModal">
            <div class="row">
                <div id="product" class="col">
                    <h1>10</h1>
                    <div class="">Total Admin</div>
                    <div class="">store keepers</div>
                </div>
                <div class="col">
                    <img class="admin_logo" src="../images/user1.jpg" alt="">
                </div>
            </div>
    </div>
    <div id="col2" class="col h-xl" data-bs-toggle="modal" data-bs-target="#customerModal">
            <div class="row">
                <div id="product" class="col">
                    <h1>800</h1>
                    <div class="">Total Customers</div>
                    <div class="">Registered Customers</div>
                </div>
                <div class="col">
                    <img class="customers_logo" src="../images/customers.jpg" alt="">
                </div>
            </div>
    </div>
    <div id="col3" class="col h-xl" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <div class="row">
                <div id="product" class="col">
                    <h1>1000</h1>
                    <div class="">Total Products</div>
                    <div class="">Click to add item</div>
                </div>
                <div class="col">
                    <img class="product_logo" src="../images/product_logo.png" alt="">
                </div>
            </div>
    </div>
  </div>
</div>



<!-- PRODUCT FORM MODAL -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Product</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
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

    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>    </div>
    </form>
      </div>
    </div>
  </div>
</div>

<!-- CUSTOMER FORM MODAL -->
<div class="modal fade" id="customerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Customer</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="signupform" action="./signup2.php" method="POST">
                        Full Name: <input name="name" class="signupinput shadow border" type="text">
                        Email: <input name="email" class="signupinput shadow border" type="text">
                        Contact: <input name="contact" class="signupinput shadow border" type="text">
                        Location: <input name="location" class="signupinput shadow border" type="text">
                        Password: <input name="password" class="signupinput shadow border" type="text"> 
                        Confirm Password: <input class="signupinput shadow border" type="text"><br><br>
                        
                        <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>    </div>
    </form>
      </div>
                       
                    </form>

   
    </div>
  </div>
</div>

<!-- CUSTOMER UPDATE FORM MODAL -->
<div class="modal fade" id="customerUpdateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Customer</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="signupform" action="./signup2.php" method="POST">
                        Full Name: <input name="name" class="signupinput shadow border" type="text">
                        Email: <input name="email" class="signupinput shadow border" type="text">
                        Contact: <input name="contact" class="signupinput shadow border" type="text">
                        Location: <input name="location" class="signupinput shadow border" type="text">
                        Password: <input name="password" class="signupinput shadow border" type="text"> 
                        Confirm Password: <input class="signupinput shadow border" type="text"><br><br>
                        
                        <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>    </div>
    </form>
      </div>
                       
                    </form>

   
    </div>
  </div>
</div>

<!-- ADMIN FORM MODAL -->
<div class="modal fade" id="adminModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Admin</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="form" action="addAdmin.php" method="POST">
                        <div id="phone" class="shadow border">
                            <span class="fa fa-user"></span>
                            <input name="name" class="input" type="text">
                        </div>
                        <br>
                        <div id="phone" class="shadow border">
                            <span class="fa fa-envelop"></span>
                            <input name="email" class="input" type="text">
                        </div>
                        <br>
                        <div id="password" class="shadow border">
                            <span class="fa fa-lock"></span>
                            <input name="password" class="input" type="text">
                        </div>
                        <br>
                    

    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button></div>
    </form>
      </div>
    </div>
  </div>
</div>

<!-- ADMIN UPDATE FORM MODAL -->
<div class="modal fade" id="adminUpdateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Admin</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="form" action="./updateAdmin.php" method="POST">
                        <div id="phone" class="shadow border">
                            <span class="fa fa-user"></span>
                            <input name="name" class="input" type="text">
                        </div>
                        <br>
                        <div id="phone" class="shadow border">
                            <span class="fa fa-envelop"></span>
                            <input name="email" class="input" type="text">
                        </div>
                        <br>
                        <div id="password" class="shadow border">
                            <span class="fa fa-lock"></span>
                            <input name="password" class="input" type="text">
                        </div>
                        <br>
                      

    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      <button type="submit" name="submit" class="btn btn-primary">Update</button>    </div>
    </form>
      </div>
    </div>
  </div>
</div>
  

    <hr>
<div class="container middle">
        <div class="p-5 items">
<div class="head1">
    <h2>payed Products</h2>
    <a href="">Stock</a>
</div>
        <table>
            <thead>
                <tr>
                    <th>ITEM Image</th>
                    <th>ITEM NAME</th>
                    <th>FULL NAME</th>
                    <th>CONTACT</th>
                    <th>LOCATION</th>
                    <th>ACTION</th>
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
                          <td>' . $row['product_name'] . '</td>
                          <td>' . $row['fullName'] . '</td>
                          <td>' . $row['contact'] . '</td>
                          <td>' . $row['location'] . '</td>
                          <td>
                           <button class="btn btn-info"><a class="text-light" href="./confirm_serve.php?id='. $row['cart_id'] . '">Served</a></button>
                          </td>
                      </tr>
                          ';
    }
}
?>
            </tbody>
        </table>
    </div>
    <div class="weather">
        <img src="../images/sky.jpg" alt="">
    </div>
</div>
  

    <hr>
<div class="container middle">
        <div class="p-5 items">
<div class="head1">
    <h2>Admins</h2>
    <a href="">View All</a>
</div>
        <table>
            <thead>
                <tr>
                    <th>FULL NAME</th>
                    <th>EMAIL</th>
                    <th>PASSWORD</th>
                    <th>ACTION</th>
                </tr>

            </thead>
            <tbody>
                <?php
              if(mysqli_num_rows($query_admin) > 0) {
                while($row2 = mysqli_fetch_assoc($query_admin)) {
                     echo '
                      <tr>
                          <td>' . $row2['fullName'] . '"</td>
                          <td>' . $row2['email'] . '</td>
                          <td>' . $row2['password'] . '</td>
                          <td>
                           <button  data-bs-toggle="modal" data-bs-target="#adminUpdateModal" class="btn btn-primary">Update</button>
                           <button class="btn btn-danger"><a class="text-light" href="./deleteAdmin.php?id='. $row2['id'] . '">Del</a></button>
                          </td>
                      </tr>
                          ';
    }
}
?>
            </tbody>
        </table>
    </div>
    <div class="p-5 items">
<div class="head1">
    <h2>REGISTERED CUSTOMERS</h2>
    <a href="">View All</a>
</div>
        <table>
            <thead>
                <tr>
                    <th>FULL NAME</th>
                    <th>EMAIL</th>
                    <th>PASSWORD</th>
                    <th>ACTION</th>
                </tr>

            </thead>
            <tbody>
                <?php
              if(mysqli_num_rows($query_users) > 0) {
                while($row1 = mysqli_fetch_assoc($query_users)) {
                     echo '
                      <tr>
                          <td>' . $row1['fullName'] . '</td>
                          <td>' . $row1['email'] . '</td>
                          <td>' . $row1['password'] . '</td>
                          <td>
                           <button  data-bs-toggle="modal" data-bs-target="#customerModal" class="btn btn-primary">Update</button>
                           <button class="btn btn-danger"><a class="text-light" href="./deleteUser.php?id='. $row1['id'] . '">Delete</a></button>
                          </td>
                      </tr>
                          ';
    }
}
?>
            </tbody>
        </table>
    </div>
</div>



    <script src="../Assets/bootstrap-5.3/js/bootstrap.js"></script>
    <script src="../Assets/fontawesome-5/js/all.js"></script>
</body>
</html>