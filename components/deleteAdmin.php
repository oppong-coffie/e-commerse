<?php
$id = $_GET['id'];
include('../components/dbcon.php');

$sql = "DELETE FROM `admins` WHERE `id` = '$id'";

$query = mysqli_query($dbcon, $sql);

if($query){
    echo '
     <script>
        alert("Admin deleted");
        window.location.href="./Admin_dash.php";
     </script>
    ';
}else{
    echo "Could not delete Admin";
}

?>