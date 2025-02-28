<?php 
    $user=$_POST["user"];
    $pass=$_POST["pass"];
    // $_GET["user"]

    // echo $user;
    // echo $pass;

    try {
        $conn=new mysqli("localhost","root","","codo_final");
        $result=$conn->query("SELECT * FROM usuarios WHERE usuario='$user' AND pass='$pass'");
    
        if ($result->fetch_assoc()) {
            header("Location: ../inicio-adm.php"); 
        } else {
            header("Location: ../login.php?mensaje=Usuario%20o%20contraseña%20incorrectos."); 
        }

    } catch (\Throwable $th) {
        header("Location: ../login.php?mensaje=Usuario%20o%20contraseña%20incorrectos."); 
    }

    

?>
