<?php

include("bd.php");

$Consulta = "select * from estudiantes";

$Resultado = false;
  try{
    $Resultado= mysqli_query($Conexion, $Consulta);
   }
  catch (exception $e) 
      {   $Mensaje = "no se pudo consultar el estudiante";
      print$e->getMessage();
      echo $Consulta;
      //$error=$e->getmesage();
      }
if($Resultado == false) {$Mensaje= "no se pudo registrar el estudiante";
                        //die($mysqli_error($conexion));
        }
else{ 
    echo '<table border="1">
    <tr>
    <td>Codigo</td>
    <td>PrimerNombre</td>
    <td>SegundoNombre</td>
    <td>PrimerApellido</td>
    <td>SegundoApleiido</td>
    <td>Curso</td>
    <td>Especialidad</td>
    <td>CodigoProyecto</td>
    <td>FechaNacimiento</td>
    <td colspan= "2">Acciones</td>
    </tr>';
    while($Registro =$Resultado->fetch_assoc()){
        echo'
        <tr>
            <td>'.$Registro["Codigo"].'</td>
            <td>'.$Registro["PrimerNombre"].'</td>
            <td>'.$Registro["SegundoNombre"].'</td>
            <td>'.$Registro["PrimerApellido"].'</td>
            <td>'.$Registro["SegundoApellido"].'</td>
            <td>'.$Registro["Curso"].'</td>
            <td>';
            include("NombreEspecialidad.php");
            echo '</td>
            <td>';
            include("CodigoProyecto.php");

            echo '</td>
            <td> '.$Registro["CodigoProyecto"].'</td>
            <td>'.$Registro["FechaNacimiento"].'</td>
            <td><a href="ActualizacionEstudiante.php?Codigo='.$Registro["Codigo"].'">Editar</a></td>
            <td><a href="../vista/Estudiante.php?Codigo='.$Registro["Codigo"].'">Eliminar</a></td>
        </tr>';
    } //fin del calculo de listado Estudiante
    echo '</table>';
} 





?>