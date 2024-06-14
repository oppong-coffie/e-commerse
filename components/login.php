<?php
        // Start session
        session_start();

    if(isset($_POST["submit"])){
        // Include db connection
        include('./dbcon.php');

        // Get the variables
        $email = $_POST['email'];
        $password = $_POST['password'];

        // SQL statement to select data
        $sql = "SELECT * FROM users WHERE `email` = '$email' && `password` = '$password'";

        $query = mysqli_query($dbcon, $sql);
        
        // Fetch user data
        $row = mysqli_fetch_assoc($query);
        if($row){
            
                // Set session variables
                $_SESSION['id'] = $row['id'];

                // Redirect to dashboard
                header('Location: ./dashboard.php');
            } else {
                echo '
                <script>
                window.location.href = "../";
                let error = get.documentById("error");
                error.innerHTML="Incorrect Emmail or Password";
            </script>';
            }
        
    }
?>
