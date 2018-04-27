<?php
/*
<!DOCTYPE html>
<html>
<head>
	<title>processing</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
*/
	// check what is received through POST
	//var_dump($sql); die();
	include('classes/database_likes.php');
	$database = new Database;
	$database->connect();


	// First, prepare the SQL

//var_dump($_POST);
  $SQL = "UPDATE likes SET Likes = Likes+1 WHERE ID=" . $_POST['ID'];
$database->query($SQL);
header("Location: " .$_POST['redirect']);

		/*

    $SQL = "SELECT * FROM likes";


?>
<p class="notice success">Your like have been added
	<a onclick="goBack()" class="notice">Back</a>

<script>
function goBack() {
    window.history.back();
}
</script>
</p>
</body>
</html>

*/ ?>
