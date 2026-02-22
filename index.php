<?php 
$menu = "Inicio";

$page_title = "Inicio - IET San Nicolás | Institución Educativa Técnica Tuta";
$page_description = "Bienvenidos a la Institución Educativa Técnica San Nicolás...";
$page_keywords = "IET San Nicolás inicio, colegio Tuta, educación técnica Boyacá";
$page_image = "https://ietsannicolas.edu.co/images/Escudo.png";
$css = "slider.css"; // Archivo CSS específico para esta página

include 'includes/header.php';
?>

<!-- ============================================
     IDENTIFICADOR PARA ACCESIBILIDAD
     ============================================ -->
<main id="main-content" role="main">

    <!-- ============================================
         SECCIÓN: SLIDER PRINCIPAL CON BOTONES
         ============================================ -->
    <section class="row m-0 valign-wrapper" id="slider-section" data-aos="fade-down" data-aos-duration="1500">
        <div class="col s12 m-0">
            <div class="slideshow-container center" role="region" aria-label="Carrusel de imágenes institucionales">
                <?php
                $directory = "./images/slider/";
                $dirint = dir($directory);
                $slide_count = 0;

                while (($archivo = $dirint->read()) !== false) {
                    if ($archivo != "." && $archivo != "..") {
                        $slide_count++;
                        echo "
                        <div class='mySlides fade' role='group' aria-label='Diapositiva {$slide_count}'>
                            <img src='" . $directory . $archivo . "' 
                                 class='slider-image'
                                 alt='Imagen institucional {$slide_count} - IET San Nicolás'
                                 loading='lazy'>
                        </div>";
                    }
                }
                $dirint->close();
                ?>

                <!-- ============================================
                     BOTONES DE CONVENIOS Y ENLACES
                     ============================================ -->
                <div class="btn-container" role="navigation" aria-label="Enlaces rápidos a servicios">
                    <div class="row botones">
                        <!-- SED Boyacá -->
                        <div class="col s12 m4 l2 img_enlaces">
                            <a href="http://sedboyaca.gov.co/" target="_blank" rel="noopener noreferrer"
                                title="Secretaría de Educación de Boyacá" class="enlace-convenio">
                                <img class="borde-dorado hover-zoom" src="./images/convenios/sedboyaca.jpg"
                                    alt="Logo Secretaría de Educación de Boyacá" loading="lazy">
                                <span class="enlace-overlay">SED Boyacá</span>
                            </a>
                        </div>

                        <!-- Compucol -->
                        <div class="col s12 m4 l2 img_enlaces">
                            <a href="https://compucol.co/colegios/tutaiesannicolas/" target="_blank"
                                rel="noopener noreferrer" title="Sistema de Notas Compucol" class="enlace-convenio">
                                <img class="borde-dorado hover-zoom" src="./images/convenios/cc.jpg"
                                    alt="Logo Compucol - Sistema de Notas" loading="lazy">
                                <span class="enlace-overlay">Notas</span>
                            </a>
                        </div>

                        <!-- Uniboyacá -->
                        <div class="col s12 m4 l2 img_enlaces">
                            <a href="https://www.uniboyaca.edu.co/es" target="_blank" rel="noopener noreferrer"
                                title="Universidad de Boyacá" class="enlace-convenio">
                                <img class="borde-dorado hover-zoom responsive-img" src="./images/convenios/udb.jpg"
                                    alt="Logo Universidad de Boyacá" loading="lazy">
                                <span class="enlace-overlay">Uniboyacá</span>
                            </a>
                        </div>

                        <!-- UPTC -->
                        <div class="col s12 m4 l2 img_enlaces">
                            <a href="https://www.uptc.edu.co/sitio/portal/" target="_blank" rel="noopener noreferrer"
                                title="Universidad Pedagógica y Tecnológica de Colombia" class="enlace-convenio">
                                <img class="borde-dorado hover-zoom" src="./images/convenios/UPTC.jpg" alt="Logo UPTC"
                                    loading="lazy">
                                <span class="enlace-overlay">UPTC</span>
                            </a>
                        </div>

                        <!-- Gmail Institucional -->
                        <div class="col s12 m4 l2 img_enlaces">
                            <a href="https://mail.google.com/mail/u/0/?authuser=0&pli=1#inbox" target="_blank"
                                rel="noopener noreferrer" title="Gmail Institucional - @ietsannicolas.edu.co"
                                class="enlace-convenio">
                                <img class="borde-dorado hover-zoom" src="./images/convenios/gmail.jpg"
                                    alt="Gmail Institucional" loading="lazy">
                                <span class="enlace-overlay">Gmail</span>
                            </a>
                        </div>

                        <!-- ICFES Saber 11 -->
                        <div class="col s12 m4 l2 img_enlaces">
                            <a href="https://www.icfes.gov.co/caja-de-herramientas-saber-11/" target="_blank"
                                rel="noopener noreferrer" title="ICFES - Pruebas Saber 11" class="enlace-convenio">
                                <img class="borde-dorado hover-zoom" src="./images/convenios/saber.jpg"
                                    alt="Logo ICFES Saber 11" loading="lazy">
                                <span class="enlace-overlay">Saber 11°</span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ============================================
         SECCIÓN: DESTACADOS
         ============================================ -->
    <section class="section-destacados section section1 valign-wrapper" id="destacados" data-aos="fade-left"
        data-aos-duration="1500">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <h2 class="yellow-text center-align titulo-seccion" data-aos="fade-up">
                        <i class="material-icons large">star</i>
                        Destacados
                    </h2>
                </div>

                <!-- Card: Facebook -->
                <div class="col s12 m4 p-0 m-0" data-aos="zoom-in" data-aos-delay="100">
                    <a href="https://web.facebook.com/ietsannicolas" target="_blank" rel="noopener noreferrer"
                        title="Síguenos en Facebook" class="card-link">
                        <article class="destacados card-destacado">
                            <img src="./images/destacados/facebook.jpg"
                                alt="Página oficial de Facebook - IET San Nicolás" class="image borde-dorado"
                                loading="lazy">
                            <div class="middle">
                                <div class="text">
                                    <i class="material-icons">thumb_up</i>
                                    Facebook
                                </div>
                            </div>
                        </article>
                    </a>
                </div>

                <!-- Card: Periódico Escolar -->
                <div class="col s12 m4 p-0 m-0" data-aos="zoom-in" data-aos-delay="200">
                    <a href="periodico/index.php" target="_blank" rel="noopener noreferrer"
                        title="Lee nuestro periódico escolar" class="card-link">
                        <article class="destacados card-destacado">
                            <img src="./images/destacados/periodico.jpg" alt="Periódico Escolar IET San Nicolás"
                                class="image borde-dorado" loading="lazy">
                            <div class="middle">
                                <div class="text">
                                    <i class="material-icons">article</i>
                                    Periódico
                                </div>
                            </div>
                        </article>
                    </a>
                </div>

                <!-- Card: Especialidades -->
                <div class="col s12 m4 p-0 m-0" data-aos="zoom-in" data-aos-delay="300">
                    <a href="redes.php" title="Conoce nuestras especialidades técnicas" class="card-link">
                        <article class="destacados card-destacado">
                            <img src="./images/destacados/especialidad.jpeg"
                                alt="Especialidades Técnicas - Redes, Salud, Turismo" class="image borde-dorado"
                                loading="lazy">
                            <div class="middle">
                                <div class="text">
                                    <i class="material-icons">school</i>
                                    Especialidades
                                </div>
                            </div>
                        </article>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         PARALLAX DIVISOR
         ============================================ -->
    <div class="parallax-container" data-aos="fade">
        <div class="parallax">
            <img src="images/parallax/2.jpeg" alt="Instalaciones IET San Nicolás" loading="lazy">
        </div>
    </div>

    <!-- ============================================
         SECCIÓN: PERFIL DEL EGRESADO
         ============================================ -->
    <section class="section section2" id="perfil-egresado" data-aos="fade-right" data-aos-duration="1500">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <h2 class="center yellow-text titulo-seccion" data-aos="fade-right" data-aos-duration="1500">
                        <i class="material-icons large">account_circle</i>
                        Perfil del Egresado
                    </h2>
                </div>

                <div class="row">
                    <!-- Texto -->
                    <div class="col s12 m8" data-aos="fade-right" data-aos-duration="1800">
                        <div class="perfil-texto">
                            <p class="justify-text flow-text">
                                El egresado de la <strong>Institución Educativa San Nicolás - Tuta</strong>
                                se destacará en la sociedad como un <strong>líder ejemplar</strong>, con un
                                profundo sentido de pertenencia, tolerancia y respeto hacia los demás.
                            </p>
                            <p class="justify-text flow-text">
                                Será <strong>competente</strong> tanto en el ámbito académico como en el laboral,
                                demostrando habilidades y conocimientos que le permitirán contribuir de manera
                                significativa en diversos contextos y enfrentar con éxito los desafíos del mundo
                                moderno.
                            </p>
                        </div>
                    </div>

                    <!-- Imagen -->
                    <div class="col s12 m4 center" data-aos="fade-left" data-aos-duration="2000">
                        <img src="images/perfil.jpg" class="destacados responsive-img perfil-img borde-dorado"
                            alt="Estudiantes egresados IET San Nicolás" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<!-- ============================================
     JAVASCRIPT PERSONALIZADO
     ============================================ -->
