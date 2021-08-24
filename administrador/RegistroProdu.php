<?php
  //Conexion con la Base de Datos
  require 'conexion.php';

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


  $query="INSERT INTO regproductos (id, nombre, descripcion, precio, cantidad ,fecha, fotos) VALUES ('$id', '$nombre', '$descripcion','$precio','$cantidad','$fecha','$fotos')";

?>


<?php include("template/cabeceraadmin.php");  ?>

        <main class="page-content pt-2"> 
          <div id="overlay" class="overlay"></div>
            
              <div class="row">
                  <div class="form-group col-md-12">
                        <h1 align="center"> IMPORETROS M&J - Registro Productos <a href="index.php"><img src="images/logo_imporetros.png" width="40" height="40"></a></h1>
                        <br>
                      <div class="contenedor">
                            <div class="barra">
                             <a href="index.php"><img src="images/logo_imporetros.png" alt="logo_imporetros" height="80px"></a>
                            <ul>
                               <li>ImpoRetros M&J</li>
                              <li>Número Único: 322-307-19-89</li>
                              <li>Carrera 59 # 48 - 107 (Medellín - Barrio Triste)</li>
                            </ul>
                          </div>
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