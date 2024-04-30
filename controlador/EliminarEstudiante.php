<?php
if(!empty($_GET["Codigo"])){
    $Codigo=$_GET["Codigo"];
include("bd.php");
$ConsultaDel = " DELETE FROM estudiantes WHERE estudiantes.Codigo = ".$Codigo;

echo $ConsultaDel;

$ResultadoDel= false;
  try{
    $ResultadoDel= mysqli_query($Conexion, $ConsultaDel);
   }
  catch (exception $e) 
      {   $Mensaje = "no se pudo eliminar el estudiante con codigo:";
        $Codigo;
      print$e->getMessage();
      ;
      //$error=$e->getmesage();
      }
if($ResultadoDel == false) {$Mensaje= "no se pudo eliminar el estudiante con codigo: ".$codigo;
                      //die($mysqli_error($conexion));
        }
else{ $Mensaje="Se elimino el Estudiante con codigo:".$Codigo;
} 
echo $Mensaje;

}//Fin extremo



?>