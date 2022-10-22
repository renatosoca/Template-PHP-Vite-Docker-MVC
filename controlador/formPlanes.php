<?php
    
    if (!isset($_SESSION)) session_start();

    require_once "../modelos/formPlanes.php";
    
    date_default_timezone_set('America/Lima');

    $formPlanes = new formPlanes();

    

    if ($_GET["proceso"] == "crearPlan") {

        $nombrePlan = $_GET["nombre"];
        $costoPlan = $_GET["costo"];
        $duracionPlan = $_GET["duracion"];
        $descripcionPlan = $_GET["descripcion"];
        $fecha_creacion = date("d-m-Y");
        $hora_creacion = date("H:i:s");
        $nombre_creador = $_SESSION['nombre'];
        
        $datos = $formPlanes->guardarPlan($nombrePlan,$costoPlan,$duracionPlan,$descripcionPlan,$fecha_creacion,$hora_creacion,$nombre_creador);
        
        if($datos == '1'){
            echo "1";
        }else{
            echo "0";
        }

        unset($datos);

    }

    if($_GET["proceso"] == "listarTabla"){

        $html = "";

        $datos = $formPlanes->traerDatosTabla();

        while($row = mysqli_fetch_array($datos)){
            $html .= "<tr class='table__tr'>
                    <td class='table__td'>".$row["nombre"]."</td>
                    <td class='table__td'>s/. ".$row["costo"]."</td>
                    <td class='table__td'>".$row["duracion"]." días</td>
                    <td class='table__td'>".$row["descripcion"]."</td>
                    <td class='table__td'>
                        <div class='table__btn'>
                            <span class='icon bottom-edit' id='" .$row["id"]. "'>
                            <i class='fa-solid fa-pen-to-square btn__edit'></i>
                            </span>

                            <span class='icon bottom-delete' id='" .$row["id"]. "'>
                            <i class='fa-solid fa-trash btn__delete'></i>
                            </span>
                        </div>
                    </td>
                </tr>";
        }

        
        unset($row);
        unset($datos);
        exit($html);

    }

    
    if($_GET["proceso"] == "eliminarPlan"){
        
        $id = $_GET["id"];
        $datos = $formPlanes->eliminarFila($id);

        if($datos == '1'){
            echo "1";
        }else{
            echo "0";
        }

        unset($datos);
    }

    if($_GET["proceso"] == "editarPlan"){

        $id = $_GET["id"];
        $nombre = $_GET["nombre"];
        $costo = $_GET["costo"];
        $duracion = $_GET["duracion"];
        $descripcion = $_GET["descripcion"];
        
        $datos = $formPlanes ->editarPlan($id,$nombre,$costo,$duracion,$descripcion);
        
        if($datos == '1'){
            echo "1";
        }else{
            echo "0";
        }

        unset($datos);
        unset($id);
?>