<?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $user = $_POST["user"];
        $password = $_POST["password"];
        $edad = $_POST["edad"];

        if(!is_numeric($edad) || $edad < 18) {
            echo "No puede ingresar si tiene menos de 18 años.";
            exit;
        }

        if($user !== "luis" || $password !== "mendoza") {
            echo "Algun dato ingresado es incorrecto";
            exit;
        }
        
        echo "El login ha sido exitoso, bienvenido ". $user;
    } else {
        echo "Algun dato ingresado es incorrecto";
    }
?>