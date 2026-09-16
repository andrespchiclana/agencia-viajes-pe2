<?php
    session_start();
    require_once "includes/conexion.php";
    require_once "includes/funciones.php";

    list($where, $params) = filtroViajes();

    $viajesPorPagina = 9;
    $pagina = (int) ($_GET['pagina'] ?? 1);

    if ($pagina < 1) {
        $pagina = 1;
    }

    $offset = ($pagina - 1) * $viajesPorPagina;

    $totalViajes = contarViajes($conexion, $where, $params);
    $totalPaginas = ceil($totalViajes / $viajesPorPagina);

    $viajes = obtenerViajesPaginados($conexion, $where, $params, $viajesPorPagina, $offset);
?>

<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style-comun.css">
        <link rel="stylesheet" href="css/style-formularios.css">
        <link rel="stylesheet" href="css/style-viajes.css">
        <script src="js/validacionesComunes.js" defer></script>
        <script src="js/validacionLogin.js" defer></script>
        <title>Nómada 360 - Viajes</title>
    </head>

    <body>

    <?php include "includes/cabecera.php"; ?>

        <main>

            <?php mostrarMenuLateralViajes($conexion); ?>

            <section class="info-viajes">
                <h2>Viajes</h2>
                <p>Explora nuestra selección de destinos exclusivos.</p>

                <?php if(empty($viajes)): ?>

                    <p>No hay viajes disponibles actualmente.</p>

                <?php else: ?>

                    <?php foreach($viajes as $viaje): ?>
                        <?php mostrarTarjetaViaje($viaje); ?>
                    <?php endforeach; ?>

                <?php endif; ?>

                <?php mostrarPaginacion($pagina, $totalPaginas); ?>

            </section>

        </main>

    <?php include "includes/pie.php"; ?>

    </body>
</html>