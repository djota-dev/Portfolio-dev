<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <title>Usuarios</title>
</head>

<body>



  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
        <?php include_once("inicio-adm.php") ?>
      </div>
      <div class="col-md-8 mx-auto ms-5" style="width:650px">

        <h2 class="text-center mt-5 mb-5" style=" margin-left:200px">Usuarios</h2>
        <button style=" margin-left:200px" type="button" class="btn btn-primary  mb-3" data-bs-toggle="modal" data-bs-target="#addModal">
          Agregar Usuario
        </button>

        <?php
        
        $mensaje = $_GET["mensaje"];
        if ($mensaje != "") {
          echo "<div class='text-danger text-center m-2'>";
          echo $mensaje;
          echo "</div";
        }

        ?>


        <table class="table shadow text-center" style=" margin-left:200px">
          <thead class="table-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Usuario</th>
              <th scope="col">Contraseña</th>
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
            $query = $conn->query("SELECT * FROM usuarios");
            //transforma el resultado $query array de array asociativo:
              
            while ($usuario = $query->fetch_assoc()) {
              //$listaUsuarios en un array associativo:
              $listaUsuarios[] = $usuario;
            }
            //obtengo la cant de usuarios:
            $cantUsuarios = count($listaUsuarios);
            //recorro el array $listUsuarios para generar html :
            
            for ($i = 0; $i < $cantUsuarios; $i++) {

              echo "<tr>";

              echo "<td>";
              $idUser = $listaUsuarios[$i]["id"];
              echo $idUser;
              echo "</td>";

              echo "<td>";
              $user = $listaUsuarios[$i]["usuario"];
              echo $user;
              echo "</td>";

              echo "<td>";
              $pass = $listaUsuarios[$i]["pass"];
              echo $pass;
              echo "</td>";

              echo "<td>";
              echo "<a href='editUsuario.php?id=$idUser&mensaje='><i class='bi bi-pencil-fill m-1' ></i></a>";

              echo "<a href='#' data-bs-toggle='modal' data-bs-target='#delModal' id='$idUser' user='$user' ><i class='bi bi-trash3-fill m-1'></i></a>";
              echo "</td>";

              echo "</tr>";

            }





            ?>



          </tbody>
        </table>
      </div>

      <!--MODAL ADD USUARIO:-->

      <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Usuario</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="d-flex justify-content-center">
              <form action="controller/addUsuario.php" method="post">
                <input type="email" name="user" id="user" onkeyup="validarUsu()" class="form-control mb-3" required
                  placeholder="usuario">
                <input type="password" name="pass" id="pass" onkeyup="defFortaleza()" class="form-control mb-3" required
                  placeholder="contraseña">
                <input type="password" name="repPass" id="repPass" onkeydown="compararPass()" class="form-control mb-3"
                  required placeholder="reingrese la contraseña">
                <input type="submit" value="Guardar" class="btn btn-primary mb-3">
                <div id="mensaje"></div>
              </form>

            </div>
          </div>
        </div>
      </div>

      <!--DELETAR USUARIO:-->
      <div class="modal fade" id="delModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminación de Usuario</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="controller/delUsuario.php" method="post">
                <input type="hidden" name="idUsuario" id="idUsuario">
                <div class="modal-body text-center">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label  fs-6">¿Desea eliminar el usuario?</label>
                            <div id="datosUser" class="text-danger"></div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <input type="submit" value="Eliminar" class="btn btn-primary">
                    
                </div>
            </form>
            </div>
        </div>
    </div>    
         
    </div>

  </div>
</body>

</html>