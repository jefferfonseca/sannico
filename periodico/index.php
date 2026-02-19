<?php
// ============================================
// CONFIGURACIÓN DE LA PÁGINA
// ============================================
$page_title = "Periódico Escolar - Voces Nicolaitas | IET San Nicolás";

$page_description = "Periódico escolar digital de la Institución Educativa Técnica San Nicolás. Noticias, eventos y actividades de nuestra comunidad educativa.";
$page_keywords = "periódico escolar, noticias IET San Nicolás, voces nicolaitas, Tuta, Boyacá";
$css = "periodico.css"; // CSS adicional específico del periódico

include 'includes/header-perioico.php';
?>


<!-- ============================================
     CONTENEDOR PRINCIPAL DEL PERIÓDICO
     ============================================ -->
<div class="periodico-container">

    <!-- ============================================
         SIDEBAR CON LISTA DE NOTICIAS
         ============================================ -->
    <?php include_once('includes/sidebar-perioico.php'); ?>

    <!-- ============================================
         ÁREA DE CONTENIDO PRINCIPAL
         ============================================ -->
    <main class="periodico-main" id="main-content">

        <!-- Hero Section -->
        <section class="hero-periodico" data-aos="fade-down">
            <div class="hero-overlay"></div>
            <div class="hero-content">
                <div class="hero-icon">
                    <i class="material-icons">menu_book</i>
                </div>
                <h1 class="hero-title">Voces Nicolaitas</h1>
                <p class="hero-subtitle">El periódico digital de nuestra comunidad educativa</p>
                <div class="hero-stats">
                    <div class="stat-item">
                        <i class="material-icons">article</i>
                        <span class="stat-number">
                            <?php
                            $noticias_count = count(glob('noticias/*.php'));
                            echo $noticias_count;
                            ?>
                        </span>
                        <span class="stat-label">Noticias</span>
                    </div>
                    <div class="stat-item">
                        <i class="material-icons">people</i>
                        <span class="stat-number">5</span>
                        <span class="stat-label">Editores</span>
                    </div>
                    <div class="stat-item">
                        <i class="material-icons">schedule</i>
                        <span class="stat-number">
                            <?php echo date('Y'); ?>
                        </span>
                        <span class="stat-label">Año</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección de Bienvenida -->
        <section class="welcome-section" data-aos="fade-up">
            <div class="container">
                <div class="row">
                    <div class="col s12 m8 offset-m2">
                        <div class="welcome-card">
                            <div class="welcome-icon">
                                <i class="material-icons">emoji_events</i>
                            </div>
                            <h2>Bienvenidos al Periódico Escolar</h2>
                            <p class="welcome-text">
                                <strong>"Voces Nicolaitas"</strong> es el espacio donde nuestra comunidad educativa
                                comparte historias, logros, eventos y todo lo que nos hace únicos como institución.
                                Aquí encontrarás las últimas noticias de nuestro colegio, escritas por y para los
                                estudiantes.
                            </p>
                            <div class="welcome-features">
                                <div class="feature-item">
                                    <i class="material-icons">check_circle</i>
                                    <span>Noticias actualizadas</span>
                                </div>
                                <div class="feature-item">
                                    <i class="material-icons">check_circle</i>
                                    <span>Contenido estudiantil</span>
                                </div>
                                <div class="feature-item">
                                    <i class="material-icons">check_circle</i>
                                    <span>Eventos y actividades</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Noticias Destacadas -->
        <section class="destacadas-section">
            <div class="container">
                <div class="section-header" data-aos="fade-right">
                    <h2 class="section-title-main">
                        <i class="material-icons">star</i>
                        Noticias Destacadas
                    </h2>
                    <p class="section-subtitle">Las historias más importantes de nuestra comunidad</p>
                </div>

                <div class="destacadas-grid">
                    <?php
                    // ============================================
                    // CARGAR NOTICIAS DESTACADAS
                    // ============================================
                    $noticias_dir = 'noticias/';
                    $noticias_destacadas = [];

                    if (is_dir($noticias_dir)) {
                        $archivos = glob($noticias_dir . '*.php');

                        foreach ($archivos as $archivo) {
                            ob_start();
                            include $archivo;
                            ob_end_clean();

                            if (isset($destacada) && $destacada === true) {
                                $noticias_destacadas[] = [
                                    'archivo' => pathinfo($archivo, PATHINFO_FILENAME),
                                    'titulo' => isset($page_title) ? $page_title : 'Sin título',
                                    'fecha' => isset($fecha) ? $fecha : date('Y-m-d'),
                                    'autor' => isset($autor) ? $autor : 'Redacción',
                                    'categoria' => isset($categoria) ? $categoria : 'General',
                                    'imagen' => isset($imagen_destacada) ? $imagen_destacada : 'default.jpg',
                                    'resumen' => isset($resumen) ? $resumen : ''
                                ];
                            }

                            unset($page_title, $fecha, $autor, $categoria, $imagen_destacada, $resumen, $destacada);
                        }
                    }

                    if (count($noticias_destacadas) > 0):
                        $delay = 0;
                        foreach ($noticias_destacadas as $noticia):
                            $fecha_formateada = date('d/m/Y', strtotime($noticia['fecha']));
                            ?>
                            <article class="destacada-card" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">
                                <a href="ver-noticia.php?n=<?php echo $noticia['archivo']; ?>" class="destacada-link">
                                    <div class="destacada-image">
                                        <img src="images/noticias/<?php echo $noticia['imagen']; ?>"
                                            alt="<?php echo htmlspecialchars($noticia['titulo']); ?>" loading="lazy">
                                        <div class="destacada-overlay">
                                            <span class="destacada-badge">
                                                <i class="material-icons">star</i>
                                                Destacada
                                            </span>
                                        </div>
                                    </div>
                                    <div class="destacada-content">
                                        <div class="destacada-meta">
                                            <span class="destacada-categoria"><?php echo $noticia['categoria']; ?></span>
                                            <span class="destacada-fecha">
                                                <i class="material-icons tiny">event</i>
                                                <?php echo $fecha_formateada; ?>
                                            </span>
                                        </div>
                                        <h3 class="destacada-title"><?php echo htmlspecialchars($noticia['titulo']); ?></h3>
                                        <p class="destacada-excerpt">
                                            <?php echo substr(htmlspecialchars($noticia['resumen']), 0, 150) . '...'; ?>
                                        </p>
                                        <div class="destacada-footer">
                                            <span class="destacada-author">
                                                <i class="material-icons tiny">person</i>
                                                <?php echo htmlspecialchars($noticia['autor']); ?>
                                            </span>
                                            <span class="destacada-read-more">
                                                Leer artículo completo
                                                <i class="material-icons">arrow_forward</i>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </article>
                            <?php
                            $delay += 100;
                        endforeach;
                    else:
                        ?>
                        <div class="no-destacadas" data-aos="fade-up">
                            <i class="material-icons">info</i>
                            <p>Aún no hay noticias destacadas. ¡Pronto publicaremos contenido interesante!</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <!-- Sección del Equipo Editorial -->
        <section class="team-section" data-aos="fade-up">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title-main">
                        <i class="material-icons">groups</i>
                        Nuestro Equipo Editorial
                    </h2>
                    <p class="section-subtitle">Las mentes creativas detrás de Voces Nicolaitas</p>
                </div>

                <div class="team-grid">
                    <!-- Miembro 1 -->
                    <div class="team-card" data-aos="flip-left" data-aos-delay="0">
                        <div class="team-avatar">
                            <i class="material-icons">person</i>
                        </div>
                        <h3 class="team-name">Jinneth Sofia Diaz Castro</h3>
                        <p class="team-role">Editora en Jefe</p>
                        <div class="team-specialties">
                            <span class="specialty-tag">Redacción</span>
                            <span class="specialty-tag">Coordinación</span>
                        </div>
                    </div>

                    <!-- Miembro 2 -->
                    <div class="team-card" data-aos="flip-left" data-aos-delay="100">
                        <div class="team-avatar">
                            <i class="material-icons">person</i>
                        </div>
                        <h3 class="team-name">Yerly Johana Robles Cepeda</h3>
                        <p class="team-role">Editora de Contenido</p>
                        <div class="team-specialties">
                            <span class="specialty-tag">Investigación</span>
                            <span class="specialty-tag">Entrevistas</span>
                        </div>
                    </div>

                    <!-- Miembro 3 -->
                    <div class="team-card" data-aos="flip-left" data-aos-delay="200">
                        <div class="team-avatar">
                            <i class="material-icons">person</i>
                        </div>
                        <h3 class="team-name">Liseth Mariana Ayure Aguilar</h3>
                        <p class="team-role">Diseñadora Gráfica</p>
                        <div class="team-specialties">
                            <span class="specialty-tag">Diseño</span>
                            <span class="specialty-tag">Fotografía</span>
                        </div>
                    </div>

                    <!-- Miembro 4 -->
                    <div class="team-card" data-aos="flip-left" data-aos-delay="300">
                        <div class="team-avatar">
                            <i class="material-icons">person</i>
                        </div>
                        <h3 class="team-name">Maria Angelica Figueredo Fonseca</h3>
                        <p class="team-role">Reportera</p>
                        <div class="team-specialties">
                            <span class="specialty-tag">Eventos</span>
                            <span class="specialty-tag">Deportes</span>
                        </div>
                    </div>

                    <!-- Miembro 5 -->
                    <div class="team-card" data-aos="flip-left" data-aos-delay="400">
                        <div class="team-avatar">
                            <i class="material-icons">person</i>
                        </div>
                        <h3 class="team-name">Yurly Alexandra Cipagauta Saavedra</h3>
                        <p class="team-role">Community Manager</p>
                        <div class="team-specialties">
                            <span class="specialty-tag">Redes Sociales</span>
                            <span class="specialty-tag">Difusión</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="cta-section" data-aos="zoom-in">
            <div class="container">
                <div class="cta-card">
                    <div class="cta-icon">
                        <i class="material-icons">campaign</i>
                    </div>
                    <h2 class="cta-title">¿Tienes una historia que contar?</h2>
                    <p class="cta-text">
                        Queremos escuchar tu voz. Si tienes una noticia, evento o historia que quieras compartir
                        con la comunidad nicolaita, contáctanos.
                    </p>
                    <div class="cta-buttons">
                        <a href="../contacto.php" class="btn-cta btn-primary waves-effect waves-light">
                            <i class="material-icons left">mail</i>
                            Contáctanos
                        </a>
                        <a href="nueva-noticia.php" class="btn-cta btn-secondary waves-effect waves-light">
                            <i class="material-icons left">create</i>
                            Enviar Noticia
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </main>

