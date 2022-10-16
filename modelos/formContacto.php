<?php
    
    require_once "../config/conexion.php";

    class formContacto{

            public function __construc()
        {
        }

        public function guardarDatos($nombre,$correo,$celular,$mensaje,$terminos,$fecha_actual,$hora_actual)
        {
            $sql = "INSERT INTO info_contactos (nombre,correo,celular,mensaje,terminos,fecha_actual,hora_actual)
            VALUES ('".$nombre."','".$correo."','".$celular."','".$mensaje."', '".$terminos."','".$fecha_actual."','".$hora_actual."')";

            return insertarDatos($sql);
        }

    }
?>