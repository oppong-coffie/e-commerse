<?php
if (isset($_POST["submit"])) {
    // db connection
    include('./dbcon.php');

    // Get the variables
    $productname = $_POST['product_name'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $image = $_FILES['image']['name'];
    $image_temp = $_FILES['image']['tmp_name'];

    // Move uploaded image to desired location
    move_uploaded_file($image_temp, "../uploads/$image");

    // SQL STATEMENT
    $sql = "INSERT INTO products (`product_name`, `category`, `price`, `p_image`) 
            VALUES ('$productname', '$category', '$price', '$image')";

    // Query
    $query = mysqli_query($dbcon, $sql);

    // Check for successful submission
    if ($query) {
        echo "PRODUCT ADDED SUCCESSFULLY";
    } else {
        echo "ERROR in code";
    }
}
?>
