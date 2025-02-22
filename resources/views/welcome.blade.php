<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Pradera</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/logo.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i"
    rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/lib/aos/aos.css" rel="stylesheet">
  <link href="assets/lib/magnific-popup/magnific-popup.css" rel="stylesheet">


  <!-- Main Stylesheet File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">Pradera</a></h1>
       

      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Agendar</a></li>
          <li><a href="#about">Nosotros</a></li>
          <li><a href="#features">Servicios</a></li>
          <li><a href="#team">Equipo</a></li>
          <li><a href="#gallery">Galeria</a></li>

          <li><a href="#contact">Contactos</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

 
  <section id="intro">

    <div class="intro-text">
      <h2>Bienvendios a CDA Pradera</h2>
      <p>Confianza y calidad para cada trayecto.</p>
      <div>
        @if(Route::has('login'))
        <a href="{{ route('login') }}" class="btn-login">login-</a>

        <a href="{{ route('register') }}" class="btn-register">Agendar</a>
        @endif


      </div>

      <div>

      

      </div>


      <div class="product-screens">

        <div class="product-screen-1" data-aos="fade-up" data-aos-delay="400">
          <img src="img/tecnomecanica-1024x554.jpeg" alt="">
        </div>

        <div class="product-screen-2" data-aos="fade-up" data-aos-delay="200">
          <img src="img/product-screen-2.png" alt="">
        </div>

        <div class="product-screen-3" data-aos="fade-up">
          <img src="img/product-screen-3.png" alt="">
        </div>

      </div>

  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about" class="section-bg">
      <div class="container-fluid">
        <div class="section-header">
          <h3 class="section-title">Nosotros</h3>
          <span class="section-divider"></span>
          <p class="section-description">
            En Pradera, somos un centro de atención automotriz dedicado a brindar un servicio de alta calidad,
            confiabilidad y atención personalizada. Con años de experiencia en la industria, nuestro equipo de
            profesionales apasionados trabaja con las mejores herramientas y tecnología avanzada para garantizar que tu
            vehículo esté en las mejores condiciones. Nos enorgullece ser un referente en el cuidado y mantenimiento de
            automóviles, siempre enfocados en la seguridad y satisfacción de nuestros clientes.
          </p>
        </div>

        <div class="row">
          <div class="col-lg-6 about-img" data-aos="fade-right">
            <img src="img/jj.jpeg" alt="">
          </div>

          <div class="col-lg-6 content" data-aos="fade-left">
            <h2>Misión</h2>

            <p>
              Nuestra misión es ofrecer servicios automotrices de excelencia, combinando experiencia, tecnología y un
              enfoque centrado en el cliente. Nos comprometemos a mantener los más altos estándares de calidad,
              asegurando que cada vehículo que pasa por nuestras manos reciba el mejor cuidado, para que nuestros
              clientes puedan conducir con confianza y tranquilidad.
            </p>
            <h2>Visión</h2>
            <p>
              Nuestra visión es ser el centro automotriz líder en la región, reconocido por nuestra innovación, calidad
              de servicio y compromiso con la satisfacción del cliente. Aspiramos a crecer y expandirnos, manteniendo
              nuestra reputación de confianza y eficiencia, y siendo siempre la primera elección para quienes buscan un
              servicio automotriz integral y de alta calidad. </p>


          </div>
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Product Featuress Section
    ============================-->
    <section id="features">


      <div class="container">

        <div class="section-header">
          <h3 class="section-title">Servicios</h3>
          <span class="section-divider"></span>

        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="box" data-aos="fade-right">
              <div class="icon"><i class="ion-ios-stopwatch-outline"></i></div>
              <h4 class="title"><a href="">Revision tecnicomecanica</a></h4>
              <p class="description">La revisión técnico-mecánica es crucial porque asegura que tu vehículo esté en
                óptimas condiciones para circular de manera segura. Así, no solo cumples con la normativa, sino que
                también evitas sorpresas desagradables en la carretera. Puedes confiar en nosotros para realizar este
                servicio con la máxima profesionalidad y cuidado.</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box" data-aos="fade-left">
              <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
              <h4 class="title"><a href="">Peritajes</a></h4>
              <p class="description">El peritaje de tu vehículo es esencial porque te da una evaluación precisa de su
                estado real. Ya sea que estés comprando un auto usado o simplemente quieras saber en qué condiciones
                está el tuyo, un peritaje detallado te protege de posibles problemas y te asegura que estás tomando una
                decisión informada..</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box" data-aos="fade-right">
              <div class="icon"><i class="ion-ios-heart-outline"></i></div>
              <h4 class="title"><a href="">Revisión Preventiva </a></h4>
              <p class="description">La revisión preventiva de tu vehículo, ya sea una moto o un carro, es fundamental
                por varias razones. Primero, garantiza tu seguridad al asegurarnos de que componentes clave como frenos,
                luces y neumáticos estén en perfectas condiciones, reduciendo el riesgo de accidentes. Además, te ayuda
                a ahorrar dinero a largo plazo al detectar y solucionar problemas menores antes de que se conviertan en
                reparaciones costosas..</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box" data-aos="fade-left">
              <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
              <h4 class="title"><a href="">Soat</a></h4>
              <p class="description">El SOAT es indispensable porque garantiza que en caso de un accidente, tanto tú
                como los demás involucrados estén cubiertos médicamente. Es una protección que no solo es obligatoria,
                sino que también te da la seguridad de saber que cuentas con el respaldo necesario en situaciones
                inesperadas.a</p>
            </div>
          </div>

        </div>
      </div>

    </section><!-- #features -->


    <section id="more-features" class="section-bg">

    </section>


    <!--==========================
      Product Advanced Featuress Section
    ============================-->
    <section id="advanced-features">

      <div class="features-row section-bg">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <img class="advanced-feature-img-right" src="img/22-removebg-preview.png" alt="" data-aos="fade-left">
              <div data-aos="fade-right">
                <h2>Politica de calidad</h2>
                <p>
                  En Pradera, estamos comprometidos con la excelencia en cada aspecto de nuestro servicio automotriz.
                  Nuestra política de calidad se fundamenta en la satisfacción del cliente, superando sus expectativas
                  con un servicio personalizado, confiable y eficiente. Nos enfocamos en la mejora continua de nuestros
                  procesos, servicios y tecnologías, promoviendo un ambiente de innovación y aprendizaje constante.
                  Cumplimos estrictamente con las normativas y estándares de la industria, garantizando servicios
                  seguros y de alta calidad. Invertimos en la formación continua de nuestro equipo, asegurando que
                  poseen las habilidades necesarias para un trabajo superior. Actuamos con integridad, promoviendo
                  prácticas responsables y éticas hacia nuestros clientes, empleados y la comunidad. Optimizamos
                  nuestros recursos para ofrecer un servicio rápido y eficaz, sin comprometer la calidad, asegurando que
                  cada cliente reciba su vehículo en óptimas condiciones. La calidad es el pilar de todo lo que hacemos,
                  y nos comprometemos a mantener y mejorar nuestro sistema de gestión para cumplir con los más altos
                  estándares de la industria automotriz</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="features-row">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <img class="advanced-feature-img-left" src="img/advanced-feature-2.jpg" alt="">
              <div data-aos="fade-left">
                <h2>Normatividad</h2>
                <i class="ion-ios-paper-outline" data-aos="fade-left"></i>
                <p data-aos="fade-left">La Ley 769 de 2002 es el Código Nacional de Tránsito Terrestre que regula la
                  movilidad en Colombia. Esta ley establece las normas, disposiciones y sanciones para los conductores,
                  peatones, vehículos, autoridades de tránsito y demás actores que participan en el tráfico1. </p>
                <i class="ion-ios-color-filter-outline" data-aos="fade-left" data-aos-delay="200"></i>
                <p data-aos="fade-left" data-aos-delay="200">ARTÍCULO 50. CONDICIONES MECÁNICAS, AMBIENTALES Y DE
                  SEGURIDAD Por razones de seguridad vial y de protección al ambiente, el propietario o tenedor del
                  vehículo de placas nacionales o extranjeras, que transite por el territorio nacional, tendrá la
                  obligación de mantenerlo en óptimas condiciones mecánicas, ambientales y de seguridad.</p>
                <i class="ion-ios-barcode-outline" data-aos="fade-left" data-aos-delay="400"></i>
                <p data-aos="fade-left" data-aos-delay="400">ARTÍCULO 51. REVISIÓN PERIÓDICA DE LOS VEHÍCULOS. Salvo lo
                  dispuesto en el artículo siguiente, todos los vehículos automotores, deben someterse anualmente a
                  revisión técnico-mecánica y de emisiones contaminantes.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="features-row section-bg">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <img class="advanced-feature-img-right" src="img/advanced-feature-3.jpg" alt="" data-aos="fade-left">
              <div data-aos="fade-right">
                <h2>Seguro Obligatorio de accidentes de Tránsito</h2>


                <i class="ion-ios-albums-outline"></i>
                <p> LEY 2161 DE 2021 La presente Ley tiene por objeto establecer medidas que permitan luchar contra la
                  evasión en la
                  adquisición del Seguro Obligatorio de Accidentes de Tránsito (SOAT); mediante la adopción de
                  incentivos que promuevan hábitos óptimos de conducción y de seguridad vial. Así mismo, como mecanismo
                  contra las practicas inadecuadas al momento de siniestrar la póliza; se prevé el uso de herramientas
                  tecnológicas que garanticen la autenticidad, integridad, conservación y posterior consulta y uso
                  probatorio de la información sobre el siniestro.</p>

                <i class="ion-ios-albums-outline"></i>
                <p> Los propietarios de los vehículos que registren un buen comportamiento vial par no reportar
                  siniestros que afecten la póliza del Segura Obligatorio de Accidentes de Tránsito (SOAT), y haber
                  renovado su póliza de manera oportuna, definida coma la renovación de la póliza antes de su
                  vencimiento, tendrán derecho a la disminución en el valor del Segura Obligatorio de Acuciantes de
                  Tránsito (SOAT)</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="team" class="section-bg">
      <div class="container">
        <div class="section-header">
          <h3 class="section-title">Equipo</h3>
          <span class="section-divider"></span>
     
        </div>
        <div class="row" data-aos="fade-up">
          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/asesor comercia 462b6547-a41d-47be-bba4-1d79a3a5677d.png" alt=""></div>
              <h4>Jose roberto</h4>
              <span>Gerente de Taller</span>
              <div class="social">

              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/asesor comercia ffa21b7f-4a93-4b70-a48b-5680653b5f33.png" alt=""></div>
              <h4>Ragnar Stephano</h4>
              <span>Técnico Automotriz</span>
              <div class="social">

              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/pixlr-image-generator-e9c2ee28-86f6-4973-84ce-071f45d5f6a4.png" alt="">
              </div>
              <h4>Sara yuyeimy</h4>
              <span>Asesora comercial</span>
              <div class="social">

              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/pixlr-image-generator-64077172-2b01-4bae-a137-423bf10b815f.png" alt="">
              </div>
              <h4>Britani Carmenza</h4>
              <span>CEO</span>
              <div class="social">

              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- #team -->

    <!--==========================
      Gallery Section
    ============================-->
    <section id="gallery">
      <div class="container-fluid">
        <div class="section-header">
          <h3 class="section-title">Gallery</h3>
          <span class="section-divider"></span>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item" data-aos="fade-up">
              <a href="/img/genera un log   0ece6bcb-a8c8-4ba2-a140-58e56638046c.png" class="gallery-popup">
                <img src="img/genera un log   0ece6bcb-a8c8-4ba2-a140-58e56638046c.png" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item" data-aos="fade-up">
              <a href="img/genera un log   2a765baf-0885-42f4-a77c-e425e0230a80.png" class="gallery-popup">
                <img src="img/genera un log   2a765baf-0885-42f4-a77c-e425e0230a80.png" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item" data-aos="fade-up">
              <a href="img/genera un log   b39b381b-9f31-4a47-9476-b38c69a3ec4a.png" class="gallery-popup">
                <img src="img/genera un log   b39b381b-9f31-4a47-9476-b38c69a3ec4a.png" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item" data-aos="fade-up">
              <a href="img/asesor comercia 14dc9e7f-b8c3-4865-9f91-5dcaf17bdd60.png" class="gallery-popup">
                <img src="img/asesor comercia 14dc9e7f-b8c3-4865-9f91-5dcaf17bdd60.png" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item" data-aos="fade-up">
              <a href="img/asesora comerci 3381ccc1-08ed-4bf2-bf64-d90035f55cf9.png" class="gallery-popup">
                <img src="img/asesora comerci 3381ccc1-08ed-4bf2-bf64-d90035f55cf9.png" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item" data-aos="fade-up">
              <a href="img/asesora comerci 748b6f30-7d5d-4ba5-a217-4e5c4a198db4.png" class="gallery-popup">
                <img src="img/asesora comerci 748b6f30-7d5d-4ba5-a217-4e5c4a198db4.png" alt="">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #gallery -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container">
        <div class="row" data-aos="fade-up">

          <div class="col-lg-4 col-md-4">
            <div class="contact-about">
              <h3>Pradera</h3>
              <p>En Pradera, somos un centro de atención automotriz dedicado a brindar un servicio de alta calidad,
                confiabilidad y atención personalizada. Con años de experiencia en la industria, nuestro equipo de
                profesionales apasionados trabaja con las mejores herramientas y tecnología avanzada para garantizar que
                tu vehículo esté en las mejores condiciones.</p>
              <div class="social-links">

              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="info">
              <div>
                <i class="ion-ios-location-outline"></i>
                <p>Calle 20 #18-45<br>Villavicencio, Meta</p>
              </div>

              <div>
                <i class="ion-ios-email-outline"></i>
                <p>info@cda-pradera.com.co</p>
              </div>

              <div>
                <i class="ion-ios-telephone-outline"></i>
                <p>+57 320 678 9012</p>
              </div>

            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="info">
              <div>
                <i class="ion-ios-location-outline"></i>
                <p>Avenida 40<br>#25-15 Villavicencio, Meta</p>
              </div>

              <div>
                <i class="ion-ios-email-outline"></i>
                <p>info@cda-pradera.com.co</p>
              </div>

              <div>
                <i class="ion-ios-telephone-outline"></i>
                <p>+57 310 555 5555</p>
              </div>

            </div>
          </div>
        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">


          </div>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Avilon
            -->

          </div>
        </div>

      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="assets/lib/jquery/jquery.min.js"></script>
  <script src="assets/lib/jquery/jquery-migrate.min.js"></script>
  <script src="assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/lib/easing/easing.min.js"></script>
  <script src="assets/lib/aos/aos.js"></script>
  <script src="assets/lib/superfish/hoverIntent.js"></script>
  <script src="assets/lib/superfish/superfish.min.js"></script>
  <script src="assets/lib/magnific-popup/magnific-popup.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="assets/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="assets/js/main.js"></script>

</body>

<style>

</style>

</html>