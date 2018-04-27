<html>
<body>
  <head>
  	<title>Superhero Dating!</title>
  	<link rel="stylesheet" type="text/css" href="style.css">
  </head>
<?php

 session_start();

//crosscheck input with database
  if(isset($_POST['submit'])) {

    include('classes/database.php');
    $database = new Database;
    $database->connect();

    $result = $database->query("SELECT * FROM roster WHERE Name LIKE '" . $_POST['Name'] . "'");

    if(empty($result))
    {
      echo "<p>Brugernavn/password forkert!";
      // remove all session variables
      session_unset();

      // destroy the session
      session_destroy();
     } else {
       //Allow login
       $_SESSION['ID'] =  $result[0]['ID'];
       $_SESSION['Name'] =  $result[0]['Name'];

    header('Location: index.php');
    exit;
    }
  }

?>


<form method="post">
<input name="Name" placeholder="Na Na Na Batman" >
<input name="Password" placeholder="Guess if you need me" type="password" >
<input type="submit"  name="submit" value="Login">
</form>
<form>
	<a href="add_new.php" class="add_new notice">Sign up to Superhero dating!</a>
</form>
</body>
</html>
