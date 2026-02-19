<?php 
$menu = "Especialidades";
$css = "niveles.css"; // CSS específico para esta página

// Meta tags específicos
$page_title = "Niveles Académicos - Técnico en Desarrollo Web | IET San Nicolás";
$page_description = "Conoce el plan de estudios del técnico en desarrollo web por grados: desde informática básica en 6° hasta proyectos complejos en 11°.";
$page_keywords = "plan de estudios desarrollo web, asignaturas técnico IET, programación por grados, informática Tuta";
$page_image = "https://ietsannicolas.edu.co/images/12.png";

include('includes/header.php'); 
?>

<!-- ============================================
     PÁGINA: NIVELES ACADÉMICOS
     ============================================ -->
<main id="main-content" class="niveles-page" role="main">

    <!-- ============================================
         TÍTULO PRINCIPAL
         ============================================ -->
    <section class="niveles-header">
        <div class="container">
            <h1 class="titulo-principal yellow-text center" data-aos="fade-down">
                <i class="material-icons large">school</i>
                NIVELES ACADÉMICOS
            </h1>
            <p class="subtitulo-pagina white-text center" data-aos="fade-up" data-aos-delay="200">
                Asignaturas según los niveles académicos del técnico en desarrollo web
            </p>
        </div>
    </section>

    <!-- ============================================
         GRID DE NIVELES (GRADOS)
         ============================================ -->
    <section class="niveles-section">
        <div class="container">
            
            <div class="row niveles-grid">
                
                <!-- ============================================
                     GRADO 6° - SEXTO
                     ============================================ -->
                <div class="col s12 m8 offset-m3" id="sexto" data-aos="fade-up" data-aos-delay="100">
                    <article class="nivel-card scrollspy">
                        <div class="nivel-badge grado-6">
                            <span>6°</span>
                        </div>
                        
                        <div class="nivel-header">
                            <div class="nivel-icon grado-6-icon">
                                <i class="material-icons">memory</i>
                            </div>
                            <h2 class="yellow-text">Grado Sexto</h2>
                            <p class="nivel-subtitulo">Informática Básica</p>
                        </div>
                        
                        <div class="nivel-content">
                            <h3 class="yellow-text">
                                <i class="material-icons tiny">computer</i>
                                La Base para el Desarrollo Web
                            </h3>
                            
                            <div class="tema-section">
                                <h4 class="white-text">¿Qué se aprende?</h4>
                                <ul class="lista-temas">
                                    <li><i class="material-icons tiny">check</i> <strong>Hardware:</strong> Componentes físicos del computador</li>
                                    <li><i class="material-icons tiny">check</i> <strong>Software:</strong> Programas y aplicaciones</li>
                                    <li><i class="material-icons tiny">check</i> <strong>Internet:</strong> Acceso a la red</li>
                                    <li><i class="material-icons tiny">check</i> <strong>Seguridad:</strong> Protección de datos</li>
                                    <li><i class="material-icons tiny">check</i> <strong>Programación:</strong> Algoritmos básicos</li>
                                </ul>
                            </div>

                            <div class="tema-section">
                                <h4 class="white-text">Relación con Desarrollo Web</h4>
                                <ul class="lista-temas">
                                    <li><i class="material-icons tiny">arrow_right</i> Fundamentos del computador</li>
                                    <li><i class="material-icons tiny">arrow_right</i> Introducción a JavaScript y Python</li>
                                    <li><i class="material-icons tiny">arrow_right</i> Uso de editores de código</li>
                                </ul>
                            </div>

                            <div class="resumen-box">
                                <p class="white-text">
                                    <strong>Resumen:</strong> Sienta las bases para el desarrollo web, proporcionando 
                                    habilidades clave para el pensamiento computacional y la ciudadanía digital.
                                </p>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- ============================================
                     GRADO 7° - SÉPTIMO
                     ============================================ -->
                <div class="col s12 m8 offset-m3" id="septimo" data-aos="fade-up" data-aos-delay="200">
                    <article class="nivel-card scrollspy">
                        <div class="nivel-badge grado-7">
                            <span>7°</span>
                        </div>
                        
                        <div class="nivel-header">
                            <div class="nivel-icon grado-7-icon">
                                <i class="material-icons">code</i>
                            </div>
                            <h2 class="yellow-text">Grado Séptimo</h2>
                            <p class="nivel-subtitulo">Introducción a la Programación</p>
                        </div>
                        
                        <div class="nivel-content">
                            <h3 class="yellow-text">
                                <i class="material-icons tiny">terminal</i>
                                Primeros Pasos en Código
                            </h3>
                            
                            <div class="tema-section">
                                <h4 class="white-text">Contenidos Clave</h4>
                                <ul class="lista-temas">
                                    <li><i class="material-icons tiny">check</i> Lógica de programación</li>
                                    <li><i class="material-icons tiny">check</i> Variables y tipos de datos</li>
                                    <li><i class="material-icons tiny">check</i> Estructuras de control</li>
                                    <li><i class="material-icons tiny">check</i> Funciones básicas</li>
                                    <li><i class="material-icons tiny">check</i> Debugging inicial</li>
                                </ul>
                            </div>

                            <div class="resumen-box">
                                <p class="white-text">
                                    <strong>Resumen:</strong> Desarrollo del pensamiento lógico y estructurado, 
                                    base fundamental para la programación web.
                                </p>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- ============================================
                     GRADO 8° - OCTAVO
                     ============================================ -->
                <div class="col s12 m8 offset-m3" id="octavo" data-aos="fade-up" data-aos-delay="300">
                    <article class="nivel-card scrollspy">
                        <div class="nivel-badge grado-8">
                            <span>8°</span>
                        </div>
                        
                        <div class="nivel-header">
                            <div class="nivel-icon grado-8-icon">
                                <i class="material-icons">web</i>
                            </div>
                            <h2 class="yellow-text">Grado Octavo</h2>
                            <p class="nivel-subtitulo">HTML y CSS Básico</p>
                        </div>
                        
                        <div class="nivel-content">
                            <h3 class="yellow-text">
                                <i class="material-icons tiny">language</i>
                                Primeras Páginas Web
                            </h3>
                            
                            <div class="tema-section">
                                <h4 class="white-text">Tecnologías Web Básicas</h4>
                                <ul class="lista-temas">
                                    <li><i class="material-icons tiny">check</i> <strong>HTML:</strong> Estructura de páginas web</li>
                                    <li><i class="material-icons tiny">check</i> <strong>CSS:</strong> Estilos y diseño</li>
                                    <li><i class="material-icons tiny">check</i> Etiquetas semánticas</li>
                                    <li><i class="material-icons tiny">check</i> Layouts básicos</li>
                                    <li><i class="material-icons tiny">check</i> Responsive design inicial</li>
                                </ul>
                            </div>

                            <div class="resumen-box">
                                <p class="white-text">
                                    <strong>Resumen:</strong> Introducción al diseño web con HTML y CSS, 
                                    creando las primeras páginas web funcionales.
                                </p>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- ============================================
                     GRADO 9° - NOVENO
                     ============================================ -->
                <div class="col s12 m8 offset-m3" id="noveno" data-aos="fade-up" data-aos-delay="400">
                    <article class="nivel-card scrollspy">
                        <div class="nivel-badge grado-9">
                            <span>9°</span>
                        </div>
                        
                        <div class="nivel-header">
                            <div class="nivel-icon grado-9-icon">
                                <i class="material-icons">javascript</i>
                            </div>
                            <h2 class="yellow-text">Grado Noveno</h2>
                            <p class="nivel-subtitulo">JavaScript Interactivo</p>
                        </div>
                        
                        <div class="nivel-content">
                            <h3 class="yellow-text">
                                <i class="material-icons tiny">touch_app</i>
                                Páginas Web Dinámicas
                            </h3>
                            
                            <div class="tema-section">
                                <h4 class="white-text">JavaScript Básico</h4>
                                <ul class="lista-temas">
                                    <li><i class="material-icons tiny">check</i> Sintaxis de JavaScript</li>
                                    <li><i class="material-icons tiny">check</i> DOM Manipulation</li>
                                    <li><i class="material-icons tiny">check</i> Eventos y listeners</li>
                                    <li><i class="material-icons tiny">check</i> Validación de formularios</li>
                                    <li><i class="material-icons tiny">check</i> Animaciones básicas</li>
                                </ul>
                            </div>

                            <div class="resumen-box">
                                <p class="white-text">
                                    <strong>Resumen:</strong> Añade interactividad a las páginas web con JavaScript, 
                                    creando experiencias dinámicas para el usuario.
                                </p>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- ============================================
                     GRADO 10° - DÉCIMO (DESTACADO)
                     ============================================ -->
                <div class="col s12 m8 offset-m3" id="decimo" data-aos="fade-up" data-aos-delay="500">
                    <article class="nivel-card nivel-destacado scrollspy">
                        <div class="nivel-badge-destacado grado-10">
                            <i class="material-icons">star</i>
                            <span>10°</span>
                        </div>
                        
                        <div class="nivel-header">
                            <div class="nivel-icon grado-10-icon">
                                <i class="material-icons">developer_mode</i>
                            </div>
                            <h2 class="yellow-text">Grado Décimo</h2>
                            <p class="nivel-subtitulo">Desarrollo Web Profesional</p>
                        </div>
                        
                        <div class="nivel-content">
                            <h3 class="yellow-text">
                                <i class="material-icons tiny">build</i>
                                Aplicaciones Web Completas
                            </h3>
                            
                            <div class="tema-section">
                                <h4 class="white-text">Tecnologías Avanzadas</h4>
                                <ul class="lista-temas">
                                    <li><i class="material-icons tiny">check</i> <strong>PHP:</strong> Desarrollo backend</li>
                                    <li><i class="material-icons tiny">check</i> <strong>MySQL:</strong> Bases de datos</li>
                                    <li><i class="material-icons tiny">check</i> Frameworks CSS (Bootstrap, Materialize)</li>
                                    <li><i class="material-icons tiny">check</i> APIs y AJAX</li>
                                    <li><i class="material-icons tiny">check</i> Proyectos web escalables</li>
                                </ul>
                            </div>

                            <div class="tema-section">
                                <h4 class="white-text">Proyectos Prácticos</h4>
                                <ul class="lista-temas">
                                    <li><i class="material-icons tiny">arrow_right</i> Sistemas de gestión</li>
                                    <li><i class="material-icons tiny">arrow_right</i> E-commerce básico</li>
                                    <li><i class="material-icons tiny">arrow_right</i> Portales informativos</li>
                                </ul>
                            </div>

                            <div class="resumen-box destacado">
                                <p class="white-text">
                                    <strong>Resumen:</strong> Desarrollo de aplicaciones web completas con backend, 
                                    bases de datos y frontend moderno. Preparación profesional.
                                </p>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- ============================================
                     GRADO 11° - ONCE (DESTACADO)
                     ============================================ -->
                <div class="col s12 m8 offset-m3" id="once" data-aos="fade-up" data-aos-delay="600">
                    <article class="nivel-card nivel-destacado scrollspy">
                        <div class="nivel-badge-destacado grado-11">
                            <i class="material-icons">star</i>
                            <span>11°</span>
                        </div>
                        
                        <div class="nivel-header">
                            <div class="nivel-icon grado-11-icon">
                                <i class="material-icons">emoji_events</i>
                            </div>
                            <h2 class="yellow-text">Grado Once</h2>
                            <p class="nivel-subtitulo">Proyecto de Grado</p>
                        </div>
                        
                        <div class="nivel-content">
                            <h3 class="yellow-text">
                                <i class="material-icons tiny">rocket_launch</i>
                                Desarrollo Web Profesional
                            </h3>
                            
                            <div class="tema-section">
                                <h4 class="white-text">Diseño Web Avanzado</h4>
                                <ul class="lista-temas">
                                    <li><i class="material-icons tiny">check</i> Diseño de interacción (UX/UI)</li>
                                    <li><i class="material-icons tiny">check</i> Patrones de diseño</li>
                                    <li><i class="material-icons tiny">check</i> Accesibilidad (WCAG)</li>
                                    <li><i class="material-icons tiny">check</i> Diseño móvil avanzado</li>
                                    <li><i class="material-icons tiny">check</i> Figma, Sketch, Adobe XD</li>
                                </ul>
                            </div>

                            <div class="tema-section">
                                <h4 class="white-text">Bases de Datos Avanzadas</h4>
                                <ul class="lista-temas">
                                    <li><i class="material-icons tiny">check</i> Normalización de datos</li>
                                    <li><i class="material-icons tiny">check</i> Optimización SQL</li>
                                    <li><i class="material-icons tiny">check</i> Bases de datos NoSQL</li>
                                </ul>
                            </div>

                            <div class="tema-section">
                                <h4 class="white-text">Proyecto de Grado</h4>
                                <ul class="lista-temas">
                                    <li><i class="material-icons tiny">star</i> Aplicación web completa</li>
                                    <li><i class="material-icons tiny">star</i> Solución innovadora</li>
                                    <li><i class="material-icons tiny">star</i> Documentación profesional</li>
                                    <li><i class="material-icons tiny">star</i> Presentación y defensa</li>
                                </ul>
                            </div>

                            <!-- Lenguajes de Programación -->
                            <div class="lenguajes-section ">
                                <h4 class="yellow-text center">Lenguajes Utilizados</h4>
                                <div class="lenguajes-grid">
                                    <div class="lenguaje-item">
                                        <i class="material-icons">data_object</i>
                                        <span>HTML</span>
                                    </div>
                                    <div class="lenguaje-item">
                                        <i class="material-icons">style</i>
                                        <span>CSS</span>
                                    </div>
                                    <div class="lenguaje-item">
                                        <i class="material-icons">code</i>
                                        <span>JavaScript</span>
                                    </div>
                                    <div class="lenguaje-item">
                                        <i class="material-icons">php</i>
                                        <span>PHP</span>
                                    </div>
                                    <div class="lenguaje-item">
                                        <i class="material-icons">storage</i>
                                        <span>MySQL</span>
                                    </div>
                                    <div class="lenguaje-item">
                                        <i class="material-icons">database</i>
                                        <span>NoSQL</span>
                                    </div>
                                </div>
                            </div>

                            <div class="resumen-box destacado">
                                <p class="white-text">
                                    <strong>Resumen:</strong> Consolidación de conocimientos mediante proyecto de grado. 
                                    Desarrollo de aplicaciones complejas con estándares profesionales.
                                </p>
                            </div>
                        </div>
                    </article>
                </div>

            </div>
        </div>
    </section>

