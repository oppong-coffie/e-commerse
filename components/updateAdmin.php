<?php
include('../components/dbcon.php');
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "UPDATE admins SET `fullName`='$name', `email`='$email', `password`='$password'";

$query = mysqli_query($dbcon, $sql);

if($query){
    echo '
     <script>
        alert("Admin Updated");
        window.location.href="./Admin_dash.php";
     </script>
    ';
}else{
    echo "COULD NOT UPDATE ADMIN";
}

?>