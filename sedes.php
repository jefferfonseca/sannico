<?php
$menu = "Institución";
$css = "sedes.css"; // CSS específico para esta página

// Meta tags específicos
$page_title = "IETSN | Sedes - Ubicaciones y Contacto";
$page_description = "Conoce las sedes de la Institución Educativa Técnica San Nicolás: Sede Central, Siderúrgica, Salvial y Jorge Eliécer Gaitán.";
$page_keywords = "sedes IET San Nicolás, ubicación colegio Tuta, sedes rurales, Siderúrgica, Salvial";
$page_image = "https://ietsannicolas.edu.co/images/Escudo.png";

include('includes/header.php');
?>

<!-- ============================================
     PÁGINA: SEDES
     ============================================ -->
<main id="main-content" class="sedes-page" role="main">

    <!-- ============================================
         TÍTULO PRINCIPAL
         ============================================ -->
    <section class="sedes-header">
        <div class="container">
            <h1 class="titulo-principal yellow-text center" data-aos="fade-down">
                <i class="material-icons large">location_city</i>
                NUESTRAS SEDES
            </h1>
            <p class="subtitulo-pagina white-text center" data-aos="fade-up" data-aos-delay="200">
                Presencia educativa en el territorio rural de Tuta
            </p>
        </div>
    </section>

    <!-- ============================================
         SEDES RURALES - GRID DE CARDS
         ============================================ -->
    <section class="sedes-section">
        <div class="container">

            <h2 class="section-title yellow-text center" data-aos="fade-up">
                <i class="material-icons">terrain</i>
                Sedes Rurales
            </h2>

            <div class="row sedes-grid">

                <!-- ============================================
                     SEDE 1: SIDERÚRGICA
                     ============================================ -->
                <div class="col s12 m6 l4 offset-l4" data-aos="fade-up" data-aos-delay="200">
                    <article class="sede-card sede-principal">
                        <div class="sede-badge">
                            <i class="material-icons">star</i>
                            Principal
                        </div>
                        <div class="sede-icon-wrapper">
                            <div class="sede-icon central">
                                <i class="material-icons">account_balance</i>
                            </div>
                        </div>
                        <div class="sede-content">
                            <h3 class="yellow-text">Sede Siderúrgica</h3>
                            <p class="sede-ubicacion">
                                <i class="material-icons tiny">business</i>
                                Vereda El Arenal
                            </p>
                            <div class="sede-info">
                                <p class="white-text">
                                    <i class="material-icons tiny">school</i>
                                    Preescolar, Básica, Media y Técnica
                                </p>
                                <p class="white-text">
                                    <i class="material-icons tiny">phone</i>
                                    (+57) 321 222 2082
                                </p>
                            </div>
                        </div>
                        <div class="sede-footer">
                            <a href="#mapa" class="btn-sede waves-effect waves-light white-text"
                                onclick="cambiarMapa('siderurgica')">
                                <i class="material-icons left">map</i>
                                Ver ubicación
                            </a>

                        </div>
                    </article>
                </div>
            </div>
            <div class="row sedes-grid">

                <!-- ============================================
                     SEDE 2: CENTRAL (PRINCIPAL)
                     ============================================ -->
                <div class="col s12 m6 l4" data-aos="fade-up" data-aos-delay="300">
                    <article class="sede-card">
                        <div class="sede-icon-wrapper">
                            <div class="sede-icon salvial">
                                <i class="material-icons">agriculture</i>
                            </div>
                        </div>
                        <div class="sede-content">
                            <h3 class="yellow-text">Sede Central</h3>
                            <p class="sede-ubicacion">
                                <i class="material-icons tiny">location_on</i>
                                Vereda San Nicolás
                            </p>
                            <div class="sede-info">
                                <p class="white-text">
                                    <i class="material-icons tiny">school</i>
                                    Preescolar, Básica Primaria y Posprimeria
                                </p>
                            </div>
                        </div>
                        <div class="sede-footer">
                            <a href="#mapa" class="btn-sede waves-effect waves-light white-text" onclick="cambiarMapa('central')">
                                <i class="material-icons left">map</i>
                                Ver ubicación
                            </a>
                        </div>
                    </article>
                </div>



                <!-- ============================================
                     SEDE 3: SALVIAL
                     ============================================ -->
                <div class="col s12 m6 l4" data-aos="fade-up" data-aos-delay="300">
                    <article class="sede-card">
                        <div class="sede-icon-wrapper">
                            <div class="sede-icon salvial">
                                <i class="material-icons">agriculture</i>
                            </div>
                        </div>
                        <div class="sede-content">
                            <h3 class="yellow-text">Sede Salvial</h3>
                            <p class="sede-ubicacion">
                                <i class="material-icons tiny">location_on</i>
                                Vereda Salvial
                            </p>
                            <div class="sede-info">
                                <p class="white-text">
                                    <i class="material-icons tiny">school</i>
                                    Preescolar y Básica Primaria
                                </p>
                            </div>
                        </div>
                        <div class="sede-footer">
                            <a href="#mapa" class="btn-sede waves-effect waves-light white-text" onclick="cambiarMapa('salvial')">
                                <i class="material-icons left">map</i>
                                Ver ubicación
                            </a>
                        </div>
                    </article>
                </div>

                <!-- ============================================
                     SEDE 4: JORGE ELIÉCER GAITÁN
                     ============================================ -->
                <div class="col s12 m6 l4" data-aos="fade-up" data-aos-delay="400">
                    <article class="sede-card">
                        <div class="sede-icon-wrapper">
                            <div class="sede-icon gaitan">
                                <i class="material-icons">house</i>
                            </div>
                        </div>
                        <div class="sede-content">
                            <h3 class="yellow-text">Jorge E. Gaitán</h3>
                            <p class="sede-ubicacion">
                                <i class="material-icons tiny">location_on</i>
                                Vereda Regencia
                            </p>
                            <div class="sede-info">
                                <p class="white-text center">
                                    <i class="material-icons tiny">school</i>
                                    Preescolar y Básica Primaria
                                </p>
                            </div>
                        </div>
                        <div class="sede-footer">
                            <a href="#mapa" class="btn-sede waves-effect waves-light white-text" onclick="cambiarMapa('gaitan')">
                                <i class="material-icons left">map</i>
                                Ver ubicación
                            </a>
                        </div>
                    </article>
                </div>

            </div>
        </div>
    </section>

    <!-- ============================================
         MAPA DE UBICACIÓN
         ============================================ -->
    <section id="mapa" class="mapa-section" data-aos="fade-up">
        <div class="container">

            <h2 id="tituloMapa" class="section-title yellow-text center">
                <i class="material-icons">map</i>
                Ubicación Sede Siderúrgica
            </h2>

            <div class="mapa-wrapper">
                <iframe id="iframeMapa" src="" class="mapa-iframe" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" title="Mapa de ubicación IET San Nicolás"
                    aria-label="Mapa de ubicación">
                </iframe>
            </div>

            <div class="mapa-info" data-aos="fade-up" data-aos-delay="200">
                <div class="row">
                    <div class="col s12 m4">
                        <div class="info-item">
                            <i class="material-icons">place</i>
                            <h4>Dirección</h4>
                            <p id="direccionMapa"></p>
                        </div>
                    </div>

                    <div class="col s12 m4">
                        <div class="info-item">
                            <i class="material-icons">phone</i>
                            <h4>Teléfono</h4>
                            <p id="telefonoMapa"></p>
                        </div>
                    </div>

                    <div class="col s12 m4">
                        <div class="info-item">
                            <i class="material-icons">email</i>
                            <h4>Email</h4>
                            <p id="emailMapa">tuta_colsannicolas@hotmail.com</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</main>

