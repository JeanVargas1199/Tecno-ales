<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Estudiantes</title>
</head>
<body>
    <h1>REGISTRO DE ESTUDIANTES</h1>

    
    <?php include("../controlador/RegistrarEstudiante.php"); ?>
    <form action="RegistroEstudiante.php" method="post">

        <LABel for="Codigo">CODIGO</LABel>
        <INput type="number" name="Codigo" id="Codigo"></INput><br>


        <label for="PrimerNombre">PRIMER NOMBRE</label>
        <input type="text" name="PrimerNombre" id="PrimerNombre"><br>



        <label for="SegundoNombre">SEGUNDO NOMBRE</label>
        <input type="text" name="SegundoNombre" id="SegundoNombre"><br>



        <label for="PrimerApellido">PRIMER APELLIDO</label>
        <input type="text" name="PrimerApellido" id="PrimerApellido"> <br>  


        <LABEl for="SegundoApellido">SEGUNDO APELLIDO</LABEl>
        <input type="text" name="SegundoApellido" id="SegundoApellido"></INput><br>

        
        <LAbel for="Curso">CURSO</LAbel>
        <input type="number" name="Curso" id="Curso"><br>
        
        
        
        <Label for="Especialidad" >ESPECIALIDAD</Label>



        <?php include("../controlador/ComboEspecialidades.php"); ?>









        <br>
        <label for="CodigoProyecto"> PROYECTO DEL ESTUDIANTE</label>










        

        <?php include("../controlador/ComboProyecto.php"); ?>
        <br>
        

        <LAbel for="FechaNacimiento">FECHA DE NACIMIENTO</LAbel>
        <INput type="date" name="FechaNacimiento" ID="FechaNacimiento"></INput><br>
        
        
        <button type="submit">Registrar Estudiante</button>
</body>
</html> 