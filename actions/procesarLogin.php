<?php 
    session_start();
    require_once "../includes/conexion.php";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = trim($_POST["usuario"]);
        $contrasena = trim($_POST["contrasena"]);

        if($usuario == "" || $contrasena == "") {
            header("Location: ../index.php");
            exit();
        }

        $sql = "SELECT * FROM usuario WHERE usuario = :usuario";

        $sentencia = $conexion->prepare($sql);
        $sentencia->execute([
            ":usuario" => $usuario
        ]);

        $fila = $sentencia->fetch(PDO::FETCH_ASSOC);

        if($fila && password_verify($contrasena, $fila["contrasena"])){
            $_SESSION["id_usuario"] = $fila["id_usuario"];
            $_SESSION["usuario"] = $fila["usuario"];
            $_SESSION["tipo"] = $fila["tipo"];
        } else{
            $_SESSION["mensaje_login"] = "Usuario o contraseña incorrectos";
        }

        header("Location: ../index.php");
        exit();

    }

    header("Location: ../index.php");
    exit();
?>