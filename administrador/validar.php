<?php
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
session_start();
$_SESSION['usuario']=$usuario;


$conexion=mysqli_connect("localhost","root","","imporetros");

$consulta="SELECT * FROM usuarios WHERE usuario='$usuario' and contrasena='$contrasena'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:inicio.php");

}else{
    ?>
    <?php
    include("index.php");
    ?>

    <h2 class="bad">Error en la autenticación</h2>
    <?php
}

mysqli_free_result($resultado);
mysqli_close($conexion);