<?php
$menu = "Especialidades";
$css = "tecnico-web.css"; // CSS específico para esta página

// Meta tags específicos
$page_title = "Técnico en Desarrollo de Aplicaciones Web - IET San Nicolás";
$page_description = "Conoce el Técnico en Desarrollo de Aplicaciones Web de la IET San Nicolás, especialización implementada desde 2023 con enfoque en programación y diseño web.";
$page_keywords = "técnico desarrollo web, programación IET San Nicolás, aplicaciones web Tuta, diseño web Boyacá";
$page_image = "https://ietsannicolas.edu.co/images/12.png";

include('includes/header.php');
?>

<!-- ============================================
     PÁGINA: TÉCNICO EN DESARROLLO WEB - INICIO
     ============================================ -->
<main id="main-content" class="tecnico-inicio-page" role="main">

    <!-- ============================================
         TÍTULO PRINCIPAL
         ============================================ -->



    <!-- ============================================
         HERO SECTION CON VIDEO/ANIMACIÓN
         ============================================ -->
    <section class="hero-section">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <div class="container center">
                <div class="hero-badge" data-aos="zoom-in">
                    <i class="material-icons">verified</i>
                    <span>Certificado Oficial</span>
                </div>
                <h1 class="hero-title" data-aos="fade-down" data-aos-delay="200">
                    <span class="code-symbol">&lt;</span>
                    Técnico en Desarrollo de Aplicaciones Web
                    <span class="code-symbol">/&gt;</span>
                </h1>
                <p class="hero-subtitle" data-aos="fade-up" data-aos-delay="400">
                    Construye el futuro digital. Aprende a crear aplicaciones web profesionales.
                </p>
                <div class="hero-cta" data-aos="fade-up" data-aos-delay="600">
                    <a href="#info" class="btn-hero btn-primary waves-effect waves-light">
                        <i class="material-icons left">rocket_launch</i>
                        Comenzar Ahora
                    </a>
                    <a href="#tecnologias" class="btn-hero btn-secondary waves-effect waves-light">
                        <i class="material-icons left">code</i>
                        Ver Tecnologías
                    </a>
                </div>
            </div>
        </div>
        <div class="hero-scroll-indicator">
            <i class="material-icons">expand_more</i>
        </div>
    </section>
    <!-- ============================================
         CARRUSEL DE IMÁGENES
         ============================================ -->
    <section class="carrusel-section">
        <div class="container">
            <div class="carrusel-container" data-aos="fade-up">
                <div class="carrusel-imagenes">
                    <img src="images/tecnico/11.jpeg" alt="Estudiantes técnico desarrollo web">
                    <img src="images/tecnico/2.jpeg" alt="Laboratorio de computación">
                    <img src="images/tecnico/1.jpeg" alt="Clase de programación">
                    <img src="images/tecnico/4.jpeg" alt="Proyectos de estudiantes">
                    <img src="images/tecnico/12.png" alt="Desarrollo de aplicaciones">
                    <img src="images/tecnico/5.jpeg" alt="Trabajo en equipo">
                    <img src="images/tecnico/6.jpeg" alt="Presentación de proyectos">
                    <img src="images/tecnico/7.jpeg" alt="Estudiantes desarrollando">
                    <img src="images/tecnico/8.jpeg" alt="Aula de sistemas">
                    <img src="images/tecnico/3.jpeg" alt="Equipo de trabajo">
                    <img src="images/tecnico/10.jpeg" alt="Tecnología educativa">
                </div>

                <!-- Botones de navegación -->
                <span class="prev" aria-label="Imagen anterior">&#10094;</span>
                <span class="next" aria-label="Siguiente imagen">&#10095;</span>

                <!-- Indicadores -->
                <div class="indicadores" role="navigation" aria-label="Indicadores del carrusel">
                    <!-- Se generarán automáticamente con JavaScript -->
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         STATS SECTION (NÚMEROS ANIMADOS)
         ============================================ -->
    <section class="stats-section" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col s12 m3">
                    <div class="stat-card">
                        <i class="material-icons">calendar_today</i>
                        <div class="stat-number" data-target="2">0</div>
                        <div class="stat-label">Años de Formación <br></div>
                    </div>
                </div>
                <div class="col s12 m3">
                    <div class="stat-card">
                        <i class="material-icons">code</i>
                        <div class="stat-number" data-target="6">0</div>
                        <div class="stat-label">Lenguajes de Programación</div>
                    </div>
                </div>
                <div class="col s12 m3">
                    <div class="stat-card">
                        <i class="material-icons">psychology</i>
                        <div class="stat-number" data-target="2">0</div>
                        <div class="stat-label">Horas Semanales</div>
                    </div>
                </div>
                <div class="col s12 m3">
                    <div class="stat-card">
                        <i class="material-icons">workspace_premium</i>
                        <div class="stat-number" data-target="100">0</div>
                        <div class="stat-label">% Práctico</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         INFORMACIÓN RESUMIDA (TABS O CARDS CORTAS)
         ============================================ -->
    <section id="info" class="info-section">
        <div class="container">
            <h2 class="section-title yellow-text center" data-aos="fade-down">
                <i class="material-icons">info</i>
                ¿Qué es el Técnico en Desarrollo de Aplicaciones Web?
            </h2>

            <div class="row">
                <!-- Card 1: Descripción -->
                <div class="col s12 m6 l4" data-aos="flip-left" data-aos-delay="100">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="material-icons">rocket_launch</i>
                        </div>
                        <h3>Nueva Especialización</h3>
                        <p>
                            Desde <strong>2023</strong>, reemplazamos el técnico en acero por desarrollo web,
                            respondiendo a las necesidades del mundo digital actual.
                        </p>
                    </div>
                </div>

                <!-- Card 2: Sin Articulación -->
                <div class="col s12 m6 l4" data-aos="flip-left" data-aos-delay="200">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="material-icons">school</i>
                        </div>
                        <h3>Técnico Propio</h3>
                        <p>
                            Sin depender de universidades, ofrecemos formación técnica
                            <strong>100% institucional</strong> con certificación oficial.
                        </p>
                    </div>
                </div>

                <!-- Card 3: Enfoque Práctico -->
                <div class="col s12 m6 l4" data-aos="flip-left" data-aos-delay="300">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="material-icons">construction</i>
                        </div>
                        <h3>Proyectos Reales</h3>
                        <p>
                            Desarrolla aplicaciones web completas desde <strong>grado 10°</strong>
                            hasta tu proyecto de grado en <strong>11°</strong>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         TIMELINE (HISTORIA VISUAL)
         ============================================ -->
    <section class="timeline-section" data-aos="fade-up">
        <div class="container">
            <h2 class="section-title yellow-text center">
                <i class="material-icons">timeline</i>
                Evolución del Técnico
            </h2>

            <div class="timeline">
                <div class="timeline-item" data-aos="fade-right">
                    <div class="timeline-dot">2022</div>
                    <div class="timeline-content">
                        <h4>La Idea</h4>
                        <p>La rectora propone transformar la institución en técnica sin articulación universitaria.</p>
                    </div>
                </div>

                <div class="timeline-item" data-aos="fade-left">
                    <div class="timeline-dot">2023</div>
                    <div class="timeline-content">
                        <h4>Primera Generación</h4>
                        <p>Grado 10° se convierte en la primera promoción del técnico en desarrollo web.</p>
                    </div>
                </div>

                <div class="timeline-item" data-aos="fade-right">
                    <div class="timeline-dot">2024</div>
                    <div class="timeline-content">
                        <h4>Proyectos de Grado</h4>
                        <p>Primera generación presenta sus proyectos web profesionales en grado 11°.</p>
                    </div>
                </div>

                <div class="timeline-item timeline-future" data-aos="fade-left">
                    <div class="timeline-dot">2025+</div>
                    <div class="timeline-content">
                        <h4>Expansión</h4>
                        <p>Consolidación del técnico con nuevas tecnologías y alianzas estratégicas.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         TECNOLOGÍAS (GRID INTERACTIVO)
         ============================================ -->
    <section id="tecnologias" class="tecnologias-section">
        <div class="container">
            <h2 class="section-title yellow-text center" data-aos="fade-down">
                <i class="material-icons">integration_instructions</i>
                Tecnologías que Aprenderás
            </h2>

            <div class="tecnologias-grid">
                <div class="tech-card" data-aos="zoom-in" data-aos-delay="100">
                    <div class="tech-logo html">
                        <i class="material-icons">language</i>
                    </div>
                    <h4>HTML5</h4>
                    <p>Estructura web</p>
                </div>

                <div class="tech-card" data-aos="zoom-in" data-aos-delay="150">
                    <div class="tech-logo css">
                        <i class="material-icons">style</i>
                    </div>
                    <h4>CSS3</h4>
                    <p>Diseño y estilos</p>
                </div>

                <div class="tech-card" data-aos="zoom-in" data-aos-delay="200">
                    <div class="tech-logo js">
                        <i class="material-icons">code</i>
                    </div>
                    <h4>JavaScript</h4>
                    <p>Interactividad</p>
                </div>

                <div class="tech-card" data-aos="zoom-in" data-aos-delay="250">
                    <div class="tech-logo php">
                        <i class="material-icons">dns</i>
                    </div>
                    <h4>PHP</h4>
                    <p>Backend</p>
                </div>

                <div class="tech-card" data-aos="zoom-in" data-aos-delay="300">
                    <div class="tech-logo mysql">
                        <i class="material-icons">storage</i>
                    </div>
                    <h4>MySQL</h4>
                    <p>Bases de datos</p>
                </div>

                <div class="tech-card" data-aos="zoom-in" data-aos-delay="350">
                    <div class="tech-logo frameworks">
                        <i class="material-icons">widgets</i>
                    </div>
                    <h4>Frameworks</h4>
                    <p>Bootstrap, Materialize</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         BENEFICIOS (ICONOS + TEXTO CORTO)
         ============================================ -->
    <section class="beneficios-section" data-aos="fade-up">
        <div class="container">
            <h2 class="section-title yellow-text center">
                <i class="material-icons">star</i>
                ¿Por Qué Elegir Este Técnico?
            </h2>

            <div class="row">
                <div class="col s12 m6 l3" data-aos="fade-up" data-aos-delay="100">
                    <div class="beneficio-item">
                        <i class="material-icons">trending_up</i>
                        <h4>Alta Demanda</h4>
                        <p>Desarrolladores web entre los perfiles más solicitados</p>
                    </div>
                </div>

                <div class="col s12 m6 l3" data-aos="fade-up" data-aos-delay="200">
                    <div class="beneficio-item">
                        <i class="material-icons">attach_money</i>
                        <h4>Buenos Salarios</h4>
                        <p>Ingresos competitivos desde el primer empleo</p>
                    </div>
                </div>

                <div class="col s12 m6 l3" data-aos="fade-up" data-aos-delay="300">
                    <div class="beneficio-item">
                        <i class="material-icons">laptop_mac</i>
                        <h4>Trabajo Remoto</h4>
                        <p>Posibilidad de trabajar desde cualquier lugar</p>
                    </div>
                </div>

                <div class="col s12 m6 l3" data-aos="fade-up" data-aos-delay="400">
                    <div class="beneficio-item">
                        <i class="material-icons">lightbulb</i>
                        <h4>Creatividad</h4>
                        <p>Transforma tus ideas en proyectos reales</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         PROCESO DE APRENDIZAJE (STEPS)
         ============================================ -->
    <section class="proceso-section">
        <div class="container">
            <h2 class="section-title yellow-text center" data-aos="fade-down">
                <i class="material-icons">stairs</i>
                Tu Camino al Éxito
            </h2>

            <div class="proceso-steps">
                <div class="step-item" data-aos="fade-right" data-aos-delay="100">
                    <div class="step-number">01</div>
                    <div class="step-content">
                        <h3>Fundamentos (6°-9°)</h3>
                        <p>Pensamiento computacional, lógica de programación y primeros pasos en HTML/CSS</p>
                    </div>
                </div>

                <div class="step-item" data-aos="fade-left" data-aos-delay="200">
                    <div class="step-number">02</div>
                    <div class="step-content">
                        <h3>Desarrollo (10°)</h3>
                        <p>PHP, MySQL, frameworks modernos y creación de aplicaciones web completas</p>
                    </div>
                </div>

                <div class="step-item" data-aos="fade-right" data-aos-delay="300">
                    <div class="step-number">03</div>
                    <div class="step-content">
                        <h3>Proyecto Final (11°)</h3>
                        <p>Desarrollo de tu proyecto de grado: una aplicación web profesional y documentada</p>
                    </div>
                </div>

                <div class="step-item step-final" data-aos="fade-left" data-aos-delay="400">
                    <div class="step-number"><i class="material-icons">emoji_events</i></div>
                    <div class="step-content">
                        <h3>Certificación</h3>
                        <p>Título de Técnico en Desarrollo de Aplicaciones Web + portafolio profesional</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         TESTIMONIOS/PROYECTOS DESTACADOS
         ============================================ -->
    <section class="proyectos-section" data-aos="fade-up">
        <div class="container">
            <h2 class="section-title yellow-text center">
                <i class="material-icons">auto_awesome</i>
                Proyectos Destacados
            </h2>

            <div class="row">
                <div class="col s12 m6 l4" data-aos="flip-up" data-aos-delay="100">
                    <div class="proyecto-card">
                        <div class="proyecto-icon">
                            <i class="material-icons">web</i>
                        </div>
                        <h4>Portal Institucional</h4>
                        <p>Sistema de gestión completo para la institución con panel administrativo</p>
                        <div class="proyecto-tags">
                            <span>PHP</span>
                            <span>MySQL</span>
                            <span>Bootstrap</span>
                        </div>
                    </div>
                </div>

                <div class="col s12 m6 l4" data-aos="flip-up" data-aos-delay="200">
                    <div class="proyecto-card">
                        <div class="proyecto-icon">
                            <i class="material-icons">shopping_cart</i>
                        </div>
                        <h4>E-Commerce Local</h4>
                        <p>Tienda en línea para productos artesanales de la región</p>
                        <div class="proyecto-tags">
                            <span>JavaScript</span>
                            <span>PHP</span>
                            <span>PayPal API</span>
                        </div>
                    </div>
                </div>

                <div class="col s12 m6 l4" data-aos="flip-up" data-aos-delay="300">
                    <div class="proyecto-card">
                        <div class="proyecto-icon">
                            <i class="material-icons">library_books</i>
                        </div>
                        <h4>Biblioteca Digital</h4>
                        <p>Plataforma de préstamo de libros con sistema de reservas</p>
                        <div class="proyecto-tags">
                            <span>AJAX</span>
                            <span>MySQL</span>
                            <span>Materialize</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         CTA FINAL (LLAMADO A LA ACCIÓN)
         ============================================ -->
    <section class="cta-section">
        <div class="cta-overlay"></div>
        <div class="container center">
            <h2 class="cta-title" data-aos="zoom-in">
                ¿Listo para Convertirte en Desarrollador Web?
            </h2>
            <p class="cta-text" data-aos="fade-up" data-aos-delay="200">
                Únete a la próxima generación de programadores.
                <br>El futuro digital comienza aquí.
            </p>
            <div class="cta-buttons" data-aos="fade-up" data-aos-delay="400">
                <a href="/contacto.php" class="btn-cta btn-cta-primary waves-effect waves-light">
                    <i class="material-icons left">send</i>
                    Inscríbete Ahora
                </a>
                <a href="niveles.php" class="btn-cta btn-cta-secondary waves-effect waves-light">
                    <i class="material-icons left">menu_book</i>
                    Ver Plan de Estudios
                </a>
            </div>
        </div>
    </section>


