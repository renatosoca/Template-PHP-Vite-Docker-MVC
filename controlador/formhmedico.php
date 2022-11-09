<?php
    
    if (!isset($_SESSION)) session_start();

    require_once "../modelos/formhmedico.php";
    
    date_default_timezone_set('America/Lima');

    $formhmedico = new formhmedico();

  


    if($_GET["proceso"] == "listarTabla"){

        $html = "";

        $datos = $formhmedico->traerDatosTabla();

        while($row = mysqli_fetch_array($datos)){
            $html .= "<tr class='table__tr'>
                    <td class='table__td'>".$row["dni"]."</td>
                    <td class='table__td'>".$row["nombre"]."</td>
                    <td class='table__td'>".$row["email"]." </td>
                    <td class='table__td'>".$row["celular"]."</td>
                    <td class='table__td'>".$row["direccion"]."</td>
                    <td class='table__td'>".$row["NombrePlan"]."</td>
                   
                  

                      
                    </td>
                </tr>";
        }

        
        unset($row);
        unset($datos);
        exit($html);

    }

    


    
?>