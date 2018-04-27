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

	session_start();

	// Select all types
	$sql = "SELECT * FROM roster WHERE ID = " . $_SESSION['ID'];
	$roster = $database->query($sql);
?>

  <form action="update_hero.php" method="post">
  	<label for="Name">Name</label>
  	<input type="text" name="Name" value="<?php echo $roster[0]['Name']; ?>">

  	<label for="Species">Species</label>
  	<input type="text" name="Species" value="<?php echo $roster[0]['Species'];?>">

  	<label for="Hair_color">Hair color</label>
  	<input type="text" name="Hair_color" value="<?php echo $roster[0]['Hair_color'];?>">

		<label for="Eye_color">Eye color</label>
  	<input type="text" name="Eye_color" value="<?php echo $roster[0]['Eye_color'];?>">

		<label for="Body_shape">Body shape</label>
  	<input type="text" name="Body_shape" value="<?php echo $roster[0]['Body_shape'];?>">

		<label for="Special_power">Special power</label>
  	<input type="text" name="Special_power" value="<?php echo $roster[0]['Special_power'];?>">

		<label for="Signature_color">Signature color</label>
  	<input type="text" name="Signature_color" value="<?php echo $roster[0]['Signature_color'];?>">

		<label for="Image">Image</label>
		<input type="text" name="Image" value="<?php echo $roster[0]['Image'];?>">

  	<input type="submit" name="submit" value="Add">
  </form>
</body>
</html>
