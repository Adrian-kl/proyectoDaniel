<?php

  require 'conexion.php';

  $sql= "SELECT * FROM regproductos";
  $resultado = $mysqli->query($sql);

?>

<?php

  require 'conexion.php';

  $sql= "SELECT * FROM blog";
  $resultado2 = $mysqli->query($sql);
  
?>

<?php include("template/cabecera.php");  ?>


            
    <div class="container-fluid p-1">
        <div class="row">
            <div class="col-8">
              <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img height="500px" src="images/Imporetros_head.png" class="d-block rounded w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h1 align="center">IMPORETROS M&J | Bienvenidos <a href="index.html"><img src="images/logo_imporetros.png" width="40" height="40"></a></h1>
          
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-4">
              <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="cuadro1">
                    <center>
                      <h2>COTIZAR AHORA</h2>
                      <p>Some representative placeholder content for the first slide.</p>
                    </center>
                </div>
                <div class="cuadro2">
                  <center>
                    <h2>Productos</h2>
                    <p>Some representative placeholder content for the first slide.</p>
                    
                  </center>    
                  </div>
                </div>
              </div>
            </div> 
      </div>
  </div>


    

      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner cla1">
            <div class="carousel-item active">
              <img src="images/descuentos.png" height="100px" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/descuentos.png" height="100px" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/descuentos.png" height="100px" class="d-block w-100" alt="...">
            </div>
          </div>
    </div>



    <?php include("template/asesores.php");  ?>

    <br>

    <div class="containerproduc pt-3 pb-5">
      <div class="col-12 mt-3 pt-3">
          <h1 align="center">IMPORETROS M&J | Bienvenidos <a href="index.html"><img src="images/logo_imporetros.png" width="40" height="40"></a>
          </h1>
      </div>

      <hr>

      <div class="row m-3 p-3 align-content-start">
         <h3 style="text-align: center; color: #B50104;">Productos ImpoRetros</h3>
         <br>

          <?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
            <div class="col-sm-3 pt-5 pb-4">

              <div class="card">
                  <!-- Scrollable modal -->
                <img class="card-img" src="data:proyectomodelo/jpeg;base64,<?php echo base64_encode($row['fotos']);?>"/>
                  <div class="card-body">
                    <div>
                      <h5 class="card-title">Producto: <?php echo $row['nombre'];?></h5>
                    </div>
                    <div>
                      <p class="card-text">Descripción: <br> <?php echo $row['descripcion'];?></p>
                    </div>
                    <br>
                    <div class="card-footer align-self-end">
                        <a>$ <?php echo $row['precio'];?> | </a>
                        <a href="administrador/EliminacionProdu.php?id=<?php echo $row['id'];?>" class="card-link"> Carrito</a>
                        <a href="template/carrito.php?id=<?php echo $row['id'];?>" class="card-link"> Cotizar</a>
                    </div>
                  </div>
              </div>
            </div>
          
        <?php } ?>
    
      </div>

      
      <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
       
        <div class="col-3">
        <?php while($row = $resultado2->fetch_array(MYSQLI_ASSOC)) { ?>
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
              <img src="data:proyectomodelo/jpeg;base64,<?php echo base64_encode($row['fotopost']);?>" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5><?php echo $row['titulopost'];?></h5>
                <p>Subtitulo: <br> <?php echo $row['subtitulopost'];?></p>
              </div>
            </div>
          </div>
        <?php } ?>
        </div>       
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      




      
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Anterior</a>
            </li>
            <li class="page-item"><a class="page-link" href="#row1">1</a></li>
            <li class="page-item"><a class="page-link" href="#row2">2</a></li>
            <li class="page-item"><a class="page-link" href="#row3">3</a></li>
            <li class="page-item">
            <a class="page-link" href="#">Siguiente</a>
            </li>
        </ul>
    </nav>
    </div>
    


    <div class="container-fluid containercontact">

      <div class="col-12 mt-3 pt-3">
          <h1 align="center">IMPORETROS M&J | Bienvenidos <a href="index.html"><img src="images/logo_imporetros.png" width="40" height="40"></a>
          </h1>
      </div>

      <hr>

      <div class="row m-5">
        <div class="col-6">
          <div class="card3">
            <div class="formContact">

                <h3><a href="index.html"><img src="images/logo_imporetros.png" width="40" height="40"></a>Cuentanos tus preguntas o dudas</h3>

              <form class="form2" method="post" action="MensajeNuevo.php" enctype="multipart/form-data">
                
                <div >
                  <label class="form-label">Nombre</label>
                  <input class="form-control" type="text" name="nombre" required>
                </div>

                <div>
                  <label class="form-label">Correo Electronico</label>
                  <input class="form-control" type="email" name="correo" required>
                </div>

              
                    <label class="form-label">Categorias:</label>
                    <div class="pb-1">
                      <input class="form-control form-check-input" type="checkbox" name="cargo" value="general">
                      <label class="form-label">General</label>
                      
                    </div>
                    <div>
                      <input class="form-control form-check-input" type="checkbox" name="cargo" value="repuestos">
                      <label class="form-label"> Repuestos</label>
                      
                    </div>
                    <div>
                      <input class="form-control form-check-input" type="checkbox" name="cargo" value="compras">
                      <label class="form-label">Compras</label>
                      
                    </div>
                    <div>
                      <input class="form-control form-check-input" type="checkbox" name="cargo" value="cotización"> 
                      <label class="form-label">Cotización</label>
                      
                    </div>
                    <div>
                      <input class="form-control form-check-input" type="checkbox" name="cargo" value="otros">
                      <label class="form-label">Otros</label> 
                      
                    </div>
                            
                <br>

                <div>
                  <select name="ciudad" class="form-select">
                    <option value="municipio" selected> Seleccione</option>
                    <option value="medellin" name="ciudad"> Medellin</option>
                    <option value="bogota" name="ciudad"> Bogota</option>
                    <option value="cali" name="ciudad"> Cali</option>
                    <option value="pereira" name="ciudad"> Pereira</option>
                    <option value="manizales" name="ciudad"> Manizales</option>
                    <option value="barranquilla" name="ciudad"> Barranquilla</option>

                  </select>
                </div>

                <div>
                  <label class="form-label">Telefono</label>
                  <input class="form-control" type="text" name="telefono" required>
                </div>  

                <div>
                    <label class="form-label">Mensaje</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="mensaje" rows="3"></textarea>
                </div>

                  <button type="submit" class="btn btn-warning" value="Enviar">Enviar</button>
                  <button type="reset" class="btn btn-danger" value="Restablecer">Resteblacer</button>      
          
                
              </form>
            </div>
          </div>
        </div>

        <div class="col-6 pb-5">

          <h2>Mapa</h2>
          <hr>
          <div class="pt-5">
            <div id="map-container-google-11" class="z-depth-1-half map-container-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0937432378514!2d-75.57846128573414!3d6.251377828002471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e44293a2c7a9e0d%3A0x13326ebccc25c592!2sIMPORETROS%20M%26J%20SAS!5e0!3m2!1ses!2sus!4v1628739266498!5m2!1ses!2sus"
                  frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
          <br>
         

        </div>

        </div>

      </div>

    </div>





<?php include("template/pie.php");  ?>