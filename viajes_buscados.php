<?php
    session_start();
    require_once "includes/conexion.php";
    require_once "includes/funciones.php";

    $destino = trim($_GET["destino"] ?? "");
    $fecha = trim($_GET["fecha"] ?? "");
    $viajes = buscarViajes($conexion, $destino, $fecha);
?>

<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style-comun.css">
        <link rel="stylesheet" href="css/style-formularios.css">
        <link rel="stylesheet" href="css/style-viajes.css">
        <script src="js/validacionesComunes.js" defer></script>
        <script src="js/validacionLogin.js" defer></script>
        <title>Nómada 360 - Viajes buscados</title>
    </head>

    <body> 
        <?php require_once "includes/cabecera.php"; ?>

        <main> 
            <?php mostrarMenuLateralViajes($conexion); ?>
            
            <section class="info-viajes">
                <h2>Resultado de búsqueda</h2>
                <?php if($destino != "" || $fecha != ""): ?>
                    <p>
                        Búsqueda realizada:
                        <?php if($destino != ""): ?>
                            <strong><?php echo $destino; ?></strong>
                        <?php endif; ?>

                        <?php if($fecha != ""): ?>
                            <strong><?php echo $fecha; ?></strong>
                        <?php endif; ?>
                    </p>
                <?php endif; ?>

                <?php if(empty($viajes)): ?>
                    <p>No se han encontrado viajes que coincidan con la búsqueda realizada.</p>
                    <p><a href="index.php">Volver al buscador</a></p>
                <?php else: ?>
                    <?php foreach($viajes as $viaje) mostrarTarjetaViaje($viaje); ?>
                <?php endif; ?>
            </section>

        </main>

        <?php require_once "includes/pie.php"; ?>
    </body>
</html>