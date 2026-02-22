<?php
$page_title = "Nueva Biblioteca Digital: Un Espacio Moderno para el Aprendizaje";
$fecha = "2026-02-18";
$autor = "Jinneth Sofia Diaz Castro";
$categoria = "Institucional";
$imagen_destacada = "biblioteca.jpg";
$resumen = "La IET San Nicolás inauguró su nueva biblioteca digital equipada con tecnología de última generación.";
$destacada = false;
$css = "noticia-biblioteca.css";
?>

<!-- Contenedor de la noticia -->
<div class="noticia-container">
    <!-- Contenido de la noticia -->
    <article class="noticia-completa">
        <!-- Header de la noticia -->
        <header class="noticia-header" data-aos="fade-down">
            <div class="noticia-breadcrumb">
                <a href="./index.php"><i class="material-icons">home</i> Inicio</a>
                <i class="material-icons">chevron_right</i>
                <span><?php echo $categoria; ?></span>
            </div>

            <div class="noticia-categoria-badge categoria-<?php echo strtolower($categoria); ?>">
                <i class="material-icons">account_balance</i>
                <?php echo $categoria; ?>
            </div>

            <h1 class="noticia-titulo-principal"><?php echo $page_title; ?></h1>

            <div class="noticia-meta-info">
                <div class="meta-item">
                    <i class="material-icons">person</i>
                    <span>Por <strong><?php echo $autor; ?></strong></span>
                </div>
                <div class="meta-item">
                    <i class="material-icons">calendar_today</i>
                    <span><?php echo date('d/m/Y', strtotime($fecha)); ?></span>
                </div>
                <div class="meta-item">
                    <i class="material-icons">schedule</i>
                    <span>5 min de lectura</span>
                </div>
            </div>
        </header>

        <!-- Imagen destacada -->
        <figure class="noticia-imagen-destacada" data-aos="zoom-in">
            <img src="images/noticias/<?php echo $imagen_destacada; ?>" alt="<?php echo $page_title; ?>">
            <figcaption>Nueva biblioteca digital de la IET San Nicolás</figcaption>
        </figure>

        <!-- Contenido de la noticia -->
        <div class="noticia-contenido" data-aos="fade-up">

            <p class="lead">
                Este martes 18 de febrero, la Institución Educativa Técnica San Nicolás dio un paso
                gigante hacia la modernización educativa con la inauguración de su nueva biblioteca
                digital, un espacio que promete revolucionar la forma en que nuestros estudiantes
                acceden al conocimiento.
            </p>

            <h2><i class="material-icons">stars</i> Un Sueño Hecho Realidad</h2>
            <p>
                Después de dos años de planificación y trabajo conjunto entre directivas, docentes y
                la comunidad, hoy celebramos la apertura de un espacio que albergará más de 5,000
                libros físicos y acceso a bibliotecas digitales internacionales. La ceremonia de
                inauguración contó con la presencia del alcalde de Tuta, el secretario de educación
                departamental y toda nuestra comunidad educativa.
            </p>

            <blockquote class="noticia-quote">
                <i class="material-icons">format_quote</i>
                <p>
                    "Esta biblioteca no es solo un espacio físico, es el símbolo de nuestro compromiso
                    con la educación de calidad y el futuro de nuestros estudiantes. Aquí se escribirán
                    las historias de éxito de las próximas generaciones nicolaitas."
                </p>
                <cite>- Rector de la IET San Nicolás</cite>
            </blockquote>

            <h2><i class="material-icons">computer</i> Tecnología de Punta</h2>
            <p>
                La nueva biblioteca cuenta con:
            </p>
            <ul class="noticia-lista">
                <li><i class="material-icons">check_circle</i> 30 computadores de última generación</li>
                <li><i class="material-icons">check_circle</i> Conexión a internet de alta velocidad</li>
                <li><i class="material-icons">check_circle</i> Acceso a plataformas digitales educativas</li>
                <li><i class="material-icons">check_circle</i> Zonas de lectura individual y grupal</li>
                <li><i class="material-icons">check_circle</i> Espacios para trabajos colaborativos</li>
                <li><i class="material-icons">check_circle</i> Sistema de préstamo automatizado</li>
            </ul>

            <div class="noticia-highlight-box">
                <i class="material-icons">info</i>
                <div>
                    <h3>Horarios de Atención</h3>
                    <p>
                        La biblioteca estará abierta de lunes a viernes de 7:00 AM a 5:00 PM.
                        Los estudiantes podrán acceder con su carnet estudiantil y realizar préstamos
                        de hasta 3 libros por 15 días.
                    </p>
                </div>
            </div>

            <h2><i class="material-icons">groups</i> Testimonios de la Comunidad</h2>
            <p>
                La emoción se sentía en el ambiente durante la inauguración. Estudiantes, padres de
                familia y docentes expresaron su alegría por este nuevo espacio:
            </p>

            <div class="testimonios-grid">
                <div class="testimonio-card">
                    <i class="material-icons">person</i>
                    <p>"¡Es increíble! Ahora podré investigar mejor para mis tareas y proyectos."</p>
                    <cite>- María, estudiante de grado 10°</cite>
                </div>
                <div class="testimonio-card">
                    <i class="material-icons">person</i>
                    <p>"Como docente, estoy feliz de contar con estos recursos para mis clases."</p>
                    <cite>- Profesor Carlos, área de sistemas</cite>
                </div>
                <div class="testimonio-card">
                    <i class="material-icons">person</i>
                    <p>"Es un orgullo ver cómo el colegio invierte en el futuro de nuestros hijos."</p>
                    <cite>- Padre de familia</cite>
                </div>
            </div>

            <h2><i class="material-icons">trending_up</i> Impacto Esperado</h2>
            <p>
                Con esta nueva infraestructura, la institución espera:
            </p>
            <ol class="noticia-lista-numerada">
                <li>Aumentar el índice de lectura en un 40% durante el primer año</li>
                <li>Mejorar el desempeño académico en todas las áreas</li>
                <li>Fortalecer las competencias digitales de los estudiantes</li>
                <li>Convertirse en un centro de consulta para la comunidad de Tuta</li>
            </ol>

            <div class="noticia-galeria">
                <h3><i class="material-icons">photo_library</i> Galería de Imágenes</h3>
                <div class="galeria-grid">
                    <img src="images/noticias/biblioteca.jpg" alt="Vista general biblioteca">
                    <img src="images/noticias/biblioteca.jpg" alt="Zona de computadores">
                    <img src="images/noticias/biblioteca.jpg" alt="Área de lectura">
                    <img src="images/noticias/biblioteca.jpg" alt="Ceremonia inauguración">
                </div>
            </div>

            <h2><i class="material-icons">celebration</i> Próximas Actividades</h2>
            <p>
                Para celebrar esta inauguración, la biblioteca ha programado una serie de actividades
                especiales durante todo el mes:
            </p>
            <ul class="noticia-lista">
                <li><i class="material-icons">event</i> Club de lectura juvenil (viernes 15:00)</li>
                <li><i class="material-icons">event</i> Talleres de búsqueda de información digital</li>
                <li><i class="material-icons">event</i> Concurso de cuentos cortos</li>
                <li><i class="material-icons">event</i> Cine foro mensual</li>
            </ul>

            <div class="noticia-call-to-action">
                <i class="material-icons">campaign</i>
                <div>
                    <h3>¡Te Esperamos!</h3>
                    <p>
                        Ven y conoce tu nueva biblioteca. El conocimiento está a tu alcance,
                        solo tienes que dar el primer paso.
                    </p>
                    <a href="../contacto.php" class="btn waves-effect waves-light">
                        <i class="material-icons left">mail</i>
                        Más Información
                    </a>
                </div>
            </div>

        </div>

        <!-- Footer de la noticia -->
        <footer class="noticia-footer" data-aos="fade-up">
            <div class="noticia-tags">
                <i class="material-icons">local_offer</i>
                <span class="tag">Biblioteca</span>
                <span class="tag">Educación</span>
                <span class="tag">Tecnología</span>
                <span class="tag">IET San Nicolás</span>
            </div>

            <div class="noticia-compartir">
                <h4>Compartir esta noticia:</h4>
                <div class="share-buttons">
                    <a href="#" class="share-btn facebook" title="Compartir en Facebook">
                        <i class="material-icons">facebook</i>
                    </a>
                    <a href="#" class="share-btn twitter" title="Compartir en Twitter">
                        <i class="material-icons">share</i>
                    </a>
                    <a href="#" class="share-btn whatsapp" title="Compartir en WhatsApp">
                        <i class="material-icons">phone</i>
                    </a>
                    <a href="#" class="share-btn email" title="Enviar por email">
                        <i class="material-icons">email</i>
                    </a>
                </div>
            </div>

            <div class="noticia-autor-bio">
                <div class="autor-avatar">
                    <i class="material-icons">person</i>
                </div>
                <div class="autor-info">
                    <h4><?php echo $autor; ?></h4>
                    <p class="autor-role">Editora en Jefe - Voces Nicolaitas</p>
                    <p class="autor-description">
                        Estudiante de grado 11°, apasionada por el periodismo y la comunicación.
                        Comprometida con contar las historias que hacen grande a nuestra institución.
                    </p>
                </div>
            </div>
        </footer>

        <!-- Noticias relacionadas -->
        <section class="noticias-relacionadas" data-aos="fade-up">
            <h3><i class="material-icons">article</i> Te Puede Interesar</h3>
            <div class="relacionadas-grid">
                <a href="#" class="relacionada-card">
                    <img src="images/noticias/biblioteca.jpg" alt="Noticia relacionada">
                    <div class="relacionada-content">
                        <span class="relacionada-categoria">Académico</span>
                        <h4>Estudiantes Ganan Concurso Regional</h4>
                        <span class="relacionada-fecha">15/02/2026</span>
                    </div>
                </a>
                <a href="#" class="relacionada-card">
                    <img src="images/noticias/biblioteca.jpg" alt="Noticia relacionada">
                    <div class="relacionada-content">
                        <span class="relacionada-categoria">Cultura</span>
                        <h4>Festival de Arte y Cultura 2026</h4>
                        <span class="relacionada-fecha">10/02/2026</span>
                    </div>
                </a>
                <a href="#" class="relacionada-card">
                    <img src="images/noticias/biblioteca.jpg" alt="Noticia relacionada">
                    <div class="relacionada-content">
                        <span class="relacionada-categoria">Deportes</span>
                        <h4>Campeonato Intercolegiado de Fútbol</h4>
                        <span class="relacionada-fecha">08/02/2026</span>
                    </div>
                </a>
            </div>
        </section>

    </article>
</div>