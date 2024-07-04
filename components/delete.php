<?php
$id = $_GET['id'];
include('../components/dbcon.php');

$sql = "DELETE FROM cart WHERE cart_id = '$id'";

$query = mysqli_query($dbcon, $sql);

if($query){
    echo '
     <script>
        alert("Customer served");
        window.location.href="./Admin_dash.php";
     </script>
    ';
}else{
    echo "NOT SERVED";
}

?>