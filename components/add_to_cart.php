<?php
 // Include db connection
 include('./dbcon.php');

 // Get the variables
 $user_id = $_GET['userid'];
 $category = $_GET['category'];
 $product_id = $_GET['product_id'];
 $price = $_GET['price'];
 $image = $_GET['p_image'];
 $total_number = $_POST['total_number'];

 // SQL statement to select data
 $sql = "INSERT INTO cart(`user_id`, `product_id`, `total_number`, `unit_price`, `image`, `paid`) VALUES ('$user_id', '$product_id', '$total_number', '$price', '$image', 'no')";

 // Prepare the statement
 $query = mysqli_query($dbcon, $sql);

 if($query){
   echo '
   <script>
     alert("Item Added to Cart. Proceed to make Payment");
     window.location.href = "./dashboard.php?page=products&category='.$category.'";
   </script>
   ';
   
 }else{
    echo "ERROR IN INSERTION DATA";
 }

?>