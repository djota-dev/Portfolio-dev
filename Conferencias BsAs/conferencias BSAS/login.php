<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body class="bg-dark">
    <div class="container justify-content-center">
        <div class="border rounded m-3 mt-5 bg-secondary shadow col-6 mx-auto ">
            <h6 class="text-center fs-4 my-4">Login</h6>


            <div class="d-flex justify-content-center">
                <form action="controller/chekcLogin.php" method="post">
                    <input type="email" name="user" id="user" class="form-control mb-3" placeholder="usuario" required>
                    <input type="password" name="pass" id="pass" class="form-control mb-3" placeholder="contraseña"
                        required>

                    <div class="d-flex justify-content-center">
                        <input type="submit" value="Enviar" class="btn btn-success mb-3 ">
                    </div>

                    <div  class="d-flex justify-content-center">
                    <p><a href="index.php" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Volver a la Web?</a></p>
                    </div>

                    <div  class="d-flex justify-content-center">
                    <p><a href="index.php" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Gracias por elergirnos, universe.dev servicios digitales🖥️🤗</a ></p>
                    </div>
                </form>
            </div>



            <?php
            $mensaje = $_GET["mensaje"];
            if ($mensaje != "") {
                echo "<div class='text-danger text-center m-2'>";
                echo $mensaje;
                echo "</div";
            }

            ?>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>