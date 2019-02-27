
<div id="tabs">
    <ul>
        <li><a href="#tabs-1">Comentarios</a></li>
        <li><a href="#tabs-2">Escribir un comentario</a></li>
    </ul>
    <div id="tabs-1">
        <h3 class="display-5" style="text-align: center">Comentarios</h3>
        <?php
        require_once 'model.php';
        require_once 'config.php';
        $conexion = new Model(config::$host, config::$user, config::$pass, config::$baseDatos);
        $comentarios = $conexion->visualizarComentarios($tipo);

        foreach ($comentarios as $valor) {
            echo "<p><b>" . $valor['nombreUsuario'] . "</b></p>"
            . "<p>" . $valor['comentario'] . "</p>"
            . "<p style='color:grey'>" . $valor['fecha'] . "</p>";
        }
        ?>
    </div>
    <div id="tabs-2">
        <form action="model.php">
            <label style="margin-right: 10px">Nombre de usuario</label><input name="nombreUsuario" type="text"><br>
            <label style="margin-right: 76px">Comentario</label><textarea name="comentario" rows="5" cols="50"></textarea><br>
            <?php echo "<input name='script' value='$tipo' readonly='readonly'>"; ?>
            <input type="submit" value="enviar comentario"><br>
        </form>
    </div>

</div>