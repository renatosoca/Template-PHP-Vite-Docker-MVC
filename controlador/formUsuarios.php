<?php
    
    if (!isset($_SESSION)) session_start();

    require_once "../modelos/formUsuarios.php";
    
    date_default_timezone_set('America/Lima');

    $formUsuarios = new formUsuarios();

    if ($_GET["proceso"] == "crearUsuarios") {

    $dniUsuario = $_GET["dni"];
    $nombreUsuario = $_GET["nombre"];
    $emailUsuario = $_GET["email"];
    $celularUsuario = $_GET["celular"];
    $direccionUsuario = $_GET["direccion"];
    $membresiaUsuario = $_GET["membresia"];
    $fotoUsuario = $_GET['foto'];
    $fecha_creacion = date("d-m-Y");
    $hora_creacion = date("H:i:s");
    $nombre_creador = $_SESSION['nombre'];
        
    $datos = $formUsuarios->guardarUsuario($dniUsuario,$nombreUsuario,$emailUsuario,$celularUsuario,$direccionUsuario,$membresiaUsuario,$fotoUsuario,$fecha_creacion,$hora_creacion,$nombre_creador);
        
    if($datos == '1'){
        echo "1";

        $password = $dniUsuario . date("Y");

        $datos = $formUsuarios->registrarLogin($nombreUsuario,$dniUsuario,$password,$fecha_creacion,$hora_creacion,$nombre_creador);

    }else{
        echo "0";
    }

    unset($datos);

}


    if($_GET["proceso"] == "listarTabla"){

        $html = "";

        $datos = $formUsuarios->traerDatosTabla();

        while($row = mysqli_fetch_array($datos)){
            $html .= "<tr class='table__tr'>
                    <td class='table__td'>".$row["dni"]."</td>
                    <td class='table__td'>".$row["nombre"]."</td>
                    <td class='table__td'>".$row["email"]." </td>
                    <td class='table__td'>".$row["celular"]."</td>
                    <td class='table__td'>".$row["direccion"]."</td>
                    <td class='table__td'>".$row["membresia"]."</td>
                    <td class='table__td'>".$row["foto"]."</td>
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

    
    if($_GET["proceso"] == "eliminarUsuario"){
        
        $id = $_GET["id"];
        $datos = $formUsuarios->eliminarFila($id);

        if($datos == '1'){
            echo "1";
        }else{
            echo "0";
        }
    }

    if($_GET["proceso"] == "editarUsuarios"){

        $id = $_GET["id"];
        $dniUsuario = $_GET["dni"];
        $nombreUsuario = $_GET["nombre"];
        $emailUsuario = $_GET["email"];
        $celularUsuario = $_GET["celular"];
        $direccionUsuario = $_GET["direccion"];
        $membresiaUsuario = $_GET["membresia"];

        $datos = $formUsuarios ->editarUsuarios($id,$dniUsuario,$nombreUsuario,$emailUsuario,$celularUsuario,$direccionUsuario,$membresiaUsuario);
        
        if($datos == '1'){
            echo "1";
        }else{
            echo "0";
        }

        unset($datos);
        unset($id);
    }
?>