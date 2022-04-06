<?php
//require_once 'Controller/controlllerDatos.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PUCE SCHOOL TECHNOLOGY</title>
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

    <!-- Template Main CSS File -->
    <link href="Resources/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
                <div class="carousel-inner" role="listbox">
                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <div class="carousel-background"><img src="Resources/img/slide/slide-1.jpg" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">Bienvenido a <span>PUCE SCHOOL</span>
                                </h2>
                                <p class="animate__animated animate__fadeInUp">Aprende con los mejores profesionales y
                                    forma parte de una gran comunidad</p>
                                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto"
                                    onclick="informacion()">Comenzamos</a>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="carousel-item">
                        <div class="carousel-background"><img src="Resources/img/slide/slide-4.jpg" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">Comparte conocimientos e Ideas</h2>
                                <p class="animate__animated animate__fadeInUp">Pregunta, pide opinión y ofrece
                                    soluciones. Comparte tu experiencia de aprendizaje con otros estudiantes de la
                                    comunidad tan
                                    apasionados como tú.</p>
                                <a href="#about"
                                    class="btn-get-started animate__animated animate__fadeInUp scrollto">Comenzamos</a>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 3 -->
                    <div class="carousel-item">
                        <div class="carousel-background"><img src="Resources/img/slide/slide-5.jpg" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">Capacitate desde cualquier lugar.</h2>
                                <p class="animate__animated animate__fadeInUp">A través de cursos de aprendizaje aprende
                                    a tu propio ritmo, desde cualquier lugar y dispositivo móvil con acceso a internet.
                                </p>
                                <a href="#about"
                                    class="btn-get-started animate__animated animate__fadeInUp scrollto">Comenzamos</a>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-double-left" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-double-right" aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </section><!-- End Hero -->

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

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <h2>Acerca de Nosotros</h2>
                    <p>Nuestra misión es proporcionar una educación gratuita de clase mundial para cualquier persona en
                        cualquier lugar. Un recurso de aprendizaje personalizado, para todos.</p>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <img src="Resources/img/about.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content">
                        <h3>Participa en nuestros cursos de <strong>Diseño Web</strong></h3>
                        <p class="fst-italic">
                            Con una modalidad 100% online, tú eliges tus horarios y el lugar de estudio. Todo el
                            material que necesitas lo encuentras en la plataforma.
                        </p>
                        <p>
                            Prepárate para desarrollar interfaces adaptables, modernas y funcionales para los usuarios
                            de sitios web. Vigila tu progreso. Desarrolla nuevas habilidades en:
                        </p>

                        <div class="skills-content">

                            <div class="progress">
                                <span class="skill">HTML <i class="val">100%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">CSS <i class="val">90%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">JavaScript <i class="val">75%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">PHP <i class="val">79%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="79" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Counts Section ======= -->
        <section class="counts section-bg">
            <div class="container">

                <div class="row no-gutters">
                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Clientes Felices</strong> recomiendan nuestros cursos.</p>
                            <a href="#">Saber más &raquo;</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext"></i>
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Proyectos</strong> que te ayudan a desarrollar lo aprendido.</p>
                            <a href="#">Saber más &raquo;</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="bi bi-headset"></i>
                            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Soporte</strong> para ayudarte si tienes problemas para continuar tu aprendizaje.
                            </p>
                            <a href="#">Saber más &raquo;</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="bi bi-people"></i>
                            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Trabajar Duro</strong> te permite superar dificultades y alcanzar metas.</p>
                            <a href="#">Saber más &raquo;</a>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Our Services Section ======= -->
        <section id="services" class="services">
            <div class="container">
                <div class="section-title">
                    <h2>Nuestros Servicios</h2>
                    <p>En todas las etapas de la formación le guiarán profesionales del sector a los que hemos formado
                        para que le enseñen.</p>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-group"></i></div>
                            <h4 class="title"><a href="">Los asesores le enseñan a encontrar respuestas</a></h4>
                            <p class="description">Son desarrolladores en activo, con buenas habilidades de trabajo en
                                equipo. Su trabajo consiste en enseñarle a resolver cualquier problema por sí mismo.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4 class="title"><a href="">Teoría comprensible</a></h4>
                            <p class="description">La enseñanza se basa en ejemplos de la vida real. La complejidad
                                aumenta gradualmente, de modo que cada capítulo lo entenderá mejor.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-code-block"></i></div>
                            <h4 class="title"><a href="">Práctica en el simulador</a></h4>
                            <p class="description">Escriba código, cometa errores, reciba rápidamente las observaciones
                                y corrija los errores.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-book-reader"></i></div>
                            <h4 class="title"><a href="">Proyectos de formaci&oacute;n</a></h4>
                            <p class="description">Cientos de horas de ejercicios reales con las que puedes crear o
                                enriquecer tu portafolio.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Our Services Section -->

        <!-- ======= Cta Section ======= -->
        <section class="cta">
            <div class="container">

                <div class="text-center">
                    <h3>¡Hola!</h3>
                    <p>Primero déjenos echar un vistazo y contarle cómo están organizadas las cosas aquí. La
                        introducción no tomará mucho tiempo, pero le permitirá mirar a su alrededor y acostumbrarse al
                        lugar.</p>
                    <a class="cta-btn" href="#">Introducción</a>
                </div>
            </div>
        </section><!-- End Cta Section -->

        <!-- ======= More Services Section ======= -->
        <section class="more-services section-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="card">
                            <img src="Resources/img/more-service-1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><a href="">Carla Alvarado</a></h5>
                                <p class="card-text">El curso me pareció excelente, las explicaciones del tutor son muy
                                    buenas y son cosas realmente prácticas. Estoy muy contento con lo que he aprendido
                                </p>
                                <a href="#" class="btn">Más Informacion</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="card">
                            <img src="Resources/img/more-service-2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><a href="">Ana Morel</a></h5>
                                <p class="card-text">Lo que más me gustó del curso es la libertad de elección
                                    de tiempo y los tutores especializados</p>
                                <a href="#" class="btn">Más Informacion</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="card">
                            <img src="Resources\img\info-box.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><a href="">Aprende a tu ritmo</a></h5>
                                <p class="card-text">Disfruta aprendiendo desde casa, sin horarios y a tu ritmo. Tú
                                    decides cuándo seguir con cada unidad.</p>
                                <a href="#" class="btn">Más Informacion</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End More Services Section -->

        <!-- ======= Info Box Section ======= -->
        <section class="info-box py-0">
            <div class="container-fluid">
                <div class="row">
                    <div
                        class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
                        <div class="content">
                            <h3>Impulsa tu carrera, <strong>obtén un título o amplía tu conocimiento desde cualquier
                                    nivel. </strong></h3>
                            <p>
                                Aprende nuevos conocimientos y habilidades en una variedad de formas, desde videos de
                                expertos y textos y gráficos dinámicos hasta visualizaciones de datos y elementos
                                interactivos.
                            </p>
                        </div>

                        <div class="accordion-list">
                            <ul>
                                <li>
                                    <a data-bs-toggle="collapse" class="collapse"
                                        data-bs-target="#accordion-list-1"><span>01</span> Practica <i
                                            class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                                        <p>
                                            Una parte fundamental del aprendizaje es la capacidad de demostrar tu
                                            conocimiento. Los cursos y programas brindan un espacio para
                                            practicar con cuestionarios, evaluaciones de respuesta abierta, entornos
                                            virtuales y más.
                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2"
                                        class="collapsed"><span>02</span> Experimenta<i
                                            class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                        <p>
                                            Tu experiencia de aprendizaje se basa en ciencia cognitiva de vanguardia.
                                            Con más de dos docenas de funciones de aprendizaje distintas para ayudarte a
                                            lograr tus objetivos.
                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3"
                                        class="collapsed"><span>03</span> Actualiza <i
                                            class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                                        <p>
                                            Aprende, transforma tu forma de pensar y lo que puedes hacer, y se
                                            traduce directamente en el mundo real: aplica inmediatamente tus nuevas
                                            capacidades en el contexto de tu trabajo.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
                        style="background-image: url(assets/img/info-box.jpg);">&nbsp;</div>
                </div>
            </div>
        </section><!-- End Info Box Section -->

        <!-- ======= matricula Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <section class="panel">
                            <header class="panel-heading">
                                Matrícula Ordinaria
                            </header>
                            <div class="panel-body">
                                <form class="form-horizontal " id="formulario" method="post" action="?c=insertDatos">
                                    <h3>Datos del Estudiante</h3>
                                    <div class="form-row">
                                        <div class="col-sm-2">
                                            <label for="rucID">Cédula</label>
                                            <input type="text" class="form-control" id="txtCedula" name="txtCedula"
                                                placeholder="N. Cédula" pattern="[0-9]+">
                                        </div>
                                        <div class="col-sm-4" id="grupo_nombre">
                                            <label for="nombreId">Nombre</label>
                                            <input type="text" class="form-control" id="txtNombre" name="txtNombre"
                                                placeholder="Nombre">
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="apellidoId">Apellido</label>
                                            <input type="text" class="form-control" id="txtApellido" name="txtApellido"
                                                placeholder="Apellido">
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="inputAddress">Direccion</label>
                                            <input type="text" class="form-control" id="txtAddress" name="txtAddress"
                                                placeholder="1234 Main St">
                                        </div>
                                        <div class="col-sm-2">
                                            <label for="celular">Teléfono</label>
                                            <input type="text" class="form-control" id="txtTelef" name="txtTelef"
                                                placeholder="099999999" pattern="[0-9]+">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <br>
                                            <button type="submit" class="btn btn-outline-success"
                                                onclick="datos()">Guardar</button>
                                            &nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <button type="submit" class="btn btn-outline-danger"
                                                onclick="cancelar()">Cancelar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </section>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="member">
                            <img src="Resources/img/Matrícula-online.jpg" class="img-fluid" alt="">
                            <hr>
                            <div class="card-body">
                                <h5 class="card-title"><a href="">Lista de estudiantes matriculados:</a></h5>
                                <p class="card-text">PUCE SCHOOL TECHNOLOGY ofrece la modalidad online con el objetivo
                                    de brindar flexibilidad
                                    y comodidad a los alumnos durante el proceso de matrícula.
                                </p>
                                <button type="button" class="btn btn-outline-info"><a href="?c=listEstudiantes">Lista
                                        Alumnos</a></button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End matricula Section -->
        <br>
        <!-- MateriasSection -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <section class="panel">
                            <header class="panel-heading">
                                Matrícula Ordinaria
                            </header>
                            <div class="panel-body">
                                <form class="form-horizontal " id="formulario" method="post" action="?c=insertClase">
                                    <h3>Registrar Materias</h3>
                                    <div class="form-row">
                                        <div class="col-sm-4">
                                            <label>Materia</label>
                                            <input type="text" class="form-control" id="txtMateria" name="txtMateria"
                                                placeholder="Nombre de la materias">
                                        </div>
                                        <div class="col-sm-4" id="grupo_nombre">
                                            <label>Descripción</label>
                                            <textarea type="text" rows="5" cols="20" class="form-control"
                                                id="txtDescrip" name="txtDescrip"
                                                placeholder="Escriba la Descripción"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <br>
                                            <button type="submit" class="btn btn-outline-success"
                                                onclick="">Guardar</button>
                                            &nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <button type="submit" class="btn btn-outline-danger"
                                                onclick="cancelar()">Cancelar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </section>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="member">
                            <img src="Resources/img/herramientas T.png" class="img-fluid" alt="">
                            <hr>
                            <div class="card-body">
                                <h5 class="card-title"><a href="">Lista de materias:</a></h5>
                                <p class="card-text">PUCE SCHOOL TECHNOLOGY ofrece una gran variedad de materias online.
                                </p>
                                <button type="button" class="btn btn-outline-info"><a href="?c=listMaterias">Lista
                                        Materias</a></button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End matricula Section -->

        <!-- ======= Our Team Section ======= -->
        <section id="team" class="team">
            <div class="container">

                <div class="section-title">
                    <h2>Nuestro Equipo</h2>
                    <p>El proyecto lo llevamos a cabo empleados entre profesores y personal no docente. La mayoría
                        desarrollamos nuestra labor en las sedes del país, también hay profesores que imparten la
                        docencia desde sus casas gracias a la flexibilidad que permite nuestra metodología online.

                        Cada departamento de la universidad está volcado en el proyecto educativo desde su área:
                        informática, desarrollo, marketing, administración y finanzas, admisiones, formación, etc., para
                        que los alumnos reciban una educación de calidad.</p>
                </div>

                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="member">
                            <img src="Resources/img/team/team-1.jpg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Walter White</h4>
                                    <span>Ingeniero en sistemas</span>
                                </div>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.1s">
                        <div class="member">
                            <img src="Resources/img/team/team-2.jpg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Sarah Jhonson</h4>
                                    <span>Diseñadora de sistemas digitales</span>
                                </div>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.2s">
                        <div class="member">
                            <img src="Resources/img/team/team-3.jpg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>William Anderson</h4>
                                    <span>Ingeniero de software</span>
                                </div>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.3s">
                        <div class="member">
                            <img src="Resources/img/team/team-4.jpg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Amanda Jepson</h4>
                                    <span>Ingeniera en informática administrativa</span>
                                </div>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Our Team Section -->

        <!-- ======= Contact Us Section ======= -->
        <section id="contact" class="contact section-bg">

            <div class="container">
                <div class="section-title">
                    <h2>CONTÁCTENOS</h2>
                    <p>Si necesitas más información para estudiar en PUCE SCHOOL, rellena el siguiente formulario y uno
                        de
                        nuestros asesores se pondrá en contacto contigo en las próximas 24 horas. Resolverá todas tus
                        dudas y te ofrecerá la información que necesites acerca del estudio de tu interés.</p>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 d-flex align-items-stretch infos">
                        <div class="row">
                            <div class="col-lg-6 info d-flex flex-column align-items-stretch">
                                <i class="bx bx-map"></i>
                                <h4>Dirección</h4>
                                <p>Av. Jorge Guzmán Rueda y Av. Aurelio,<br>Ibarra, Ecuador</p>
                            </div>
                            <div class="col-lg-6 info info-bg d-flex flex-column align-items-stretch">
                                <i class="bx bx-phone"></i>
                                <h4>Llamanos</h4>
                                <p>(06) 2713-829<br>+593 98 547 8962</p>
                            </div>
                            <div class="col-lg-6 info info-bg d-flex flex-column align-items-stretch">
                                <i class="bx bx-envelope"></i>
                                <h4>Email</h4>
                                <p>PUCETECH@schoolpuce.edu.ec<br>inforPUCE@gmail.com</p>
                            </div>
                            <div class="col-lg-6 info d-flex flex-column align-items-stretch">
                                <i class="bx bx-time-five"></i>
                                <h4>Horario de atención</h4>
                                <p>Lunes - Viernes: 7AM a 6PM</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6 d-flex align-items-stretch contact-form-wrap">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="name">Nombre:</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <label for="subject">Asunto:</label>
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="message">Mensaje:</label>
                                <textarea class="form-control" name="message" rows="8" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Enviar</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Us Section -->


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-info">
                        <h3>PUCE SCHOOL TECHNOLOGY</h3>
                        <p>
                            Av. Jorge Guzmán Rueda y Av. Aurelio<br>
                            Ibarra, Ecuador<br><br>
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
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Servicios</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Docentes</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Políticas</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Nuestros Servicios</h4>
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

    <!-- Template Main JS File -->
    <script src="Resources/js/main.js"></script>
    <script type="" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="Controller/validaciones.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('select').formSelect();
    });
    </script>
</body>

</html>