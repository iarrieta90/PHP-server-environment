<?php

if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $url = "panel.php?username=" . $username;
    header ('Location:' . $url);
    exit();
}


?>