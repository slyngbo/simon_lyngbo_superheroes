<!DOCTYPE html>
<html>
<head>
	<title>Superhero Dating!</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php

	// ensure that php errors are displayed
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);


		// Include and initiate the database class (you only have to do this once)
		include('classes/database.php');
		$database = new Database;
		$database->connect();

		session_start();


//	var_dump($Superheroes);

if(isset($_SESSION['Name'])) {
	?>
	<a href="index.php"><h1>Who do you want to meet today?</h1></a>
<a href="profile.php?id=<?php echo $_SESSION['ID'];?>">
	<a href="logout.php" >Logout</a>
	<p class=" notice" style="color: red;">Logged in as <?php echo $_SESSION['Name']; ?></p>
</a>
	<?php
} else {
	?>
	<h1>Who do you want to meet today?</h1>
	<a href="login.php"><h3>Already have an account? Go to login.</h3></a>
	<a href="add_new.php" class="add_new notice">Sign up to Superhero dating!</a>

<?php
}






	// Get all from tables roster and likes
	$superheroes = $database->query('SELECT *
		FROM roster	JOIN likes
		ON roster.ID = likes.ID');



	// Loop through all titles
	foreach ($superheroes as $superheroes) {
		?>

		<article>
			<a href="profile.php?id=<?php echo $superheroes['ID'];?>">
			<h3><?php echo $superheroes['Name'];?>  <img src="<?php echo $superheroes['Sex'];?>"  class="gender"> </h3>
			<p>
				<img src="<?php echo $superheroes['Image'];?>">
			</p>
      <p>Species: <?php echo $superheroes['Species'];?></p>
			<p>Special power: <?php echo $superheroes['Special_power'];?></p>
      <p>Hair color: <?php echo $superheroes['Hair_color'];?></p>
			<p>Eye color: <?php echo $superheroes['Eye_color'];?></p>
			<p>Body shape: <?php echo $superheroes['Body_shape'];?></p>
			<p>Special power: <?php echo $superheroes['Special_power'];?></p>
			<p>Signature color: <?php echo $superheroes['Signature_color'];?></p>
			<p>Likes: <?php echo $superheroes['Likes'];?></p>
			</a>

						<?php

				//Like button
				// Select all types
				$sql = "SELECT * FROM likes";
				$likes = $database->query($sql);
			?>

			  <form action="likes.php" method="post">
			  	<input type="submit" name="Likes" value="Like">
					<input type="hidden" name="ID" value="<?php echo $superheroes['ID']; ?>" />
					<input type="hidden" name="redirect" value="index.php" >
			  </form>



		</article>


		<?php
	}
?>
</body>
</html>
