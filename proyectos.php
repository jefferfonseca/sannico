<?php
$menu = "Institución";

// Meta tags específicos
$page_title = "IETSN | Proyectos Institucionales";
$page_description = "Conoce los proyectos institucionales de la IET San Nicolás: Democracia, Orientación Vocacional, Dirección de Grado, Escuela de Padres y más.";
$page_keywords = "proyectos IET San Nicolás, democracia escolar, orientación vocacional, escuela de padres, tiempo libre";
$page_image = "https://ietsannicolas.edu.co/images/parallax/14.jpg";
$css = "proyectos.css"; // Archivo CSS específico para esta página

include('includes/header.php');
?>

<!-- ============================================
     PÁGINA: PROYECTOS INSTITUCIONALES
     ============================================ -->
<main id="main-content" class="proyectos-page" role="main">

    <!-- ============================================
         TÍTULO PRINCIPAL
         ============================================ -->
    <section class="proyectos-header">
        <div class="container">
            <h1 class="titulo-principal yellow-text center" data-aos="fade-down">
                <i class="material-icons large">folder_special</i>
                PROYECTOS INSTITUCIONALES
            </h1>
            <p class="subtitulo-pagina white-text center" data-aos="fade-up" data-aos-delay="200">
                Iniciativas pedagógicas que fortalecen la formación integral de nuestra comunidad educativa
            </p>
        </div>
    </section>

    <!-- ============================================
         PROYECTOS - COLLAPSIBLE CARDS
         ============================================ -->
    <section class="proyectos-section">
        <div class="container">

            <ul class="collapsible proyectos-collapsible" data-collapsible="accordion">

                <!-- ============================================
                     PROYECTO 1: DEMOCRACIA Y DERECHOS HUMANOS
                     ============================================ -->
                <li id="democracia" class="scrollspy" data-aos="fade-up" data-aos-delay="100">
                    <div class="collapsible-header proyecto-header active">
                        <div class="header-icon">
                            <i class="material-icons">how_to_vote</i>
                        </div>
                        <div class="header-content">
                            <h2>Democracia y Derechos Humanos</h2>
                            <p>Participación democrática y formación ciudadana</p>
                        </div>
                        <i class="material-icons expand-icon">expand_more</i>
                    </div>

                    <div class="collapsible-body proyecto-body">
                        <div class="row">
                            <!-- Comité -->
                            <div class="col s12 m6">
                                <div class="proyecto-card">
                                    <h3 class="yellow-text">
                                        <i class="material-icons">groups</i>
                                        Comité de Democracia
                                    </h3>
                                    <p class="white-text">
                                        <strong>Problemática que convoca:</strong> La obligatoriedad del gobierno
                                        escolar
                                        con participación democrática según <strong>Art. 142 de la Ley 115 de
                                            1994</strong>
                                        y <strong>Art. 19 del Decreto 1860 de 1994</strong>.
                                    </p>
                                    <p class="white-text">
                                        El derecho constitucional de participar en las decisiones de la escuela le
                                        permite
                                        a los padres y madres de familia asumir la responsabilidad que tienen en la
                                        educación
                                        de sus hijos y es una posibilidad de ejercicio de la democracia al interior de
                                        la
                                        institución. Hace posible la participación de niños, niñas, padres de familia y
                                        maestros,
                                        permitiendo tomar conciencia de los problemas que se viven, promoviendo los
                                        intereses
                                        colectivos sobre los intereses particulares.
                                    </p>
                                </div>
                            </div>

                            <!-- Finalidad -->
                            <div class="col s12 m6">
                                <div class="proyecto-card">
                                    <h3 class="yellow-text">
                                        <i class="material-icons">emoji_events</i>
                                        Finalidad y Logros
                                    </h3>
                                    <p class="white-text">
                                        El proyecto tiene como finalidad la <strong>profundización y práctica de la
                                            democracia</strong>
                                        en la institución. Para ello es necesario el reconocimiento de los derechos y el
                                        cumplimiento de los deberes de todos los miembros, ofrecer las condiciones para
                                        el
                                        desarrollo de una personalidad responsable y autónoma, consciente del valor de
                                        su dignidad.
                                    </p>

                                    <h4 class="yellow-text">Logros Generales:</h4>
                                    <ul class="proyecto-lista">
                                        <li>
                                            <i class="material-icons tiny">check_circle</i>
                                            Desarrollar en la comunidad educativa la participación democrática, un
                                            pensamiento
                                            autónomo, crítico y de juicio político
                                        </li>
                                        <li>
                                            <i class="material-icons tiny">check_circle</i>
                                            Fortalecer y promover en los estudiantes su identidad personal y social
                                        </li>
                                        <li>
                                            <i class="material-icons tiny">check_circle</i>
                                            Rescatar y promover la identidad boyacense
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Competencias -->
                            <div class="col s12" id="competencias">
                                <div class="proyecto-card competencias-card">
                                    <h3 class="yellow-text center">
                                        <i class="material-icons">psychology</i>
                                        Competencias a Desarrollar
                                    </h3>

                                    <div class="row">
                                        <!-- Autonomía -->
                                        <div class="col s12 m4">
                                            <div class="competencia-item">
                                                <div class="competencia-icon">
                                                    <i class="material-icons">person</i>
                                                </div>
                                                <h4 class="yellow-text">Desarrollo de la Autonomía y del Juicio Político
                                                </h4>
                                                <ul class="white-text">
                                                    <li>Capacidad de pensar y actuar con criterios propios</li>
                                                    <li>Capacidad de asumir con responsabilidad sus derechos políticos
                                                    </li>
                                                    <li>Capacidad de asumir funciones de los cargos elegidos</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Comunicativas -->
                                        <div class="col s12 m4">
                                            <div class="competencia-item">
                                                <div class="competencia-icon">
                                                    <i class="material-icons">forum</i>
                                                </div>
                                                <h4 class="yellow-text">Competencias Comunicativas</h4>
                                                <ul class="white-text">
                                                    <li>Capacidad de comunicarse y resolver conflictos</li>
                                                    <li>Capacidad de respeto y valoración de las diferencias</li>
                                                    <li>Capacidad para participar en la deliberación pública</li>
                                                    <li>Capacidad para aplicar conocimientos adquiridos</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Socializadoras -->
                                        <div class="col s12 m4">
                                            <div class="competencia-item">
                                                <div class="competencia-icon">
                                                    <i class="material-icons">diversity_3</i>
                                                </div>
                                                <h4 class="yellow-text">Competencias Socializadoras</h4>
                                                <ul class="white-text">
                                                    <li>Capacidad de construir identidades</li>
                                                    <li>Capacidad de compartir rasgos de identidad personal</li>
                                                    <li>Capacidad de respetar el pensamiento político de los demás</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- ============================================
                     PROYECTO 2: ORIENTACIÓN VOCACIONAL
                     ============================================ -->
                <li id="orientacion" class="scrollspy" data-aos="fade-up" data-aos-delay="200">
                    <div class="collapsible-header proyecto-header">
                        <div class="header-icon">
                            <i class="material-icons">explore</i>
                        </div>
                        <div class="header-content">
                            <h2>Proyecto de Vida y Orientación Vocacional</h2>
                            <p>Construcción del proyecto de vida de los estudiantes</p>
                        </div>
                        <i class="material-icons expand-icon">expand_more</i>
                    </div>

                    <div class="collapsible-body proyecto-body">
                        <div class="proyecto-card">
                            <h3 class="yellow-text">
                                <i class="material-icons">account_balance</i>
                                Objetivo General
                            </h3>
                            <p class="white-text flow-text">
                                Contribuir a la <strong>construcción del proyecto de vida</strong> de los estudiantes
                                de la Institución Educativa San Nicolás - Tuta, mediante la orientación académica,
                                vocacional y profesional, para responder a las necesidades del contexto y aprovechar
                                las oportunidades que este les ofrece.
                            </p>

                            <h3 class="yellow-text">
                                <i class="material-icons">assignment_turned_in</i>
                                Objetivos Específicos
                            </h3>
                            <ul class="proyecto-lista">
                                <li>
                                    <i class="material-icons tiny">arrow_right</i>
                                    Ofrecer espacios donde el estudiante descubra sus habilidades, competencias e
                                    intereses
                                </li>
                                <li>
                                    <i class="material-icons tiny">arrow_right</i>
                                    Realizar talleres para motivar a los estudiantes en la construcción de su proyecto
                                    de vida
                                </li>
                                <li>
                                    <i class="material-icons tiny">arrow_right</i>
                                    Generar espacios de reflexión sobre la importancia de un proyecto de vida coherente
                                </li>
                                <li>
                                    <i class="material-icons tiny">arrow_right</i>
                                    Incentivar el deseo de superación personal mediante el reconocimiento de sus
                                    potencialidades
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <!-- ============================================
                     PROYECTO 3: DIRECCIÓN DE GRADO
                     ============================================ -->
                <li id="direccion-grado" class="scrollspy" data-aos="fade-up" data-aos-delay="300">
                    <div class="collapsible-header proyecto-header">
                        <div class="header-icon">
                            <i class="material-icons">school</i>
                        </div>
                        <div class="header-content">
                            <h2>Proyecto de Dirección de Grado</h2>
                            <p>Acompañamiento pedagógico y formativo</p>
                        </div>
                        <i class="material-icons expand-icon">expand_more</i>
                    </div>

                    <div class="collapsible-body proyecto-body">
                        <div class="proyecto-card">
                            <h3 class="yellow-text">
                                <i class="material-icons">school</i>
                                Descripción
                            </h3>
                            <p class="white-text flow-text">
                                El proyecto de dirección de grado busca <strong>fortalecer el acompañamiento
                                    pedagógico</strong>
                                de los estudiantes en su proceso formativo, promoviendo valores, convivencia y
                                rendimiento académico.
                            </p>

                            <h3 class="yellow-text">
                                <i class="material-icons">track_changes</i>
                                Estrategias
                            </h3>
                            <ul class="proyecto-lista">
                                <li>
                                    <i class="material-icons tiny">check_circle</i>
                                    Seguimiento académico personalizado
                                </li>
                                <li>
                                    <i class="material-icons tiny">check_circle</i>
                                    Acompañamiento en convivencia escolar
                                </li>
                                <li>
                                    <i class="material-icons tiny">check_circle</i>
                                    Comunicación constante con padres de familia
                                </li>
                                <li>
                                    <i class="material-icons tiny">check_circle</i>
                                    Promoción de valores institucionales
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <!-- ============================================
                     PROYECTO 4: ESCUELA DE PADRES
                     ============================================ -->
                <li id="escuela-padres" class="scrollspy" data-aos="fade-up" data-aos-delay="400">
                    <div class="collapsible-header proyecto-header">
                        <div class="header-icon">
                            <i class="material-icons">family_restroom</i>
                        </div>
                        <div class="header-content">
                            <h2>Escuela de Padres de Familia</h2>
                            <p>Fortalecimiento del vínculo familia-escuela</p>
                        </div>
                        <i class="material-icons expand-icon">expand_more</i>
                    </div>

                    <div class="collapsible-body proyecto-body">
                        <div class="proyecto-card">
                            <h3 class="yellow-text">
                                <i class="material-icons">psychology_alt</i>
                                Justificación
                            </h3>
                            <p class="white-text flow-text">
                                La <strong>Escuela de Padres</strong> busca fortalecer el vínculo entre la familia y
                                la institución educativa, brindando herramientas para el acompañamiento efectivo en el
                                proceso formativo de los estudiantes.
                            </p>

                            <h3 class="yellow-text">
                                <i class="material-icons">lightbulb</i>
                                Objetivos
                            </h3>
                            <ul class="proyecto-lista">
                                <li>
                                    <i class="material-icons tiny">arrow_right</i>
                                    Sensibilizar a los padres sobre su rol en la educación de sus hijos
                                </li>
                                <li>
                                    <i class="material-icons tiny">arrow_right</i>
                                    Brindar herramientas para el manejo de situaciones familiares
                                </li>
                                <li>
                                    <i class="material-icons tiny">arrow_right</i>
                                    Fortalecer la comunicación familia-institución
                                </li>
                                <li>
                                    <i class="material-icons tiny">arrow_right</i>
                                    Promover la participación activa de los padres
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <!-- ============================================
                     PROYECTO 5: ATENCIÓN A PADRES
                     ============================================ -->
                <li id="atencion-padres" class="scrollspy" data-aos="fade-up" data-aos-delay="500">
                    <div class="collapsible-header proyecto-header">
                        <div class="header-icon">
                            <i class="material-icons">support_agent</i>
                        </div>
                        <div class="header-content">
                            <h2>Atención a Padres de Familia</h2>
                            <p>Seguimiento y comunicación efectiva</p>
                        </div>
                        <i class="material-icons expand-icon">expand_more</i>
                    </div>

                    <div class="collapsible-body proyecto-body">
                        <div class="proyecto-card">
                            <h3 class="yellow-text">
                                <i class="material-icons">date_range</i>
                                Estrategias de Implementación
                            </h3>
                            <ul class="proyecto-lista">
                                <li>
                                    <i class="material-icons tiny">event</i>
                                    Promover la asistencia constante de los padres a las jornadas de atención según
                                    cronograma
                                </li>
                                <li>
                                    <i class="material-icons tiny">assignment</i>
                                    Realizar seguimiento continuo a la asistencia mediante formato diseñado
                                </li>
                                <li>
                                    <i class="material-icons tiny">phone</i>
                                    Establecer relación directa con padres de estudiantes con dificultades
                                </li>
                                <li>
                                    <i class="material-icons tiny">campaign</i>
                                    Generar estrategias que motiven la asistencia de los padres
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <!-- ============================================
                     PROYECTO 6: APROVECHAMIENTO DEL TIEMPO LIBRE
                     ============================================ -->
                <li id="tiempo-libre" class="scrollspy" data-aos="fade-up" data-aos-delay="600">
                    <div class="collapsible-header proyecto-header">
                        <div class="header-icon">
                            <i class="material-icons">sports_soccer</i>
                        </div>
                        <div class="header-content">
                            <h2>Aprovechamiento del Tiempo Libre</h2>
                            <p>Recreación y deporte para el desarrollo integral</p>
                        </div>
                        <i class="material-icons expand-icon">expand_more</i>
                    </div>

                    <div class="collapsible-body proyecto-body">
                        <div class="row">
                            <div class="col s12 m6">
                                <div class="proyecto-card">
                                    <h3 class="yellow-text">
                                        <i class="material-icons">info</i>
                                        Contexto
                                    </h3>
                                    <p class="white-text">
                                        La juventud actual atraviesa por diferentes situaciones que dispersan la
                                        atención
                                        en actividades inoficiosas y poco productivas, como el <strong>mal uso del
                                            celular
                                            y los videojuegos</strong>.
                                    </p>
                                    <p class="white-text">
                                        De otra parte, algunas situaciones de índole familiar afectan emocional y
                                        actitudinalmente a los estudiantes.
                                    </p>
                                    <p class="white-text">
                                        Se hace necesario implementar diferentes actividades que motiven y vinculen a
                                        los
                                        estudiantes de manera activa y participativa, desarrollando todas sus
                                        potencialidades
                                        y aprendiendo a emplear el <strong>tiempo libre de forma provechosa y
                                            recreativa</strong>.
                                    </p>
                                </div>
                            </div>

                            <div class="col s12 m6">
                                <div class="proyecto-card">
                                    <h3 class="yellow-text">
                                        <i class="material-icons">emoji_events</i>
                                        Objetivo General
                                    </h3>
                                    <p class="white-text">
                                        Brindar a los estudiantes un <strong>espacio de esparcimiento y aprovechamiento
                                            del tiempo libre</strong> en la práctica recreo-deportiva durante los
                                        descansos
                                        en los diferentes espacios que ofrece la institución.
                                    </p>

                                    <h3 class="yellow-text">
                                        <i class="material-icons">track_changes</i>
                                        Objetivos Específicos
                                    </h3>
                                    <ul class="proyecto-lista">
                                        <li>
                                            <i class="material-icons tiny">directions_run</i>
                                            Promover en los estudiantes la práctica de la actividad física
                                        </li>
                                        <li>
                                            <i class="material-icons tiny">schedule</i>
                                            Fomentar en la comunidad educativa el aprovechamiento del tiempo libre
                                        </li>
                                        <li>
                                            <i class="material-icons tiny">sports</i>
                                            Incentivar la práctica del juego limpio y el cumplimiento de normas
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>

        </div>
    </section>

