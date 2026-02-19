<?php 
$menu = "Nosotros";

// Meta tags específicos
$page_title = "Reseña Histórica - IET San Nicolás | Historia, Misión y Visión";
$page_description = "Conoce la historia de la Institución Educativa Técnica San Nicolás desde su fundación en 1957, nuestra misión, visión, principios y filosofía institucional.";
$page_keywords = "historia IET San Nicolás, fundación 1957, misión visión colegio Tuta, principios institucionales";
$page_image = "https://ietsannicolas.edu.co/images/nosotros/h2.jpeg";
$css = "nosotros.css"; // Archivo CSS específico para esta página

include 'includes/header.php'; 
?>

<!-- ============================================
     PÁGINA: RESEÑA HISTÓRICA
     ============================================ -->
<main id="main-content" class="nosotros-page" role="main">

    <!-- ============================================
         SECCIÓN: HISTORIA (TIMELINE)
         ============================================ -->
    <section id="historia" 
             class="historia-section" 
             data-aos="fade-up"
             aria-labelledby="titulo-historia">
        
        <div class="container">
            <!-- Título principal -->
            <h1 id="titulo-historia" class="titulo-principal yellow-text center" data-aos="fade-down">
                <i class="material-icons large">history</i>
                NUESTRA HISTORIA
            </h1>
            
            <!-- Timeline -->
            <div class="historia-timeline">
                
                <!-- Año 1957: Fundación -->
                <article class="timeline-item" data-aos="fade-right" data-aos-delay="100">
                    <div class="timeline-marker">
                        <span class="year">1957</span>
                    </div>
                    <div class="timeline-content">
                        <h3 class="yellow-text">
                            <i class="material-icons">foundation</i>
                            Fundación
                        </h3>
                        <p class="white-text">
                            La Institución Educativa San Nicolás fue fundada. En sus comienzos, las actividades 
                            académicas se desarrollaron en casas de familia y años más tarde adquirieron un lote 
                            con aportes de la comunidad.
                        </p>
                    </div>
                </article>
                
                <!-- Año 1997: Posprimaria -->
                <article class="timeline-item" data-aos="fade-left" data-aos-delay="200">
                    <div class="timeline-marker">
                        <span class="year">1997</span>
                    </div>
                    <div class="timeline-content">
                        <h3 class="yellow-text">
                            <i class="material-icons">school</i>
                            Posprimaria Rural
                        </h3>
                        <p class="white-text">
                            En la administración del Doctor Alcides Gómez se creó la posprimaria rural, 
                            dando la oportunidad a los jóvenes de la región a continuar sus estudios hasta el grado noveno.
                        </p>
                    </div>
                </article>
                
                <!-- Año 2003: Primera Fusión -->
                <article class="timeline-item" data-aos="fade-right" data-aos-delay="300">
                    <div class="timeline-marker">
                        <span class="year">2003</span>
                    </div>
                    <div class="timeline-content">
                        <h3 class="yellow-text">
                            <i class="material-icons">merge_type</i>
                            Primera Fusión
                        </h3>
                        <p class="white-text">
                            En octubre, con la <strong>Resolución 5762</strong>, se fusionan las escuelas de 
                            Jorge Eliecer Gaitán y El Salvial, adoptando como nombre 
                            <strong>Colegio de Educación Básica "San Nicolás"</strong>.
                        </p>
                    </div>
                </article>
                
                <!-- Año 2007: Fusión Siderúrgica -->
                <article class="timeline-item" data-aos="fade-left" data-aos-delay="400">
                    <div class="timeline-marker">
                        <span class="year">2007</span>
                    </div>
                    <div class="timeline-content">
                        <h3 class="yellow-text">
                            <i class="material-icons">add_circle</i>
                            Fusión Siderúrgica
                        </h3>
                        <p class="white-text">
                            En diciembre se fusiona la escuela de Siderúrgica con la <strong>Resolución 4884</strong>.
                        </p>
                    </div>
                </article>
                
                <!-- Año 2009: Nombre Actual -->
                <article class="timeline-item" data-aos="fade-right" data-aos-delay="500">
                    <div class="timeline-marker">
                        <span class="year">2009</span>
                    </div>
                    <div class="timeline-content">
                        <h3 class="yellow-text">
                            <i class="material-icons">verified</i>
                            Institución Educativa
                        </h3>
                        <p class="white-text">
                            En enero, con la <strong>Resolución 10-02</strong> de la Secretaría de Educación de Boyacá, 
                            adopta el nombre de <strong>Institución Educativa "San Nicolás"</strong>.
                        </p>
                    </div>
                </article>
                
                <!-- Año 2008: Expansión Secundaria -->
                <article class="timeline-item" data-aos="fade-left" data-aos-delay="600">
                    <div class="timeline-marker">
                        <span class="year">2008</span>
                    </div>
                    <div class="timeline-content">
                        <h3 class="yellow-text">
                            <i class="material-icons">trending_up</i>
                            Ampliación de Cobertura
                        </h3>
                        <p class="white-text">
                            Por ampliación de cobertura se inicia la básica secundaria en la sede Siderúrgica. 
                            Actualmente se ofrece el grado octavo y se sueña brindar en la institución el ciclo 
                            de educación media con articulación a la educación superior.
                        </p>
                    </div>
                </article>
                
                <!-- Presente -->
                <article class="timeline-item timeline-present" data-aos="fade-up" data-aos-delay="700">
                    <div class="timeline-marker">
                        <span class="year">HOY</span>
                    </div>
                    <div class="timeline-content">
                        <h3 class="yellow-text">
                            <i class="material-icons">stars</i>
                            Presente
                        </h3>
                        <p class="white-text">
                            Desde el año 2006, la institución cuenta con el nombramiento en propiedad de la 
                            <strong>Especialista Ana Jaqueline Saganome López</strong> como rectora. 
                            Actualmente laboran <strong>19 docentes</strong> y <strong>dos administrativos</strong>.
                        </p>
                    </div>
                </article>
                
            </div>
        </div>
    </section>

    <!-- ============================================
         SECCIÓN: MISIÓN Y VISIÓN
         ============================================ -->
    <section id="mision-vision" class="mision-vision-section">
        <div class="container">
            <div class="row">
                
                <!-- Misión -->
                <article class="col s12 l6 mision-card" data-aos="fade-right" data-aos-duration="1500">
                    <div class="card-mv mision">
                        <div class="card-icon">
                            <i class="material-icons">explore</i>
                        </div>
                        <h2 class="yellow-text center">MISIÓN</h2>
                        <div class="card-image">
                            <img src="./images/nosotros/m.png" 
                                 alt="Misión institucional IET San Nicolás"
                                 class="responsive-img">
                        </div>
                        <div class="card-content">
                            <p class="white-text">
                                La institución educativa San Nicolás propicia la prestación de servicio público educativo 
                                en los niveles de <strong>preescolar, básica, media y técnica</strong>, fortaleciendo la 
                                educación integral e inclusiva bajo los principios de <strong>cobertura, calidad, eficiencia 
                                y equidad</strong>, desarrollando competencias intelectuales, ciudadanas, estéticas y laborales, 
                                a través del perfeccionamiento del pensamiento crítico, reflexivo, creativo e innovador, 
                                optimizando el desempeño eficiente de los educandos en cualquier contexto.
                            </p>
                        </div>
                    </div>
                </article>
                
                <!-- Visión -->
                <article class="col s12 l6 vision-card" data-aos="fade-left" data-aos-duration="1500">
                    <div class="card-mv vision">
                        <div class="card-icon">
                            <i class="material-icons">visibility</i>
                        </div>
                        <h2 class="yellow-text center">VISIÓN</h2>
                        <div class="card-image">
                            <img src="./images/nosotros/v.png" 
                                 alt="Visión institucional IET San Nicolás"
                                 class="responsive-img">
                        </div>
                        <div class="card-content">
                            <p class="white-text">
                                La Institución educativa San Nicolás del municipio de Tuta entregará a la sociedad 
                                <strong>jóvenes ciudadanos y ciudadanas competentes</strong>, para asumir retos y 
                                posiciones transformadoras en su contexto natural y sociocultural.
                            </p>
                        </div>
                    </div>
                </article>
                
            </div>
        </div>
    </section>

    <!-- ============================================
         SECCIÓN: PRINCIPIOS (CAROUSEL)
         ============================================ -->
    <section id="principios" 
             class="principios-section" 
             data-aos="fade-up"
             aria-labelledby="titulo-principios">
        
        <div class="container">
            <h2 id="titulo-principios" class="titulo-seccion yellow-text center">
                <i class="material-icons">emoji_objects</i>
                PRINCIPIOS INSTITUCIONALES
            </h2>
            
            <!-- Carousel de Materialize -->
            <div class="carousel carousel-slider center" data-indicators="true">
                
                <!-- Principio 1: Formación Ética -->
                <div class="carousel-item principio-item" href="#principio1">
                    <div class="principio-content">
                        <div class="principio-icon">
                            <i class="material-icons">psychology</i>
                        </div>
                        <h3 class="yellow-text">FORMACIÓN ÉTICA Y MORAL</h3>
                        <p class="white-text">
                            Construcción del ambiente común y cotidiano de la Institución como expresión de nuestra 
                            relación con los compañeros, con los docentes, con los demás vínculos y personas activas 
                            en los procesos y el conocimiento de lo moral y ético, a través del <strong>respeto</strong>, 
                            la correlación entre <strong>comprensión y tolerancia</strong>, resultado del crecimiento 
                            personal y del compromiso de servicio a los demás, acorde con el concepto de comunidad, 
                            incluyendo el llamado de un ser espiritual y moral.
                        </p>
                    </div>
                </div>
                
                <!-- Principio 2: Valores -->
                <div class="carousel-item principio-item" href="#principio2">
                    <div class="principio-content">
                        <div class="principio-icon">
                            <i class="material-icons">favorite</i>
                        </div>
                        <h3 class="yellow-text">CONSTRUCCIÓN DE VALORES</h3>
                        <p class="white-text">
                            Comprensión de la persona como sujeto de valores en todos los niveles de su desarrollo y 
                            en todos los campos de relación que pueda establecer a través de su vida; como 
                            receptora-constructora activa de estructuras de valor que le permitan lograr la autonomía 
                            en el <strong>respeto, la responsabilidad, la honestidad, la tolerancia, el diálogo, 
                            la creatividad, la paz, la justicia, la cooperación y la amistad</strong>.
                        </p>
                    </div>
                </div>
                
                <!-- Principio 3: Compromiso Social -->
                <div class="carousel-item principio-item" href="#principio3">
                    <div class="principio-content">
                        <div class="principio-icon">
                            <i class="material-icons">groups</i>
                        </div>
                        <h3 class="yellow-text">COMPROMISO SOCIAL Y LIDERAZGO DE SERVICIO</h3>
                        <p class="white-text">
                            Asumir la responsabilidad de ser parte de la <strong>Comunidad Local, Nacional e 
                            Internacional</strong> construyendo, a través del conocimiento, del compromiso y de la 
                            acción con el otro, estructuras sociales cada vez más justas e integrales.
                        </p>
                    </div>
                </div>
                
                <!-- Principio 4: Excelencia -->
                <div class="carousel-item principio-item" href="#principio4">
                    <div class="principio-content">
                        <div class="principio-icon">
                            <i class="material-icons">emoji_events</i>
                        </div>
                        <h3 class="yellow-text">EXCELENCIA ACADÉMICA</h3>
                        <p class="white-text">
                            Desarrollo pedagógico de procesos que potencien al máximo las capacidades 
                            <strong>éticas, cognitivas, comunicativas, afectivas, psicomotrices</strong>, 
                            de relación interpersonal y de compromiso social.
                        </p>
                    </div>
                </div>
                
            </div>
            
            <!-- Controles del carousel -->
            <div class="carousel-controls">
                <button class="carousel-prev btn-floating btn-large waves-effect waves-light" 
                        aria-label="Principio anterior">
                    <i class="material-icons">chevron_left</i>
                </button>
                <button class="carousel-next btn-floating btn-large waves-effect waves-light" 
                        aria-label="Siguiente principio">
                    <i class="material-icons">chevron_right</i>
                </button>
            </div>
        </div>
    </section>

    <!-- ============================================
         SECCIÓN: FILOSOFÍA
         ============================================ -->
    <section id="filosofia" 
             class="filosofia-section" 
             data-aos="fade-up"
             aria-labelledby="titulo-filosofia">
        
        <div class="container">
            <h2 id="titulo-filosofia" class="titulo-seccion yellow-text center">
                <i class="material-icons">local_library</i>
                FILOSOFÍA INSTITUCIONAL
            </h2>
            
            <article class="filosofia-content">
                <div class="filosofia-icon">
                    <i class="material-icons">auto_stories</i>
                </div>
                <p class="white-text flow-text">
                    Es de suma importancia conocer las <strong>bases, premisas y fortalezas</strong> de una educación 
                    moral, pedagógica, sistemática e integral desde lo curricular, hasta lo cotidiano, en la búsqueda 
                    de una <strong>excelencia educativa integral</strong>, abordando la educación como un 
                    <strong>disfrute y un goce</strong>, más allá de generar imposiciones, tareas y "obligaciones".
                </p>
                <p class="white-text flow-text">
                    Es mostrarle a los estudiantes que el proceso formativo es una etapa rica en 
                    <strong>sensaciones, emociones</strong> y enseñarles a disfrutar los momentos de satisfacción 
                    por el deber cumplido y por los procesos de <strong>liderazgo y responsabilidad</strong> que 
                    día a día son el transcurrir del conocimiento en nuestra institución.
                </p>
                <p class="white-text flow-text">
                    La filosofía es un <strong>modo de pensar y de hacer las cosas</strong>; por ello cuando hablamos 
                    de la filosofía institucional, estamos hablando de los principios que rigen, orientan y promueven 
                    la vida de la Comunidad Educativa desde un referente del <strong>educando integral</strong>.
                </p>
            </article>
        </div>
    </section>

