<?php

include("bd.php");

$ConsultaE = "select * from especialidad where CodigoEspecialidad = '".$Registro["CodigoEspecialidad"]."'";

$ResultadoE = false;
  try{
    $ResultadoE= mysqli_query($Conexion, $ConsultaE);
   }
  catch (exception $e) 
      {   $Mensaje = "no se pudo consultar la especialidad";
      print$e->getMessage();
      echo $Consulta;
      //$error=$e->getmesage();
      }
if($ResultadoE == false) {$Mensaje= "no se pudo registrar la especialidad";
                        //die($mysqli_error($conexion));
        }
else{ 
    $RegistroE =$ResultadoE->fetch_assoc();
    echo $RegistroE["NombreEspecialidad"];
} 
?>