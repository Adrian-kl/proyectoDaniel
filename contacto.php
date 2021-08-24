<?php

  require 'conexion.php';

  $sql= "SELECT * FROM regproductos";
  $resultado = $mysqli->query($sql);
?>

<?php include("template/cabecera.php");  ?>
 
    <div class="container-fluid containercontact">

      <div class="col-12 pt-5">
          <h1 align="center">IMPORETROS M&J | Contactanos <a href="index.html"><img src="images/logo_imporetros.png" width="40" height="40"></a>
          </h1>
      </div>

      <hr>

      <div class="row m-5 pt-4">
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


    <?php include("template/asesores.php");  ?>





<?php include("template/pie.php");  ?>