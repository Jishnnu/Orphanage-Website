<?php

// INCLUDING THE PHP FILE HANDLING DATABASE CONNECTIVITY
require("C:/xampp/htdocs/Orphanage/PHP/Database/Connect_DB.php");

// VARIABLE INITIALIZATION
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$description = $_POST["description"];

// MYSQL QUERY TO INSERT VALUES INTO THE TABLE NAMED 'CONTACT'
$insert = "INSERT INTO CONTACT VALUES('$name', '$email', '$subject', '$description')";

// EXECUTING THE MYSQL QUERY
$result = mysqli_query($dbConn, $insert) or
    die("ERROR : UNABLE TO EXECUTE INSERT QUERY");

// REDIRECT TO THANK YOU PAGE
echo "<script>alert(\"Thank you. We will get back to you shortly.\")</script>";
header("Location: /Orphanage/HTML/ThankYou.html");

?>