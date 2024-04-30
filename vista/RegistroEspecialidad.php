<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Especialidad</title>
</head>
<body>
    <h1>REGISTRO DE ESPECIALIDAD</h1>
    <?php include("../controlador/RegistrarEspecialidad.PHP");?>
    <form action="RegistroEspecialidad.php" method="post">

        <LABel for="CodigoEspecialidad">CODIGO</LABel>
        <INput type="number" name="CODIGO" id="CODIGO"></INput><br>

        <label for="NombreEspecialidad">NOMBRE DE LA ESPECIALIDAD</label>
        <input type="text" name="NombreEspecialidad" id="NombreEspecialidad"><br>

        <button type="submit">Registrar Especialidad</button>
</body>
</html> 