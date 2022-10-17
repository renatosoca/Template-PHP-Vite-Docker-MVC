<?php
    
    require_once "../config/conexion.php";

    class editarPerfil{

            public function __construc()
        {
        }

        public function editarPerfilDatos($id,$nombre,$usuario,$password){
            $sql = "UPDATE info_login SET usuario = '".$usuario."', nombre = '".$nombre."', password = '".$password."' WHERE id= '".$id."'";

            return editarDatos($sql);
        }

        public function traerDatos($id){

            $sql = "SELECT * FROM info_login WHERE id='".$id."'";

            return consultarDatos($sql);
        }

    }
?>