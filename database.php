<?php
$server   = "localhost";
$database = "NULL";
$username = "NULL";
$password = "NULL";
$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
    echo "Error: Unable to connect to database. ";
    echo "Debugging error: " . mysqli_connect_errno();
    echo "Debugging error: " . mysqli_connect_error();
    exit;
}
?>
