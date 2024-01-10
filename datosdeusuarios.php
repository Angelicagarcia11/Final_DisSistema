<?php
$con = mysqli_connect("localhost", "skid", "123", "skidadmincolegios");
if (!$con) {
    echo "<p>MySQL no conoce ese usuario y password, o
    esa base, y rechaza la conexión</p>";
} else {
    echo "<p>MySQL funca por que Ema es un dios</p>";
}
?>
<form action="registrar.php">


<input type="submit" value="Registrar">
</form>
<!-- Columna  -->
<Table border="1"> <!-- Tabla entera -->
    <tr><!-- Fila de titulo -->
        <th>ID</th><!-- Columna 1 -->
        <th>email</th><!-- Columna 2 -->
        <th>Contraseña</th><!-- Columna 3 -->
        <th>Cargo</th><!-- Columna 4 -->
        <th>Nombre Y Apellido</th><!-- Columna 5 -->

    </tr><!-- Fin de fila de titulo -->



<?php
$consulta = "SELECT * FROM `users`";

if ($datos = mysqli_query($con, $consulta)) {

    while ($fila = mysqli_fetch_array($datos)) {
        echo "<tr>";//filas
        echo "<td>";   //Columna 1
        echo $fila["ID"];
        echo "</td>";   //Fin de Columna
        echo "<td>";   //Columna 2
        echo $fila["Mail"];
        echo "</td>";   //Fin de Columna
        echo "<td>";    //Columna 3
        echo $fila["Contra"];
        echo "</td>";   //Fin de Columna
        echo "<td>";    //Columna 4
        echo $fila["Cargo"];
        echo "</td>";   //Fin de Columna
        echo "<td>";        //Columna 5
        echo $fila["Nombre y apellido"];
        echo "</td>";   //Fin de Columna
        echo "</tr>";//Fin de filas
        
    }

} else {
    echo "No se pudo realizar la consulta";
} 
echo "</Table>";//Fin de Tabla entera


?>
