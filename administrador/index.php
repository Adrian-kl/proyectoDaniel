<!doctype html>
<html lang="en">
  <head>
    <title>Administrador</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/estilo.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <!-- BOOTSTRAP LLAMADO -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </head>
  <body>



  <div class="container">
    <div class="row login">
        <div class="col-md-6">

        	<div class="card2 card-body">

            <h1 align="center"><a href="inicio.php"><img src="images/logo_imporetros.png" width="40" height="40"></a>   LOGIN </h1>
                <br>
                <div class="form">
                    <form method="post" action="validar.php">

                        <p>Ingrese nombre:<input class="form-control" type="text" name="usuario" placeholder="Ingrese su usuario"></p>
                        
                        <p>Ingrese contraseña:<input class="form-control" type="password" name="contrasena" placeholder="Ingrese su contraseña"></p>            

                        <input type="submit" class="btn btn-warning" value="Ingresar">


                    </form>
                    <?php/*
                    if(isset($_REQUEST["Ingresar"])) {
                        $usuario = $_POST["usuario"];
                        $usuario = $_SESSION["usuario"];

                        if(isset($_COOKIE[$usuario])) {
                            $cont = $_COOKIE[$usuario];
                            setcookie($usuario, $cont + 1, time() + 3600);

                        }
                        else{
                            setcookie($usuario, 1, time() + 3600);
                        }
                        header("location:validar.php");
                    }
                    */?>
                </div>
            </div>	
        </div>
    </div>

</div> 
</body>
</html>