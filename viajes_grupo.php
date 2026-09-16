<?php
    require_once "includes/conexion.php";
    require_once "includes/funciones.php";
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style-comun.css">
        <link rel="stylesheet" href="css/style-viajes.css">
        <script src="js/validacionesComunes.js" defer></script>
        <script src="js/validacionLogin.js" defer></script>
        <title>Nómada 360 - Viajes en Grupo</title>
    </head>

    <body>
        
        <?php require_once "includes/cabecera.php"; ?>

        <main>

            <?php mostrarMenuLateralViajes($conexion); ?>

            <section class="info-viajes">
                <h2>Viajes en Grupo Organizados</h2>
                <p>Te presentamos nuestra selección de viajes en grupo para los próximos meses. Cada propuesta incluye alojamiento, itinerario y actividades pensadas para disfrutar del destino de forma completa.</p>

                <article class="destino">
                    <img src="imagenes/Tokyo.jpg" alt="Viaje en grupo a Japón">
                    <h4>Japón Esencial</h4>
                    <p>Un viaje en grupo para descubrir la mezcla perfecta entre tradición y modernidad japonesa.</p>

                    <ul>
                        <li><strong>Destino:</strong> Tokio, Kioto y Osaka</li>
                        <li><strong>Fechas:</strong> del 5 al 13 de julio de 2026</li>
                        <li><strong>Alojamiento:</strong> Hoteles de 4 estrellas en régimen de alojamiento y desayuno</li>
                        <li><strong>Itinerario:</strong> Llegada a Tokio, visitas urbanas y culturales, traslado a Kioto para conocer templos y jardines, y final del viaje en Osaka.</li>
                        <li><strong>Actividades:</strong> Visita guiada por Tokio, recorrido por templos en Kioto, experiencia gastronómica japonesa y excursión a barrios tradicionales.</li>
                    </ul>
                </article>

                <article class="destino">
                    <img src="imagenes/Roma.jpg" alt="Viaje en grupo a Italia">
                    <h4>Italia Monumental</h4>
                    <p>Una ruta grupal por algunas de las ciudades más emblemáticas de Italia.</p>

                    <ul>
                        <li><strong>Destino:</strong> Roma, Florencia y Venecia</li>
                        <li><strong>Fechas:</strong> del 20 al 27 de julio de 2026</li>
                        <li><strong>Alojamiento:</strong> Hoteles céntricos de 3 y 4 estrellas</li>
                        <li><strong>Itinerario:</strong> Inicio en Roma con visitas históricas, continuación hacia Florencia para conocer su patrimonio artístico y final en Venecia con recorrido por sus canales.</li>
                        <li><strong>Actividades:</strong> Visita al Coliseo y Foro Romano, tour artístico por Florencia, paseo en vaporetto y ruta guiada por Venecia.</li>
                    </ul>
                </article>

                <article class="destino">
                    <img src="imagenes/Marrakech.jpg" alt="Viaje en grupo a Marruecos">
                    <h4>Marruecos Cultural</h4>
                    <p>Un recorrido en grupo por ciudades llenas de color, tradición y exotismo.</p>

                    <ul>
                        <li><strong>Destino:</strong> Casablanca, Fez y Marrakech</li>
                        <li><strong>Fechas:</strong> del 10 al 15 de agosto de 2026</li>
                        <li><strong>Alojamiento:</strong> Riads tradicionales y hotel de 4 estrellas</li>
                        <li><strong>Itinerario:</strong> Llegada a Casablanca, traslado a Fez para explorar su medina y final en Marrakech con tiempo para mercados y plazas históricas.</li>
                        <li><strong>Actividades:</strong> Visitas guiadas por medinas, experiencia gastronómica marroquí, paseo por zocos y espectáculo tradicional nocturno.</li>
                    </ul>
                </article>

                <article class="destino">
                    <img src="imagenes/RivieraMaya.jpg" alt="Viaje en grupo a México">
                    <h4>México Caribe y Cultura</h4>
                    <p>Playas paradisíacas y patrimonio histórico en una experiencia compartida inolvidable.</p>

                    <ul>
                        <li><strong>Destino:</strong> Ciudad de México, Cancún y Riviera Maya</li>
                        <li><strong>Fechas:</strong> del 2 al 10 de septiembre de 2026</li>
                        <li><strong>Alojamiento:</strong> Hotel urbano en Ciudad de México y resort en Riviera Maya</li>
                        <li><strong>Itinerario:</strong> Comienzo en Ciudad de México con visitas culturales y continuación hacia el Caribe para disfrutar de Cancún y Riviera Maya.</li>
                        <li><strong>Actividades:</strong> Tour histórico por el centro de Ciudad de México, excursión a ruinas mayas, jornada de playa y actividades acuáticas en grupo.</li>
                    </ul>
                </article>

                <article class="destino">
                    <img src="imagenes/Sydney.jpg" alt="Viaje en grupo a Australia">
                    <h4>Australia Urbana</h4>
                    <p>Una aventura en grupo por las ciudades más dinámicas del país oceánico.</p>

                    <ul>
                        <li><strong>Destino:</strong> Sydney, Melbourne y Brisbane</li>
                        <li><strong>Fechas:</strong> del 18 al 29 de septiembre de 2026</li>
                        <li><strong>Alojamiento:</strong> Hoteles de 4 estrellas con desayuno incluido</li>
                        <li><strong>Itinerario:</strong> Llegada a Sydney, continuación hacia Melbourne para disfrutar de su ambiente cultural y final del viaje en Brisbane.</li>
                        <li><strong>Actividades:</strong> Visita panorámica por Sydney, recorrido artístico por Melbourne, excursiones urbanas y tiempo libre para disfrutar de playas y zonas comerciales.</li>
                    </ul>
                </article>
            </section>
        </main>

        <?php require_once "includes/pie.php"; ?>

    </body>
</html>