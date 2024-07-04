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
        $sql = "INSERT INTO users(`fullName`, `email`, `contact`, `location`, `password`) VALUES('$fullname', '$email', '$contact', '$lotacion', '$password')";

        // Prepare the statement
        $query = mysqli_query($dbcon, $sql);

        if($query){
            echo '
                <script>
                    alert("Customer Registered Successfully");
                    window.location.href="./Admin_dash.php";
                </script>
            ';

        } else{
            echo 'Data insertion error!';
        }
    }
?>