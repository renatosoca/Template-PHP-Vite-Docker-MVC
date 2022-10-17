<?php
    
    require_once "../config/conexion.php";

    class formRutinas{

            public function __construc()
        {
        }

        public function guardarRutina($nombre,$lunes,$martes,$miercoles,$jueves,$viernes,$sabado,$fecha,$hora,$creador)
        {
            $sql = "INSERT INTO info_rutinas (nombre,lunes,martes,miercoles,jueves,viernes,sabado,fecha_creacion,hora_creacion,nombre_creador)
            VALUES ('".$nombre."','".$lunes."','".$martes."','".$miercoles."','".$jueves."','".$viernes."','".$sabado."','".$fecha."','".$hora."','".$creador."')";

            return insertarDatos($sql);
        }

        public function traerDatosTabla(){
            $sql = "SELECT * FROM info_rutinas";

            return traerDatosTabla($sql);
        }

        public function eliminarFila($id){
            $sql = "DELETE FROM info_rutinas WHERE id = '".$id."'";

            return eliminarDatos($sql);
        }

        public function editarRutina($id,$nombre,$lunes,$martes,$miercoles,$jueves,$viernes,$sabado){
            $sql = "UPDATE info_rutinas SET nombre='".$nombre."', lunes='".$lunes."', 
            martes='".$martes."', miercoles='".$miercoles."', jueves='".$jueves."', 
            viernes='".$viernes."' , sabado='".$sabado."' WHERE id='".$id."'";

            return editarDatos($sql);
        }

    }
?>