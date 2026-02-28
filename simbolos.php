<?php 
$menu = "Institución";

// Meta tags específicos para la página de símbolos
$page_title = "IETSN | Símbolos Institucionales";
$page_description  = "Conoce los símbolos institucionales de la IET San Nicolás: nuestra bandera, escudo, himno y uniformes que representan nuestra identidad educativa.";
$page_keywords = "símbolos IET San Nicolás, bandera colegio Tuta, himno institucional, uniformes escolares, escudo institución";
$css = "simbolos.css"; // Archivo CSS específico para esta página
include('includes/header.php'); 
?>

<!-- ============================================
     PÁGINA PRINCIPAL - SÍMBOLOS INSTITUCIONALES
     ============================================ -->
<main id="main-content" class="section" role="main">

    <!-- ============================================
         SECCIÓN: BANDERA
         ============================================ -->
    <section id="bandera" 
             class="scrollspy simbolos-section" 
             data-aos="fade-up" 
             data-aos-duration="1500"
             aria-labelledby="titulo-bandera">
        
        <div class="container">
            <div class="row">
                <div class="col s12 l10 offset-l1 center">
                    
                    <!-- Título principal de la página -->
                    <h1 class="center yellow-text titulo-principal" data-aos="fade-down">
                        SÍMBOLOS INSTITUCIONALES
                    </h1>
                    
                    <!-- Subtítulo: Bandera -->
                    <h2 id="titulo-bandera" class="yellow-text titulo-seccion" data-aos="fade-right">
                        <i class="material-icons">assistant_photo</i>
                        Bandera
                    </h2>
                    
                    <!-- Imagen de la bandera -->
                    <div class="imagen-container" data-aos="zoom-in" data-aos-delay="200">
                        <img src="./images/simbolos/bandera.jpg" 
                             class="responsive-img imagen-simbolo borde-dorado" 
                             alt="Bandera de la Institución Educativa Técnica San Nicolás - Verde, amarillo, blanco y rojo"
                             loading="eager">
                    </div>
                    
                    <!-- Descripción general -->
                    <p class="white-text texto-intro flow-text" data-aos="fade-up">
                        La bandera de la Institución Educativa Técnica San Nicolás está formada por tres franjas 
                        que representan nuestros valores y principios fundamentales.
                    </p>
                    
                    <!-- Significado de colores -->
                    <div class="colores-grid">
                        
                        <!-- Color Blanco -->
                        <article class="color-card" data-aos="fade-right" data-aos-delay="100">
                            <div class="color-header blanco-bg">
                                <h3 class="color-titulo">BLANCO</h3>
                                <i class="material-icons">wb_sunny</i>
                            </div>
                            <div class="color-content">
                                <p class="white-text">
                                    Se asocia a la <strong>luz</strong>, la <strong>virtud</strong>, la <strong>bondad</strong>, 
                                    la <strong>paz</strong>, la <strong>inocencia</strong>, la <strong>perfección</strong>, 
                                    la <strong>seguridad</strong> y la <strong>pureza</strong>. Con él se fundamenta la 
                                    transparencia y motivación constante para formar en valores e ideales nobles y trascendentes.
                                </p>
                            </div>
                        </article>
                        
                        <!-- Color Amarillo -->
                        <article class="color-card" data-aos="fade-up" data-aos-delay="200">
                            <div class="color-header amarillo-bg">
                                <h3 class="color-titulo">AMARILLO</h3>
                                <i class="material-icons">wb_incandescent</i>
                            </div>
                            <div class="color-content">
                                <p class="white-text">
                                    Simboliza la <strong>luz del sol</strong>, es el color de la <strong>juventud</strong>. 
                                    Representa la <strong>alegría</strong>, la <strong>felicidad</strong>, la <strong>inteligencia</strong>, 
                                    la <strong>energía</strong>, el <strong>optimismo</strong> y la <strong>sabiduría</strong> 
                                    como verdaderas riquezas del ser humano. Estimula la creatividad, la percepción, 
                                    la reflexión y la investigación.
                                </p>
                            </div>
                        </article>
                        
                        <!-- Color Verde -->
                        <article class="color-card" data-aos="fade-left" data-aos-delay="300">
                            <div class="color-header verde-bg">
                                <h3 class="color-titulo">VERDE</h3>
                                <i class="material-icons">eco</i>
                            </div>
                            <div class="color-content">
                                <p class="white-text">
                                    Símbolo de la <strong>vida</strong>, de todo lo que crece y se desarrolla. Representa 
                                    nuestros verdes campos, un estilo de vida basado en la <strong>conciencia medio ambiental</strong> 
                                    y el <strong>amor a la naturaleza</strong>. Refleja <strong>armonía</strong>, <strong>crecimiento</strong>, 
                                    <strong>exuberancia</strong>, <strong>fertilidad</strong>, <strong>esperanza</strong> 
                                    y <strong>frescura</strong>. Con él queremos reflejar la esperanza y el progreso.
                                </p>
                            </div>
                        </article>
                        
                        <!-- Color Rojo -->
                        <article class="color-card" data-aos="fade-up" data-aos-delay="400">
                            <div class="color-header rojo-bg">
                                <h3 class="color-titulo">ROJO</h3>
                                <i class="material-icons">favorite</i>
                            </div>
                            <div class="color-content">
                                <p class="white-text">
                                    Representa la <strong>fortaleza</strong>, la <strong>determinación</strong>, 
                                    la <strong>pasión</strong> por el cumplimiento de las metas institucionales, 
                                    la <strong>distinción</strong>, el <strong>amor</strong> y <strong>acogida</strong> 
                                    que se brinda a todo el que forma parte de nuestra familia educativa. 
                                    Marca una huella en el trasegar del diario vivir.
                                </p>
                            </div>
                        </article>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         SECCIÓN: ESCUDO
         ============================================ -->
    <section id="escudo" 
             class="scrollspy simbolos-section" 
             data-aos="fade-up" 
             data-aos-duration="1500"
             aria-labelledby="titulo-escudo">
        
        <div class="container">
            <div class="row">
                <div class="col s12 l10 offset-l1 center">
                    
                    <!-- Título: Escudo -->
                    <h2 id="titulo-escudo" class="yellow-text titulo-seccion" data-aos="fade-right">
                        <i class="material-icons">shield</i>
                        Escudo
                    </h2>
                    
                    <!-- Imagen del escudo -->
                    <div class="escudo-container" data-aos="zoom-in" data-aos-delay="200">
                        <img src="./images/simbolos/Escudo.png" 
                             class="escudo-imagen" 
                             alt="Escudo oficial de la Institución Educativa Técnica San Nicolás"
                             width="330" 
                             height="330"
                             loading="lazy">
                        <div class="escudo-glow"></div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         SECCIÓN: HIMNO
         ============================================ -->
    <section id="himno" 
             class="scrollspy simbolos-section himno-section" 
             data-aos="fade-up" 
             data-aos-duration="1500"
             aria-labelledby="titulo-himno">
        
        <div class="container">
            <div class="row">
                <div class="col s12 l10 offset-l1 center">
                    
                    <!-- Título: Himno -->
                    <h2 id="titulo-himno" class="yellow-text titulo-seccion" data-aos="fade-right">
                        <i class="material-icons">music_note</i>
                        Himno de la Institución
                    </h2>
                    
                    <!-- Reproductor de audio -->
                    <div class="audio-player-container" data-aos="zoom-in" data-aos-delay="200">
                        <div class="audio-player-wrapper">
                            <audio id="himno-audio" 
                                   controls 
                                   preload="auto"
                                   aria-label="Reproductor del himno institucional">
                                <source src="./images/simbolos/Himno.mp3" type="audio/mpeg">
                                Su navegador no soporta el elemento de audio.
                            </audio>
                        </div>
                    </div>
                    
                    <!-- Letra del himno -->
                    <div class="himno-letra">
                        
                        <!-- Coro -->
                        <article class="himno-parte" data-aos="fade-up" data-aos-delay="100">
                            <h3 class="himno-titulo yellow-text">
                                <i class="material-icons">queue_music</i>
                                CORO
                            </h3>
                            <div class="himno-texto white-text text-center">
                                <p>¡Oh claustro! De ciencia y saber</p>
                                <p>Cantemos unidos "Queremos y Podemos"</p>
                                <p>Construyendo sueños y anhelos</p>
                                <p>Juventudes de fugaz proceder.</p>
                            </div>
                        </article>
                        
                        <!-- Estrofa I -->
                        <article class="himno-parte" data-aos="fade-up" data-aos-delay="200">
                            <h3 class="himno-titulo yellow-text">
                                <i class="material-icons">format_list_numbered</i>
                                I
                            </h3>
                            <div class="himno-texto white-text text-center">
                                <p>En densos campos de libertad.</p>
                                <p>Donde se empuña la lanza bravía</p>
                                <p>Educación, trabajo y virtud.</p>
                                <p>Mil semillas de pueblo sinfín.</p>
                                <p>Ardua institución que vislumbra</p>
                                <p>La esperanza de un mundo mejor</p>
                                <p>Comprometidos ¡Oh, Tuta Gloriosa!</p>
                                <p>En convivencia, lealtad y labor.</p>
                            </div>
                        </article>
                        
                        <!-- Estrofa II -->
                        <article class="himno-parte" data-aos="fade-up" data-aos-delay="300">
                            <h3 class="himno-titulo yellow-text">
                                <i class="material-icons">format_list_numbered</i>
                                II
                            </h3>
                            <div class="himno-texto white-text text-center">
                                <p>Al creador elevemos ¡Oh cantos!</p>
                                <p>Formando niños y hombres de bien</p>
                                <p>Por maestros gestores de cambios</p>
                                <p>Que orientan tan grata misión.</p>
                                <p>Tus muros enmarquen la huella de pueblos</p>
                                <p>De fulgente visión inmensurable</p>
                                <p>Respeto y Lid, magnífico crisol</p>
                                <p>De estudiantes radiantes cual sol</p>
                            </div>
                        </article>
                        
                    </div>
                    
                    <!-- Créditos -->
                    <div class="himno-creditos white-text" data-aos="fade-up" data-aos-delay="400">
                        <p class="credito-item">
                            <i class="material-icons tiny">create</i>
                            <strong>LETRA:</strong> ESP. MARÍA ELSA BECERRA SILVA & ESP. VÍCTOR ALFONSO MALDONADO
                        </p>
                        <p class="credito-item">
                            <i class="material-icons tiny">piano</i>
                            <strong>MÚSICA:</strong> Prof. SERVIO TULIO URIBE RODRÍGUEZ
                        </p>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         SECCIÓN: UNIFORMES
         ============================================ -->
    <section id="uniformes" 
             class="scrollspy simbolos-section uniformes-section" 
             data-aos="fade-up" 
             data-aos-duration="1500"
             aria-labelledby="titulo-uniformes">
        
        <div class="container">
            <div class="row">
                <div class="col s12 l10 offset-l1 center">
                    
                    <!-- Título principal -->
                    <h2 id="titulo-uniformes" class="yellow-text titulo-seccion" data-aos="fade-right">
                        <i class="material-icons">checkroom</i>
                        Uniformes
                    </h2>
                    
                    <!-- Subtítulo: Diario -->
                    <h3 class="white-text subtitulo-uniformes" data-aos="fade-up">
                        Uniformes de Diario
                    </h3>
                    
                    <!-- Cards de uniformes -->
                    <div class="uniformes-cards">
                        
                        <!-- Card Masculino -->
                        <div class="col s12 m6" data-aos="fade-right" data-aos-delay="100">
                            <div class="card medium hoverable uniforme-card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" 
                                         src="./images/simbolos/2.jpg"
                                         alt="Uniforme de diario masculino IET San Nicolás"
                                         style="object-fit: cover; object-position: top;">
                                </div>
                                <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4">
                                        <i class="material-icons left">male</i>
                                        Masculino 
                                        <i class="material-icons right">more_vert</i>
                                    </span>
                                    <p><a href="#!" class="activator link-verde">Ver prendas →</a></p>
                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4">
                                        Uniforme Masculino
                                        <i class="material-icons right">close</i>
                                    </span>
                                    <ul class="collection">
                                        <li class="collection-item">
                                            <i class="material-icons tiny">check_circle</i>
                                            Pantalón gris ratón oscuro (bota recta)
                                        </li>
                                        <li class="collection-item">
                                            <i class="material-icons tiny">check_circle</i>
                                            Camisa blanca entremetidos rojos
                                        </li>
                                        <li class="collection-item">
                                            <i class="material-icons tiny">check_circle</i>
                                            Bléiser azul oscuro, entremetido rojo
                                        </li>
                                        <li class="collection-item">
                                            <i class="material-icons tiny">check_circle</i>
                                            Corbata rojo cereza
                                        </li>
                                        <li class="collection-item">
                                            <i class="material-icons tiny">check_circle</i>
                                            Zapatos azules de amarrar
                                        </li>
                                        <li class="collection-item">
                                            <i class="material-icons tiny">check_circle</i>
                                            Media azul oscuro
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Card Femenino -->
                        <div class="col s12 m6" data-aos="fade-left" data-aos-delay="200">
                            <div class="card medium hoverable uniforme-card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" 
                                         src="./images/simbolos/1.jpg"
                                         alt="Uniforme de diario femenino IET San Nicolás"
                                         style="object-fit: cover; object-position: top;">
                                </div>
                                <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4">
                                        <i class="material-icons left">female</i>
                                        Femenino 
                                        <i class="material-icons right">more_vert</i>
                                    </span>
                                    <p><a href="#!" class="activator link-verde">Ver prendas →</a></p>
                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4">
                                        Uniforme Femenino
                                        <i class="material-icons right">close</i>
                                    </span>
                                    <ul class="collection">
                                        <li class="collection-item">
                                            <i class="material-icons tiny">check_circle</i>
                                            Jardinera gris escocés (cubriendo rodilla)
                                        </li>
                                        <li class="collection-item">
                                            <i class="material-icons tiny">check_circle</i>
                                            Camisa blanca, entremetidos rojo
                                        </li>
                                        <li class="collection-item">
                                            <i class="material-icons tiny">check_circle</i>
                                            Bléiser azul oscuro, iniciales bordadas
                                        </li>
                                        <li class="collection-item">
                                            <i class="material-icons tiny">check_circle</i>
                                            Corbata rojo cereza
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                    <!-- Subtítulo: Educación Física -->
                    <h3 class="yellow-text subtitulo-uniformes" data-aos="fade-up">
                        <i class="material-icons">sports_soccer</i>
                        Uniformes de Educación Física
                    </h3>
                    
                    <!-- Imágenes de educación física -->
                    <div class="row edufisica-imagenes">
                        <div class="col s12 m6" data-aos="fade-right" data-aos-delay="100">
                            <img src="./images/simbolos/3.jpg" 
                                 class="responsive-img imagen-edufisica borde-dorado" 
                                 alt="Uniforme de educación física masculino"
                                 loading="lazy">
                        </div>
                        <div class="col s12 m6" data-aos="fade-left" data-aos-delay="200">
                            <img src="./images/simbolos/4.jpg" 
                                 class="responsive-img imagen-edufisica borde-dorado" 
                                 alt="Uniforme de educación física femenino"
                                 loading="lazy">
                        </div>
                    </div>
                    
                    <!-- Lista de prendas educación física -->
                    <ul class="lista-edufisica white-text" data-aos="fade-up" data-aos-delay="300">
                        <li>
                            <i class="material-icons">check</i>
                            Sudadera Verde y gris
                        </li>
                        <li>
                            <i class="material-icons">check</i>
                            Camiseta y pantaloneta según modelo
                        </li>
                        <li>
                            <i class="material-icons">check</i>
                            Medias blancas
                        </li>
                        <li>
                            <i class="material-icons">check</i>
                            Tenis totalmente blancos
                        </li>
                    </ul>
                    
                    <!-- Información adicional -->
                    <div class="info-adicional" data-aos="fade-up" data-aos-delay="400">
                        <h4 class="yellow-text">
                            <i class="material-icons">info</i>
                            ADICIONALMENTE
                        </h4>
                        
                        <div class="info-card white-text">
                            <p>
                                <i class="material-icons tiny">school</i>
                                <strong>Básica Primaria:</strong> Delantal azul escocés de acuerdo con el modelo para niños(as).
                            </p>
                        </div>
                        
                        <div class="info-card white-text">
                            <p>
                                <i class="material-icons tiny">child_care</i>
                                <strong>Pre-escolar y Básica Primaria:</strong> Uniformes establecidos y delantal 
                                rojo gallineto camisero, según modelo.
                            </p>
                        </div>
                        
                        <div class="info-card white-text">
                            <p>
                                <i class="material-icons tiny">science</i>
                                <strong>Básica Secundaria:</strong> Cada estudiante debe portar bata blanca para usar 
                                en laboratorio, tapabocas y guantes según requerimiento del docente.
                            </p>
                        </div>
                        
                        <div class="info-card white-text">
                            <p>
                                <i class="material-icons tiny">biotech</i>
                                <strong>Educación Media (10° - 11°):</strong> Uniformes establecidos y demás elementos 
                                EPP requeridos por norma para uso de laboratorios.
                            </p>
                        </div>
                    </div>
                    
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
       data-aos-duration="1500"
       role="navigation"
       aria-label="Navegación de contenidos">
    
    <div class="toc-wrapper">
        <h5 class="toc-title yellow-text">
            <i class="material-icons">list</i>
            Contenido
        </h5>
        <ul class="table-of-contents">
            <li><a href="#bandera" title="Ver sección Bandera">
                <i class="material-icons tiny">assistant_photo</i> Bandera
            </a></li>
            <li><a href="#escudo" title="Ver sección Escudo">
                <i class="material-icons tiny">shield</i> Escudo
            </a></li>
            <li><a href="#himno" title="Ver sección Himno">
                <i class="material-icons tiny">music_note</i> Himno
            </a></li>
            <li><a href="#uniformes" title="Ver sección Uniformes">
                <i class="material-icons tiny">checkroom</i> Uniformes
            </a></li>
        </ul>
    </div>
    