</main>

<!-- ============================================
     TABLE OF CONTENTS (SCROLLSPY)
     ============================================ -->
<aside class="col hide-on-small-only m3 pinned" data-aos="fade-left" role="navigation"
    aria-label="Navegación de proyectos">
    <div class="toc-wrapper">
        <h5 class="toc-title yellow-text">
            <i class="material-icons">list</i>
            Proyectos
        </h5>
        <ul class="table-of-contents">
            <li><a href="#democracia">
                    <i class="material-icons tiny">how_to_vote</i> Democracia y DDHH
                </a></li>
            <li style="padding-left: 30px;"><a href="#competencias">
                    <i class="material-icons tiny">psychology</i> Competencias
                </a></li>
            <li><a href="#orientacion">
                    <i class="material-icons tiny">explore</i> Orientación Vocacional
                </a></li>
            <li><a href="#direccion-grado">
                    <i class="material-icons tiny">school</i> Dirección de Grado
                </a></li>
            <li><a href="#escuela-padres">
                    <i class="material-icons tiny">family_restroom</i> Escuela de Padres
                </a></li>
            <li><a href="#atencion-padres">
                    <i class="material-icons tiny">support_agent</i> Atención a Padres
                </a></li>
            <li><a href="#tiempo-libre">
                    <i class="material-icons tiny">sports_soccer</i> Tiempo Libre
                </a></li>
        </ul>
    </div>
