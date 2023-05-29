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
   echo "Welcome Student, $username!<br>";
   echo "Your Password: $password <br>";
   echo "Token: $token<br><br>";

   // Display student table
   echo "<table border='1'>";
   echo "<tr><th>Name</th><th>Year Level</th><th>Subjects</th><th>Schedule</th><th>Instructor</th></tr>";
   echo "<tr><td>John Smith</td><td>3rd Year</td><td>Biology, Chemistry, Physics</td><td>MWF 9:00AM - 10:30AM</td><td>Dr. Jane Doe</td></tr>";
   echo "<tr><td>Jane Doe</td><td>2nd Year</td><td>Mathematics, English, History</td><td>TTH 11:00AM - 12:30PM</td><td>Prof. John Smith</td></tr>";
   echo "</table>";
} else {
   echo "Session not set";
}
?>