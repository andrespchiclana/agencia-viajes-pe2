<?php
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }
?>

<header>
    <h1>
        <img src="imagenes/logo.png" alt="Logo de Nómada 360" width="150">
        Nómada 360
    </h1>

    <?php if (isset($_SESSION["usuario"])): ?>
        <section>
            <p> Usuario: 
                <strong>
                    <?php echo $_SESSION["usuario"]; ?>
                </strong>
            </p>

            <p> Tipo:
                <strong>
                    <?php echo $_SESSION["tipo"];?>
                </strong>
            </p>

            <a href="actions/logout.php">Cerrar sesión</a>

        </section>
    
    <?php else: ?>
        <form id="formularioLogin" action="actions/procesarLogin.php" method="post">
            <input type="text" id="usuarioLogin" name="usuario" placeholder="Usuario">
            <input type="text" id="contrasenaLogin" name="contrasena" placeholder="Contraseña">
            <button type="submit">Log in</button>
            <a href="altausuarios.php">Sign up</a>
        </form>

    <?php endif; ?>

    <nav>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="viajes.php">Viajes</a></li>
            <li><a href="viajes_grupo.php">Viajes en Grupo</a></li>
            <li><a href="ofertas.php">Ofertas</a></li>
            <li><a href="sobre_agencia.php">Sobre nuestra agencia</a></li>
            <li><a href="sugerencias.php">Sugerencias</a></li>

            <?php if (isset($_SESSION["tipo"]) && $_SESSION["tipo"] === "administrador"): ?>
                <li><a href="gestion_viajes.php">Gestión de viajes</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>