<script src="js/materialize.min.js"></script>
<script>
    // ============================================
    // CAMBIO DE BACKGROUND DINÁMICO AL HACER SCROLL
    // ============================================
    document.addEventListener("DOMContentLoaded", function () {
        // Background inicial
        document.body.style.backgroundImage = "url('images/parallax/1.jpg')";
        document.body.style.transition = "background-image 0.8s ease-in-out";
    });

    document.addEventListener("scroll", function () {
        const sections = document.querySelectorAll(".section");
        const scrollPosition = window.scrollY;

        sections.forEach((section, index) => {
            const sectionTop = section.offsetTop - 90;
            const sectionHeight = section.offsetHeight;

            if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                switch (index) {
                    case 0:
                        document.body.style.backgroundImage = "url('images/parallax/1.jpg')";
                        break;
                    case 1:
                        document.body.style.backgroundImage = "url('images/parallax/2.jpeg')";
                        break;
                    case 2:
                        document.body.style.backgroundImage = "url('images/parallax/3.jpeg')";
                        break;
                    default:
                        break;
                }
            }
        });
    });

    // ============================================
    // MEJORA DEL SLIDER - CONTROLES ACCESIBLES
    // ============================================
    document.addEventListener("DOMContentLoaded", function () {
        const slides = document.querySelectorAll('.mySlides');
        if (slides.length > 0) {
            // Agregar atributo aria-hidden a slides no visibles
            slides.forEach((slide, index) => {
                if (index !== 0) {
                    slide.setAttribute('aria-hidden', 'true');
                } else {
                    slide.setAttribute('aria-hidden', 'false');
                }
            });
        }
    });

    // ============================================
    // LAZY LOADING MEJORADO PARA IMÁGENES
    // ============================================
    if ('loading' in HTMLImageElement.prototype) {
        // El navegador soporta lazy loading nativo
        console.log('Lazy loading nativo habilitado');
    } else {
        // Fallback para navegadores antiguos
        const images = document.querySelectorAll('img[loading="lazy"]');
        images.forEach(img => {
            img.src = img.src;
        });
    }

    // ============================================
    // SMOOTH SCROLL PARA ANCLAS
    // ============================================
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (href !== '#' && document.querySelector(href)) {
                e.preventDefault();
                document.querySelector(href).scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
</script>

<?php include 'includes/footer.php'; ?>