<?php
    
    require_once "../config/conexion.php";

    class formPlanes{

            public function __construc()
        {
        }

        public function guardarPlan($nombre,$costo,$duracion,$descripcion,$fecha_creacion,$hora_creacion,$nombre_creador)
        {
            $sql = "INSERT INTO info_planes (nombre,costo,duracion,descripcion,fecha_creacion,hora_creacion,nombre_creador)
            VALUES ('".$nombre."','".$costo."','".$duracion."','".$descripcion."', '".$fecha_creacion."','".$hora_creacion."','".$nombre_creador."')";

            return insertarDatos($sql);
        }

        public function traerDatosTabla(){
            $sql = "SELECT * FROM info_planes";

            return traerDatosTabla($sql);
        }

        public function eliminarFila($id){
            $sql = "DELETE FROM info_planes WHERE id = '".$id."'";

            return eliminarDatos($sql);
        }

        public function editarPlan($id,$nombre,$costo,$duracion,$descripcion){
            $sql = "UPDATE info_planes SET nombre='".$nombre."', costo = '".$costo."', duracion= '".$duracion."', descripcion = '".$descripcion."' WHERE id='".$id."'";

            return editarDatos($sql);
        }

    }
?>