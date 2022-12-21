<?php

// INCLUDING THE PHP FILE HANDLING DATABASE CONNECTIVITY
require("C:/xampp/htdocs/Orphanage/PHP/Database/Connect_DB.php");
echo "<link rel=\"stylesheet\" href=\"/Orphanage/CSS/Admin.css\">";

// MYSQL QUERY TO SELECT VALUES FROM THE TABLE NAMED 'VOLUNTEER'
$select = "SELECT NAME, AGE, GENDER, PHONE, EMAIL, ADDRESS FROM VOLUNTEER";

// EXECUTING THE MYSQL QUERY
$result = mysqli_query($dbConn, $select) or
    die("ERROR : UNABLE TO EXECUTE INSERT QUERY");

$count = mysqli_num_rows($result);
if ($count > 0) {
    echo "<br><div id = \"container\"><table id = \"result\"><tr><th>NAME</th><th>AGE</th><th>GENDER</th><th>PHONE</th><th>EMAIL</th><th>ADDRESS</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row['NAME'] . "</td><td>" . $row['AGE'] . "</td><td>" . $row['GENDER'] . "</td><td>" . $row['PHONE'] . "</td><td>" . $row['EMAIL'] . "</td><td>" . $row['ADDRESS'] . "</td></tr>";
    }
    echo "</table></div>";
} else {
    echo "<h1>NO RECORD FOUND</h1>";
}

?>