<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style-formularios.css">
        <link rel="stylesheet" href="css/style-comun.css">
        <script src="js/validacionesComunes.js" defer></script>
        <script src="js/validacionLogin.js" defer></script>
        <title>Nómada 360 - Sugerencias</title>
    </head>

    <body>
        
        <?php require_once "includes/cabecera.php"; ?>

        <main>
            <section class="opiniones">
                <h2>Opiniones y Experiencias de nuestros clientes</h2>
                <p>Descubre lo que opinan nuestros clientes sobre nuestros servicios y destinos.</p>

                <article class="opinion">
                    <h3>Madrid</h3>
                    <p class="valoración">Valoración: &#9733; &#9733; &#9733; &#9733; &#9733;</p>
                    <blockquote>La organización del viaje fue excelente y el servicio al cliente muy atento. No tuvimos que preocuparnos por nada, los hoteles eran de primera y el itinerario estaba bien planificado.</blockquote>
                    <cite>- Juan P., Madrid</cite>
                </article>

                <article class="opinion">
                    <h3>París</h3>
                    <p class="valoración">Valoración: &#9733; &#9733; &#9733; &#9733; &#9734;</p>
                    <blockquote>El viaje a París fue maravilloso, aunque tuvimos algunos problemas con el transporte local. Sin embargo, el equipo de atención al cliente nos ayudó rápidamente a resolverlo.</blockquote>
                    <cite>- María L., Barcelona</cite>
                </article>

                <article class="opinion">
                    <h3>Bali</h3>
                    <p class="valoración">Valoración: &#9733; &#9733; &#9733; &#9733; &#9733;</p>
                    <blockquote>Nuestra luna de miel en Bali superó todas las expectativas. Los templos, la cultura y el resort fueron increíbles. La guía recomendada por la agencia fue un acierto total.</blockquote>
                    <cite>- Carlos y Marta, Valencia</cite>
                </article>

                <article class="opinion">
                    <h3>Tokio</h3>
                    <p class="valoración">Valoración: &#9733; &#9733; &#9733; &#9733; &#9733;</p>
                    <blockquote>Viajar a Japón impone un poco por el idioma, pero el itinerario detallado y tener el Japan Rail Pass ya reservado nos facilitó muchísimo la vida. Una experiencia brutal.</blockquote>
                    <cite>- Roberto G., Bilbao</cite>
                </article>

                <article class="opinion">
                    <h3>Nueva York</h3>
                    <p class="valoración">Valoración: &#9733; &#9733; &#9733; &#9733; &#9734;</p>
                    <blockquote>La Gran Manzana nunca decepciona. El hotel estaba muy céntrico, a un paso de Times Square. Nos habría gustado tener un día más libre sin excursiones, pero todo estuvo genial.</blockquote>
                    <cite>- Laura S., Sevilla</cite>
                </article>

                <article class="opinion">
                    <h3>Riviera Maya</h3>
                    <p class="valoración">Valoración: &#9733; &#9733; &#9733; &#9733; &#9733;</p>
                    <blockquote>Descanso absoluto. El resort Todo Incluido fue espectacular y la excursión a Chichén Itzá estuvo perfectamente coordinada desde el primer minuto. Cero estrés y máxima desconexión.</blockquote>
                    <cite>- Familia Gómez, Málaga</cite>
                </article>

                <article class="opinion">
                    <h3>Roma</h3>
                    <p class="valoración">Valoración: &#9733; &#9733; &#9733; &#9733; &#9733;</p>
                    <blockquote>Entrar al Coliseo y al Vaticano sin hacer esas colas interminables fue la mejor decisión del viaje. Los guías sabían muchísimo y nos contaron anécdotas fascinantes.</blockquote>
                    <cite>- Elena V., Zaragoza</cite>
                </article>

                <article class="opinion">
                    <h3>Sydney</h3>
                    <p class="valoración">Valoración: &#9733; &#9733; &#9733; &#9733; &#9734;</p>
                    <blockquote>El viaje de nuestra vida. Las excursiones a la Gran Barrera de Coral y la ruta por la ciudad fueron de diez. El único inconveniente fueron las largas horas de vuelo, ¡pero el destino lo compensa con creces!</blockquote>
                    <cite>- David y Ana, Alicante</cite>
                </article>

            </section>

            <section class="buzon-sugerencias">
                <h2>Buzón de Sugerencias</h2>
                <p>Tu opinión nos ayuda a mejorar. Cuéntanos qué echas en falta o qué podríamos hacer mejor.</p>
                
                <form>
                    <fieldset>
                        <legend>Deja tu sugerencia</legend>

                        <label for="tema">Tema:</label>
                        <input type="text" id="tema" name="tema" list="temas" placeholder="Selecciona un tema..." required>
                        <datalist id="temas">
                            <option value="Atención al cliente">
                            <option value="Funcionamiento de la Web">
                            <option value="Nuevos Destinos">
                            <option value="Precios y Ofertas">
                            <option value="Alojamientos">
                            <option value="Otros">
                        </datalist>

                        <label for="sugerencia">Escribe aquí tu sugerencia:</label>
                        <textarea id="sugerencia" name="sugerencia" rows="6" cols="50" placeholder="Describe tu sugerencia..." required></textarea>

                        <label for="satisfaccion">¿Cómo valorarías tu experiencia general con nosotros? (1 al 5):</label>
                        <input type="number" id="satisfaccion" name="satisfaccion" min="1" max="5" required>
                        <br><br>
                    
                    </fieldset>

                    <menu class="botones-formulario">
                        <button type="submit">Enviar</button>
                        <button type="reset">Eliminar</button>
                    </menu>
                    
                </form>
                
            
            </section>
        </main>

        <?php require_once "includes/pie.php"; ?>

    </body>

</html>