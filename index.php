<?php
include_once('configuracion.php');
include_once('templates/header.php');
?>

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

</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
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
        <li><a href="#contact" class="nav-link scrollto"><i class="bi bi-8-square"></i><span>Cambiar due??o auto</span></a></li>
        <li><a href="#actualizar" class="nav-link scrollto"><i class="bi bi-9-square"></i><span>Actualizar datos persona</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1 style="text-align: left;">GRUPO N??9</h1>
      <p><span class="typed" data-typed-items="Mirko Dinamarca, Agustina Kilapi, Agustina Rossi"></span></p>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Crear una nueva persona ======= -->
    <section id="about" class="about">

      <h1>EJERCICIO 3</h1><BR></BR>
      <H3>CREAR UNA NUEVA PERSONA</H3>
      <?php include "View/NuevaPersona.php"; ?>;

    </section><!-- End About Section -->

    <!-- ======= Ver Crear un nuevo auto ======= -->
    <section id="facts" class="facts">
      <h1>EJERCICIO 4</h1><BR></BR>
      <H3>CREAR UN NUEVO AUTO</H3>
      <?php
      include "View/NuevoAuto.php";
      ?>
    </section><!-- End Facts Section -->

    <!-- ======= Ver Lista de Autos ======= -->
    <section id="resume" class="resume section-bg">
      <h1>EJERCICIO 5</h1><BR></BR>
      <H3>Ver lista de autos</H3>
      <?php include "View/VerAutos.php"; ?>;

    </section><!-- End Skills Section -->

    <!-- ======= Buscar Autos ======= -->
    <section id="portfolio" class="portfolio">

      <h1>EJERCICIO 6</h1><BR></BR>
      <H3>Buscar Auto</H3>
      <?php include "View/buscarAuto.php"; ?>
      
      
    </section><!-- End Resume Section -->
    
    <!-- ======= Listar Personas ======= -->
    <section id="services" class="services section-bg">
      <h1>EJERCICIO 7</h1><BR></BR>
      <H3>Listar Persona</H3>
      <?php include "View/listaPersonas.php"; ?>
      <?php include "View/autosPersona.php"; ?>
    </section><!-- End Portfolio Section -->

    <!-- ======= Cambiar Due??o ======= -->
    <section id="contact" class="contact">
      <h1>EJERCICIO 8</h1><BR></BR>
      <H3>Cambiar Due??o</H3>
      <?php include "View/CambioDuenio.php"; ?>
    </section><!-- End Services Section -->

    <!-- ======= Actualizar datos persona ======= -->
    <section id="actualizar" class="actualizar section-bg">
      <h1>EJERCICIO 9</h1><BR></BR>
      <H3>Actualizar datos persona</H3>
      <?php include "View/BuscarPersona.php"; ?>
    </section><!-- End Actualizar datos persona -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      
      <div class="copyright">
        Agustina Kilapi - Agustina Rossi - Mirko Dinamarca <br><strong><span>Grupo N??9</span></strong>
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

<?php
include_once('templates/footer.php');
?>