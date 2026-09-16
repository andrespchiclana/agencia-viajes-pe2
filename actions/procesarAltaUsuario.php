<?php 
    session_start();

    require_once "../includes/conexion.php";
    require_once "../includes/funciones.php";

    if ($_SERVER["REQUEST_METHOD"] != "POST") {
        header("Location: ../altausuarios.php");
        exit();
    }

    $nombre = trim($_POST["nombre"]);
    $apellidos = trim($_POST["apellidos"]);
    $nacimiento = trim($_POST["nacimiento"]);
    $telefono = trim($_POST["telefono"]);
    $correo = trim($_POST["correo"]);
    $usuario = trim($_POST["usuario"]);
    $contrasena = trim($_POST["contrasena"]);
    $confirmarContrasena = trim($_POST["confirmar-contrasena"]);

    if ($nombre == "" || $nacimiento == "" || $telefono == "" || $correo == "" || $usuario == "" || $contrasena == "" || $confirmarContrasena == "") {
        $_SESSION["mensaje_registro"] = "Hay campos obligatorios vacíos.";
        header("Location: ../altausuarios.php");
        exit();
    }

    if ($contrasena != $confirmarContrasena) {
        $_SESSION["mensaje_registro"] = "Las contraseñas no coinciden.";
        header("Location: ../altausuarios.php");
        exit();
    }

    try {
        if (existeUsuarioOCorreo($conexion, $usuario, $correo)) {
            $_SESSION["mensaje_registro"] = "Error: El usuario o el correo ya están registrados.";
            header("Location: ../altausuarios.php");
            exit();
        }

        insertarUsuario($conexion, $nombre, $apellidos, $nacimiento, $telefono, $correo, $usuario, $contrasena);

        $_SESSION["mensaje_registro"] = "Registro completado con éxito. Ya puedes iniciar sesión.";
        header("Location: ../index.php");
        exit();

    } catch (PDOException $e) {
        $_SESSION["mensaje_registro"] = "Error con la base de datos: " . $e->getMessage();
        header("Location: ../altausuarios.php");
        exit();
    }
?>