</main>

<!-- ============================================
     JAVASCRIPT PERSONALIZADO
     ============================================ -->
<script src="js/materialize.min.js"></script>
<script>
// ============================================
// BACKGROUND DINÁMICO
// ============================================
document.addEventListener("DOMContentLoaded", function() {
    document.body.style.backgroundImage = "url('./images/parallax/17.jpg')";
    document.body.style.transition = "background-image 0.8s ease-in-out";
});

document.addEventListener("scroll", function() {
    const scrollY = window.scrollY;
    const windowHeight = window.innerHeight;
    const triggerPoint = scrollY + (windowHeight / 2);
    
    // Historia
    const historiaSection = document.getElementById('historia');
    if (historiaSection && isInView(historiaSection, triggerPoint)) {
        document.body.style.backgroundImage = "url('./images/nosotros/h2.jpeg')";
    }
    
    // Misión y Visión
    const misionSection = document.getElementById('mision-vision');
    if (misionSection && isInView(misionSection, triggerPoint)) {
        document.body.style.backgroundImage = "url('./images/parallax/5.jpg')";
    }
    
    // Principios
    const principiosSection = document.getElementById('principios');
    if (principiosSection && isInView(principiosSection, triggerPoint)) {
        document.body.style.backgroundImage = "url('./images/parallax/6.jpg')";
    }
    
    // Filosofía
    const filosofiaSection = document.getElementById('filosofia');
    if (filosofiaSection && isInView(filosofiaSection, triggerPoint)) {
        document.body.style.backgroundImage = "url('./images/parallax/4.jpg')";
    }
});

function isInView(element, triggerPoint) {
    const top = element.offsetTop;
    const height = element.offsetHeight;
    return triggerPoint >= top && triggerPoint < (top + height);
}

// ============================================
// CAROUSEL DE PRINCIPIOS
// ============================================
document.addEventListener("DOMContentLoaded", function() {
    const carousel = document.querySelectorAll('.carousel');
    
    if (carousel.length > 0) {
        M.Carousel.init(carousel, {
            fullWidth: true,
            indicators: true,
            duration: 300
        });

        const instance = M.Carousel.getInstance(carousel[0]);
        
        // Auto-avance cada 6 segundos
        setInterval(() => {
            if (instance) {
                instance.next();
            }
        }, 6000);

        // Controles manuales
        const prevBtn = document.querySelector(".carousel-prev");
        const nextBtn = document.querySelector(".carousel-next");
        
        if (prevBtn && instance) {
            prevBtn.addEventListener("click", () => instance.prev());
        }
        if (nextBtn && instance) {
            nextBtn.addEventListener("click", () => instance.next());
        }
    }
});

// ============================================
// SMOOTH SCROLL
// ============================================
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
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