<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
      
        <h1 class="sitename">Voluntariado</h1>
      </a>
      <nav id="navmenu" class="navmenu">
    <ul>
        <li><a href="#hero" class="active">Home<br></a></li>
        <li><a href="#services">Servicio</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li class="dropdown"><a href="#"><span>Opciones</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('registrar') }}">Registrar</a></li>
                <li><a href="#">Opcion 3</a></li>
                <li><a href="#">Opcion 4</a></li>
            </ul>
        </li>
    </ul>
    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <img src="assets/img/hero-bg-abstract.jpg" alt="" data-aos="fade-in" class="">

      <div class="container">
        <div class="row justify-content-center" data-aos="zoom-out">
          <div class="col-xl-7 col-lg-9 text-center">
            <h1>Pagina de Voluntariado</h1>
            <p>Unimos voluntarios con organizaciones para maximizar el impacto social a través de oportunidades significativas.</p>
          </div>
        </div>
        <div class="text-center" data-aos="zoom-out" data-aos-delay="100">
          <a href="#about" class="btn-get-started">Comenzar</a>
        </div>

        <div class="row gy-4 mt-5">
          <div class="col-md-6 col-lg-3" data-aos="zoom-out" data-aos-delay="100">
              <div class="icon-box">
                  <div class="icon"><i class="bi bi-people"></i></div>
                  <h4 class="title"><a href="">Oportunidades de Voluntariado</a></h4>
                  <p class="description">Explora una variedad de proyectos que necesitan tu apoyo. Conecta con organizaciones que están haciendo la diferencia y encuentra la oportunidad perfecta para ti.</p>
              </div>
          </div><!--End Icon Box -->
      
          <div class="col-md-6 col-lg-3" data-aos="zoom-out" data-aos-delay="200">
              <div class="icon-box">
                  <div class="icon"><i class="bi bi-building"></i></div>
                  <h4 class="title"><a href="">Organizaciones Asociadas</a></h4>
                  <p class="description">Descubre las organizaciones con las que trabajamos para hacer del mundo un lugar mejor. Aprende más sobre sus misiones y cómo puedes contribuir a sus causas.</p>
              </div>
          </div><!--End Icon Box -->
      
          <div class="col-md-6 col-lg-3" data-aos="zoom-out" data-aos-delay="300">
              <div class="icon-box">
                  <div class="icon"><i class="bi bi-book"></i></div>
                  <h4 class="title"><a href="">Programas de Capacitación</a></h4>
                  <p class="description">Accede a nuestros programas de capacitación diseñados para equiparte con las habilidades necesarias para ser un voluntario efectivo y marcar la diferencia.</p>
              </div>
          </div><!--End Icon Box -->
      
          <div class="col-md-6 col-lg-3" data-aos="zoom-out" data-aos-delay="400">
              <div class="icon-box">
                  <div class="icon"><i class="bi bi-bar-chart"></i></div>
                  <h4 class="title"><a href="">Impacto Social</a></h4>
                  <p class="description">Mide tu impacto y ve cómo tu tiempo y esfuerzo están ayudando a transformar comunidades. Juntos, estamos haciendo una diferencia significativa.</p>
              </div>
          </div><!--End Icon Box -->
      
      </div>
      
      </div>

    </section><!-- /Hero Section -->

   <!-- About Section -->
<section id="about" class="about section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
      <h2>Sobre Nosotros</h2>
      <p>Somos una plataforma dedicada a conectar voluntarios con organizaciones que buscan hacer un impacto positivo en la sociedad.</p>
  </div><!-- End Section Title -->

  <div class="container">

      <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
              <p>
                  Nuestra misión es facilitar el acceso a oportunidades de voluntariado, ofreciendo a los voluntarios y organizaciones las herramientas necesarias para colaborar eficazmente.
              </p>
              <ul>
                  <li><i class="bi bi-check2-circle"></i> <span>Conectamos personas con causas que les apasionan.</span></li>
                  <li><i class="bi bi-check2-circle"></i> <span>Apoyamos a las organizaciones en la gestión de sus proyectos de voluntariado.</span></li>
                  <li><i class="bi bi-check2-circle"></i> <span>Fomentamos el crecimiento personal y profesional a través de la capacitación continua.</span></li>
              </ul>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
              <p>Estamos comprometidos con la construcción de una comunidad global donde el voluntariado se convierte en un catalizador para el cambio social. Nuestro enfoque está en la creación de oportunidades accesibles y efectivas para todos.</p>
              <a href="#" class="read-more"><span>Leer Más</span><i class="bi bi-arrow-right"></i></a>
          </div>

      </div>

  </div>

