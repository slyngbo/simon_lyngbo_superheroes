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
	include('classes/database.php');
	$database = new Database;
	$database->connect();

session_start();

	//- - - Add new movie - - -

	// First, prepare the SQL
	$sql = "UPDATE roster SET
							Name = ?,
							Species = ?,
							Hair_color = ?,
							Eye_color = ?,
							Body_shape = ?,
							Special_power = ?,
							Signature_color = ?,
							Image = ?
						
			 WHERE ID = ? ";

	// Secondly, add values
	$values = array(
		$_POST['Name'],
		$_POST['Species'],
		$_POST['Hair_color'],
		$_POST['Eye_color'],
		$_POST['Body_shape'],
		$_POST['Special_power'],
		$_POST['Signature_color'],
		$_POST['Image'],
		$_SESSION['ID']
	);

	// Call prepared function to execute the above
	$database->prepared($sql,$values);

?>
<p class="notice success">Brilliant! You have modified your Superhero!
	<a href="index.php" class="notice">Back</a>
</p>
</body>
</html>
