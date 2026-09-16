<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style-comun.css">
        <link rel="stylesheet" href="css/style-formularios.css">
        <script src="js/validacionesComunes.js" defer></script>
        <script src="js/validacionLogin.js" defer></script>
        <script src="js/validacionRegistro.js" defer></script>
        <title>Nómada 360 - Alta de Usuarios</title>
    </head>

    <body>

        <?php include "includes/cabecera.php";?>

        <main>

            <?php if(isset($_SESSION["mensaje_registro"])): ?>
                <section class="tarjeta-registro">
                    <p><?php echo $_SESSION["mensaje_registro"]; ?></p>
                </section>
                <?php unset($_SESSION["mensaje_registro"]); ?>
            <?php endif; ?>

            <section class="formulario-registro">
                <h2>Crea tu cuenta en Nómada 360</h2>
                <p>Únete a nuestra comunidad y descubre los mejores viajes del mundo.</p>

                <form id="formularioRegistro" action="actions/procesarAltaUsuario.php" method="post">
                    <fieldset>
                        <legend>Datos personales</legend>

                        <p class="fila-formulario">
                            <label>
                                Nombre:
                                <input type="text" id="nombre" name="nombre">
                            </label>

                            <label>
                                Apellidos:
                                <input type="text" id="apellidos" name="apellidos">
                            </label>

                            <label>
                                Fecha de nacimiento:
                                <input type="text" id="nacimiento" name="nacimiento">
                            </label>

                        </p>

                    </fieldset>

                    <fieldset>
                        <legend>Datos de acceso</legend>

                        <p class="fila-formulario">
                            <label>
                                Usuario:
                                <input type="text" id="usuario" name="usuario">
                            </label>

                            <label>
                                Teléfono:
                                <input type="text" id="telefono" name="telefono">
                            </label>

                            <label>
                                Correo electrónico:
                                <input type="text" id="correo" name="correo">
                            </label>

                        </p>

                        <p class="fila-formulario">
                            <label>
                                Contraseña:
                                <input type="text" id="contrasena" name="contrasena">
                            </label>

                            <label>
                                Confirmar contraseña:
                                <input type="text" id="confirmar-contrasena" name="confirmar-contrasena">
                            </label>
                        </p>

                    </fieldset>

                    <menu class="botones-formulario">
                        <button type="submit">Crear cuenta</button>
                        <button type="reset">Limpiar</button>
                    </menu>
                </form>

            </section>
        </main>

        <?php include "includes/pie.php";?>

    </body>
    
</html>