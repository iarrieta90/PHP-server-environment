<?php

session_start();

if (!isset($_SESSION['username'])) {
    header ('Location: index.php');
    echo "<p>You need to log in!</p>";
    exit(); 
}

$username = $_SESSION['username'];
$url = "index.php"; 
echo "<p>Hello $username </p>";
echo "<a href='$url'>Close session</a>";

?>