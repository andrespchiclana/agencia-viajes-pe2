<?php
    session_start();
    require_once "includes/conexion.php";

    $sql = "SELECT id_viaje, destino, frase, imagen FROM viajes ORDER BY RAND() LIMIT 10";
    $sentencia = $conexion->query($sql);
    $viajesCarrusel = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es"> 

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style-comun.css">
        <link rel="stylesheet" href="css/style-index.css">
        <script src="js/validacionesComunes.js" defer></script>
        <script src="js/validacionLogin.js" defer></script>
        <script src="js/validacionBuscador.js" defer></script>
        <script src="js/carrusel.js" defer></script>
        <title>Nómada 360 - Inicio</title>
    </head>

    <body>

    <?php include "includes/cabecera.php"; ?>
        
        <main>

            <?php if(isset($_SESSION["mensaje_registro"])): ?>
                <section class="tarjeta-registro">
                    <p><?php echo $_SESSION["mensaje_registro"]; ?></p>
                </section>
                <?php unset($_SESSION["mensaje_registro"]); ?>
            <?php endif; ?>

            <?php if(isset($_SESSION["mensaje_login"])): ?>
                <section class="tarjeta-registro">
                    <p><?php echo $_SESSION["mensaje_login"]; ?></p>
                </section>
                <?php unset($_SESSION["mensaje_login"]); ?>
            <?php endif; ?>

            <section class="carrusel">
                <button type="button" id="flechaIzq">←</button>
                
                <article id="viajeCarrusel">
                    <img id="imagenCarrusel" src="" alt="">
                    <h3 id="destinoCarrusel"></h3>
                    <p id="fraseCarrusel"></p>
                </article>

                <button type="button" id="flechaDer">→</button>
            </section>

            <script> 
                const viajesCarrusel = <?php echo json_encode($viajesCarrusel); ?>;
            </script>

            <section class="bienvenida">
                <h2>Bienvenido a Nómada 360</h2>
                <p>Somos tu agencia de confianza para descubrir los rincones más impresionantes del mundo. Organizamos tu viaje a medida con las mejores ofertas y opciones de alojamiento.</p>
            </section>
            
            <section class="buscador">
                <h3>Encuentra tu próximo destino</h3>
                <form id="formularioBuscador" action="viajes_buscados.php" method="get">
                    <label>
                        Destino:
                        <input type="text" id="destinoBuscador" name="destino" placeholder="Ej: París, Bali, Nueva York">
                    </label>

                    <label>
                        Fecha de viaje:
                        <input type="text" id="fechaBuscador" name="fecha" placeholder="AAAA-MM-DD">
                    </label>

                    <button type="submit">Buscar</button>
                </form>

            </section>
            

        </main>

        <?php include "includes/pie.php"; ?> 

    </body>

</html>