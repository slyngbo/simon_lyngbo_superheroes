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

  // Get all t titles
  $roster = $database->query('SELECT * FROM roster');

	// Select all types
	$sql = "SELECT * FROM comments";
	$comments = $database->query($sql);
?>

  <form action="comments_post.php" method="post">
    <label for="Reciever">Who do you want to message</label>
    <select name="Reciever">
      <?php
      // insert an option for each type
      foreach ($roster as $roster) {
        ?>
      <option value="<?php echo $roster['Name'];?>"><?php echo $roster['Name'];?></option>
        <?php
      }
      ?>
    </select>

  	<label for="Message">Message</label>
  	<textarea name="Message"></textarea>

  	<label for="Sender">Your name</label>
  	<input type="text" name="Sender" >

  	<input type="submit" name="submit" value="Send message">
  </form>
</body>
</html>
