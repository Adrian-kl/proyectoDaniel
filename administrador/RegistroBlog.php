<?php
  //Conexion con la Base de Datos
  require 'conexion.php';

  //Paso de Variables 'POST' del Formulario Registro
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


  $query="INSERT INTO blog (numpost, titulopost, subtitulopost, contenidopost, etiquetapost, fecha, fotopost) VALUES ('$numpost', '$titulopost', '$subtitulopost','$contenidopost','$etiquetapost','$fecha','$fotopost')";

?>


<?php include("template/cabeceraadmin.php");  ?>

        <main class="page-content pt-2"> 
          <div id="overlay" class="overlay"></div>
            
              <div class="row">
                  <div class="form-group col-md-12">
        
                        <div class="form">
                               <h3 style="text-align: center; color: #B50104;">Formulario de Registro de Empleados </h3>
                              <br>
                              <h3> Datos Personales del Empleado </h3>
                            <form method="post" action="inicio.php">
                                <p class="full-width">
                                <?php
                                  $resultado=$mysqli->query($query);
                                  if($resultado>0){
                                    echo "<h1><img src='images/logo_imporetros.png' width='50' height='50'> !Producto Registrado Satisfactoriamente!</h1>";
                                  }else{
                                    echo "<h1><img src='images/logo_imporetros.png' width='50' height='50'> ¡Error al Registrar el Producto!</h1>";
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