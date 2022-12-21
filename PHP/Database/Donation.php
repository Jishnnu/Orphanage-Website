<?php

// INCLUDING THE PHP FILE HANDLING DATABASE CONNECTIVITY
require("C:/xampp/htdocs/Orphanage/PHP/Database/Connect_DB.php");

// VARIABLE INITIALIZATION
$name = $_POST["name"];
$email = $_POST["email"];
$transaction_id = 10000;
$amount = $_POST["amount"];
$mode = $_POST["payment_mode"];

// MYSQL QUERY TO INSERT VALUES INTO THE TABLE NAMED 'DONATION'
$transaction_id += 1;
$insert = "INSERT INTO DONATION (NAME, EMAIL, AMOUNT, MODE)VALUES('$name', '$email', '$amount', '$mode')";

// EXECUTING THE MYSQL QUERY
$result = mysqli_query($dbConn, $insert) or
    die("ERROR : UNABLE TO EXECUTE INSERT QUERY");

// REDIRECT TO MAIN DONATION PAGE
echo "<script>alert(\"Payment Confirmed. Thank you for your generosity\")</script>";
header("Location: /Orphanage/HTML/ThankYou.html");

?>