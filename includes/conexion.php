<?php
    // Credenciales cargadas desde variables de entorno (ver .env.example)
    $user = getenv("DB_USER");
    $password = getenv("DB_PASSWORD");
    $host = getenv("DB_HOST") ?: "localhost";
    $database = getenv("DB_NAME");
    $dsn = "mysql:host=$host;dbname=$database;charset=utf8";

    try {
        $conexion = new PDO($dsn, $user, $password);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Conexión fallida: " . $e->getMessage();
    }

?>