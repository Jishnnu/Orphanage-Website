<?php

// INCLUDING THE PHP FILE HANDLING DATABASE CONNECTIVITY
require("C:/xampp/htdocs/Orphanage/PHP/Database/Connect_DB.php");
echo "<script>alert(\"Thank you for volunteering with us\" + name);</script>";

// VARIABLE INITIALIZATION
$name = $_POST["name"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$address = $_POST["address"];

// MYSQL QUERY TO INSERT VALUES INTO THE TABLE NAMED 'VOLUNTEER'
$insert = "INSERT INTO VOLUNTEER VALUES('$name', '$age', '$gender', '$phone', '$email', '$address')";

// EXECUTING THE MYSQL QUERY
$result = mysqli_query($dbConn, $insert) or
    die("ERROR : UNABLE TO EXECUTE INSERT QUERY");

// REDIRECT TO HOMEPAGE
header("Location: /Orphanage/HTML/ThankYou.html");

?>