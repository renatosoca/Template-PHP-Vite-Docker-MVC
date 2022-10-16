<?php

    require_once "../modelos/formContacto.php";

    date_default_timezone_set('America/Lima');

    $formContacto = new formContacto();

    $nombre = strtoupper($_GET["nombre_contacto"]);
    $correo = strtolower(trim($_GET["email_contacto"]));
    $celular = trim($_GET["cel_contacto"]);
    $mensaje = ucfirst($_GET["mensaje_contacto"]);
    $enviar_correo = $GET["enviar_correo"];
    $fecha_actual = date("d-m-Y");
    $hora_actual = date("H:i:s");

    if ($_GET["proceso"] == "contacto") {
        $datos = $formContacto->guardarDatos($nombre,$correo,$celular,$mensaje,"1",$fecha_actual,$hora_actual);
        if($datos == '1'){
            echo "Se inserto los datos a la base con éxito.";
        }else{
            echo "No hubo éxito al insertar los datos en la base.";
        }
    }

?>