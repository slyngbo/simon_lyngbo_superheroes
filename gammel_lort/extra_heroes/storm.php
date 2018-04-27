<!DOCTYPE html>
<html>
<head>
	<title>Superhero Dating!</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Who do you want to meet today?</h1>
<?php

// ensure that php errors are displayed
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


	// Include and initiate the database class (you only have to do this once)
	include('classes/database.php');
	$database = new Database;
	$database->connect();



	// Get all t titles
	$superheroes = $database->query("SELECT *
  	FROM  roster
  	WHERE (ID = '8')");

	//	var_dump($titles);

	// Loop through all titles
	foreach ($superheroes as $superheroes) {
		?>
		<article>
			<h3><?php echo $superheroes['Name'];?>  <img src="<?php echo $superheroes['Sex'];?>"  class="gender"> </h3>

			<p>
				<img src="<?php echo $superheroes['Image'];?>">

      <p>Species: <?php echo $superheroes['Species'];?></p>
			<p>Special power: <?php echo $superheroes['Special power'];?></p>
      <p>Hair color: <?php echo $superheroes['Hair color'];?></p>
			<p>Eye color: <?php echo $superheroes['Eye color'];?></p>
			<p>Body shape: <?php echo $superheroes['Body shape'];?></p>
			<p>Special power: <?php echo $superheroes['Special power'];?></p>
			<p>Signature color: <?php echo $superheroes['Signature color'];?></p>
			</p>
		</article>
		<?php
	}
?>
</body>
</html>
