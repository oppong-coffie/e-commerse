<?php
$id = $_GET['id'];
include('../components/dbcon.php');

$sql = "DELETE FROM users WHERE id = '$id'";

$query = mysqli_query($dbcon, $sql);

if($query){
    echo '
     <script>
        alert("User deleted");
        window.location.href="./Admin_dash.php";
     </script>
    ';
}else{
    echo "NOT SERVED";
}
?>