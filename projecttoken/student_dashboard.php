<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Portal</title>
</head>
<body>
	<?php
	session_start();

	if (isset($_SESSION['username'], $_SESSION['password'])) {
	   $username = htmlspecialchars($_SESSION['username']);
	   $password = htmlspecialchars($_SESSION['password']);
	   echo "Welcome Student, $username!<br>";
	   echo "Your Password: $password";
	} else {
	   echo "Session not set";
	}
	?>
</body>
</html>
