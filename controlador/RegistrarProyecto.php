<?php
if (!empty($_POST["CodigoProyecto"]) && !empty($_POST["NombreProyecto"])){
    $CodigoProyecto = $_POST["CodigoProyecto"]; 
    $NombreProyecto = $_POST["NombreProyecto"];
    $Resumen = $_POST["Resumen"];
    $FechaRegistro = $_POST["FechaRegistro"];


  include("bd.php");
   $Consulta =  " INSERT INTO proyecto (CodigoProyecto, NombreProyecto, Resumen, FechaRegistro) VALUES ('".$CodigoProyecto."', '".$NombreProyecto."', '".$Resumen."', '".$FechaRegistro."')";
   $Resultado = false;

  try{
    $Resultado= mysqli_query($Conexion, $Consulta);
   }
  catch (exception $e) 
      {   $Mensaje = "no se pudo registrar el Proyecto por error en los datos";
      //print$e->getMessage();
      Print  $Resultado;
      //$error=$e->getmesage();
      
      }
if($Resultado == false) {$Mensaje= "no se pudo registrar el Proyecto";
                        //die($mysqli_error($conexion));
        }
    else { $Mensaje = "El Proyecto se regitro correctamente"; }
 }
    //Fin del if
    else{
        $Mensaje = "El Codigo Proyecto, Nombre Proyecto es obligatorio";
        }
      echo "<h3>".$Mensaje."</h3>";




?>