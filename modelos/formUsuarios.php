<?php
    
    require_once "../config/conexion.php";

    class formUsuarios{

            public function __construc()
        {
        }

        public function guardarUsuario($dni,$nombre,$email,$celular,$direccion,$membresia,$foto,$fecha,$hora,$creador)
        {
            $sql = "INSERT INTO info_usuarios (dni,nombre,email,celular,direccion,membresia,foto,fecha_creacion,hora_creacion,nombre_creador)
            VALUES ('".$dni."','".$nombre."','".$email."','".$celular."', '".$direccion."','".$membresia."','".$foto."','".$fecha."','".$hora."','".$creador."')";

            return insertarDatos($sql);
        }

        public function traerDatosTabla(){
            $sql = "SELECT * FROM info_usuarios";

            return traerDatosTabla($sql);
        }

        public function eliminarFila($id){
            $sql = "DELETE FROM info_usuarios WHERE id = '".$id."'";

            return eliminarDatos($sql);
        }

        public function editarUsuarios($id,$dni,$nombre,$email,$celular,$direccion,$membresia){
        $sql = "UPDATE info_usuarios SET dni='".$dni."', nombre='".$nombre."', 
        email='".$email."', celular='".$celular."', direccion='".$direccion."', 
        membresia='".$membresia."' WHERE id='".$id."'";

        return editarDatos($sql);
    }

       public function registrarLogin($nombre,$usuario,$password,$fecha,$hora,$creador){
            $sql = "INSERT INTO info_login (nombre,usuario,password,permiso,fecha_creacion,hora_creacion,creador)
           VALUES ('".$nombre."','".$usuario."','".$password."','0','".$fecha."','".$hora."','".$creador."')";

           return insertarDatos($sql); 
        }
}

?>