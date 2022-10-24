<?php

    require_once "../modelos/formLogin.php";

    $formLogin = new formLogin();

    $usuario = trim($_GET["usuario"]);
    $password = trim($_GET["password"]);

    if($_GET["proceso"] == "login"){
        
        $consulta = $formLogin->consultarLogin($usuario,$password);

        if($consulta == "1"){
            if ( !isset($_SESSION) ) session_start();

            $_SESSION['activo']=true;
            $datos = $formLogin->extraerLogin($usuario,$password);

            if($datos["permiso"] == "1"){
                echo "1";
                $_SESSION['permiso']="1";
                $_SESSION['nombre'] = $datos["usuario"];
                $_SESSION["id"] = $datos["id"];
            }else if($datos["permiso"] == "0"){
                echo "0";
                $_SESSION['permiso']="0";
                $_SESSION['nombre'] = $datos["usuario"];
                $_SESSION["id"] = $datos["id"];
            }else{
                echo "incorrecto";
            }
        }
    }
    

?>