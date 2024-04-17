<?php
 // Include db connection
 include('./dbcon.php');

 // Get the variables
 $user_id = $_GET['userid'];
 $product_id = $_GET['product_id'];
 $price = $_GET['price'];
 $image = $_GET['p_image'];
 $total_number = $_POST['total_number'];

 // SQL statement to select data
 $sql = "INSERT INTO cart(`user_id`, `product_id`, `total_number`, `unit_price`, `image`, `paid`) VALUES ('$user_id', '$product_id', '$total_number', '$price', '$image', 'no')";

 // Prepare the statement
 $query = mysqli_query($dbcon, $sql);

 if($query){
    echo "DATA INSERTED SUCCESSFULL";
 }else{
    echo "ERROR IN INSERTION DATA";
 }

?>