</main>

<!-- ============================================
     JAVASCRIPT
     ============================================ -->
<script src="js/materialize.min.js"></script>
<script>
    // ============================================
    // CARRUSEL DE IMÁGENES
    // ============================================
    document.addEventListener('DOMContentLoaded', function () {
        const carruselImagenes = document.querySelector('.carrusel-imagenes');
        const imagenes = carruselImagenes.querySelectorAll('img');
        const indicadoresContainer = document.querySelector('.indicadores');
        const totalImagenes = imagenes.length;
        let indiceActual = 0;
        let intervalo;

        // Crear indicadores dinámicamente
        for (let i = 0; i < totalImagenes; i++) {
            const indicador = document.createElement('div');
            indicador.classList.add('indicador');
            if (i === 0) indicador.classList.add('activo');
            indicador.setAttribute('data-index', i);
            indicador.setAttribute('role', 'button');
            indicador.setAttribute('aria-label', `Ir a imagen ${i + 1}`);
            indicadoresContainer.appendChild(indicador);
        }

        const indicadores = document.querySelectorAll('.indicador');

        function mostrarImagen(indice) {
            if (indice >= totalImagenes) {
                indiceActual = 0;
            } else if (indice < 0) {
                indiceActual = totalImagenes - 1;
            } else {
                indiceActual = indice;
            }

            const desplazamiento = -indiceActual * 100;
            carruselImagenes.style.transform = `translateX(${desplazamiento}%)`;

            // Actualizar indicadores
            indicadores.forEach((ind, i) => {
                ind.classList.toggle('activo', i === indiceActual);
            });
        }

        // Botones de navegación
        document.querySelector('.prev').addEventListener('click', () => {
            mostrarImagen(indiceActual - 1);
            reiniciarIntervalo();
        });

        document.querySelector('.next').addEventListener('click', () => {
            mostrarImagen(indiceActual + 1);
            reiniciarIntervalo();
        });

        // Click en indicadores
        indicadores.forEach(indicador => {
            indicador.addEventListener('click', () => {
                const indice = parseInt(indicador.getAttribute('data-index'));
                mostrarImagen(indice);
                reiniciarIntervalo();
            });
        });

        // Avance automático
        function iniciarIntervalo() {
            intervalo = setInterval(() => {
                mostrarImagen(indiceActual + 1);
            }, 5000); // Cambiar cada 5 segundos
        }

        function reiniciarIntervalo() {
            clearInterval(intervalo);
            iniciarIntervalo();
        }

        iniciarIntervalo();
    });

    // ============================================
    // COLLAPSIBLES (BOTONES EXPANDIBLES)
    // ============================================
    document.addEventListener('DOMContentLoaded', function () {
        const collapsibleBtns = document.querySelectorAll('.collapsible-btn');

        collapsibleBtns.forEach(btn => {
            btn.addEventListener('click', function () {
                this.classList.toggle('active');
                const content = this.nextElementSibling;
                const icon = this.querySelector('i');

                if (content.style.maxHeight) {
                    content.style.maxHeight = null;
                    content.classList.remove('active');
                    icon.textContent = 'add_circle';
                } else {
                    content.style.maxHeight = content.scrollHeight + 'px';
                    content.classList.add('active');
                    icon.textContent = 'remove_circle';
                }
            });
        });
    });

    // ============================================
    // BACKGROUND
    // ============================================
    document.addEventListener("DOMContentLoaded", function () {
        document.body.style.backgroundImage = "url('./images/parallax/14.jpg')";
        document.body.style.transition = "background-image 0.8s ease-in-out";
    });
    document.addEventListener('DOMContentLoaded', function () {
        const counters = document.querySelectorAll('.stat-number');
        let hasAnimated = false;

        const animateCounters = () => {
            if (hasAnimated) return;

            const statsSection = document.querySelector('.stats-section');
            const rect = statsSection.getBoundingClientRect();

            if (rect.top < window.innerHeight && rect.bottom >= 0) {
                hasAnimated = true;

                counters.forEach(counter => {
                    const target = parseInt(counter.getAttribute('data-target'));
                    const duration = 2000;
                    const increment = target / (duration / 16);
                    let current = 0;

                    const updateCounter = () => {
                        current += increment;
                        if (current < target) {
                            counter.textContent = Math.floor(current);
                            requestAnimationFrame(updateCounter);
                        } else {
                            counter.textContent = target;
                        }
                    };

                    updateCounter();
                });
            }
        };

        window.addEventListener('scroll', animateCounters);
        animateCounters(); // Check on load
    });

    // ============================================
    // SMOOTH SCROLL
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

    // ============================================
    // HERO SCROLL INDICATOR
    // ============================================
    document.querySelector('.hero-scroll-indicator')?.addEventListener('click', function () {
        document.querySelector('.stats-section').scrollIntoView({
            behavior: 'smooth'
        });
    });

    // ============================================
    // BACKGROUND
    // ============================================
    document.addEventListener("DOMContentLoaded", function () {
        document.body.style.backgroundImage = "url('./images/parallax/14.jpg')";
        document.body.style.transition = "background-image 0.8s ease-in-out";
    });
</script>

<?php include('includes/footer.php'); ?>