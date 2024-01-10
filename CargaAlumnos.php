<?php 

echo $_COOKIE['NameUser'];


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form action="subirdatosalumnos.php" method="post">
<p>Nombre:</p>
<input type="text" name="Nombre">
<p>Apellido:</p>
<input type="text" name="Apellido">
<p>DNI:</p>
<input type="text" name="DNI">
<p>Cursos:</p>
<select name="Curso"> 
    <option value="1">1°</option> 
    <option value="2">2°</option>  
    <option value="3">3°</option> 
    <option value="4">4°</option> 
    <option value="5">5°</option> 
    <option value="6">6°</option> 
    <option value="7">7°</option>

</select> 
<p>Turno:</p>
<select name="Turno"> 
    <option value="M">Mañana</option> 
    <option value="T">Tarde</option>  
    <option value="N">Noche</option> 

</select> 

<p>Discapacidad:</p>
<select name="Turno"> 
    <option value="si">Si</option> 
    <option value="No">No</option> 

</select> 

<p>Comentario:</p>
<textarea name="Comentario" id="" cols="30" rows="10"></textarea>


<input type="submit" value="Inscribir">
</form>






</body>
</html>