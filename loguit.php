<?php

session_start();
unset($_COOKIE['gebruiker']);
setcookie('gebruiker','',time() - 1000);
header('location: login.php');

?>