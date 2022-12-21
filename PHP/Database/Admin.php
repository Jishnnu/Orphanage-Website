<?php

// INCLUDING THE PHP FILE HANDLING DATABASE CONNECTIVITY
require("C:/xampp/htdocs/Orphanage/PHP/Database/Connect_DB.php");

// VARIABLE INITIALIZATION
$username = $_POST["username"];
$password = $_POST["password"];

// MYSQL QUERY TO INSERT VALUES INTO THE TABLE NAMED 'USER'
$select = "SELECT USERNAME, PASSWORD FROM USER WHERE USERNAME = '$username' AND PASSWORD = '$password'";

// EXECUTING THE MYSQL QUERY
$result = mysqli_query($dbConn, $select) or
    die("ERROR : UNABLE TO EXECUTE INSERT QUERY");

$count = mysqli_num_rows($result);

// REDIRECT TO ADMIN PORTAL
if ($count == 1) {
    header("Location: /Orphanage/HTML/AdminPortal.html");
} else {
    echo "<script>
            alert('Invalid Credentials');
            window.location.href='/Orphanage/HTML/Admin.html';
        </script>";
}


?>