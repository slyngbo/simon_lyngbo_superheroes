<!DOCTYPE html>
<html>
<head>
	<title>Superhero Dating!</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1><a href="index.php">Back to main page</h1>
<?php

// ensure that php errors are displayed
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

	// Include and initiate the database class (you only have to do this once)
	include('classes/database.php');
	$database = new Database;
	$database->connect();

//acces profile corresponding to ID clicked
$sql = "SELECT * FROM  roster	WHERE ID = " . $_GET['id'];


	// Get all t titles
	$superheroes = $database->query($sql);

	//	var_dump($titles);

	// Loop through all titles
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
		</article>
</a>

					<?php

				//Like button
				// Select all types
				$sql = "SELECT * FROM likes WHERE ID = " . $superheroes['ID'];
				$likes = $database->query($sql);

			?>	<article>					<p>Likes: <?php echo $likes[0]['Likes'];?></p>




				<form action="likes.php" method="post">
					<input type="submit" name="Likes" value="Like">
					<input type="hidden" name="ID" value="<?php echo $superheroes['ID']; ?>" >
					<input type="hidden" name="redirect" value="profile.php?id=<?php echo $superheroes['ID'] ?>" >
				</form>


		</article>
		<article>
			<?php

	//Like button
	// Select all types

	// Get all t titles
	$comments = $database->query('SELECT *
		FROM comments WHERE Reciever = ' . $_GET['id']);


	 foreach ($comments as &$comment) {
?>
<p>To <?php echo $database->query('SELECT Name FROM roster WHERE id =' . $comment['Reciever'])[0]['Name'];?></p>
<p> <?php echo $comment['Message'];?></p>
<p>From <?php echo $database->query('SELECT Name FROM roster WHERE id =' . $comment['Sender'])[0]['Name'];?></p>
<?php
}


?>


		</article>
		<article class="">

			<?php
			if(isset($_SESSION['Name'])) {
			 ?>

		<form action="comments_post.php" method="post">
			<label for="Message">Message</label>
			<textarea name="Message"></textarea>

			<input type="hidden" name="Reciever" value="<?php echo $_GET['id']; ?>" />

			<input type="submit" name="submit" value="Send message">
		</form>



		</article>
		<?php

		//Only allow to update own profile
		if($_SESSION['ID'] == $superheroes['ID'])
		{
		 echo "	<a href='modify_hero.php' class ='add_new notice'>Update your info!!!</a>";

		}
	}

	}
?>



</body>
</html>
