<?php
  //Conexion con la Base de Datos
  require 'conexion.php';

  $idCLM=$_POST['idCLM'];

  //Paso de Variables 'POST' del Formulario Registro
  $id=$_POST['id'];

  $nombre=$_POST['nombre'];
  $nombre= strtoupper($nombre);

  $descripcion=$_POST['descripcion'];
  $descripcion= strtoupper($descripcion);

  $precio=$_POST['precio'];

  $cantidad=$_POST['cantidad'];
  $cantidad= strtoupper($cantidad);


  $fecha=$_POST['fecha'];


  $fotos= addslashes(file_get_contents($_FILES['fotos']['tmp_name']));

  $sql="UPDATE regproductos SET id='$id', nombre='$nombre', descripcion='$descripcion', precio='$precio', cantidad='$cantidad', fecha='$fecha', fotos='$fotos' WHERE id='$idCLM'";

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