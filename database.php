<?php
$server   = "localhost";
$database = "andreasa_book";
$username = "andreasa_bookex";
$password = "Intothewild97";
$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
    echo "Error: Unable to connect to database. ";
    echo "Debugging error: " . mysqli_connect_errno();
    echo "Debugging error: " . mysqli_connect_error();
    exit;
}
?>