</section><!-- /About Section -->

  
        </div>

      </div>

    </section><!-- /Stats Section -->
<!-- About Alt Section -->
<section id="about-alt" class="about-alt section">

  <div class="container">

      <div class="row gy-4">
          <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
              <img src="assets/img/clients/volu.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
              <h3>Transformando Comunidades a través del Voluntariado</h3>
              <p class="fst-italic">
                  En nuestra plataforma, conectamos a voluntarios con organizaciones que están dedicadas a crear un impacto positivo en la sociedad mexicana.
              </p>
              <ul>
                  <li><i class="bi bi-check2-all"></i> <span>Fomentamos el crecimiento personal y profesional de los voluntarios.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Apoyamos a las organizaciones en la gestión de sus proyectos comunitarios.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Colaboramos con instituciones clave para maximizar el impacto social.</span></li>
              </ul>
              <p>
                  Únete a nuestra red y descubre cómo puedes contribuir a transformar vidas y comunidades en todo México.
              </p>
          </div>
      </div>

  </div>

</section><!-- /About Alt Section -->

<!-- Clients Section -->
<section id="clients" class="clients section light-background">

  <div class="container" data-aos="fade-up">

      <div class="row gy-4">

          <div class="col-xl-2 col-md-3 col-6 client-logo">
              <img src="assets/img/clients/carita.png" class="img-fluid" alt="Caritas Mexicana">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
              <img src="assets/img/clients/cruz.png" class="img-fluid" alt="Cruz Roja Mexicana">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
              <img src="assets/img/clients/uni.png" class="img-fluid" alt="UNICEF México">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
              <img src="assets/img/clients/techo.png" class="img-fluid" alt="TECHO México">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
              <img src="assets/img/clients/funda.png" class="img-fluid" alt="Fundación Televisa">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
              <img src="assets/img/clients/save.png" class="img-fluid" alt="Save the Children México">
          </div><!-- End Client Item -->

      </div>

  </div>

</section><!-- /Clients Section -->

      
          

    <!-- Services Section -->
    <section id="services" class="services section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Servicios</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
    
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item item-cyan position-relative">
                    <div class="icon">
                        <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174">
                            </path>
                        </svg>
                        <i class="bi bi-people"></i>
                    </div>
                    <a href="service-details.html" class="stretched-link">
                        <h3>Conectar Voluntarios</h3>
                    </a>
                    <p>Facilitamos la conexión entre personas apasionadas por ayudar y organizaciones que necesitan apoyo. Encuentra oportunidades que se alineen con tus habilidades e intereses.</p>
                </div>
            </div><!-- End Service Item -->
    
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-item item-orange position-relative">
                    <div class="icon">
                        <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426">
                            </path>
                        </svg>
                        <i class="bi bi-bar-chart-line"></i>
                    </div>
                    <a href="service-details.html" class="stretched-link">
                        <h3>Gestionar Proyectos</h3>
                    </a>
                    <p>Ofrecemos herramientas para que las organizaciones gestionen sus proyectos de voluntariado de manera eficiente, asegurando que cada tarea se cumpla según lo planificado.</p>
                </div>
            </div><!-- End Service Item -->
    
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-item item-teal position-relative">
                    <div class="icon">
                        <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781">
                            </path>
                        </svg>
                        <i class="bi bi-book"></i>
                    </div>
                    <a href="service-details.html" class="stretched-link">
                        <h3>Capacitación y Desarrollo</h3>
                    </a>
                    <p>Capacita a tus voluntarios con programas diseñados para fortalecer sus habilidades y conocimientos, asegurando que estén preparados para hacer una diferencia.</p>
                </div>
            </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->
    </section><!-- /Portfolio Section -->

    <!-- Team Section -->
