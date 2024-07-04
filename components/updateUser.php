<?php
    if(isset($_POST["submit"])){
        // Include db connection
        include('./dbcon.php');

        // Get the variables
        $fullname = $_POST['name'];
        $contact = $_POST['contact'];
        $lotacion = $_POST['location'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        //  SQL statement to insert data to table
        $sql = "UPDATE users SET`fullName`='$fullname', `email`='$email', `contact`='$contact', `location`='$location', `password`='$password')";

        // Prepare the statement
        $query = mysqli_query($dbcon, $sql);

        if($query){
            echo '
                <script>
                    alert("Customer Data Updated Successfully");
                    window.location.href="./Admin_dash.php";
                </script>
            ';

        } else{
            echo 'Data Update error!';
        }
    }
?>