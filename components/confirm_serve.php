<?php
// 
$id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Assets/bootstrap-5.3/css/bootstrap.css">
    <style>
        body{
            text-align: center;
            padding: 10px;
        }
        .delivered img{
            width: 30%;
        }
        .option a{
            font-size: 30px;
            width: 40vh;
            border-radius: 5px;
        }
        .option{
            margin-top: 50px;
        }
    </style>
</head>
<body class="">

<h1>Customer Services center </h1>
<div class="">
    <div class="delivered">
        <img src="../images/delivered.jpg" alt="">
        <img src="../images/delivered2.jpg" alt="">
        </div>
        <h1 class="text-danger" style="margin-top: 50px">IS THE CUSTOMER SERVERD</h1>
        <div class="option">
           <a type="button" class="bg-primary text-light" href="./delete.php?id=<?php echo $id ?>">Yes</a>
            <a type="button" class="bg-danger text-light" href="./">No</a>   
        </div>
  
</div>
    <script src="../Assets/bootstrap-5.3/js/bootstrap.js"></script>
</body>
</html>