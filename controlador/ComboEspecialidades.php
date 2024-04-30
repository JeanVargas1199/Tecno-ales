<?php
include("bd.php");

$ConsultaEsp = "SELECT * FROM especialidad";

$ResultadoEsp = false;
  try{
    $ResultadoEsp= mysqli_query($Conexion, $ConsultaEsp);
   }
  catch (exception $e) 
      {   $Mensaje = "no se pudo consultar las especialidades";
      print$e->getMessage();
      echo $ConsultaEsp;
      //$error=$e->getmesage();
      }
if($ResultadoEsp == false) {$Mensaje= "no se pudo registrar el Estudiante";
                        //die($mysqli_error($conexion));
        }
else{ 
    echo '<select name="EspecialidadEstudiante" id="EspecialidadEstudiante">';
    while($RegistroEsp=$ResultadoEsp->fetch_assoc()){
      if ($Registro["Codigo"]==$RegistroEsp["CodigoEspecialidad"]) {
        echo ' <option value="'.$RegistroEsp["CodigoEspecialidad"].'" selected>'.$RegistroEsp["NombreEspecialidad"].'</option>';
    } 
    else { echo ' <option value="'.$RegistroEsp["CodigoEspecialidad"].'">'.$RegistroEsp["NombreEspecialidad"].'</option>';}
    //fin del calculo de listado de especialidad
          }
          echo '</select>'; 
}        

?>