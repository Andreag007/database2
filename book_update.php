<?php
	include 'database.php';
	$query = "SELECT * FROM books ORDER BY genre";
	$books = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title> Book Exchange Inventory </title>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/table.css">
</head>

<body>
<div id="container">

<h1>Book Exchange Inventory</h1>

<p class="middle"><a href="enter_new_record.php">Add a new book and recommendation.</a></p>

<p class="middle">Hit the Submit button.</p>

<!-- this form is handled by the PHP file named in the action attribute -->

<!-- Begin PHP while-loop to display database query results
     with each row enclosed in TD tags.
	   Each time it loops, it writes ONE ROW -->
<form>
<?php while ($row = mysqli_fetch_assoc($socks)) :  ?>

<tr>
  <td><input type="radio" name="id" id="<?php echo $row['id']; ?>" value="<?php echo $row['id']; ?>"></td>
	<!-- notice how, above, the database record id becomes
		 the id and value of the radio button -->
  <td><?php echo stripslashes($row['name']); ?></td>
  <td><?php echo $row['genre']; ?></td>
  <td><?php echo $row['media1']; ?></td>
  <td><?php echo $row['media']; ?></td>
</tr>

<?php endwhile;  ?>
<!-- end the PHP while-loop
     everything else on this page is normal HTML -->

</table>

<input type="submit" id="submit" value="Submit One Row for Editing">
</form>
<!-- close the form -->

<p class="middle"><a href="enter_new_record.php">Add a new sock record</a></p>

</div> <!-- close container -->
</body>
</html>
