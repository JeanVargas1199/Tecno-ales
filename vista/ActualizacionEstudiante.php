<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizacion de Estudiantes</title>
</head>
<body>
    <h1>ACTUALIZACION DE ESTUDIANTES</h1>

    
    <?php include("../controlador/ActualizacionEstudiante.php"); ?>
    <form action="ActualizacionEstudiante.php" method="post">

    <input type="hidden" id="CodigoActual" name="CodigoActual" value="<?php echo $Registro ["Codigo"];?>">

        <LABel for="Codigo">CODIGO</LABel>
        <INput type="number" name="Codigo" id="Codigo" VALUE = "<?php echo $_GET["Codigo"];?>"><br>

        <label for="PrimerNombre">PRIMER NOMBRE</label>
        <input type="text" name="PrimerNombre" id="PrimerNombre" value=  "<?php echo $Registro ["PrimerNombre"];?>"><br>

        <label for="SegundoNombre">SEGUNDO NOMBRE</label>
        <input type="text" name="SegundoNombre" id="SegundoNombre" VALUE = "<?php echo $Registro ["SegundoNombre"];?>"><br>

        <label for="PrimerApellido">PRIMER APELLIDO</label>
        <input type="text" name="PrimerApellido" id="PrimerApellido" VALUE = "<?php echo $Registro ["PrimerApellido"];?>"> <br>  

        <LABEl for="SegundoApellido">SEGUNDO APELLIDO</LABEl>
        <input type="text" name="SegundoApellido" id="SegundoApellido" VALUE = "<?php echo $Registro ["SegundoApellido"];?>"><br>

        <LAbel for="Curso">CURSO</LAbel>
        <input type="number" name="Curso" id="Curso" VALUE = "<?php echo $Registro ["Curso"];?>"><br>
        
        <Label for="Especialidad" >ESPECIALIDAD</Label>

        <?php include("../controlador/ComboEspecialidades.php"); ?>

        <br>
        <label for="CodigoProyecto"> PROYECTO DEL ESTUDIANTE</label>

        <?php include("../controlador/ComboProyecto.php"); ?>
        <br>
        
        <LAbel for="FechaNacimiento">FECHA DE NACIMIENTO</LAbel>
        <INput type="date" name="FechaNacimiento" ID="FechaNacimiento"VALUE = "<?php echo $Registro ["FechaNacimiento"];?>"><br>
        
        <button type="submit">Actulizar Estudiante</button>
</body>
</html> 