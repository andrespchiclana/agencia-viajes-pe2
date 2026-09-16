<?php
    session_start();
    require_once "../includes/conexion.php";

    if (!isset($_SESSION["usuario"]) || strtolower($_SESSION["tipo"]) !== "administrador") {
        header("Location: ../index.php");
        exit();
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $sql = "UPDATE viajes SET
                    destino = :destino,
                    pais = :pais,
                    continente = :continente,
                    fecha_inicio = :fecha_inicio,
                    fecha_fin = :fecha_fin,
                    precio = :precio,
                    duracion = :duracion,
                    imagen = :imagen,
                    frase = :frase,
                    descripcion = :descripcion,
                    alojamiento = :alojamiento
                WHERE id_viaje = :id_viaje";

        $sentencia = $conexion->prepare($sql);

        $sentencia->execute([
            ":id_viaje" => (int) $_POST["id_viaje"],
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