<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de proyectos</title>
</head>
<body>
    <h1>REGISTRO DE PROYECTO</h1>

    <?php include("../controlador/RegistrarProyecto.php"); ?>
    <form action="RegistroProyecto.php" method="post">



        <label for="CodigoProyecto">codigo proyectos</label>
        <input type="number" name="CodigoProyecto" id="CodigoProyecto"><br>

        
        <label for="NombreProyecto">nombre de proyectos</label>
        <input type="text" name="NombreProyecto" id="NombreProyecto"><br>


        <label for="Resumen">Resumen</label>
        <input type="text" name="Resumen"  id= "Resumen"><br>
        

        <label for="FechaResgistro">Fecha Registro</label>
        <input type="date" name="FechaRegistro" id="FechaResgistro"> <br>  


        <button type="submit"> resgistro de proyectos </button>


    </form>
</body>
</html> 