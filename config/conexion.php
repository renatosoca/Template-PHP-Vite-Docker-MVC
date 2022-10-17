<?php
require_once "global.php";

$conexion = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

mysqli_query($conexion, 'SET NAMES "' . DB_ENCODE . '"');

if (mysqli_connect_errno()) {
    printf("Falló la conexión a la base de datos %s\n", mysqli_connect_error());
}

if(!function_exists('ejecutarConsulta')){

    function insertarDatos($sql){
        global $conexion;
        $query = $conexion->query($sql);
        return $query;
    }

    function consultarDatos($sql){
        global $conexion;
        $query = $conexion->query($sql);
        $row = mysqli_fetch_assoc($query);
        return $row;
    }

    function contarFilas($sql){
        global $conexion;
        $query = $conexion->query($sql);
        $row = mysqli_num_rows($query);
        return $row;
    }

    function traerDatosTabla($sql){
        global $conexion;
        $query = $conexion->query($sql);
        return $query;
    }

    function eliminarDatos($sql){
        global $conexion;
        $query = $conexion->query($sql);
        return $query;
    }

    function editarDatos($sql){
        global $conexion;
        $query = $conexion->query($sql);
        return $query;
    }

}
?>