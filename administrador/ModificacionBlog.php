<?php
  //Conexion con la Base de Datos
  require 'conexion.php';

  $idCLM=$_POST['idCLM'];

  $numpost=$_POST['numpost'];

  $titulopost=$_POST['titulopost'];
  $titulopost= strtoupper($titulopost);

  $subtitulopost=$_POST['subtitulopost'];
  $subtitulopost= strtoupper($subtitulopost);

  $contenidopost=$_POST['contenidopost'];
  $contenidopost= strtoupper($contenidopost);


  $etiquetapost=$_POST['etiquetapost'];
  $etiquetapost= strtoupper($etiquetapost);


  $fecha=$_POST['fecha'];


  $fotopost= addslashes(file_get_contents($_FILES['fotopost']['tmp_name']));

  $sql="UPDATE blog SET numpost='$numpost', titulopost='$titulopost', subtitulopost='$subtitulopost', contenidopost='$contenidopost', etiquetapost='$etiquetapost', fecha='$fecha', fotopost='$fotopost' WHERE numpost='$idCLM'";

?>


<?php include("template/cabeceraadmin.php");  ?>

<main class="page-content pt-2"> 

          <div id="overlay" class="overlay"></div>
            
              <div class="row">
                  <h1 align="center">ImpoRetros M&J<a href="inicio.php"><img src="images/logo_imporetros.png" width="40" height="40"></a></h1>
                  <br>

                    <div class="form">
                      <h3 style="text-align: center; color: #B50104;">Formulario de Modificaci&oacute;n de Productos </h3>
                      <br>
                      <h3> Datos Productos </h3>
                      <form method="post" action="inicio.php" enctype="multipart/form-data">
                      <p class="full-width">
                      <?php
                        $resultado=$mysqli->query($sql);
                        if($resultado>0){
                          echo "<h1><img src='images/iconok.ico' width='50' height='50'> !Producto Actualizado Satisfactoriamente!</h1>";
                        }else{
                          echo "<h1><img src='images/iconwarning.png' width='50' height='50'> ¡Error al Actualizar el Producto!</h1>";
                        }
                      ?>
                    </p>
                    <p class="full-width">
                        <button type="submit" value="Aceptar">Aceptar</button>      
                    </p>     
                      </form>
                      </div>
                            </div>
              </div>
          </main>
    <?php include("template/pieadmin.php");  ?> 