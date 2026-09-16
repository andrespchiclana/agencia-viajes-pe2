<?php
    session_start();
    require_once "../includes/conexion.php";

    if (!isset($_SESSION["usuario"]) || strtolower($_SESSION["tipo"]) !== "administrador") {
        header("Location: ../index.php");
        exit();
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $sql = "INSERT INTO viajes (destino, pais, continente, fecha_inicio, fecha_fin, precio, duracion, imagen, frase, descripcion, alojamiento)
                VALUES (:destino, :pais, :continente, :fecha_inicio, :fecha_fin, :precio, :duracion, :imagen, :frase, :descripcion, :alojamiento)";
        
        $sentencia = $conexion->prepare($sql);
        $sentencia->execute([
            ":destino" => trim($_POST["destino"]),
            ":pais" => trim($_POST["pais"]),
            ":continente" => trim($_POST["continente"]),
            ":fecha_inicio" => trim($_POST["fecha_inicio"]),
            ":fecha_fin" => trim($_POST["fecha_fin"]),
            ":precio" => trim($_POST["precio"]),
            ":duracion" => trim($_POST["duracion"]),
            ":imagen" => trim($_POST["imagen"]),
            ":frase" => trim($_POST["frase"]),
            ":descripcion" => trim($_POST["descripcion"]),
            ":alojamiento" => trim($_POST["alojamiento"])
        ]);
    }

    header("Location: ../gestion_viajes.php?accion=listar");
    exit();
?>