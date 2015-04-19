<?php

session_start();
unset($_SESSION['gebruiker']);
header('location: login.php');

?>