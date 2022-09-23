<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MyResume Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: MyResume - v4.9.1
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list mobile-nav-toggle d-lg-none"></i>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <li><a href="#hero" class="nav-link scrollto active"><i class="bi bi-house-heart"></i> <span>Inicio</span></a>
        </li>
        <li><a href="#about" class="nav-link scrollto active"><i class="bi bi-3-square"></i> <span>Crear Persona</span></a>
        </li>
        <li><a href="#facts" class="nav-link scrollto"><i class="bi bi-4-square"></i><span>Crear Auto</span></a>
        </li>
        <li><a href="#resume" class="nav-link scrollto"><i class="bi bi-5-square"></i> <span>Ver lista autos</span></a></li>
        <li><a href="#portfolio" class="nav-link scrollto"><i class="bi bi-6-square"></i> <span>Buscar autos</span></a>
        </li>
        <li><a href="#services" class="nav-link scrollto"><i class="bi bi-7-square"></i> <span>Listar personas</span></a></li>
        <li><a href="#contact" class="nav-link scrollto"><i class="bi bi-8-square"></i><span>Cambiar dueño auto</span></a></li>
        <li><a href="#contact" class="nav-link scrollto"><i class="bi bi-9-square"></i><span>Actualizar datos persona</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1>GRUPO 13</h1>
      <p><span class="typed" data-typed-items="Mirko Dinamarca, Agustina Kilapi, Agustina Rossi"></span></p>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <h1>EJERCICIO 3</h1><BR></BR>
      <H3>CREAR UNA NUEVA PERSONA</H3>

      <div class="m-0 vh-100 row justify-content-center align-items-center">

        <div class="col-xs-12 col-md-5" style="padding: 20px; border: 1px solid gray; border-radius: 10px;">
          <form id="form" action="../../View/accionNuevaPersona.php" method="POST">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">N°DNI</label>
              <input type="text" class="form-control" id="NroDni" name="NroDni" placeholder="Ingrese el N°DNI">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Ingrese el nombre">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Apellido</label>
              <input type="text" class="form-control" id="Apellido" name="Apellido" placeholder="Ingrese el apellido">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Fecha de Nacimiento</label>
              <input type="date" class="form-control" id="fechaNac" name="fechaNac" placeholder="Ingrese la fecha de nacimiento">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Telefono</label>
              <input type="number" class="form-control" id="Telefono" name="Telefono" placeholder="Ingrese el telefono">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Domicilio</label>
              <input type="text" class="form-control" id="Domicilio" name="Domicilio" placeholder="Ingrese el domicilio">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
          </form>
        </div>
      </div>



    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
      <h1>EJERCICIO 4</h1><BR></BR>
      <H3>CREAR UN NUEVO AUTO</H3>
      <div class="m-0 vh-100 row justify-content-center align-items-center">

        <div class="col-xs-12 col-md-5" style="padding: 20px; border: 1px solid gray; border-radius: 10px;">
          <form id="form" action="accionNuevoAuto.php" method="POST">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Patente</label>
              <input type="text" class="form-control" id="Patente" name="Patente" placeholder="Ingrese el N° de patente">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Marca</label>
              <input type="text" class="form-control" id="Marca" name="Marca" placeholder="Ingrese la marca">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Modelo</label>
              <input type="number" class="form-control" id="Modelo" name="Modelo" placeholder="Ingrese el modelo">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">N°DNI Dueño</label>
              <input type="number" class="form-control" id="DniDuenio" name="DniDuenio" placeholder="Ingrese el N°DNI del dueño">
            </div>
            <button type="submit" class="btn btn-primary">Registrar Auto</button>
          </form>
        </div>
      </div>

    </section><!-- End Facts Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
     

    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      

    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      
    </section><!-- End Portfolio Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
     
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
    
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
     
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Brandon Johnson</h3>
      <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>MyResume</span></strong>. All Rights Reserved
      </div>

    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>