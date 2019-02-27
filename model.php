<?php
require_once 'config.php';
        
if (isset($_REQUEST["nombreUsuario"])) {
    $nombreUsuario = $_REQUEST["nombreUsuario"];
}

if (isset($_REQUEST["script"])) {
    $script = $_REQUEST["script"];
}

if (isset($_REQUEST["comentario"])) {
    $comentario = $_REQUEST["comentario"];
}

if (isset($_REQUEST["comentario"])){
    $conexion = new Model(config::$host, config::$user, config::$pass, config::$baseDatos);
    $comentarios = $conexion->escribirComentario($nombreUsuario,$comentario,$script);
    echo $script;
    header("Location: indexa.php");
}

class Model {

    private $conexion;

    public function __construct($host, $user, $pass, $baseDatos) {
        $this->conexion = new mysqli($host, $user, $pass, $baseDatos);
    }

    public function desconectar() {
        $this->conexion->close();
    }

    public function visualizarComentarios($tipo) {
        $resultado = array();
        $consulta = $this->conexion->stmt_init();
        $consulta->prepare("SELECT * FROM comentarios WHERE script = '$tipo' ");
        $consulta->execute();
        $consulta->bind_result($nombreUsuario, $comentario, $fecha, $script);
        while ($fila = $consulta->fetch()) {
            $array_fila = array("nombreUsuario" => $nombreUsuario, "comentario" => $comentario, "fecha" => $fecha, "script" => $script);
            array_push($resultado, $array_fila);
        }
        return $resultado;
    }

    public function escribirComentario($nombreUsuario,$comentario,$script) {
        $fecha = date("G:i --- j/m/Y");
        $consulta = $this->conexion->stmt_init();
        $consulta->prepare("INSERT INTO comentarios (nombre,comentario,fechacreacion,script) VALUES ('$nombreUsuario','$comentario','$fecha','$script')");
        $consulta->execute();
    }

}
