<?php
//echo $_POST["ProyectoEstudiante"];

include("bd.php");
if (!empty($_GET["Codigo"])){
  $Consulta = "select * from estudiantes where Codigo=".$_GET["Codigo"];
  //echo $Consulta;
  $Resultado = false;
  try{
    $Resultado= mysqli_query($Conexion, $Consulta);
   }
  catch (Exception $e) 
      {   $Mensaje = "no se pudo consultar el estudiante con codigo" .$_GET["Codigo"];
      //print$e->getMessage();
      Print  $Resultado;
      //$error=$e->getmesage()
      }
if($Resultado == false) {$Mensaje= "no se pudo Consultar el Estudiante con codigo" .$_GET["Codigo"];
                //die($mysqli_error($conexion));
        }
    else { $Mensaje = "El Estudiante se Actualizo correctamente" .$_GET["Codigo"]; }
    $Registro=$Resultado->fetch_assoc();
   // header('Location: Estudiante.php');
   //echo $Consulta;

}

else if (!empty($_POST["Codigo"]) && !empty($_POST["PrimerNombre"]) && !empty($_POST["PrimerApellido"]) && !empty($_POST["Curso"]) && !empty($_POST["EspecialidadEstudiante"]) && !empty($_POST["CodigoProyecto"])){
  $Codigo = $_POST["Codigo"];
  $PrimerNombre = $_POST["PrimerNombre"];
  $SegundoNombre = $_POST["SegundoNombre"];
  $PrimerApellido = $_POST["PrimerApellido"];
  $SegundoApellido = $_POST["SegundoApellido"];
  $Curso = $_POST["Curso"];
  $Especialidad = $_POST["EspecialidadEstudiante"];
  $CodigoProyecto = $_POST["CodigoProyecto"];
  $FechaNacimiento = $_POST["FechaNacimiento"];

$Consulta="UPDATE estudiantes SET Codigo = '".$Codigo."', PrimerNombre = '".$PrimerNombre."', SegundoNombre = '".$SegundoNombre."', PrimerApellido = '".$PrimerApellido."', SegundoApellido = '".$SegundoApellido."', Curso = '".$Curso."', Especialidad = '".$Especialidad."', CodigoProyecto = '".$CodigoProyecto."', FechaNacimiento = '".$FechaNacimiento."' WHERE estudiantes.Codigo = ".$_POST["CodigoActual"];

echo $Consulta;

$Resultado = false;
try{
  $Resultado= mysqli_query($Conexion, $Consulta);
 }
catch (Exception $e) 
    {   $Mensaje = "no se pudo consultar el estudiante con codigo" .$_POST["Codigo"];
    //print$e->getMessage();
    Print  $Resultado;
    //$error=$e->getmesage()
    }
if($Resultado == false) {$Mensaje= "no se pudo Consultar el Estudiante con codigo" .$_POST["Codigo"];
              //die($mysqli_error($conexion));
      }
  else { $Mensaje = "El Estudiante se Actualizo correctamente" .$_POST["Codigo"]; }
  
 header('Location: Estudiante.php');
 echo $Consulta;

  }
  
    //Fin del if
    else{
        $Mensaje = "El codigo, primer nombre, primer apellido, curso, especialidad, proyecto del estudiante es obligatorio";
        }
      echo "<h3>".$Mensaje."</h3>";

      //$EstudianteActualizado=$REsultado -> fetch_assoc();
      //echo $EstudianteActualizado["NombreEspecialidad"];
     
?>