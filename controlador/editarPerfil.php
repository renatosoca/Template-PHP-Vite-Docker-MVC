<?php
    
    if (!isset($_SESSION)) session_start();

    require_once "../modelos/editarPerfil.php";
    
    date_default_timezone_set('America/Lima');

    $editarPerfil = new editarPerfil();

    if($_GET["proceso"] == "editarPerfil"){

        $id = $_GET["id"];
        $nombre = $_GET["nombre"];
        $usuario = $_GET["usuario"];
        $passantigua = $_GET["passantigua"];
        $passnueva = $_GET["passnueva"];
        
        $datos = $editarPerfil->traerDatos($id);

        if($datos["password"] == $passantigua){
            
            $datos = $editarPerfil ->editarPerfilDatos($id,$nombre,$usuario,$passnueva);

            if($datos == '1'){
                echo "1";
            }else{
                echo "0";
            }

        }else{
            echo "2";
        }

        unset($query);
        unset($datos);
        unset($id);
    }
?>

