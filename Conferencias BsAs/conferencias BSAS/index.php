<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <title>Conf BsAs</title>
</head>

<style>
    .boton:hover {
        background-color: #257347 !important;

    }

    footer {
        background-color: #20506D;
    }

    a {
        text-decoration: none;
    }

    .porcent{
        font-weight: 800;
    }

    .card-body:hover{
      font-weight: bolder;
      cursor: pointer;
    }
</style>

<body>
   <?php include_once("includes/header.php") ?>
    <!--container-->

    <div class="container-fluid">
        <!-- carrusel -->
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/hawaii.jpg" class="d-block w-100" alt="h1" />
                    <div class="carousel-caption d-none d-md-block text-end mb-5">
                        <div class="row ">
                            <div class="col-4"></div>
                            <div class="col-8">
                                <h5 class="fs-2">Conf BsAs</h5>
                                <p style="font-weight: 500;">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Dignissimos voluptates assumenda deserunt impedit
                                    perspiciatis similique eligendi iste magnam nobis sit optio
                                    aliquam maiores quaerat dolores, dolorem distinctio
                                    inventore quod ratione!
                                </p>
                                <div>
                                    <a href="#aspirante" class="btn btn-outline-light">Quiero ser orador</a>
                                    <a href="#comprar" class="btn btn-success">Comprar Tickets</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/hawaii2.jpg" class="d-block w-100" alt="h2" />
                    <div class="carousel-caption d-none d-md-block">

                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/hawaii3.jpg" class="d-block w-100" alt="h3" />
                    <div class="carousel-caption d-none d-md-block">

                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="container-fluid">
        <!-- oradores -->
        <div class="mt-5 mb-3 text-center" id="oradores">
            Conozca a los
            <div class="fs-3">Oradores</div>
        </div>
        <div class="d-flex flex-column align-items-center flex-md-row justify-content-center mb-3">
            <!-- orador steve -->
            <div class="card mx-1 mb-3 w-25">
                <img src="images/steve.jpg" class="card-img-top" alt="st" />
                <div class="card-body">
                    <div class="d-flex mb-3">
                        <a href="#" class="btn btn-warning btn-sm mx-1">JavaScript</a>
                        <a href="#" class="btn btn-info text-light btn-sm mx-1">React</a>
                    </div>
                    <h5 class="card-title mb-2">Steve Jobs</h5>
                    <p class="card-text textoChico text-sencodary">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse
                        reiciendis ex alias nam totam debitis delectus! Sit a, animi
                        consequatur porro cumque rerum optio, explicabo laudantium
                        cupiditate, ea eum perspiciatis.
                    </p>
                </div>
            </div>

            <!-- orador bill -->
            <div class="card mx-1 mb-3 w-25">
                <img src="images/bill.jpg" class="card-img-top" alt="st" />
                <div class="card-body">
                    <div class="d-flex mb-3">
                        <a href="#" class="btn btn-warning btn-sm mx-1">JavaScript</a>
                        <a href="#" class="btn btn-info text-light btn-sm mx-1">React</a>
                    </div>
                    <h5 class="card-title mb-2">Bill Gates</h5>
                    <p class="card-text textoChico text-sencodary">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse
                        reiciendis ex alias nam totam debitis delectus! Sit a, animi
                        consequatur porro cumque rerum optio, explicabo laudantium
                        cupiditate, ea eum perspiciatis.
                    </p>
                </div>
            </div>

            <!-- orador ada -->
            <div class="card mx-1 mb-3 w-25">
                <img src="images/ada.jpeg" class="card-img-top" alt="st" />
                <div class="card-body">
                    <div class="d-flex mb-3">
                        <a href="#" class="btn btn-warning btn-sm mx-1">JavaScript</a>
                        <a href="#" class="btn btn-success text-light btn-sm mx-1">React</a>
                    </div>
                    <h5 class="card-title mb-2">Ada Lovelace</h5>
                    <p class="card-text textoChico text-sencodary">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse
                        reiciendis ex alias nam totam debitis delectus! Sit a, animi
                        consequatur porro cumque rerum optio, explicabo laudantium
                        cupiditate, ea eum perspiciatis.
                    </p>
                </div>
            </div>
        </div>
    </div>

     <!--Formulario Orador-->
     <div class="container" style="width:900px">
        <div class="row" id="aspirante">
            <div class="col-md-12 text-center mt-5">
                <p>Conviértete en un</p>
                <h4 class="fs-2">ORADOR</h4>

                <p>Anótate como orador para dar una <a href="#" class="link-success">charla.ignite.</a>Cuétanos de qué
                    quieres hablar!</p>

            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-center mt-1 form-group">

                <form action="controller/addOrador.php" method="post">
                    <div class="row">
                        <div class="col-4 mb-3">
                            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre">
                        </div>
                        <div class="col-4">
                            <input type="text" name="apellido" id="apellido" class="form-control"
                                placeholder="Apellido">
                        </div>
                        <div class="col-4">
                            <input type="text" name="dni" id="dni" class="form-control"
                                placeholder="DNI">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md">
                            <textarea name="txtArea" id="txtArea" name="txtArea" cols="30" rows="6" class="form-control"
                                placeholder="Sobre qué quieres hablar?"></textarea>
                        </div>


                    </div>

                    <div class="row mb-4 my-2">
                        <div class="d-grid gap-2 col-4 mx-auto">
                        <input type="submit" value="Guardar" class="btn btn-primary mb-3">
        
                        </div>
        
                    </div>
            </div>

            
            </form>

            

        </div>

        
    </div>
    </div>

    <!--El lugar y la fecha-->
    <div class="container-fluid">
        <div class="row" id="local">
            <div class="col-6 mt-4 p-0">
                <img src="images/honolulu.jpg" alt="" style="width: 100%" />
            </div>

            <div class="col-6 mt-4 bg-secondary text-light">
                <div class="contenido mt-4">
                    <h3>Bs As - Octubre</h3>

                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi
                        officiis nulla, obcaecati natus sit aspernatur dicta, eos iste,
                        nihil cupiditate nemo in sed quo esse excepturi reiciendis?
                        Necessitatibus, reprehenderit ipsam? Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Porro vel mollitia, neque assumenda
                        velit, aliquam consectetur laboriosam saepe, est quo aspernatur..
                    </p>
                </div>

                <div class="">
                    <input type="submit" value="Conocé más" class="btn btn-outline-light text-light boton">
                </div>
            </div>
        </div>
    </div>

   

