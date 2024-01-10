


<form action=".php" method="post"> 

<p>Nombre y Apellido (Primera letra Mayuscula):</p> 
<input type="text" name="NYP"> 
<br>

<p>Ingrese el mail institucinal</p> 
<input type="text" name="Mail"> 
<br> 

<p>Contraseña:</p> 
<input type="text" name="cont"> 
<br>

<p>Elegir cargo ( Prestar atencion al genero):</p> 
<select name="Cargo"> 
    <option value="Director">Director</option> 
    <option value="Directora">Directora</option> 

    <option value="Secretario">Secretario</option> 
    <option value="Secretaria">Secretaria</option> 

    <option value="Jefe de Preceptores">Jefe de Preceptores</option> 
    <option value="Jefa de Preceptores">Jefa de Preceptores</option>

    <option value="Preceptor">Preceptor</option>
    <option value="Preceptora">Preceptora</option>

    <option value="Profesor">Profesor</option>
    <option value="Profesora">Profesora</option>
</select> 
<br>


<p>Seleccione los cursos a los que tendra acceso:</p>
<table >
    <tr>
        <th>Turno Noche</th>
        <th>Turno Tarde</th>
        <th>Turno Mañana</th>
    </tr>
<tr>
<td><input type="radio" name="1roTN" id="">1ro TN</td>
<td><input type="radio" name="1roTT" id="">1ro TT</td>
<td><input type="radio" name="1roTM" id="">1ro TM</td>
</tr>
<tr>
<td><input type="radio" name="2doTN" id="">2do TN</td>
<td><input type="radio" name="2doTT" id="">2do TT</td>
<td><input type="radio" name="2doTM" id="">2do TM</td>
</tr>

<tr>
<td><input type="radio" name="3roTN" id="">3ro TN</td>
<td><input type="radio" name="3roTT" id="">3ro TT</td>
<td><input type="radio" name="3roTM" id="">3ro TM</td>
</tr>

<tr>
<td><input type="radio" name="4toTN" id="">4to TN</td>
<td><input type="radio" name="4toTT" id="">4to TT</td>
<td><input type="radio" name="4toTM" id="">4to TM</td>
</tr>
<tr>
<td><input type="radio" name="5toTN" id="">5to TN</td>
<td><input type="radio" name="5toTT" id="">5to TT</td>
<td><input type="radio" name="5toTM" id="">5to TM</td>
</tr>
<tr>
<td><input type="radio" name="6toTN" id="">6to TN</td>
<td><input type="radio" name="6toTT" id="">6to TT</td>
<td><input type="radio" name="6toTM" id="">6to TM</td>
</tr>
<tr>
<td><input type="radio" name="7moTN" id="">7mo TN</td>
<td><input type="radio" name="7moTT" id="">7mo TT</td>
<td><input type="radio" name="7moTM" id="">7mo TM</td>
</tr>

</table>
<br><br>
<input type="submit" value="Enviar"> 



<?php

print("<p>".$_POST["Cargo"]."</p>")








?>
</form>