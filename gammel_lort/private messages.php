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


//	var_dump($Superheroes);



?>
<h1>Who do you want to meet today?</h1>
<a href="add_new.php" class="add_new notice">Sign up to Superhero dating!</a>




<?php





	// Get all
	$superheroes = $database->query('SELECT *
		FROM comments WHERE ID=1');



	// Loop through all
	foreach ($superheroes as $superheroes) {
		?>

		<article>
			<a href="<?php echo $superheroes['url'];?>">
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
			  </form>



		</article>
		<?php
	}
?>
</body>
</html>