<!--CARDS-->
<div class="container">
    <div class="card-group mt-5 text-center" >
        <div class="card" id="estudiante" >
          <div class="card-body card border-primary" style="width: 99%; border-radius: 0;">
            <h5 class="card-title">Estudiante</h5>
            <p class="card-text"> Tienen un descuento</p>
            <p class="card-text porcent">80%</p>
            <p class="card-text"><small class="text-body-secondary">*Presentar documentación</small></p>
          </div>
        </div>

        
        <div class="card" id="trainee">
          <div class="card-body card border-success" style="width: 99%; border-radius: 0;">
            <h5 class="card-title">Trainee</h5>
            <p class="card-text">Tienen un descuento</p>
            <p class="card-text porcent">50%</p>
            <p class="card-text"><small class="text-body-secondary">*Presentar documentación</small></p>
          </div>
        </div>
        <div class="card" id="junior" >
          <div class="card-body card border-warning" style="width: 100%; border-radius: 0;">
            <h5 class="card-title">Junior</h5>
            <p class="card-text">Tienen un descuento</p>
            <p class="card-text porcent">15%</p>
            <p class="card-text"><small class="text-body-secondary">*Presentar documentación</small></p>
          </div>
        </div>
      </div>
    
</div>



    <div class="container">
        <!-- formulario inscripción -->
        <div class="container mt-5" id="comprar">
            <div class="fs-4 my-4 text-center">Comprar Tickets</div>
            <form action="controller/addInscripto.php" method="post">
                <div class="row">
                    <div class="col-md mb-3">
                        <input type="text" name="nombre" id="nombre" class="form-control" required placeholder="Nombre">
                    </div>
                    <div class="col-md mb-3">
                        <input type="text" name="apellido" id="apellido" class="form-control" required
                            placeholder="Apellido">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md mb-3">
                        <input type="email" name="email" id="email" class="form-control" required placeholder="email">
                    </div>
                    <div class="col-md mb-3">
                        <input type="text" name="tel" id="tel" class="form-control" required
                            placeholder="teléfono movil">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md mb-3">
                        <input type="number" name="cantEntradas" id="cantEntradas" onkeyup="calPrecioFinal()"
                            class="form-control" required placeholder="cantidad entradas">
                        <small>Costo de entrada $1000</small>
                    </div>
                    <div class="col-md mb-3">
                        <select class="form-select" id="porcDescuento" onchange="calPrecioFinal()">
                            <option value="10">Particular</option>
                            <option value="30">Estudiante</option>
                            <option value="50">Orador</option>
                        </select>
                    </div>
                    <div class="col-md mb-3">
                        <input type="text" name="valorTotal" id="valorTotal" disabled class="form-control"
                            placeholder="Valor total con descuento">
                    </div>
                </div>

                <div class="row mb-4 my-2">
                    <div class="d-grid gap-2 col-6 mx-auto">
                    <input type="submit" value="Comprar" class="btn btn-primary mb-3">
                    </div>

                </div>
            </form>
        </div>
    </div>

    <footer>
        <div class="container">
            <!-- footer -->
            <div class="d-flex flex-column flex-sm-row justify-content-center py-4 my-4 border-top ">

                <ul class="list-unstyled d-flex ">
                    <li class="ms-3"><a class="link-light" href="#">Preguntas frecuentes</a></li>

                    <li class="ms-3"><a class="link-light" href="#">Contáctanos</li>

                    <li class="ms-3"><a class="link-light" href="#">Prensa</a></li>

                    <li class="ms-3"><a class="link-light" href="#">Conferencias</li>

                    <li class="ms-3"><a class="link-light" href="#">Términos y condiciones</a></li>

                    <li class="ms-3"><a class="link-light" href="#">Privacidad</a></li>

                    <li class="ms-3"><a class="link-light" href="#">Estudiantes</a></li>

                </ul>
            </div>

        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>

    <script src="js/script.js"></script>
</body>

</html>