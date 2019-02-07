<?php
	include 'database.php';
	$query = "SELECT * FROM booklist ORDER BY genre";
	$bookexchange = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title> Book Exchange Inventory </title>
	<link rel="stylesheet" href="css/main.css">
</head>

<body>
<div id="container">

<h1>Book Exchange Inventory</h1>

<p class="middle"><a href="enter_new_record.php">Add a new book and recommendation.</a></p>


<!-- this form is handled by the PHP file named in the action attribute -->

<!-- Begin PHP while-loop to display database query results
     with each row enclosed in TD tags.
	   Each time it loops, it writes ONE ROW -->
<form>

	<table>
	<!-- table column headings -->
	<tr>
	  <th>Name</th>
	  <th>Genre</th>
	  <th>recommendation</th>
	  <th>Genre</th>
	</tr>

<?php while ($row = mysqli_fetch_assoc($bookexchange)) :  ?>

<tr>
  <td><?php echo $row['name']; ?></td>
  <td><?php echo $row['genre']; ?></td>
  <td><?php echo $row['media1']; ?></td>
  <td><?php echo $row['media2']; ?></td>
</tr>

<?php endwhile;  ?>
<!-- end the PHP while-loop
     everything else on this page is normal HTML -->

</table>

</form>
<!-- close the form -->

<p class="middle"><a href="enter_new_record.php">Tell us a new book recommendation</a></p>

</div> <!-- close container -->
</body>
</html>
