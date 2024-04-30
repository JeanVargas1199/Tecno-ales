<?php
include("bd.php");

$ConsultaPro = "SELECT * FROM Proyecto";

$ResultadoPro = false;
  try{
    $ResultadoPro= mysqli_query($Conexion, $ConsultaPro);
   }
  catch (exception $e) 
      {   $Mensaje = "no se pudo consultar los Proyecto";
      print$e->getMessage();
      echo $Consulta;
      //$error=$e->getmesage();
      }
if($ResultadoPro == false) {$Mensaje= "no se pudo registrar el Proyecto";
                        //die($mysqli_error($conexion));
        }
else
  echo '<select name="CodigoProyecto" id="CodigoProyecto">';
  while($RegistroPro=$ResultadoPro->fetch_assoc()){
    if ($Registro["Codigo"]==$RegistroPro["CodigoProyecto"]) {
      echo ' <option value="'.$RegistroPro["CodigoProyecto"].'" selected>'.$RegistroPro["NombreProyecto"].'</option>';
    }
    else {echo ' <option value="'.$RegistroPro["CodigoProyecto"].'">'.$RegistroPro["NombreProyecto"].'</option>';}
    //fin del calculo de listado del Proyecto
        }    
        echo '</select>';   

?>