<?php 
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$email=$_POST["email"];
$tel=$_POST["tel"];
$cantEntradas=$_POST["cantEntradas"];


try {
    // todo: validar si user y pass son correctos
    $conexion=new mysqli("localhost","root","","codo_final");
    if ($conexion->query("INSERT INTO inscriptos (nombre, apellido,email,telefono,cant_entradas) VALUES ('$nombre','$apellido','$email','$tel','$cantEntradas')")) {
        header("Location: ../index.php?mensaje="); 
    } else {
        header("Location: ../index.php?mensaje=Error%20al%20agregar%20usuario"); 
    }
} catch (\Throwable $th) {
    header("Location: ../index.php?mensaje=Error%20al%20agregar%20usuario"); 
}



?>