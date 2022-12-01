<?php
    
    if (!isset($_SESSION)) session_start();

    require_once "../modelos/formRutinas.php";
    
    date_default_timezone_set('America/Lima');

    $formRutinas = new formRutinas();

    if ($_GET["proceso"] == "crearRutinas") {

        $nombreRutina = $_GET["nombre"];
        $lunesRutina = $_GET["lunes"];
        $martesRutina = $_GET["martes"];
        $miercolesRutina = $_GET["miercoles"];
        $juevesRutina = $_GET["jueves"];
        $viernesRutina = $_GET["viernes"];
        $sabadoRutina = $_GET["sabado"];
        $fecha_creacion = date("d-m-Y");
        $hora_creacion = date("H:i:s");
        $nombre_creador = $_SESSION['nombre'];
        
        $datos = $formRutinas->guardarRutina($nombreRutina,$lunesRutina,$martesRutina,$miercolesRutina,$juevesRutina,$viernesRutina,$sabadoRutina,$fecha_creacion,$hora_creacion,$nombre_creador);
        
        if($datos == '1'){
            echo "1";
        }else{
            echo "0";
        }

        unset($datos);

    }

    if($_GET["proceso"] == "listarTabla"){

        $html = "";

        $datos = $formRutinas->traerDatosTabla();

        while($row = mysqli_fetch_array($datos)){
            
            $html .= "<tr class='table__tr'>
            <td class='table__td'>". $row["nombre"] ."</td>
            <td class='table__td'>". $row["lunes"] ."</td>
            <td class='table__td'>". $row["martes"] ."</td>
            <td class='table__td'>". $row["miercoles"] ."</td>
            <td class='table__td'>". $row["jueves"] ."</td>
            <td class='table__td'>". $row["viernes"] ."</td>
            <td class='table__td'>". $row["sabado"] ."</td>
            <td class='table__td'>
            
                <div class='table__btn'>
                    <span class='icon btn__asigne' id='" .$row["id"]. "'>
                        <i id='abrirModalAsignarRutina' class='fa-solid fa-repeat btn__asigne'></i>
                    </span>

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

    
    if($_GET["proceso"] == "eliminarRutinas"){
        
        $id = $_GET["id"];
        $datos = $formRutinas->eliminarFila($id);

        if($datos == '1'){
            echo "1";
        }else{
            echo "0";
        }
        
    }

    if($_GET["proceso"] == "editarRutinas"){

        $id = $_GET["id"];
        $nombreRutina = $_GET["nombre"];
        $lunesRutina = $_GET["lunes"];
        $martesRutina = $_GET["martes"];
        $miercolesRutina = $_GET["miercoles"];
        $juevesRutina = $_GET["jueves"];
        $viernesRutina = $_GET["viernes"];
        $sabadoRutina = $_GET["sabado"];

        $datos = $formRutinas ->editarRutina($id,$nombreRutina,$lunesRutina,$martesRutina,$miercolesRutina,$juevesRutina,$viernesRutina,$sabadoRutina);
        
        if($datos == '1'){
            echo "1";
        }else{
            echo "0";
        }

        unset($datos);
        unset($id);
    }
?>