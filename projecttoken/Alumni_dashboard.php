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
	   $token = htmlspecialchars($_SESSION['login_token']);
	   echo "Welcome Alumni, $username!<br>";
	   echo "Your Password: $password <br>";
	   echo "Token: $token";
	} else {
	   echo "Session not set";
	}
	?>
</body>
</html>
