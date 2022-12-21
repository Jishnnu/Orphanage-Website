<?php

// VARIABLE INTIALIZATION
$db_host = 'localhost';
$db_user = 'root';
$db_pwd = '';
$db_name = 'ORPHANAGE';

// ESTABLISHING DATABASE CONNECTIVITY
$dbConn = mysqli_connect($db_host, $db_user, $db_pwd, $db_name) or
    die("ERROR : UNABLE TO ESTABLISH DATABASE CONNECTIVITY");
    
?>