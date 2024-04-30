<?php

if (!empty($_POST["Codigo"]) && !empty($_POST["PrimerNombre"]) && !empty($_POST["PrimerApellido"]) && !empty($_POST["Curso"]) && !empty($_POST["Especialidad"]) && !empty($_POST["CodigoProyecto"])){
    $Codigo = $_POST["Codigo"]; 
    $PrimerNombre = $_POST["PrimerNombre"];
    $SegundoNombre = $_POST["SegundoNombre"];
    $PrimerApellido = $_POST["PrimerApellido"];
    $SegundoApeliido = $_POST["SegundoApellido"];
    $Curso = $_POST["Curso"];
    $Especialidad = $_POST["Especialidad"];
    $CodigoProyecto = $_POST["CodigoProyecto"];
    $FechaNacimiento = $_POST["FechaNacimiento"];

  include("bd.php");
  $Consulta= " INSERT INTO estudiantes (Codigo, PrimerNombre, SegundoNombre, PrimerApellido, SegundoApellido, Curso, Especialidad, CodigoProyecto, FechaNacimiento) VALUES ('".$Codigo."', '".$PrimerNombre."', '".$SegundoNombre."', '".$PrimerApellido."', '".$SegundoApeliido."', '".$Curso."', '".$Especialidad."', '".$CodigoProyecto."', '".$FechaNacimiento."')";


echo $Consulta;


$Resultado = false;
  try{
    $Resultado= mysqli_query($Conexion, $Consulta);
   }
  catch (exception $e) 
      {   $Mensaje = "no se pudo registrar el Estudiante por error en los datos";
      //print$e->getMessage();
      Print  $Resultado;
      //$error=$e->getmesage();
      
      }
if($Resultado == false) {$Mensaje= "no se pudo registrar el Estudiante";
                        //die($mysqli_error($conexion));
        }
    else { $Mensaje = "El Estudiante se regitro correctamente"; }
   
  }
    //Fin del if
    else{
        $Mensaje = "El codigo, primer nombre, primer apellido, curso, especialidad, proyecto del estudiante es obligatorio";
        }
      echo "<h3>".$Mensaje."</h3>";
     
?>