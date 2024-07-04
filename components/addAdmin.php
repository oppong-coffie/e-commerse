<?php
        // Include db connection
        include('./dbcon.php');

        // Get the variables
        $fullname = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        //  SQL statement to insert data to table
        $sql = "INSERT INTO admins(`fullName`, `email`, `password`) VALUES('$fullname', '$email', '$password')";

        // Prepare the statement
        $query = mysqli_query($dbcon, $sql);

        if($query){
            echo 'Data inserted successfully';
        } else{
            echo 'Data insertion error!';
        }
?>