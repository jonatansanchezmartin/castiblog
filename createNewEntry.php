<?php

if(isset($_POST)){

    // Conexión a la base de datos
    require_once "includes/connection.php";

    // Iniciar sesión
    if(!isset($_SESSION)){
        session_start(); 
    }
    // Recoger los valores del formulario de registro

    $title = isset($_POST["title"]) ? mysqli_real_escape_string ($db, $_POST["title"]) : false;
    $content = isset($_POST["content"]) ? mysqli_real_escape_string ($db, $_POST["content"]) : false;
    $category = isset($_POST["category"]) ? mysqli_real_escape_string ($db, $_POST["category"]) : false;
    
    // TODO Crear la tabla en DBeaver
    $sql = "INSERT INTO posts (title, content, category) VALUES ('$title', '$content', '$category');";
    $savePost = mysqli_query($db, $sql);
}

header("Location: index.php");





?>