<!-- ============================================
     JAVASCRIPT
     ============================================ -->
<script src="js/materialize.min.js"></script>
<script>
    // Background
    document.addEventListener("DOMContentLoaded", function () {
        document.body.style.backgroundImage = "url('./images/parallax/2.jpeg')";
        document.body.style.transition = "background-image 0.8s ease-in-out";
    });

    // Smooth scroll para botones "Ver ubicación"
    document.querySelectorAll('.btn-sede').forEach(button => {
        button.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });


    const sedes = {
        siderurgica: {
            titulo: "Ubicación Sede Siderúrgica",
            mapa: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3969.978313165623!2d-73.22735148532549!3d5.716261833606349!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e6a6e896ba57b19%3A0xa2950f5e2a24f373!2sInstituci%C3%B3n%20Educativa%20San%20Nicolas%2C%20Sede%20Sider%C3%BArgica!5e0!3m2!1ses!2sco!4v1680283187306!5m2!1ses!2sco",
            direccion: "Vda. El Arenal - Tuta, Boyacá",
            telefono: "(+57) 321 222 2082"
        },
        central: {
            titulo: "Ubicación Sede Central",
            mapa: "AQUI_VA_EL_MAPA_DE_CENTRAL",
            direccion: "Vereda San Nicolás",
            telefono: "(+57) 321 222 2082"
        },
        salvial: {
            titulo: "Ubicación Sede Salvial",
            mapa: "AQUI_VA_EL_MAPA_DE_SALVIAL",
            direccion: "Vereda Salvial",
            telefono: "(+57) 321 222 2082"
        },
        gaitan: {
            titulo: "Ubicación Sede Jorge E. Gaitán",
            mapa: "AQUI_VA_EL_MAPA_DE_GAITAN",
            direccion: "Vereda Regencia",
            telefono: "(+57) 321 222 2082"
        }
    };

    function cambiarMapa(sedeKey) {

    const sede = sedes[sedeKey];

    const wrapper = document.querySelector(".mapa-wrapper");
    const iframe = document.getElementById("iframeMapa");

    // 1️⃣ Fade out
    wrapper.classList.add("oculto");
    wrapper.classList.remove("visible");

    setTimeout(() => {

        // 2️⃣ Cambiar contenido
        document.getElementById("tituloMapa").innerHTML =
            `<i class="material-icons">map</i> ${sede.titulo}`;

        iframe.src = sede.mapa;
        document.getElementById("direccionMapa").textContent = sede.direccion;
        document.getElementById("telefonoMapa").textContent = sede.telefono;

        // 3️⃣ Fade in
        wrapper.classList.remove("oculto");
        wrapper.classList.add("visible");

    }, 400);

    // Scroll suave
    document.getElementById("mapa").scrollIntoView({
        behavior: "smooth"
    });
}

</script>

<?php include('includes/footer.php'); ?>