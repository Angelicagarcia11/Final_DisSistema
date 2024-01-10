<?php
$con = mysqli_connect("localhost", "skid", "123", "skidadmincolegios");
if (!$con) {
    echo "<p>MySQL no conoce ese usuario y password, o
    esa base, y rechaza la conexión</p>";
} else {
   
}
?>


<?php
$consulta = "SELECT * FROM `users`";

if ($datos = mysqli_query($con, $consulta)) {

    

        #verifica que haya datos      isset determina si se creo la variable 
#mientras que !isset determina si no se creo la variable
    if (isset($_POST["user"], $_POST["pass"]) and $_POST["user"] != "" and $_POST["pass"] != "") {
        while ($fila = mysqli_fetch_array($datos)) {

            if ($_POST["user"] == $fila["Mail"] and $_POST["pass"] == $fila["Contra"]) {
                // Creacion de cookies y variables
                $NameUser = $fila["Nombreyapellido"];
                setcookie("NameUser",$fila["Nombreyapellido"]); 
                $ID = $fila["ID"];
                setcookie("ID",$fila["ID"]); 
                $Cargo = $fila["Cargo"];
                setcookie("Cargo",$fila["Cargo"]);
                $User=$_POST["user"];
                
                $Contra=$_POST["pass"];
                echo "<p>Bienvenido/a $NameUser</p>";
                if ($Cargo == "Profesor" or $Cargo == "Profesora" or $Cargo == "Preceptor" or $Cargo == "Preceptora") {
                







                
                }

                elseif ($Cargo == "Secretario" or $Cargo == "Secretaria" or $Cargo == "Jefe de Preceptores" or $Cargo == "Jefa de Preceptores" or $Cargo == "Director" or $Cargo == "Directora") {
                    echo'

                    </form>
            
                    <form action="user.php" method="post">'; 
                   
                            echo'    <input type="submit" value="Eliminar usuario"> 
                    </form>
                    
                    <form action="CargaAlumnos.php" method="post">'; 
                  
                            echo'    <input type="submit" value="Carga de alumnos"> 
                    </form>
                    
                    
                    <form action="user.php" method="post">'; 
                    
                            echo'    <input type="submit" value="Eliminar alumno"> 
                    </form>
                    
                    
                    ';
        






                   
                }


            }
        }
        
        


    } else {
    print("<p>Oops! Parece que no <a href=\"index.html\">inicio sesion</a>. Por favor, inicie sesion</p>");


    }
} 




?>

