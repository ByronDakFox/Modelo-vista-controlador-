<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Información</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="Resources/img/books_library_1768.png" rel="icon">
    <link href="Resources/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="Resources/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="Resources/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="Resources/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="Resources/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="Resources/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="Resources/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Template Main CSS File -->
    <link href="Resources/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1 class="text-light"><a href="http://localhost/appMatricula/"><span>PUCE SCHOOL</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="http://localhost/appMatricula/">Inicio</a></li>
                    <li><a class="nav-link scrollto" href="#about">Nosotros</a></li>
                    <li><a class="nav-link scrollto" href="#services">Servicios</a></li>
                    <li><a class="nav-link scrollto" href="#portfolio">Matricula</a></li>
                    <li><a class="nav-link scrollto" href="?c=informacion">Información</a></li>
                    <li><a class="nav-link scrollto" href="#team">Docentes</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contacto</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Lista de Estudiantes Matriculados</h2>
                    <ol>
                        <li><a href="?c=informacion">Información</a></li>
                        <li>Lista Estudiantes</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs Section -->

        <section class="inner-page">
            <div class="container">
                <table class="table table-success table-striped table table-bordered" border="2">
                    <thead>
                        <tr>
                            <th scope="col" nowrap style="text-align:center">#</th>
                            <th scope="col" nowrap style="text-align:center">Cedula</th>
                            <th scope="col" nowrap style="text-align:center">Nombre</th>
                            <th scope="col" nowrap style="text-align:center">Apellido</th>
                            <th scope="col" nowrap style="text-align:center">Direccion</th>
                            <th scope="col" nowrap style="text-align:center">Telefono</th>
                            <th colspan="2" scope="col" nowrap style="text-align:center">Opción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $count=1;
                        foreach($this->MODEL->selectDatos() as $x){
                            $listD=$x->est_id."||".$x->est_cedula."||".$x->est_nombres."||".
                            $x->est_apellidos."||".$x->est_direccion."||".$x->est_telefono;
                            echo "<tr>";
                            echo"<td style='text-align:center'>".$count."</td>";
                            echo"<td style='text-align:center'>".$x->est_cedula."</td>";
                            echo"<td style='text-align:center'>".$x->est_nombres."</td>";
                            echo"<td style='text-align:center'>".$x->est_apellidos."</td>";
                            echo"<td style='text-align:center'>".$x->est_direccion."</td>";
                            echo"<td style='text-align:center'>".$x->est_telefono."</td>";
                            ?>
                        <td nowrap style="text-align:center"> <a class="btn btn-outline-danger"
                                href="?c=eliminarD&id=<?php echo $x->est_id; ?>" title="Editar informacion"
                                onclick=""><img src="Resources/img/delete_icon.png" /></a>
                        </td>
                        <td nowrap style="text-align:center"> <a class="btn btn-outline-info" data-bs-toggle="modal"
                                data-bs-target="#exampleModal" href="#" title="Editar informacion"
                                onclick="obtenerDatos('<?php echo $listD ?>')"><img
                                    src="https://img.icons8.com/officexs/20/000000/refresh.png" /></a>
                        </td>
                        <?php
                            echo "</tr>";
                            $count++;
                        }
                        ?>
                    </tbody>
                </table>



                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Actualizar Datos Estudiante</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div id="bmodal" class="modal-body">
                                <div class="form-row">
                                    <div class="col-sm-2">
                                        <label><b>ID:</b></label>
                                        <input type="text" class="form-control" id="Ids" name="Ids" readonly="">
                                    </div>
                                    <div class="col-sm-10">
                                    </div>

                                    <div class="col-sm-6">
                                        <label><b>Cedula:</b></label>
                                        <input type="text" class="form-control" id="txtCedu" name="txtCedu">
                                    </div>
                                    <div class="col-sm-6">
                                    </div>
                                    <div class="col-sm-6">
                                        <label><b>Nombre:</b></label>
                                        <input type="text" class="form-control" id="txtNom" name="txtNom">
                                    </div>
                                    <div class="col-sm-6">
                                        <label><b>Apellido:</b></label>
                                        <input type="text" class="form-control" id="txtApell" name="txtApell">
                                    </div>
                                    <div class="col-sm-6">
                                        <label><b>Dirección:</b></label>
                                        <input type="text" class="form-control" id="txtDire" name="txtDire">
                                    </div>
                                    <div class="col-sm-6">
                                        <label><b>Teléfono:</b></label>
                                        <input type="text" class="form-control" id="txtTelef" name="txtTelef">
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="reset" class="btn btn-outline-danger" data-dismiss="modal"
                                    data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
                                <button type="button" class="btn btn-outline-primary"
                                    onclick="actualizarDatos()">Guardar</button>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-info">
                        <h3>PUCE SCHOOL TECHNOLOGY</h3>
                        <p>
                            Av. Jorge Guzmán Rueda y Av. AurelioI<br>
                            barra, Ecuador<br><br>
                            <strong>Teléfono:</strong> (06) 2713-829<br>
                            <strong>Email:</strong> PUCETECH@schoolpuce.edu.ec<br>
                        </p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Enlaces</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Inicio</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Nosotros</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Servicos</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Docentes</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Políticas</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Nuetros Servicios</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Biblioteca</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Campus Virtual</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Universidad Virtual</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">CISCO</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Calendario</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Información</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Email">
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                Copyright <strong><span>©2021</span></strong>. Programación Avanzada
            </div>
            <div class="credits">
                Designed by <a href="http://localhost/appMatricula/">Byron R. and José R.</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="Resources/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="Resources/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="Resources/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="Resources/vendor/php-email-form/validate.js"></script>
    <script src="Resources/vendor/purecounter/purecounter.js"></script>
    <script src="Resources/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="Resources/vendor/waypoints/noframework.waypoints.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Template Main JS File -->
    <script src="Resources/js/main.js"></script>
    <script type="" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="Controller/validaciones.js"></script>
    <script type="text/javascript" src="Controller/info.js"></script>
</body>

</html>