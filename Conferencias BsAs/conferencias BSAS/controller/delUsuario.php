<?php 
$id=$_POST["idUsuario"];


// echo $idUser;

try {
    
    $conexion=new mysqli("localhost","root","","codo_final");
    if ($conexion->query("DELETE FROM usuarios WHERE id=$id")) {
        header("Location: ../usuarios.php?mensaje="); 
    } else {
        header("Location: ../usuarios.php?mensaje=Error%20al%20eliminar%20usuario"); 
    }
} catch (\Throwable $th) {
    header("Location: ../usuarios.php?mensaje=Error%20al%20eliminar%20usuario"); 
}



?>