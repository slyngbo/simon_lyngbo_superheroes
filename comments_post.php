<!DOCTYPE html>
<html>
<head>
	<title>Posting message</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php

	session_start();
	// check what is received through POST
	//var_dump($_POST); die();
	include('classes/database.php');
	$database = new Database;
	$database->connect();


	//- - - Add new movie - - -

	// First, prepare the SQL
	$sql = "INSERT INTO comments (
              Reciever,
							Message,
							Sender
						)
			VALUES (?,?,?)";
	// Secondly, add values
	$values = array(
		$_POST['Reciever'],
		$_POST['Message'],
		$_SESSION['ID']
	);

	// Call prepared function to execute the above
	$database->prepared($sql,$values);

?>
<p class="notice success">Your comment was succesfully submitted.
	<a href="index.php" class="notice">Back</a>
</p>
</body>
</html>
