<?php 
$user=$_POST["user"];
$pass=$_POST["pass"];

try {
    // todo: validar si user y pass son correctos
    $conexion=new mysqli("localhost","root","","codo_final");
    if ($conexion->query("INSERT INTO usuarios (usuario, pass) VALUES ('$user','$pass')")) {
        header("Location: ../usuarios.php?mensaje="); 
    } else {
        header("Location: ../addUsuario.php?mensaje=Error%20al%20agregar%20usuario"); 
    }
} catch (\Throwable $th) {
    header("Location: ../addUsuario.php?mensaje=Error%20al%20agregar%20usuario"); 
}



?>