</main>

<!-- ============================================
     TABLE OF CONTENTS (SCROLLSPY)
     ============================================ -->
<aside class="col hide-on-small-only m3 l2 pinned" 
       data-aos="fade-left"
       role="navigation"
       aria-label="Navegación de niveles">
    <div class="toc-wrapper">
        <h5 class="toc-title yellow-text">
            <i class="material-icons">list</i>
            Grados
        </h5>
        <ul class="table-of-contents">
            <li><a href="#sexto">
                <i class="material-icons tiny">looks_6</i> Grado 6°
            </a></li>
            <li><a href="#septimo">
                <i class="material-icons tiny">filter_7</i> Grado 7°
            </a></li>
            <li><a href="#octavo">
                <i class="material-icons tiny">filter_8</i> Grado 8°
            </a></li>
            <li><a href="#noveno">
                <i class="material-icons tiny">filter_9</i> Grado 9°
            </a></li>
            <li><a href="#decimo">
                <i class="material-icons tiny">star</i> Grado 10°
            </a></li>
            <li><a href="#once">
                <i class="material-icons tiny">star</i> Grado 11°
            </a></li>
        </ul>
    </div>
</aside>

<!-- ============================================
     JAVASCRIPT
     ============================================ -->

<script src="js/materialize.min.js"></script>
<script>
// ScrollSpy
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.scrollspy');
    M.ScrollSpy.init(elems, {
        scrollOffset: 100
    });
});

// Background
document.addEventListener("DOMContentLoaded", function() {
    document.body.style.backgroundImage = "url('./images/parallax/14.jpg')";
    document.body.style.transition = "background-image 0.8s ease-in-out";
});

// Ocultar TOC al llegar al footer
document.addEventListener("scroll", function() {
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
document.querySelectorAll('.table-of-contents a').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
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
</script>

<?php include('includes/footer.php'); ?>