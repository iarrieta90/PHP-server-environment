<?php

session_start();

if (isset($_SESSION['username']) && $_SESSION['username'] !== "") {
    $url = "panel.php";
    header ('Location:' . $url);
    exit();

} else 
if (isset($_POST['username']) && $_POST['username'] !== "") {
    $username = $_POST['username'];
    $_SESSION['username'] = $username;
    $url = "panel.php";
    header ('Location:' . $url);
    exit();
} else {
    header ('Location: index.php');
    exit();
}


?>