<?php
$con = mysqli_connect("localhost", "skid", "123", "skidadmincolegios");
if (!$con) {
    echo "<p>MySQL no conoce ese usuario y password, o
    esa base, y rechaza la conexión</p>";
} else {
    
}
?>
<?php




?>
<!-- Ejemplos 
v
 
$consulta = "INSERT INTO alumnos Nombre = '. $_PSOT[Nombre] .'"
$datos = mysqli_query($con, $consulta)


INSERT INTO `users` (`ID`, `Mail`, `Contra`, `Cargo`, `Nombreyapellido`, `1roTM`, `1roTT`, `1roTN`, `2doTM`, `2doTT`, `2doTN`, `3roTM`, `3roTT`, `3roTN`, `4toTM`, `4toTT`, `4toTN`, `5toTM`, `5toTT`, `5toTN`, `6toTM`, `6toTT`, `6toTN`, `7moTM`, `7moTT`, `7moTN`) VALUES (NULL, 'dsfg', 'dsfg', 'dsfg', '', b'1', b'0', b'0', b'0', b'0', b'0', b'0', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1'), (NULL, '', 'secretaria123', 'Secretaria', '', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1', b'1'); 


 "DELETE FROM users WHERE `users`.`ID` = 4"?

 UPDATE `users` SET `Mail` = 'ggg' WHERE `users`.`ID` = 4;



 SELECT * FROM `users` where Nombreyapellido = '( Variable con dato buscado)'    busqueda exact


  SELECT * FROM `users` where Nombreyapellido = % (Variable con dato incompleto  que se busca) % busqueda dato parcial
-->