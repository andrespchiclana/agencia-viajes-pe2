<!DOCTYPE html>
<html lang="es">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style-comun.css">
        <link rel="stylesheet" href="css/style-info.css">
        <script src="js/validacionesComunes.js" defer></script>
        <script src="js/validacionLogin.js" defer></script>
        <title>Nómada 360 - Sobre nuestra agencia</title>
    </head>
    
    <body>

    <?php require_once "includes/cabecera.php"; ?>

        <main>

            <section class="historia">
                <h2>Nuestra Historia</h2>
                <p>Nómada 360 nació en Granada con una misión clara: transformar la forma en que las personas viajan y descubren el mundo. No solo vendemos billetes, creamos experiencias que conectan a las personas con los destinos más increíbles.</p>
                <p>Desde nuestra fundación en 2005, hemos ayudado a miles de viajeros a encontrar su destino ideal, siempre bajo los estándares más altos de calidad y servicio.</p>
            </section>

            <section class="valores">
                <h3>Nuestros Valores</h3>
                <ul>
                    <li><strong>Pasión por viajar:</strong> Somos viajeros experimentados asesorando a otros viajeros.</li>
                    <li><strong>Compromiso con la calidad:</strong> Nos aseguramos de que cada experiencia de viaje sea excepcional.</li>
                    <li><strong>Respeto por el medio ambiente:</strong> Promovemos el turismo sostenible y responsable.</li>
                    <li><strong>Atención personalizada:</strong> Cada cliente es único y merece un trato especial y un viaje inolvidable.</li>
                </ul>
            </section>

            <section class="oficinas">
                <h3>Nuestras Oficinas Físicas</h3>
                <img src="imagenes/oficinas.png" alt="Oficinas físicas de Nómada 360 en Granada" class="plano-oficinas">

                <section class="listado-oficinas">
                    <article class="oficina">
                        <h4>Sede Central - La Alhambra</h4>
                        <p><strong>Ubicación:</strong> Calle Real de la Alhambra, s/n, 18009 Granada</p>
                        <p><strong>Horario de atención:</strong></p>
                        <ul>
                            <li>Lunes a Viernes: 9:00 - 20:00</li>
                            <li>Sábados: 10:00 - 14:00</li>
                            <li>Domingos: Cerrado</li>
                        </ul>
                        <p><strong>Especialidad y Viajes disponibles para reservar:</strong> En esta oficina puedes reservar cualquier viaje de nuestro catálogo, <em>Viajes de Lujo</em> y <em>Cruceros Exclusivos</em></p>
                    </article>

                    <article class="oficina">
                        <h4>Oficina de Turismo - Plaza del Campillo</h4>
                        <p><strong>Ubicación:</strong> Plaza del Campillo, 1, 18009 Granada</p>
                        <p><strong>Horario de atención:</strong></p>
                        <ul>
                            <li>Lunes a Viernes: 9:00 - 14:00 y 17:00 - 20:00</li>
                            <li>Sábados y Domingos: Cerrado</li>
                        </ul>
                        <p><strong>Especialidad y Viajes disponibles para reservar:</strong> En esta oficina somos especialistas en <em>Viajes en grupo</em> y <em>Escapadas Europeas</em></p>
                    </article>

                    <article class="oficina">
                        <h4>Punto de Información - Aeropuerto Granada-Jaén (GRX)</h4>
                        <p><strong>Ubicación:</strong> Aeropuerto de Granada, s/n, 18329 Granada</p>
                        <p><strong>Horario de atención:</strong></p>
                        <ul>
                            <li>Lunes a Domingo: 8:00 - 23:00</li>
                        </ul>
                        <p><strong>Especialidad y Viajes disponibles para reservar:</strong> En este punto de información puedes obtener información sobre nuestros viajes, realizar reservas de última hora de <em>Vuelos + Hotel</em> y gestionar tus <em>Seguros de Viaje</em>.</p>
                    </article>
                </section>
                
            </section>

        </main>

        <?php require_once "includes/pie.php"; ?>

    </body>

</html>