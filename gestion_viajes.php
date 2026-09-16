<?php
    session_start();

    require_once "includes/conexion.php";
    require_once "includes/funciones.php";

    if (!isset($_SESSION["usuario"]) || strtolower($_SESSION["tipo"]) !== "administrador") {
        header("Location: index.php");
        exit();
    }

    $accion = $_GET["accion"] ?? "listar";
    $id = (int) ($_GET["id"] ?? 0);

    $viajes = [];
    $viaje = null;

    if ($accion === "listar") {
        $sql = "SELECT * FROM viajes ORDER BY destino";
        $sentencia = $conexion->query($sql);
        $viajes = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    if (($accion === "editar" || $accion === "eliminar") && $id > 0) {
        $viaje = obtenerViajePorId($conexion, $id);
    }
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
        <script src="js/validacionViaje.js" defer></script>
        <title>Nómada 360 - Gestión de viajes</title>
    </head>

    <body>

        <?php require_once "includes/cabecera.php"; ?>

        <main>

            <section class="menu-lateral">
                <h2>Bienvenido a la administración de viajes de Nómada 360</h2>
                <p>¿Qué desea hacer hoy?</p>

                <form method="get">
                    <label for="accion">Selecciona una acción:</label>

                    <select id="accion" name="accion">
                        <option value="listar">Listar viajes</option>
                        <option value="crear">Crear viaje</option>
                    </select>

                    <button type="submit">Enviar</button>
                </form>
            </section>

            <?php if ($accion === "crear"): ?>

                <section class="formulario-registro">
                    <h3>Crear nuevo viaje</h3>

                    <form id="formViaje" action="actions/procesarCrearViaje.php" method="post">

                        <fieldset>
                            <legend>Datos generales del viaje</legend>

                            <section class="fila-formulario">
                                <article>
                                    <label for="destino">Destino</label>
                                    <input type="text" id="destino" name="destino">
                                </article>

                                <article>
                                    <label for="pais">País</label>
                                    <input type="text" id="pais" name="pais">
                                </article>

                                <article>
                                    <label for="continente">Continente</label>
                                    <input type="text" id="continente" name="continente">
                                </article>
                            </section>

                            <section class="fila-formulario">
                                <article>
                                    <label for="fecha_inicio">Fecha de inicio</label>
                                    <input type="text" id="fecha_inicio" name="fecha_inicio" placeholder="AAAA-MM-DD">
                                </article>

                                <article>
                                    <label for="fecha_fin">Fecha de fin</label>
                                    <input type="text" id="fecha_fin" name="fecha_fin" placeholder="AAAA-MM-DD">
                                </article>

                                <article>
                                    <label for="duracion">Duración</label>
                                    <input type="text" id="duracion" name="duracion">
                                </article>
                            </section>

                            <section class="fila-formulario">
                                <article>
                                    <label for="precio">Precio</label>
                                    <input type="text" id="precio" name="precio">
                                </article>

                                <article>
                                    <label for="imagen">Imagen</label>
                                    <input type="text" id="imagen" name="imagen" placeholder="imagen.jpg">
                                </article>

                                <article>
                                    <label for="frase">Frase para el carrusel</label>
                                    <input type="text" id="frase" name="frase">
                                </article>
                            </section>
                        </fieldset>

                        <fieldset>
                            <legend>Información descriptiva</legend>

                            <label for="descripcion">Descripción</label>
                            <textarea id="descripcion" name="descripcion"></textarea>

                            <label for="alojamiento">Alojamiento</label>
                            <textarea id="alojamiento" name="alojamiento"></textarea>
                        </fieldset>

                        <menu class="botones-formulario">
                            <button type="submit">Crear viaje</button>
                            <button type="reset">Limpiar</button>
                        </menu>

                    </form>
                </section>

            <?php endif; ?>

            <?php if ($accion === "listar"): ?>

                <section class="info-viajes">
                    <h3>Listado de viajes</h3>
                    <p>Estos son los viajes que actualmente están dados de alta en la base de datos.</p>

                    <?php if (empty($viajes)): ?>

                        <p>No hay viajes dados de alta actualmente.</p>

                    <?php else: ?>

                        <?php foreach ($viajes as $viaje): ?>
                            <?php mostrarTarjetaViaje($viaje); ?>
                        <?php endforeach; ?>

                    <?php endif; ?>

                </section>

            <?php endif; ?>

            <?php if ($accion === "editar" && $viaje): ?>

                <section class="formulario-registro">
                    <h3>Editar viaje</h3>

                    <form id="formViaje" action="actions/procesarEditarViaje.php" method="post">

                        <input type="hidden" name="id_viaje" value="<?php echo $viaje["id_viaje"]; ?>">

                        <fieldset>
                            <legend>Datos generales del viaje</legend>

                            <section class="fila-formulario">
                                <article>
                                    <label for="destino">Destino</label>
                                    <input type="text" id="destino" name="destino" value="<?php echo $viaje["destino"]; ?>">
                                </article>

                                <article>
                                    <label for="pais">País</label>
                                    <input type="text" id="pais" name="pais" value="<?php echo $viaje["pais"]; ?>">
                                </article>

                                <article>
                                    <label for="continente">Continente</label>
                                    <input type="text" id="continente" name="continente" value="<?php echo $viaje["continente"]; ?>">
                                </article>
                            </section>

                            <section class="fila-formulario">
                                <article>
                                    <label for="fecha_inicio">Fecha de inicio</label>
                                    <input type="text" id="fecha_inicio" name="fecha_inicio" value="<?php echo $viaje["fecha_inicio"]; ?>">
                                </article>

                                <article>
                                    <label for="fecha_fin">Fecha de fin</label>
                                    <input type="text" id="fecha_fin" name="fecha_fin" value="<?php echo $viaje["fecha_fin"]; ?>">
                                </article>

                                <article>
                                    <label for="duracion">Duración</label>
                                    <input type="text" id="duracion" name="duracion" value="<?php echo $viaje["duracion"]; ?>">
                                </article>
                            </section>

                            <section class="fila-formulario">
                                <article>
                                    <label for="precio">Precio</label>
                                    <input type="text" id="precio" name="precio" value="<?php echo $viaje["precio"]; ?>">
                                </article>

                                <article>
                                    <label for="imagen">Imagen</label>
                                    <input type="text" id="imagen" name="imagen" value="<?php echo $viaje["imagen"]; ?>">
                                </article>

                                <article>
                                    <label for="frase">Frase para el carrusel</label>
                                    <input type="text" id="frase" name="frase" value="<?php echo $viaje["frase"]; ?>">
                                </article>
                            </section>
                        </fieldset>

                        <fieldset>
                            <legend>Información descriptiva</legend>

                            <label for="descripcion">Descripción</label>
                            <textarea id="descripcion" name="descripcion"><?php echo $viaje["descripcion"]; ?></textarea>

                            <label for="alojamiento">Alojamiento</label>
                            <textarea id="alojamiento" name="alojamiento"><?php echo $viaje["alojamiento"]; ?></textarea>
                        </fieldset>

                        <menu class="botones-formulario">
                            <button type="submit">Actualizar viaje</button>
                            <a href="gestion_viajes.php?accion=listar">Cancelar</a>
                        </menu>

                    </form>
                </section>

            <?php endif; ?>

            <?php if ($accion === "eliminar" && $viaje): ?>

                <section class="formulario-registro">
                    <h3>Eliminar viaje</h3>

                    <p>¿Seguro que desea eliminar el siguiente viaje?</p>

                    <?php mostrarTarjetaViaje($viaje); ?>

                    <form id="form-viaje" action="actions/procesarEliminarViaje.php" method="post">
                        <input type="hidden" name="id_viaje" value="<?php echo $viaje["id_viaje"]; ?>">

                        <menu class="botones-formulario">
                            <button type="submit">Confirmar eliminación</button>
                            <a href="gestion_viajes.php?accion=listar">Cancelar</a>
                        </menu>
                    </form>
                </section>

            <?php endif; ?>

        </main>

        <?php require_once "includes/pie.php"; ?>

    </body>
</html>