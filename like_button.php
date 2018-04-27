<!DOCTYPE html>
<html>
<head>
	<title>Add new</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
// Get all types from the database
	include('classes/database.php');
	$database = new Database;
	$database->connect();


	// Select all types
	$sql = "SELECT * FROM likes";
	$likes = $database->query($sql);
?>

  <form action="likes.php" method="post">
  	<input type="submit" name="Likes" value="Like">
  </form>

</body>
</html>
