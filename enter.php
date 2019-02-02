<?php include 'database.php'; ?>

<?php
// This is the "prepared statement" version of this file.
if (isset($_POST['name']) && isset($_POST['style'])) {
    // sanitizeMySQL() is a custom function, written below
    $name = sanitizeMySQL($conn, $_POST['name']);
    $style = sanitizeMySQL($conn, $_POST['genre']);
    $color = sanitizeMySQL($conn, $_POST['media1']);
    $quantity = sanitizeMySQL($conn, $_POST['media']);
    // create a PHP timestamp
    date_default_timezone_set('America/New_York');
    $date = date('m-d-Y', time());
    // the prepared statement - note: 6 question marks represent
    // 6 variables we will send to database separately
    $query = "INSERT INTO books (name, genre, media1, media,updated)
    VALUES (?, ?, ?, ?, ?, ?)";
    // prepare the statement in db
    if ( $stmt = mysqli_prepare($conn, $query) ) {
        // bind the values to replace the 6 question marks
        // note that 6 letters in 'sssids' MUST MATCH data types in table
        // Type specification chars:
        // i - integer, s - string , d - double (decimal), b - blob
        mysqli_stmt_bind_param($stmt, 'sssids',
        $name,
        $genre,
        $media1,
        $media,
        $date
        );
        // executes the prepared statement with the values already set, above
        mysqli_stmt_execute($stmt);
        // close the prepared statement
        mysqli_stmt_close($stmt);
        // close db connection
        mysqli_close($conn);
    } // end of prepare if-statement
} else {
    echo "Failed to enter!";
} // end of isset if-statement
// erase any HTML tags and then escape all quotes
// this is used on each value that came from the HTML form
function sanitizeMySQL($conn, $var) {
    $var = strip_tags($var);
    $var = mysqli_real_escape_string($conn, $var);
    return $var;
}
?>