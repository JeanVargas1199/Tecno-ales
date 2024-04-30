<?php
if (!empty($_POST["CODIGO"]) && !empty($_POST["NombreEspecialidad"]) ) {
    $CodigoEspecialidad = $_POST["CodigoEspecialidad"]; 
    $NombreEspecialidad = $_POST["NombreEspecialidad"];

  include("bd.php");
    $Consulta = "INSERT INTO especialidad (CodigoEspecialidad, NombreEspecialidad) VALUES ('".$CodigoEspecialidad."', '".$NombreEspecialidad."')"; 
    $Resultado= false;
   try{
    $Resultado= mysqli_query($Conexion, $Consulta);
   }
   catch (exception $e) 
    {$Mensaje = "no se pudo registrar la especialidad por error en los datos";
      //print $e -> getMessage();
      //echo $Resultado;
      //$error=$e->getmesage();
      
   }
    if($Resultado == false) {$Mensaje= "no se pudo registrar la especialidad";
                                     //die($mysqli_error($conexion));
        }
    else { $Mensaje = "La especialidad se regitro correctamente"; }
    }//Fin del if
    else{
        $Mensaje = "El mensaje y el nombre de la especialidad es obligatorio";
        }
        echo "<h3>".$Mensaje."</h3>";
?>