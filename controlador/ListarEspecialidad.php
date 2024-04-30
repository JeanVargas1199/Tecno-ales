<?php

include("bd.php");

$Consulta = "select * from especialidad";

$Resultado = false;
  try{
    $Resultado= mysqli_query($Conexion, $Consulta);
   }
  catch (exception $e) 
      {   $Mensaje = "no se pudo consultar la especialidad";
      print$e->getMessage();
      echo $Consulta;
      //$error=$e->getmesage();
      }
if($Resultado == false) {$Mensaje= "no se pudo registrar la especialidad";
                        //die($mysqli_error($conexion));
        }
else{ 
    echo '<table border="1">
    <tr>
    <td>CodigoEspecialidad</td>
    <td>NombreEspecialidad</td>
    <td colspan= "2">Acciones</td>
    </tr>';
    while($Registro =$Resultado->fetch_assoc()){
        echo'
        <tr>
            <td>'.$Registro["CodigoEspecialidad"].'</td>
            <td>'.$Registro["NombreEspecialidad"].'</td>
            <td>Editar</td>
            <td>Eliminar</td>
        </tr>';
    } //fin del calculo de listado especialidad
    echo '</table>';
} 





?>