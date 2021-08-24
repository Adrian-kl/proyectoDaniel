<?php
//seguridad de sesiones paginacion
session_start();
error_reporting(0);
$varsesion= $_SESSION['usuario'];
if($varsesion==null || $varsesion=''){
    header("location:index.php");
    die();
} 

?>

<?php include("template/cabeceraadmin.php");  ?>


        <!-- page-content  -->
<main class="page-content pt-2">
    <div id="overlay" class="overlay"></div>
        <div class="container-fluid p-5">


            <div class="row">
                    <div class="form-group col-md-12">

                        <div class="contenedor">
                            
                            <div class="card2">

                                <div class="form">
                                        <h3 style="text-align: center; color: #B50104;">Sistema de Información Clientes</h3>
                                        <br>
                                        <h3> Menu Princupal de Opciones:</h3><br>
                                    <form>
                                        <p class="acceso">
                                            <a href="frmRegistroCliente.html"><img src="images/agregar-cliente.png" width="70" height="70"></a>
                                            <label> Registro de Clientes </label>
                                        </p>
                                        <p class="acceso">
                                            <a href="frmConsultarCliente.php"><img src="images/consulta-cliente.png" width="70" height="70"></a>
                                            <label> Consulta de Clientes </label>
                                        </p>
                                        <p class="acceso">
                                            <a href="frmConsultarCliente.php"><img src="images/editarcliente.png" width="70" height="70"></a>
                                            <label> Modificar Clientes </label>
                                        </p>
                                        <p class="acceso">
                                            <a href="frmConsultarCliente.php"><img src="images/eliminargeneral.png" width="70" height="70"></a>
                                            <label> Eliminar Clientes </label>
                                        </p>
                                    </form>
                               
                                </div>
                            </div>                    
                            
                        </div>

                    </div>
            </div>

            <hr>


            <div class="contenedor">
                <div class="row">
  
                    <div class="form-group col-md-12">

                        <div class="card2">


                            <div class="form">

                                    <h3 style="text-align: center; color: #B50104;">Sistema Registro de Productos</h3>
                                    <br>
                                    <h3> Menu Principal de Productos</h3><br>
                                <form>
                                    <p class="acceso">
                                        <a href="frmRegistroProdu.html"><img src="images/agregar-producto.png" width="70" height="70"></a>
                                        <label> Registro de Productos </label>
                                    </p>
                                        <p class="acceso">
                                        <a href="frmConsultarProdu.php"><img src="images/consulta-producto.png" width="70" height="70"></a>
                                    <label> Consulta de Productos </label>
                                    </p>
                                        <p class="acceso">
                                        <a href="frmConsultarProdu.php"><img src="images/editar-producto.png" width="70" height="70"></a>
                                    <label> Modificar Productos </label>
                                    </p>
                                        <p class="acceso">
                                        <a href="frmConsultarProdu.php"><img src="images/eliminargeneral.png" width="70" height="70"></a>
                                    <label> Eliminar Productos </label>
                                    </p>
                                </form>
                            </div>

                        </div>
    
                    </div>
                </div>
            </div>     
                    <hr>


            <div class="contenedor">
                <div class="row">
  
                    <div class="form-group col-md-12">

                        <div class="card2">


                            <div class="form">

                                    <h3 style="text-align: center; color: #B50104;">Sistema Registro Blog</h3>
                                    <br>
                                    <h3> Menu Principal del Blog</h3><br>
                                <form>
                                    <p class="acceso">
                                    <a href="frmRegistroBlog.html"><img src="images/agregar-articulo.png" width="70" height="70"></a>
                                    <label> Registro de Articulos </label>
                                    </p>
                                    <p class="acceso">
                                    <a href="frmConsultarBlog.php"><img src="images/consulta-cliente.png" width="70" height="70"></a>
                                    <label> Consultar articulos </label>
                                    </p>
                                    <p class="acceso">
                                    <a href="frmConsultarBlog.php"><img src="images/editar-articulo.png" width="70" height="70"></a>
                                    <label> Modificar Articulos </label>
                                    </p>
                                    <p class="acceso">
                                    <a href="frmConsultarBlog.php"><img src="images/eliminargeneral.png" width="70" height="70"></a>
                                    <label> Eliminar Articulos </label>
                                    </p>
                                </form>
                            </div>

                        </div>
    
                    </div>


                    <div class="form-group col-md-12">
                            <a id="toggle-sidebar" class="btn btn-secondary rounded-0" href="#">
                                <span>Cerar Menu Lateral</span>
                            </a>
                            <a id="pin-sidebar" class="btn btn-outline-secondary rounded-0" href="#">
                                <span>Subir</span>
                            </a>

                    </div>
                </div>    
            </div>

            <hr>

            <div class="row">
                <div class="form-group col-md-12">
                    <h3>Fondo Menu Lateral</h3>
                    <p>Cambia el color del menu lateral</p>
                </div>
            </div>

                <div class="row">
                    <div class="form-group col-md-12">
                        <a href="#" data-theme="default-theme" class="theme default-theme selected"></a>
                        <a href="#" data-theme="chiller-theme" class="theme chiller-theme"></a>
                        <a href="#" data-theme="legacy-theme" class="theme legacy-theme"></a>
                        <a href="#" data-theme="ice-theme" class="theme ice-theme"></a>
                        <a href="#" data-theme="cool-theme" class="theme cool-theme"></a>
                        <a href="#" data-theme="light-theme" class="theme light-theme"></a>
                    </div>
                    <div class="form-group col-md-12">
                        <p>Cambia el fondo del menu lateral </p>
                    </div>
                    <div class="form-group col-md-12">
                        <a href="#" data-bg="bg1" class="theme theme-bg selected"></a>
                        <a href="#" data-bg="bg2" class="theme theme-bg"></a>
                        <a href="#" data-bg="bg3" class="theme theme-bg"></a>
                        <a href="#" data-bg="bg4" class="theme theme-bg"></a>
                    </div>
                    <div class="form-group col-md-12">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="toggle-bg" checked>
                            <label class="custom-control-label" for="toggle-bg">Background image</label>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="toggle-border-radius">
                            <label class="custom-control-label" for="toggle-border-radius">Border radius</label>
                        </div>
                    </div>

                </div>


                <hr>
                <div class="row ">
                    <div class="form-group col-md-12">
                        <small>Hecho <i class="fa fa-heart text-danger" aria-hidden="true"></i> por <span
                                class="text-secondary font-weight-bold">Diseño y Desarrollo
                                </span></small>
                    </div>
                    <div class="form-group col-md-12">
                        <a href="https://github.com/azouaoui-med" target="_blank"
                            class="btn btn-sm bg-secondary shadow-sm rounded-0 text-light mr-3 mb-3">
                            <i class="fab fa-github" aria-hidden="true"></i>
                        </a>
                        <a href="https://twitter.com/azouaoui_med" target="_blank"
                            class="btn btn-sm bg-secondary shadow-sm rounded-0 text-light mr-3 mb-3">
                            <i class="fab fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.instagram.com/azouaoui_med/" target="_blank"
                            class="btn btn-sm bg-secondary shadow-sm rounded-0 text-light mr-3 mb-3">
                            <i class="fab fa-instagram" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/mohamed-azouaoui/" target="_blank"
                            class="btn btn-sm bg-secondary shadow-sm rounded-0 text-light mr-3 mb-3">
                            <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </main>
        <!-- page-content" -->




        


<?php include("template/pieadmin.php");  ?>