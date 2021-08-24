<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Formularios con HTML y CSS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./template/estilo.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">


    <link rel="stylesheet" href="./css/bootstrap.min.css"/>

    
    <!-- BOOTSTRAP LLAMADO -->

      <!-- BOOTSTRAP LLAMADO -->
      <!-- CSS only -->
      <link href="https://bootswatch.com/5/pulse/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <!-- JavaScript Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- CSS only -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <!-- JavaScript Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>




  </head>
<body> 

 
                  <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="index.php"><img src="images/logo_imporetros.png" width="70" height="70">    </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>

                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                              <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="nosotros.php">Nosotros</a>
                            </li>
                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Productos</a>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="productos.php">Tren Rodaje</a></li>
                            <li><a class="dropdown-item" href="productos.php">baldes</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="productos.php">Motores</a></li>
                            <li><a class="dropdown-item" href="productos.php">Palas</a></li>
                            <li><a class="dropdown-item" href="productos.php">Otros</a></li>
                          </ul>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="blog.php">Blog</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="contacto.php">Contacto</a>
                      </li>
                    </ul>
                    <form class="d-flex">
                      <input class="form-control me-2" type="search" placeholder="Encuentra tus Productos" aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </form>
                  </div>
                </div>
              </nav>


            <div class="container-fluid menu2">
              <div class="row col-2 nav2"> 
                <div class="collapse" id="navbarToggleExternalContent">
                  <div class="bg-dark p-4">
                    <h5 class="text-white h4">Productos</h5>
                    <a class="dropdown-item" href="productos.php" style="color:white" >Tren Rodaje</a>
                    <a class="dropdown-item" href="productos.php" style="color:white" >baldes</a>
                  </div>
                </div>
                <nav class="navbar navbar-dark bg-dark">
                  <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  </div>
                </nav>
              </div>
            </div>


                  