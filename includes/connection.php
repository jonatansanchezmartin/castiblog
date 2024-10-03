<?php

$server = "db";
$username = "user";
$password = "userpassword";
$database = "app_db";
$db = mysqli_connect($server, $username, $password, $database);

mysqli_query($db, "SET NAMES 'utf8'");

// Iniciar la sesión

session_start();



?>