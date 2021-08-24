<?php
  //Conexion con la Base de Datos
  require 'conexion.php';

  $idCLM=$_GET['id'];

  $sql="DELETE FROM regproductos  WHERE id='$idCLM'";

?>


<?php include("template/cabeceraadmin.php");  ?>


<main class="page-content pt-2"> 
          <div id="overlay" class="overlay"></div>
            
                    <div class="row">
                        <div class="form-group col-md-12">
	<h1 align="center">ImpoRetros M&J<a href="inicio.php"><img src="images/logo_imporetros.png" width="40" height="40"></a></h1>
	<br>
<div class="contenedor">
  <div class="aspecto">
    <div class="barra">
      <a href="inicio.php"><img src="images/logo_imporetros.png" alt="logo_imporetros" height="80px"></a>
      <ul>
        <li>ImpoRetros M&J</li>
        <li>Número Único: 322-307-19-89</li>
        <li>Carrera 59 # 48 - 107 (Medellín - Barrio Triste)</li>
      </ul>
    </div>
    <div class="form">
      <h3 style="text-align: center; color: #B50104;">Formulario de Eliminaci&oacute;n de Productos </h3>
      <br>
      <h3> Datos Productos </h3>
      <form method="post" action="inicio.php">
      <p class="full-width">
      <?php
        $resultado=$mysqli->query($sql);
        if($resultado>0){
          echo "<h1><img src='images/logo_imporetros.png' width='50' height='50'>! Producto Eliminado Satisfactoriamente!</h1>";
        }else{
          echo "<h1><img src='images/logo_imporetros.png' width='50' height='50'>¡Error al Eliminar el Producto!</h1>";
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