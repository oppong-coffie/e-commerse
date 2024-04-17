<?php
    // Database connection
 include('./dbcon.php');

//  get variables
$userid=$_GET['userid'];

 // sql Statement
 $sql_cart = "UPDATE cart SET paid='yes' WHERE user_id='$userid'";

 // query
 $query_cart = mysqli_query($dbcon, $sql_cart);
 if($query_cart){
    echo "Checkout Successfull";
 }else{
    echo "Checkout Failed";
 }
?>