<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title> Book Exchange - Enter </title>
    <link rel="stylesheet" href="css/main.css">
</head>
.
<body>
<div id="container">

<h1>Book Exchange: Enter book and a genre, and then a film, book, or TV recommendation.</h1>

<p class="middle"><a href="book_update.php">View full list of books and recommendations.</a></p>

<div id="books">

<!-- this form is handled by the JavaScript file linked at bottom -->
<form id="book" method="post" autocomplete="off">

  <label for="name">Name </label>
	<input type="text" name="name" id="name" maxlength="20" required>

    <label for="genre">Genre </label>
    <select name="genre" id="genre1" required>
        <option value=""></option>
        <option value="romace">Romance</option>
        <option value="fiction">Fiction</option>
        <option value="action">Action/Adventure</option>
        <option value="other">Other</option>
    </select>

  <label for="media1"> Book, TV, or film name </label>
	<input type="text" name="recom" id="TV" maxlength="100" required>

  <label for="media">Which type of media is the recommendation? </label>
  <select name="media" id="media2" required>
      <option value=""></option>
      <option value="romace">Book</option>
      <option value="fiction">TV</option>
      <option value="action">Film</option>
      <option value="other">Other</option>
  </select>

	<input type="submit" id="submit" value="Submit">
</form>
<!-- close the form -->

</div> <!-- close #socks -->

<div id="response">
    <p class="announce">Thanks for adding to our list!</p>
    <p class="middle"><a href="index.html">Return to the form</a></p>
</div>

</div> <!-- close container -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"> </script>
<script src="js/enter.js"></script>
</body>
</html>
