<?php
$server   = "localhost";
$database = "andreasa_bookexchange";
$username = "andreasa_msbuser";
$password = "Intothewild97";
$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
    echo "Error: Unable to connect to database. ";
    echo "Debugging error: " . mysqli_connect_errno();
    echo "Debugging error: " . mysqli_connect_error();
    exit;
}
?>