</div>

<!-- ============================================
     SCRIPTS DEL PERIÓDICO
     ============================================ -->
<script>
    document.addEventListener('DOMContentLoaded', function () {

        // ============================================
        // AJUSTAR MARGEN DEL CONTENIDO PRINCIPAL
        // ============================================
        const mainContent = document.querySelector('.periodico-main');
        const sidebar = document.querySelector('.sidebar-periodico');

        if (window.innerWidth > 768 && sidebar) {
            mainContent.style.marginLeft = sidebar.offsetWidth + 'px';
        }

        window.addEventListener('resize', function () {
            if (window.innerWidth > 768 && sidebar) {
                mainContent.style.marginLeft = sidebar.offsetWidth + 'px';
            } else {
                mainContent.style.marginLeft = '0';
            }
        });

        // ============================================
        // ANIMACIÓN DE NÚMEROS (CONTADOR)
        // ============================================
        const statNumbers = document.querySelectorAll('.stat-number');

        const animateValue = (element, start, end, duration) => {
            let startTimestamp = null;
            const step = (timestamp) => {
                if (!startTimestamp) startTimestamp = timestamp;
                const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                element.textContent = Math.floor(progress * (end - start) + start);
                if (progress < 1) {
                    window.requestAnimationFrame(step);
                }
            };
            window.requestAnimationFrame(step);
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const finalValue = parseInt(entry.target.textContent);
                    if (!isNaN(finalValue)) {
                        animateValue(entry.target, 0, finalValue, 2000);
                    }
                    observer.unobserve(entry.target);
                }
            });
        });

        statNumbers.forEach(stat => observer.observe(stat));

        // ============================================
        // PARALLAX EFFECT EN HERO
        // ============================================
        const hero = document.querySelector('.hero-periodico');

        if (hero) {
            window.addEventListener('scroll', function () {
                const scrolled = window.pageYOffset;
                hero.style.transform = `translateY(${scrolled * 0.5}px)`;
            });
        }
    });
</script>

<?php
// Incluir footer principal
// Ajusta la ruta según tu estructura
//require_once('../includes/footer.php');
?>