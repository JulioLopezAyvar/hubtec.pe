<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	session_start();
    date_default_timezone_set('America/Lima');

	$config = parse_ini_file($_SERVER['DOCUMENT_ROOT'] . "/.env", true);
    extract($config);

    require_once $_SERVER['DOCUMENT_ROOT'] . "/assets/php/globals.php";
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<?php echo $header_public; ?>

        <link rel="canonical" href="https://hubtec.pe" />
	</head>

    <body class="index-page">
        <header id="header" class="header d-flex align-items-center sticky-top">
            <div class="container-fluid container-xl position-relative d-flex align-items-center">
                <a href="/" class="logo d-flex align-items-center me-auto">
                    <img src="/img/HubTec-LogoWEB.png" alt="">
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="#hero" class="active">Inicio</a></li>
                        <li><a href="#about">Nosotros</a></li>
                        <li><a href="#clientes">Clientes</a></li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>
                <a class="btn-getstarted" href="/">Inicio</a>
            </div>
        </header>

        <main class="main">
            <!-- Hero Section -->
            <section id="hero" class="hero section">
                <div class="container">
                    <div class="row gy-4">
                        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
                            <h1>Tecnología estratégica, resultados reales.</h1>
                            <p>Somos el centro de tu transformación digital</p>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 hero-img justify-content-top" data-aos="zoom-out" data-aos-delay="100">
                            <img src="/img/HubTec_LOGO.png" class="img-fluid animated" alt="">
                        </div>
                    </div>
                </div>
            </section>
            <!-- /Hero Section -->

            <center>
                <section id="carrousel" class="clientes section">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="/img/clientes/IntraPeru.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="/img/clientes/EntreJuegosySonrisas.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="/img/clientes/Fusiontel.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="/img/clientes/OzoneMusicStore.png " alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="/img/clientes/Shili.png " alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="/img/clientes/Biomedist.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="/img/clientes/Ronronnerie.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="/img/clientes/ROchoa.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="/img/clientes/BigNetwork.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="/img/clientes/DVogue.png" alt="">
                            </div>
                        </div>
                    </div>
                </section>
            </center>

            <!-- About Section -->
            <section id="about" class="about section">
                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <span>Nosotros<br></span>
                    <h2>Nosotros</h2>
                    <p>
                        Con más de 25 años de trayectoria, ofrecemos soluciones para diferentes necesidades.<br>
                        Somos el centro de la transformación digital que necesitas.<br><br>
                        Nuestro servicio abarca Infraestructura Física y Lógica, Seguridad Informática, Diseño y Desarrollo Web y Móvil.
                    </p>
                </div>
                <!-- End Section Title -->

                <div class="container" align="center">
                    <img src="/img/enConstruccion.png" height="50%" width="50%" alt="">
                </div>
            </section>
            <!-- /About Section -->

            <!-- Clientes -->
            <section id="clientes" class="portfolio section">
                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <span>Clientes</span>
                    <h2>Clientes</h2>
                    <p>Nos confiaron sus requerimientos tecnológicos </p>
                </div>
                <!-- End Section Title -->

                <center>
                    <section id="carrousel" class="clientes section"">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="/img/clientes/IntraPeru.png" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="/img/clientes/EntreJuegosySonrisas.png" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="/img/clientes/Fusiontel.png" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="/img/clientes/OzoneMusicStore.png " alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="/img/clientes/Shili.png " alt="">
                                </div>
                                    <div class="swiper-slide">
                                    <img src="/img/clientes/Biomedist.png" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="/img/clientes/Ronronnerie.png" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="/img/clientes/ROchoa.png" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="/img/clientes/BigNetwork.png" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="/img/clientes/DVogue.png" alt="">
                                </div>
                            </div>
                        </div>
                    </section>
                </center>
            </section>
            <!-- /Clientes Section -->

        </main>

        <footer id="footer" class="footer">
            <div class="container copyright text-center mt-4">
                <p>© <?php echo date("Y"); ?><span> HubTec. Todos los derechos reservados.</span></p>
            </div>
        </footer>

        <!-- Scroll Top -->
        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
            <i class="bi bi-arrow-up-short"></i>
        </a>

        <!-- Preloader -->
        <div id="preloader"></div>

        <!-- Vendor JS Files -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js" integrity="sha512-7Pi/otdlbbCR+LnW+F7PwFcSDJOuUJB3OxtEHbg4vSMvzvJjde4Po1v4BR9Gdc9aXNUNFVUY+SK51wWT8WF0Gg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js" integrity="sha512-Ysw1DcK1P+uYLqprEAzNQJP+J4hTx4t/3X2nbVwszao8wD+9afLjBQYjz7Uk4ADP+Er++mJoScI42ueGtQOzEA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- Main JS File -->
        <script src="/js/main.js"></script>
    </body>

    <script source="text/Javascript">
        var miSwiper = new Swiper('.swiper-container', {
            touchMoveStopPropagation: false,
            variableWidth: true,
            centeredSlides: true,
            loop: true,
            autoplay: {
                delay: 800,
                disableOnInteraction: false,
            },
            breakpoints: {
                // when window width is >= 320px
                320: {
                    slidesPerView: 1,
                    spaceBetween: 50
                },
                // when window width is >= 480px
                480: {
                    slidesPerView: 1,
                    spaceBetween: 50
                },
                // when window width is >= 640px
                640: {
                    slidesPerView: 4,
                    spaceBetween: 65
                }
            }
        });
    </script>
</html>
