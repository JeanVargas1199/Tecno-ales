<?php

include("bd.php");

$ConsultaP = "select * from proyecto where CodigoProyecto = '".$Registro["CodigoProyecto"]."'";

$ResultadoP = false;
  try{
    $ResultadoP= mysqli_query($Conexion, $ConsultaP);
   }
  catch (exception $e) 
      {   $Mensaje = "no se pudo consultar la Proyecto";
      print$e->getMessage();
      echo $Consulta;
      //$error=$e->getmesage();
      }
if($ResultadoP == false) {$Mensaje= "no se pudo registrar la Proyecto";
                        //die($mysqli_error($conexion));
        }
else{ 
    $RegistroP =$ResultadoP->fetch_assoc();
    echo $RegistroP["NombreProyecto"];
} 



?>