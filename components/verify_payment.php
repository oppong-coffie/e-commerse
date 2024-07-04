<?php
   // Start session
   session_start();
   // Set session variables
   $userid = $_SESSION['id'];

$ref = $_GET['ref'];
  $curl = curl_init();
  
  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.paystack.co/transaction/verify/".$ref,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
      "Authorization: Bearer sk_test_b9e74599e4af1d9c000ad9e29fb8f04a3fb39e9f",
      "Cache-Control: no-cache",
    ),
  ));
  
  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);
  
  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    // echo $response;
     // Database connection
    include('./dbcon.php');
     // sql Statement
    $sql_cart = "UPDATE cart SET paid='yes' WHERE user_id='$userid'";
    // query
    $query_cart = mysqli_query($dbcon, $sql_cart);
    if($query_cart){
      echo "
          <script>
              alert('TRANSACTION SUCCESSFUL AND DATA SENT TO DATABASE');
              window.location.href = './dashboard.php';
          </script>
      ";
      
      
    }
  }
?>