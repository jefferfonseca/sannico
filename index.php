<?php $menu = "Inicio";
include 'includes/header.php'; ?>
<div class="row section valign-wrapper" id="content">
    <div class="col s12 l8">
        <div class="slideshow-container center">
            <?php
            // Lee la carpeta de fotos y las carga automáticamente en el slide
            $directory = "./images/slider/";
            $dirint = dir($directory);
            while (($archivo = $dirint->read()) !== false) {
                if ($archivo != "." && $archivo != "..") {
                    echo
                        "<div class='mySlides fade'>
                    <img src='" . $directory . $archivo . "' class='slider-image'>
                 </div>";
                }
            }
            $dirint->close();
            ?>
        </div>

    </div>

    <div class="col s12 l4  center">
        <div class="botones">
            <div class="col s12 m4 l5">
                <a href="http://sedboyaca.gov.co/" target="_blank">
                    <img class="borde-dorado img_enlaces" src="./images\convenios\sedboyaca.jpg">
                </a>
            </div>

            <div class="col s12 m1 l1"></div>
            <div class="col s12 m4 l5">
                <a href="https://compucol.co/colegios/tutaiesannicolas/" target="_blank">
                    <img class="borde-dorado img_enlaces" src="./images\convenios\cc.jpg">
                </a>
            </div>
            <div class="col s12 m4 l5">
                <a href="https://www.uptc.edu.co/sitio/portal/" target="_blank">
                    <img class="borde-dorado  img_enlaces" src="./images\convenios\UPTC.jpg">
                </a>
            </div>
            <div class="col s12 m1 l1"></div>
            <div class="col s12 m4 l5">
                <a href="https://www.uniboyaca.edu.co/es" target="_blank">
                    <img class="borde-dorado  img_enlaces" src="./images\convenios\udb.jpg">
                </a>
            </div>
            <div class="col s12 m4 l5">
                <a href="https://accounts.google.com/signin/v2/identifier?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F
                    &service=mail&hd=ietsannicolas.edu.co&sacu=1&flowName=GlifWebSignIn&flowEntry=AddSession"
                    target="_blank">
                    <img class="borde-dorado" src="./images\convenios\gmail.jpg">
                </a>
            </div>
            <div class="col s12 m1 l1"></div>
            <div class="col s12 m4 l5">
                <a href="https://www.icfes.gov.co/web/cajas-herramientas/Caja_Saber11" target="_blank">
                    <img class="borde-dorado" src="./images/convenios/saber.jpg">
                </a>
            </div>
        </div>
    </div>
</div>

<div class="section-destacados section  section1 valign-wrapper">
    <div class="row ">
        <h2 class="yellow-text p-0 m-0">Destacados</h2>
        <div class="col s12 m4 p-0 m-0">
            <br>
            <a href="https://web.facebook.com/ietsannicolas" target="_blank">
                <div class="destacados">
                    <img src="./images/destacados/facebook.jpg" alt="Live" class="image borde-dorado">
                    <div class="middle">
                        <div class="text">Facebook</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col s12 m4 p-0 m-0">
            <br>
            <a href="periodico/index.html" target="_blank">
                <div class="destacados">
                    <img src="./images/destacados/periodico.jpg" alt="Live" class="image borde-dorado">
                    <div class="middle">
                        <div class="text">Periódico Escolar</div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col s12 m4 p-0 m-0">
            <br>
            <a href="#" target="_blank">
                <div class="destacados">
                    <img src="./images/destacados/especialidad.jpeg" alt="ig" class="image borde-dorado">
                    <div class="middle">
                        <div class="text">Especialidad</div>
                    </div>
            </a>
        </div>
    </div>
</div>
</div>

<div class="parallax-container">
    <div class="parallax"><img src="images/parallax/2.jpeg"></div>
</div>

<div class="section section2 valign-wrapper">
    <div class="row ">
        <h2 class="center yellow-text" id="content">Perfil del Egresado</h2>
        <div class="valign-wrapper">
            <div class="col s12 m8">
                <br>
                <h5 class="container justify-text">
                    El egresado de la Institución Educativa San Nicolás - Tuta se destacará en la sociedad como un
                    líder ejemplar, con un profundo sentido de pertenencia, tolerancia y respeto hacia los demás.
                    Será competente tanto en el ámbito académico como en el laboral, demostrando habilidades y
                    conocimientos que le permitirán contribuir de manera significativa en diversos contextos y
                    enfrentar con éxito los desafíos del mundo moderno.
                </h5>
                <br>
            </div>
            <div class=" col s12 m4 center">
                <img src="images/perfil.jpg" class="destacados responsive-img" height="200px">
            </div>
        </div>
    </div>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.body.style.backgroundImage = "url('images/parallax/1.jpg')";
    });

    document.addEventListener("scroll", function () {
        const sections = document.querySelectorAll(".section");
        const scrollPosition = window.scrollY; // Ajusta el cálculo con la altura del header

        sections.forEach((section, index) => {
            const sectionTop = section.offsetTop - 90;
            const sectionHeight = section.offsetHeight;

            if (
                scrollPosition >= sectionTop &&
                scrollPosition < sectionTop + sectionHeight
            ) {
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
</script>
<?php include 'includes/footer.php'; ?>