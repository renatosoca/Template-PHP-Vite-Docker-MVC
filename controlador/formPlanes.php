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
            echo "Se inserto los datos a la base con éxito.";
        }else{
            echo "No hubo éxito al insertar los datos en la base.";
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
                            <a href='../controlador/formPlanes.php?proceso=editarPlan&id=".$row["id"]."' class='icon'>
                                <i class='fa-solid fa-pen-to-square btn__edit'></i>
                            </a>
                            <a href='../controlador/formPlanes.php?proceso=eliminarPlan&id=".$row["id"]."' class='icon'>
                                <i class='fa-solid fa-trash btn__delete'></i>
                            </a>
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

        if($datos == "1"){
            header("Location: ../vistas/planes.php");
        }
    }
?>