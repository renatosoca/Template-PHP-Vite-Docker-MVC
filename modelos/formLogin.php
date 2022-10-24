<?php
    
    require_once "../config/conexion.php";

    class formLogin{

            public function __construc()
        {
        }

        public function consultarLogin($usuario,$password)
        {
            $sql = "SELECT * from info_login WHERE usuario = '".$usuario."' AND password = '".$password."'";

            return contarFilas($sql);
        }

        public function extraerLogin($usuario,$password)
        {
            $sql = "SELECT * from info_login WHERE usuario = '".$usuario."' AND password = '".$password."'";

            return consultarDatos($sql);
        }

    }
?>