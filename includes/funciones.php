<?php 
    function existeUsuarioOCorreo($conexion, $usuario, $correo) {
        $sql = "SELECT id_usuario FROM usuario WHERE usuario = :usuario OR correo = :correo";

        $sentencia = $conexion->prepare($sql);

        $sentencia->execute([
            ":usuario" => $usuario,
            ":correo" => $correo
        ]);

        return $sentencia->fetch(PDO::FETCH_ASSOC);
    }

    function insertarUsuario($conexion, $nombre, $apellidos, $nacimiento, $telefono, $correo, $usuario, $contrasena) {
        $contrasenaCifrada = password_hash($contrasena, PASSWORD_DEFAULT);

        $sql = "INSERT INTO usuario 
                    (nombre, apellidos, nacimiento, telefono, correo, usuario, contrasena, tipo) 
                VALUES 
                    (:nombre, :apellidos, :nacimiento, :telefono, :correo, :usuario, :contrasena, 'cliente')";

        $sentencia = $conexion->prepare($sql);

        return $sentencia->execute([
            ":nombre" => $nombre,
            ":apellidos" => $apellidos,
            ":nacimiento" => $nacimiento,
            ":telefono" => $telefono,
            ":correo" => $correo,
            ":usuario" => $usuario,
            ":contrasena" => $contrasenaCifrada
        ]);
    }
    
    function obtenerDestinosMenu($conexion) {
        $sql = "SELECT DISTINCT continente, pais FROM viajes ORDER BY continente, pais";

        $resultados = $conexion->query($sql);

        $destinos = [];
        
        foreach ($resultados as $fila) {
            $continente = $fila["continente"];
            $pais = $fila["pais"];
            $destinos[$continente][] = $pais;
        }

        return $destinos;
    }

    function mostrarMenuLateralViajes($conexion) {
        $destinos = obtenerDestinosMenu($conexion);

        echo "<aside class='menu-lateral'>";
        echo "<h2><a href='viajes.php'>Destinos</a></h2>";

        foreach ($destinos as $continente => $paises) {
            echo "<h3>";
            echo "<a href='viajes.php?continente=" . urlencode($continente) . "'>";
            echo $continente;
            echo "</a>";
            echo "</h3>";

            echo "<ul>";

            foreach ($paises as $pais) {
                echo "<li>";
                echo "<a href='viajes.php?pais=" . urlencode($pais) . "'>";
                echo $pais;
                echo "</a>";
                echo "</li>";
            }

            echo "</ul>";
        }
        
        echo "</aside>";
    }

    function filtroViajes() {
        $where = "";
        $params = [];

        if (isset($_GET["pais"])) {
            $where = "WHERE pais = :pais";
            $params[":pais"] = trim($_GET["pais"]);

        } elseif (isset($_GET["continente"])) {
            $where = "WHERE continente = :continente";
            $params[":continente"] = trim($_GET["continente"]);
        }

        return [$where, $params];
    }

    function contarViajes($conexion, $where, $params) {
        $sql = "SELECT COUNT(*) FROM viajes $where";

        $sentencia = $conexion->prepare($sql);

        foreach ($params as $clave => $valor) {
            $sentencia->bindValue($clave, $valor);
        }

        $sentencia->execute();

        return (int) $sentencia->fetchColumn();
    }

    function obtenerViajesPaginados($conexion, $where, $params, $viajesPorPagina, $offset) {
        $viajesPorPagina = (int)$viajesPorPagina;
        $offset = (int)$offset;
    
        $sql = "SELECT * FROM viajes $where ORDER BY destino LIMIT $viajesPorPagina OFFSET $offset";

        $sentencia = $conexion->prepare($sql);
        
        foreach ($params as $clave => $valor) {
            $sentencia->bindValue($clave, $valor);
        }

        $sentencia->execute();

        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function mostrarTarjetaViaje($viaje) {
        echo "<article class='destino'>";
        
        if(!isset($_GET["accion"])) echo "<a href='viaje_roma.php'>";
        echo "<img src='imagenes/" . $viaje["imagen"] . "' alt='" . $viaje["destino"] . "'>";
        
        echo "<h4>" . $viaje["destino"] . "</h4>";
        echo "<p>" . $viaje["descripcion"] . "</p>";
        echo "<p>Alojamiento: " . $viaje["alojamiento"] . "</p>";

        echo "<ul>";
        echo "<li>Fecha de inicio: " . $viaje["fecha_inicio"] . "</li>";
        echo "<li>Fecha de fin: " . $viaje["fecha_fin"] . "</li>";
        echo "<li>Precio: " . $viaje["precio"] . " €</li>";
        echo "<li>Duración: " . $viaje["duracion"] . " días</li>";
        echo "</ul>";

        if(isset($_SESSION["tipo"]) && $_SESSION["tipo"] == "administrador") {
            echo "<section class='botones-formulario'>";
            echo "<a href='gestion_viajes.php?accion=editar&id=" . $viaje["id_viaje"] . "'>Editar</a>";
            echo "<a href='gestion_viajes.php?accion=eliminar&id=" . $viaje["id_viaje"] . "'>Eliminar</a>";
            echo "</section>";
        }

        if(!isset($_GET["accion"])) echo "</a>";
        echo "</article>";
    }

    function mostrarPaginacion($pagina, $totalPaginas) {
        $params = [];

        if (isset($_GET["pais"])) $params["pais"] = $_GET["pais"];

        if (isset($_GET["continente"])) $params["continente"] = $_GET["continente"];

        echo "<nav class='paginacion'>";

        if ($pagina > 1) {
            $params["pagina"] = $pagina - 1;
            echo "<a href='?" . http_build_query($params) . "'>Página anterior</a>";
        }

        if ($pagina < $totalPaginas) {
            $params["pagina"] = $pagina + 1;
            echo "<a href='?" . http_build_query($params) . "'>Página siguiente</a>";
        }

        echo "</nav>";
    }

    function obtenerViajePorId($conexion, $id) {
        $sql = "SELECT * FROM viajes WHERE id_viaje = :id";

        $sentencia = $conexion->prepare($sql);

        $sentencia->execute([
            ":id" => $id
        ]);

        return $sentencia->fetch(PDO::FETCH_ASSOC);
    }

    function buscarViajes($conexion, $destino, $fecha) {
        $condiciones = [];
        $params = [];

        $sql = "SELECT * FROM viajes";

        if ($destino != "") {
            $condiciones[] = "(destino LIKE :destino OR pais LIKE :destino OR continente LIKE :destino OR descripcion LIKE :destino)";
            $params[":destino"] = "%" . $destino . "%";
        }

        if ($fecha != "") {
            $condiciones[] = "(fecha_inicio <= :fecha AND fecha_fin >= :fecha)";
            $params[":fecha"] = $fecha;
        }

        if (!empty($condiciones)) {
            $sql .= " WHERE " . implode(" AND ", $condiciones);
        }

        $sql .= " ORDER BY destino";

        $sentencia = $conexion->prepare($sql);
        $sentencia->execute($params);

        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

?>