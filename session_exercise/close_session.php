<?php
session_start();

session_destroy();
unset($_SESSION['username']);

if(!isset($_SESSION['username'])){
    echo("inside condition");
    header ('Location: index.php');
    exit();
}

?>