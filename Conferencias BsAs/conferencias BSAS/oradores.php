<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>

<body>
  


  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
      <?php include_once("inicio-adm.php") ?>
      </div>
      <div class="col-md-8  ms-5" style="width:650px">

      <h1 class="text-center mt-5 mb-5" style=" margin-left:200px">Oradores Inscriptos</h1>
        <table class="table shadow text-center" style=" margin-left:200px">
          <thead class="table-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nombre</th>
              <th scope="col">Apellido</th>
              <th scope="col">DNI</th>
              <th scope="col">Tema</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>

            <?php
            // me contecto a la db, traigo los usuarios y genero html dinámicamente 
            
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);

            $conn = new mysqli("localhost", "root", "", "codo_final");

            //hacemos una consulta la db y colocamos el resultado en la var $query
            $query = $conn->query("SELECT * FROM oradores");
            //transforma el resultado $query array de array asociativo:
              
            while ($orador = $query->fetch_assoc()) {
              //$listaUsuarios en un array associativo:
              $listaOradores[] = $orador;
            }
            //obtengo la cant de usuarios:
            $cantOradores = count($listaOradores);
            //recorro el array $listUsuarios para generar html :
            
            for ($i = 0; $i < $cantOradores; $i++) {

              echo "<tr>";

              echo "<td>";
              $idUser = $listaOradores[$i]["id"];
              echo $idUser;
              echo "</td>";

              echo "<td>";
              $user = $listaOradores[$i]["nombre"];
              echo $user;
              echo "</td>";

              echo "<td>";
              $apellido = $listaOradores[$i]["apellido"];
              echo $apellido;
              echo "</td>";

              echo "<td>";
              $dni = $listaOradores[$i]["dni"];
              echo $dni;
              echo "</td>";

              echo "<td>";
              $tema = $listaOradores[$i]["tema"];
              echo $tema;
              echo "</td>";


              echo "<td>";

              echo "<a href='#' data-bs-toggle='modal' data-bs-target='#delModal' id='$idUser' user='$user' ><i class='bi bi-trash3-fill m-1'></i></a>";
              echo "</td>";

              echo "</tr>";

            }





            ?>



          </tbody>

</html>