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
	$sql = "SELECT * FROM roster";
	$roster = $database->query($sql);
?>

  <form action="process.php" method="post">
  	<label for="Name">Name (Also used as username on login)</label>
  	<input type="text" name="Name" placeholder="e.g. Deadpool">

  	<label for="Sex">Sex</label>
  	<input type="text" name="Sex" placeholder="e.g. Female">

  	<label for="Species">Species</label>
  	<input type="text" name="Species" placeholder="e.g. Elf">

  	<label for="Hair_color">Hair color</label>
  	<input type="text" name="Hair_color" placeholder="e.g. Blond">

		<label for="Eye_color">Eye color</label>
  	<input type="text" name="Eye_color" placeholder="e.g. Blue">

		<label for="Body_shape">Body shape</label>
  	<input type="text" name="Body_shape" placeholder="e.g. Feminine">

		<label for="Special_power">Special power</label>
  	<input type="text" name="Special_power" placeholder="e.g. Flying">

		<label for="Signature_color">Signature color</label>
  	<input type="text" name="Signature_color" placeholder="e.g. Red">

		<label for="Image">Image</label>
		<input type="text" name="Image" placeholder="Absolute url to Image">

  	<input type="submit" name="submit" value="Add">
  </form>
</body>
</html>
