<?php
    
    require_once "../config/conexion.php";

    class formhmedico{

            public function __construc()
        {
        }

        

        public function traerDatosTabla(){
            $sql = "SELECT u.id, u.dni, u.nombre, u.email, u.celular, u.direccion, p.nombre as NombrePlan, r.nombre as NombreRutina
            from info_usuarios u 
            LEFT JOIN info_planes p ON u.id_plan = p.id
            LEFT JOIN info_rutinas r ON u.id_rutina = r.id";

            return traerDatosTabla($sql);
        }

   
      
}

?>