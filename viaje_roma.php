<?php
    session_start();
    require_once "includes/conexion.php";
    require_once "includes/funciones.php";
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nómada 360 - Roma</title>
        <link rel="stylesheet" href="css/style-comun.css">
        <link rel="stylesheet" href="css/style-viaje-individual.css">
    </head>
<body>

    <?php require_once "includes/cabecera.php"; ?>

    <main>
        <img class="imagen-portada" src="imagenes/Roma.jpg" alt="Vista de Roma">

        <section class="contenido-viaje">
            <h2>Roma</h2>

            <p>
                <strong>Destino:</strong> Roma, la <em>Ciudad Eterna</em>, es uno de los lugares más fascinantes
                de Europa. Sus calles, plazas y monumentos permiten disfrutar de un viaje donde la historia,
                el arte y la vida cotidiana conviven de forma única.
            </p>

            <p>
                <strong>Experiencia general:</strong> este viaje está pensado para quienes buscan una escapada
                <em>cultural, urbana y gastronómica</em>, con tiempo suficiente para visitar los grandes iconos
                de la ciudad y también descubrir rincones con encanto.
            </p>

            <h3>Descripción del viaje</h3>
            <p>
                <strong>Ambiente:</strong> Roma ofrece una atmósfera acogedora, monumental y muy viva, ideal tanto
                para viajar en pareja como con amigos o en familia.
            </p>
            <p>
                <strong>Duración recomendada:</strong> <em>5 días</em>, una estancia equilibrada para conocer los
                puntos más importantes sin prisas excesivas.
            </p>
            <p>
                <strong>Tipo de viaje:</strong> cultural y urbano, con especial interés en historia, arquitectura,
                arte y gastronomía italiana.
            </p>

            <h3>Alojamiento</h3>
            <ul>
                <li><strong>Hotel céntrico cerca del Coliseo:</strong> perfecto para recorrer el centro histórico a pie.</li>
                <li><strong>Hotel de 4 estrellas con desayuno:</strong> una opción cómoda, equilibrada y práctica.</li>
                <li><strong>Apartamento turístico en el casco histórico:</strong> recomendable para quienes buscan más independencia.</li>
            </ul>

            <h3>Información práctica</h3>
            <ul>
                <li><strong>Precio base:</strong> 700€</li>
                <li><strong>Temporada ideal:</strong> <em>primavera y otoño</em>, cuando el clima resulta más agradable.</li>
                <li><strong>Incluye:</strong> vuelo y hotel</li>
                <li><strong>No incluye:</strong> entradas a monumentos, transporte local ni comidas principales</li>
                <li><strong>Nivel de actividad:</strong> medio, ya que gran parte de las visitas se realizan caminando</li>
            </ul>

            <h3>Lugares imprescindibles</h3>
            <ul>
                <li><strong>Coliseo:</strong> uno de los símbolos históricos más conocidos del mundo.</li>
                <li><strong>Foro Romano:</strong> centro político y social de la antigua Roma.</li>
                <li><strong>Fontana di Trevi:</strong> parada obligatoria en cualquier visita a la ciudad.</li>
                <li><strong>Plaza Navona:</strong> ideal para pasear y disfrutar del ambiente urbano.</li>
                <li><strong>Vaticano:</strong> arte, espiritualidad y arquitectura en una visita imprescindible.</li>
            </ul>

            <h3>Consejos para el viajero</h3>
            <p>
                <strong>Recomendación:</strong> llevar calzado cómodo, reservar con antelación las entradas más
                demandadas y organizar las visitas principales por zonas para aprovechar mejor el tiempo.
            </p>
            <p>
                <strong>Ideal para:</strong> viajeros que quieran combinar <em>patrimonio histórico, paseos urbanos
                y buena gastronomía</em> en una misma escapada.
            </p>

            
        </section>

        <aside class="relacionados">
            <h3>Viajes relacionados</h3>

            <ul>
                <li class="tarjeta-relacionado">
                    <a href="viaje_roma.php">
                        <img src="imagenes/Marrakech.jpg" alt="Marrakech">
                        <div class="info-relacionado">
                            <strong>Marrakech</strong>
                            <p>Un destino lleno de color, mercados tradicionales y una atmósfera exótica muy especial.</p>
                        </div>
                    </a>
                </li>

                <li class="tarjeta-relacionado">
                    <a href="viaje_roma.php">
                        <img src="imagenes/NuevaYork.jpg" alt="Nueva York">
                        <div class="info-relacionado">
                            <strong>Nueva York</strong>
                            <p>Rascacielos, museos, compras y una energía urbana incomparable en la ciudad que nunca duerme.</p>
                        </div>
                    </a>
                </li>

                <li class="tarjeta-relacionado">
                    <a href="viaje_roma.php">
                        <img src="imagenes/Tokyo.jpg" alt="Tokio">
                        <div class="info-relacionado">
                            <strong>Tokio</strong>
                            <p>Modernidad, tradición y gastronomía en uno de los destinos más sorprendentes del mundo.</p>
                        </div>
                    </a>
                </li>
            </ul>
        </aside>
    </main>

    <?php require_once "includes/pie.php"; ?>
</body>
</html>