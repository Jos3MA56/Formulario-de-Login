<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['user'];
    $password = $_POST['password'];
    $edad = $_POST['edad'];

    $errors = [];

    if (empty($user) || empty($password) || empty($edad)) {
        $errors[] = "Todos los campos deben estar llenos";
    }

    if (!is_numeric($edad) || $edad < 18) {
        $errors[] = "La edad debe ser un número y el usuario debe ser mayor de edad (18 años o más)";
    }

    if ($user != "luis" || $password != "mendoza") {
        $errors[] = "Usuario o contraseña incorrectos";
    }

    if (empty($errors)) {
        echo "Registro exitoso!";
    } else {
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
    }
}

