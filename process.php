<!DOCTYPE html>
<html>
<head>
	<title>processing</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php

	// check what is received through POST
	//var_dump($_POST); die();
	include('classes/database_likes.php');
	$database = new Database;
	$database->connect();


	//- - - Add new movie - - -

	// First, prepare the SQL
	$sql = "INSERT INTO roster (
							Name,
							Sex,
							Species,
							Hair_color,
							Eye_color,
							Body_shape,
							Special_power,
							Signature_color,
							Image
						)
			VALUES (?,?,?,?,?,?,?,?,?)";
	// Secondly, add values
	$values = array(
		$_POST['Name'],
		$_POST['Sex'],
		$_POST['Species'],
		$_POST['Hair_color'],
		$_POST['Eye_color'],
		$_POST['Body_shape'],
		$_POST['Special_power'],
		$_POST['Signature_color'],
		$_POST['Image']
	);

	// Call prepared function to execute the above
	$id = $database->prepared($sql,$values);

	$sql = "INSERT INTO likes (ID, Likes) VALUES ('$id', '0')";
	$database->query($sql);

?>
<p class="notice success">Brilliant! You have joined the Superhero dating site!
	<a href="index.php" class="notice">Back</a>
</p>
</body>
</html>
