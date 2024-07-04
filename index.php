<?php
        // Start session
        session_start();

    if(isset($_POST["submit"])){
        // Include db connection
        include('./components/dbcon.php');

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
                header('Location: ./components/dashboard.php');
            } else {
                echo '
                <script>
                   alert("Incorrect username or password");
            </script>';
            }
        
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="./Assets/bootstrap-5.3/css/bootstrap.css">
    <link rel="stylesheet" href="./Assets/fontawesome-5/css/all.css">
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div id="formarea" class="col-4 justify-content-center align-items-center">
                <img  src="./images/money-sack2.jpg" alt="">
                    <h3 class="text-secondary">Login</h3>
                    <!--START:: Login Forms -->
                    <form class="form" action="" method="POST">
                        <div id="phone" class="shadow border">
                            <span class="fa fa-user"></span>
                            <input name="email" class="input" type="text">
                        </div>
                        <br>
                        <div id="password" class="shadow border">
                            <span class="fa fa-lock"></span>
                            <input name="password" class="input" type="text">
                        </div>
                        <br>
                        
                        <div id="" class=" ">
                            <input name="submit" class="input" type="submit"
                            id="submit"
                            value="Login">
                        </div>
                       
                       
                    </form>
                    <!--END:: Login Forms -->

                    <div class="">
                        <p><a href="">Forget Password</a> </p>
                    </div>



            </div>
            <div id="desc" class="col-6 text-light">
                <div class="">
                    <h2>E - Commerce</h2>
              
                <p><span class="out"> Lorem, ipsum dolor sit amet  <br>
                    consectetur adipisicing elit. Earum reiciendis </span>
                    <br>saepe qui veniam tenetur laboriosam est, officia rem quidem, nisi quasi <br> cupiditate aspernatur
                     dolore corrupti reprehenderit numquam debitis eius culpa!</p>
                </div>

                <div class="">
                    Don't have account? <br>
                    <span class="btn btn-info" data-bs-toggle="modal" data-bs-target="#register">Register</span> 
                </div>
                
            </div>
        </div>
    </div>


    <!-- START:: Sign up modal -->
     <div class="modal fade" id="register">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">Register</div>
                    <form class="signupform" action="./components/signup.php" method="POST">
                        Full Name: <input name="name" class="signupinput shadow border" type="text">
                        Email: <input name="email" class="signupinput shadow border" type="text">
                        Contact: <input name="contact" class="signupinput shadow border" type="text">
                        Location: <input name="location" class="signupinput shadow border" type="text">
                        Password: <input name="password" class="signupinput shadow border" type="text"> 
                        Confirm Password: <input class="signupinput shadow border" type="text"><br><br>

                        <div id="submit" class="">
                                    <span class="fa fa-upload"></span>
                            <span class="">submit</span>
                        
                        </div>
                    </form>
                </div>
        </div>
     </div>

    <script src="./Assets/fontawesome-5/js/all.js"></script>
    <script src="./Assets/bootstrap-5.3/js/bootstrap.js"></script>
</body>
</html>