<?php
/*  include('includes/db.php');
$query = "UPDATE Visitas SET Contador = Contador + 1 WHERE Id = '1'";
$result = $cx->query($query);

$query = "SELECT * FROM Visitas";
$result = $cx->query($query);
$cx = NULL;
$row = NULL;
foreach($result as $row){
echo "<h4 class='center-align'>Número de visitas: 0000" . $row['Contador'] . "</h4>";
}*/
?>

<!--JavaScript at end of body for optimized loading-->

<!-- ============================================
     JAVASCRIPT GLOBAL
     ============================================ -->
<script>
document.addEventListener('DOMContentLoaded', function () {

    // ============================================
    // MATERIALIZE COMPONENTS
    // ============================================

    M.Dropdown.init(document.querySelectorAll('.dropdown-trigger'), {
        hover: false,
        coverTrigger: false,
        constrainWidth: false
    });

    M.Sidenav.init(document.querySelectorAll('.sidenav'));
    M.Parallax.init(document.querySelectorAll('.parallax'));
    M.Carousel.init(document.querySelectorAll('.carousel'));
    M.Tooltip.init(document.querySelectorAll('.tooltipped'));

    // ============================================
    // SLIDER PERSONALIZADO (SI EXISTE)
    // ============================================

    if (document.getElementsByClassName("mySlides").length > 0) {

        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let slides = document.getElementsByClassName("mySlides");

            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }

            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1;
            }

            if (slides[slideIndex - 1]) {
                slides[slideIndex - 1].style.display = "block";
            }

            setTimeout(showSlides, 2500);
        }
    }

});

// ============================================
// HEADER STICKY
// ============================================

window.addEventListener('scroll', function () {

    const header = document.getElementById("myHeader");
    const logo = document.getElementById("logo");

    if (!header || !logo) return;

    const sticky = header.offsetTop;

    if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
        logo.classList.remove("hide");
    } else {
        header.classList.remove("sticky");
        logo.classList.add("hide");
    }

});
</script>


<!-- ============================================
     FOOTER PREMIUM
     ============================================ -->
<footer class="footer-premium">

    <!-- Wave Divisor -->
    <div class="footer-wave">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path
                d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z"
                opacity=".25" class="wave-shape-fill"></path>
            <path
                d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z"
                opacity=".5" class="wave-shape-fill"></path>
            <path
                d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z"
                class="wave-shape-fill"></path>
        </svg>
    </div>

    <!-- Contenido Principal del Footer -->
    <div class="footer-content">
        <div class="container">
            <div class="row">

                <!-- COLUMNA 1: Información de Contacto -->
                <div class="col s12 m12 l4 footer-section" data-aos="fade-up" data-aos-delay="100">
                    <div class="footer-info-box">
                        <div class="footer-icon-header">
                            <i class="material-icons">contact_phone</i>
                            <h4>Contacto</h4>
                        </div>

                        <div class="contact-item">
                            <i class="material-icons">phone</i>
                            <div class="contact-text">
                                <span class="contact-label">Celular</span>
                                <a href="tel:+573212222082">(+57) 321 222 2082</a>
                            </div>
                        </div>

                        <div class="contact-item">
                            <i class="material-icons">email</i>
                            <div class="contact-text">
                                <span class="contact-label">Email</span>
                                <a href="mailto:tuta_colsannicolas@hotmail.com">tuta_colsannicolas@hotmail.com</a>
                            </div>
                        </div>

                        <div class="contact-item">
                            <i class="material-icons">location_on</i>
                            <div class="contact-text">
                                <span class="contact-label">Dirección</span>
                                <p>Vda. El Arenal - Tuta, Boyacá</p>
                            </div>
                        </div>

                        <!-- Redes Sociales -->
                        <div class="social-links">
                            <a href="https://web.facebook.com/ietsannicolas" target="_blank" rel="noopener noreferrer"
                                class="social-icon facebook" title="Facebook">
                                <i class="material-icons">thumb_up</i>
                            </a>
                            <a href="mailto:tuta_colsannicolas@hotmail.com" class="social-icon email" title="Email">
                                <i class="material-icons">email</i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- COLUMNA 2: Mapa -->
                <div class="col s12 m12 l8 footer-section" data-aos="fade-up" data-aos-delay="200">
                    <div class="footer-map-wrapper">
                        <div class="map-header">
                            <i class="material-icons">map</i>
                            <h4>Ubicación</h4>
                        </div>
                        <div class="map-container">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3969.978313165623!2d-73.22735148532549!3d5.716261833606349!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e6a6e896ba57b19%3A0xa2950f5e2a24f373!2sInstituci%C3%B3n%20Educativa%20San%20Nicolas%2C%20Sede%20Sider%C3%BArgica!5e0!3m2!1ses!2sco!4v1680283187306!5m2!1ses!2sco"
                                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                                title="Ubicación IET San Nicolás" aria-label="Mapa de ubicación de IET San Nicolás">
                            </iframe>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Footer Bottom (Copyright) -->
    <div class="footer-bottom">
        <div class="footer-copyright">
            <p>
                © 2024-2025 | <strong>IET San Nicolás</strong><br>
                Todos los derechos reservados
            </p>
        </div>
        <div class="footer-credits">
            <p>
                <span class="powered-label">Powered By:</span>
                <a href="https://ingjefersonfonsecasoto.com.co" target="_blank" rel="noopener noreferrer"
                    class="developer-link">
                    <i class="material-icons tiny">code</i>
                    Mg. Ing. Jeferson Fonseca Soto
                </a>
            </p>
        </div>
    </div>
    </div>

    <!-- Botón Volver Arriba -->
    <button id="backToTop" class="back-to-top" aria-label="Volver arriba" title="Volver arriba">
        <i class="material-icons">arrow_upward</i>
    </button>

</footer>

<!-- ============================================
     JAVASCRIPT DEL FOOTER
     ============================================ -->
<script>
    // Botón "Volver arriba"
    window.addEventListener('scroll', function () {
        const backToTop = document.getElementById('backToTop');
        if (backToTop) {
            if (window.pageYOffset > 500) {
                backToTop.classList.add('show');
            } else {
                backToTop.classList.remove('show');
            }
        }
    });

    document.getElementById('backToTop')?.addEventListener('click', function () {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
</script>

</body>

</html>