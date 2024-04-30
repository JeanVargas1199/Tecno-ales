<?php

include("bd.php");

$Consulta = "select * from proyecto";

$Resultado = false;
  try{
    $Resultado= mysqli_query($Conexion, $Consulta);
   }
  catch (exception $e) 
      {   $Mensaje = "no se pudo consultar los Proyecto";
      print$e->getMessage();
      echo $Consulta;
      //$error=$e->getmesage();
      }
if($Resultado == false) {$Mensaje= "no se pudo registrar el Proyecto";
                        //die($mysqli_error($conexion));
        }
else{ 
    echo '<table border="1">
    <tr>
        <td>Codigo de proyecto</td>
        <td>Nombre del proyecto</td>
        <td>Resumen</td>
        <td>Fecha de registro</td>
        <td colspan= "2">Acciones</td>

    </tr>';
    while($Registro =$Resultado->fetch_assoc()){
        echo'
        <tr>
            <td>'.$Registro["CodigoProyecto"].'</td>
            <td>'.$Registro["NombreProyecto"].'</td>
            <td>'.$Registro["Resumen"].'</td>
            <td>'.$Registro["FechaRegistro"].'</td>
            <td>Editar</td>
            <td>Eliminar</td>
        </tr>';
    } //fin del calculo de listado del Proyecto
    echo '</table>';
} 
?>