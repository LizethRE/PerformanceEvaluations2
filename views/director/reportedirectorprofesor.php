<?php
session_start();
if (!isset($_SESSION['director'])){
    echo '<script style="color: red"> alert("Iniciar sesión para acceder a esta  página")</script>';
    header('Location: ../../index.html');
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Performance Evaluations - Listado de evaluaciones hechas a los docentes</title>
    <!-- Meta -->
   <?php include 'General/css.php';?>
</head>
<body>
    <div class="navbar-lateral full-reset">
        <div class="visible-xs font-movile-menu mobile-menu-button"></div>
        <div class="full-reset container-menu-movile custom-scroll-containers">
            <div class="logo full-reset all-tittles">
                <i class="visible-xs zmdi zmdi-close pull-left mobile-menu-button" style="line-height: 55px; cursor: pointer; padding: 0 10px; margin-left: 7px;"></i>
                Performance Evaluations &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
            <?php include 'General/leftpanel.php';?>
        </div>
    </div>
    <div class="content-page-container full-reset custom-scroll-containers">
        <!--Formulario de close-->
        <form id="close_sesion" method="post">
            <nav class="navbar-user-top full-reset">
                <ul class="list-unstyled full-reset">
                    <input type="hidden" name="solicitud" value="close">
                    <li  class="tooltips-general exit-system-button" data-href="../../index.html" data-placement="bottom" title="Cerrar sesión">
                        <i class="zmdi zmdi-power"></i>
                    </li>
                    <li style="color:#fff; cursor:default;">
                        <span id="name">director_name</span>
                    </li>
                    <li class="mobile-menu-button visible-xs" style="float: left !important;">
                        <i class="zmdi zmdi-menu"></i>
                    </li>
                </ul>
            </nav>
        </form>
        <div class="container nav-espacio">
            <h1 class="all-tittles">Ver evaluaciones realizadas a los docentes</h1>
        </div>
        <section class="full-reset text-center">
            <div class="container-fluid"  style="margin: 0px 0;">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <img src="../../assets/imgs/viewSubject.png" alt="view" class="img-responsive center-box" style="max-width: 110px;">
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                        En esta sección puede visualizar la lista de evaluaciones realizadas a los docentes con el rol de director.
                    </div>
                    <div class="container-fluid contai-espacio">
                        <div class="container-flat-form">
                            <div class="title-flat-form title-flat-red">Evaluaciones a los docentes</div>
                            <div class="container-fluid"  style="margin: 50px 0;">
                                <div class="row">


                                    <div class="col-xs-12">
                                        <div class="table-responsive">

                                <div class="group-material">
                                    <input type="hidden" name="t" class="material-control tooltips-general" required="" maxlength="50" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,50}" data-toggle="tooltip">
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Escoge el periodo</label>
                                    </div>

                                    <div class="group-material">                                                                                  
                                        <select onchange="cambiarResultadosDirectorProfesor(this.value); this.selectedindex = -1" class="form-control" id="periodoList">
                                          <!--  <option value="1">I-2017</option>
                                            <option value="2">II-2017</option>
                                            <option value="3">I-2018</option>
                                            <option value="4">I-2018</option>-->
                                        </select>                                      
                                    </div>
                                            <div id = "reporteDirectorProfesor" method="post">
                                                <table id="dataTables-example" class="table table-striped text-center" border="1"style="border: #8080802e 1px solid">
                                                    <thead>
                                                   
                                                    <th class="text-center">Nombre del profesor</th>
                                                    <th class="text-center">Nota</th>                                                        
                                                    </tr>
                                                    </thead>
                                                    <tbody id="tb">

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div>
                                        <form class="form-inline" action="../../include.php" method="post">
                                            <input type="hidden" name="solicitud" value="generate_pdf_rdd">
                                            <input type="hidden" id = "per" name="per" value="1">
                                            <button type="submit" id="pdf" name="generate_pdf" class="btn btn-primary"><i class="fa fa-pdf" aria-hidden="true"></i>
                                            Generar PDF</button>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="modals">

            </div>   



        </section>
    <?php include 'General/down.php';?>
    </div>
    <!-- Jquery v1.11.2 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/jquery-1.11.2.min.js"><\/script>')</script>
    <!-- Jquery mCustomScrollbar v3.1.13 -->
    <script src="../../assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Bootstrap js v3.3.2 -->
    <script src="../../assets/js/Bootstrap3/bootstrap.min.js"></script>
    <!-- Sweet Alert v0.5.0-->
    <script src="../../assets/js/sweet-alert.min.js"></script>
    <!-- Modernizr v2.8.3 -->
    <script src="../../assets/js/modernizr.js"></script>
    <!-- Main -->
    <script src="../../assets/js/main.js"></script>
    <!-- Fonts js -->
    <script src="../../assets/js/director.js"></script>
</body>
</html>