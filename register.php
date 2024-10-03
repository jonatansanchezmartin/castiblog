<?php




if(isset($_POST)){

    // Conexión a la base de datos
    require_once "includes/connection.php";

    // Iniciar sesión
    if(!isset($_SESSION)){
        session_start(); 
    }
    // Recoger los valores del formulario de registro

    $name = isset($_POST["name"]) ? mysqli_real_escape_string ($db, $_POST["name"]) : false;
    $lastName = isset($_POST["lastName"]) ? mysqli_real_escape_string ($db, $_POST["lastName"]) : false;
    $email = isset($_POST["email"]) ? mysqli_real_escape_string ($db, trim($_POST["email"])) : false;
    $password = isset($_POST["password"]) ? mysqli_real_escape_string ($db, $_POST["password"]) : false;

    // Array de errores
    $errors = [
        'name' => [],
        'lastName' => [],
        'email' => [],
        'password' => [],
    ];
    
    // Validar datos antes de guardarlos en la base de datos

    // Validar el nombre
    if(empty($name)){
        $errors["name"][] = "El nombre esta vacío1";
    }

    // Validar apellidos
    if(empty($lastName)){
        $errors["lastName"][] = "El apellido está vacío1";
    }

    // Validar email
    if(empty($email)){
        $errors["email"][] = "El email está vacío1";        
    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors["email"][] = "El email no es válido1";      
    }

    // Validar contraseña

    if(empty($password)){
        $errors["password"][] = "La contraseña está vacía1";
    }

    $saveUser = false;

    if(count($errors) == 0){
        $saveUser = true;

        // Cifrar la contraseña

        $passwordSafe = password_hash($password, PASSWORD_BCRYPT, ["cost"=>4]);
       
        // Insertar usuario en la tabla de usuarios de la BBDD
        $sql = "INSERT INTO users (name, surname, password, email) VALUES ('$name', '$lastName', '$passwordSafe', '$email');";
        $saveUser = mysqli_query($db, $sql);


        if ($saveUser){
            $_SESSION["completed"] = "Elregistro se ha completado con éxito";
        }else{
            $_SESSION["registerFormErrors"] = "Fallo al guardar el usuario";
        }


    }else{
        $_SESSION["registerFormErrors"] = $errors;
    }

}

header("Location: index.php");





?>