<?php 
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$dni=$_POST["dni"];
$txtArea=$_POST["txtArea"];

try {
    // todo: validar si user y pass son correctos
    $conexion=new mysqli("localhost","root","","codo_final");
    if ($conexion->query("INSERT INTO oradores (nombre, apellido,dni,tema) VALUES ('$nombre','$apellido','$dni','$txtArea')")) {
        header("Location: ../index.php?mensaje="); 
    } else {
        header("Location: ../index.php?mensaje=Error%20al%20agregar%20usuario"); 
    }
} catch (\Throwable $th) {
    header("Location: ../index.php?mensaje=Error%20al%20agregar%20usuario"); 
}



?>