</aside>

<!-- ============================================
     JAVASCRIPT
     ============================================ -->
<script src="js/materialize.min.js"></script>
     
<script>
    // Inicializar collapsible
    document.addEventListener('DOMContentLoaded', function () {
        var elems = document.querySelectorAll('.collapsible');
        M.Collapsible.init(elems, {
            accordion: false // Permite abrir múltiples a la vez
        });

        // Abrir el primero por defecto
        var instance = M.Collapsible.getInstance(elems[0]);
        if (instance) {
            instance.open(0);
        }
    });

    // ScrollSpy
    document.addEventListener('DOMContentLoaded', function () {
        var elems = document.querySelectorAll('.scrollspy');
        M.ScrollSpy.init(elems, {
            scrollOffset: 100
        });
    });

    // Background dinámico
    document.addEventListener("DOMContentLoaded", function () {
        document.body.style.backgroundImage = "url('./images/parallax/14.jpg')";
        document.body.style.transition = "background-image 0.8s ease-in-out";
    });

    // Ocultar TOC al llegar al footer
    document.addEventListener("scroll", function () {
        const toc = document.querySelector(".pinned");
        const footer = document.querySelector("footer");

        if (!toc || !footer) return;

        const footerTop = footer.getBoundingClientRect().top;
        const viewportHeight = window.innerHeight;

        if (footerTop < viewportHeight) {
            toc.classList.add("hidden");
        } else {
            toc.classList.remove("hidden");
        }
    });

    // Smooth scroll
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

<?php include('includes/footer.php'); ?>