<section id="team" class="team section light-background">

  <!-- Section Title -->
  <div class="container section-title text-center" data-aos="fade-up">
      <h2>Equipo</h2>
      <h3 class="text-muted">Nuestro talentoso equipo de profesionales dedicados</h3>
  </div><!-- End Section Title -->

  <div class="container">

      <div class="row gy-4 justify-content-center">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
              <div class="team-member">
                  <div class="member-img">
                      <img src="" class="img-fluid" alt="">
                      <div class="social">
                          <a href=""><i class="bi bi-twitter-x"></i></a>
                          <a href=""><i class="bi bi-facebook"></i></a>
                          <a href=""><i class="bi bi-instagram"></i></a>
                          <a href=""><i class="bi bi-linkedin"></i></a>
                      </div>
                  </div>
                  <div class="member-info text-center">
                      <h4>Lael Martinez Lechuga</h4>
                      <span></span>
                  </div>
              </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
              <div class="team-member">
                  <div class="member-img">
                      <img src="" class="img-fluid" alt="">
                      <div class="social">
                          <a href=""><i class="bi bi-twitter-x"></i></a>
                          <a href=""><i class="bi bi-facebook"></i></a>
                          <a href=""><i class="bi bi-instagram"></i></a>
                          <a href=""><i class="bi bi-linkedin"></i></a>
                      </div>
                  </div>
                  <div class="member-info text-center">
                      <h4>Jaqueline Marithza Valencia Garcia</h4>
                      <span></span>
                  </div>
              </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
              <div class="team-member">
                  <div class="member-img">
                      <img src="" class="img-fluid" alt="">
                      <div class="social">
                          <a href=""><i class="bi bi-twitter-x"></i></a>
                          <a href=""><i class="bi bi-facebook"></i></a>
                          <a href=""><i class="bi bi-instagram"></i></a>
                          <a href=""><i class="bi bi-linkedin"></i></a>
                      </div>
                  </div>
                  <div class="member-info text-center">
                      <h4>Axel Hiram Reyes Gonzalez</h4>
                      <span></span>
                  </div>
              </div>
          </div><!-- End Team Member -->

      </div>

  </div>

</section><!-- /Team Section -->



    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contacto</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Direccion</h3>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Llama a: </h3>
                <p>+1 5589 55488 55</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Correo</h3>
                <p>info@example.com</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer light-background">

    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-about">
                <a href="index.html" class="logo d-flex align-items-center">
                    <span class="sitename">PlataformaVoluntariado</span>
                </a>
                <p>Esta plataforma conecta a personas apasionadas con organizaciones que buscan generar un impacto positivo en sus comunidades. Juntos, hacemos la diferencia.</p>
                <div class="social-links d-flex mt-4">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-6 footer-links">
                <h4>Enlaces Útiles</h4>
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Sobre Nosotros</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Términos del Servicio</a></li>
                    <li><a href="#">Política de Privacidad</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-6 footer-links">
                <h4>Nuestros Servicios</h4>
                <ul>
                    <li><a href="#">Conectar Voluntarios</a></li>
                    <li><a href="#">Gestionar Proyectos</a></li>
                    <li><a href="#">Capacitación</a></li>
                    <li><a href="#">Medición de Impacto</a></li>
                    <li><a href="#">Apoyo Continuo</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                <h4>Contáctanos</h4>
                <p>Calle Ficticia 123</p>
                <p>Ciudad Ejemplo, CP 12345</p>
                <p>México</p>
                <p class="mt-4"><strong>Teléfono:</strong> <span>+52 1234 567890</span></p>
                <p><strong>Email:</strong> <span>info@plataformavoluntariado.com</span></p>
            </div>

        </div>
    </div>

</footer>


  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>