</aside>

<!-- ============================================
     JAVASCRIPT PERSONALIZADO
     ============================================ -->
<script src="js/materialize.min.js"></script>
<script>
// ============================================
// SCROLLSPY - OCULTAR TOC AL LLEGAR AL FOOTER
// ============================================
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

// ============================================
// INICIALIZAR SCROLLSPY DE MATERIALIZE
// ============================================
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.scrollspy');
    var instances = M.ScrollSpy.init(elems, {
        scrollOffset: 100
    });
    console.log('✅ ScrollSpy inicializado');
});

// ============================================
// BACKGROUND DINÁMICO AL HACER SCROLL
// ============================================
document.addEventListener("DOMContentLoaded", function() {
    document.body.style.backgroundImage = "url('./images/parallax/14.jpg')";
    document.body.style.transition = "background-image 0.8s ease-in-out";
});

document.addEventListener("scroll", function() {
    const sections = document.querySelectorAll(".simbolos-section");
    const scrollPosition = window.scrollY;
    
    sections.forEach((section, index) => {
        const sectionTop = section.offsetTop - 140;
        const sectionHeight = section.offsetHeight;
        
        if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
            switch (index) {
                case 0: // Bandera
                    document.body.style.backgroundImage = "url('./images/parallax/14.jpg')";
                    break;
                case 1: // Escudo
                    document.body.style.backgroundImage = "url('./images/parallax/10.jpg')";
                    break;
                case 2: // Himno
                    document.body.style.backgroundImage = "url('./images/parallax/17.jpg')";
                    break;
                case 3: // Uniformes
                    document.body.style.backgroundImage = "url('./images/parallax/6.jpg')";
                    break;
            }
        }
    });
});

// ============================================
// SMOOTH SCROLL PARA LINKS DEL TOC
// ============================================
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

// ============================================
// PERSONALIZAR REPRODUCTOR DE AUDIO
// ============================================
document.addEventListener('DOMContentLoaded', function() {
    const audio = document.getElementById('himno-audio');
    
    if (audio) {
        // Evento al reproducir
        audio.addEventListener('play', function() {
            console.log('🎵 Reproduciendo himno institucional');
        });
        
        // Evento al pausar
        audio.addEventListener('pause', function() {
            console.log('⏸️ Himno pausado');
        });
        
        // Evento al terminar
        audio.addEventListener('ended', function() {
            console.log('✅ Himno finalizado');
        });
    }
});
</script>

<?php include('includes/footer.php'); ?>