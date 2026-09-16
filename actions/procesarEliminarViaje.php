<?php
    session_start();
    require_once "../includes/conexion.php";

    if (!isset($_SESSION["usuario"]) || strtolower($_SESSION["tipo"]) !== "administrador") {
        header("Location: ../index.php");
        exit();
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $idViaje = (int) $_POST["id_viaje"];

        $sql = "DELETE FROM viajes WHERE id_viaje = :id_viaje";
        $sentencia = $conexion->prepare($sql);

        $sentencia->execute([
            ":id_viaje" => $idViaje
        ]);
    }

    header("Location: ../gestion_viajes.php?accion=listar");
    exit();
?>