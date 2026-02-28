<?php
// ============================================
// METADATA DE LA NOTICIA
// ============================================
$titulo = '"Casi Siempre": El Proyecto de Cine que Está Revolucionando Nuestra Institución';
$page_title = $titulo;
$fecha = "2024-11-20";
$autor = "Jinneth Sofia Diaz Castro";
$categoria = "Cultura";
$imagen_destacada = "casi-siempre-proyecto.jpg";
$resumen = "El Centro de Interés 'Casi Siempre' ha transformado a estudiantes de la IET San Nicolás en directores, guionistas y podcasters. Descubre cómo este innovador proyecto está despertando el talento audiovisual de nuestra comunidad.";
$destacada = true;
$css = "casi-siempre.css";
?>

<!-- CSS PERSONALIZADO CINEMATOGRÁFICO -->
<link rel="stylesheet" href="../css/noticia-cinema.css">

<!-- Contenedor con tema cinematográfico -->
<div class="noticia-container-cinema">
    <!-- Contenido de la noticia -->
    <article class="noticia-completa-cinema">

        <!-- Header de la noticia -->
        <header class="noticia-header-cinema" data-aos="fade-down">
            <div class="noticia-breadcrumb">
                <a href="../index.php" style="color: #ffd700;"><i class="material-icons">home</i> Inicio</a>
                <i class="material-icons" style="color: #ffd700;">chevron_right</i>
                <span style="color: #e5e5e5;"><?php echo $categoria; ?></span>
            </div>

            <div class="noticia-categoria-badge-cinema">
                <i class="material-icons">movie</i>
                <?php echo $categoria; ?> • Medios Audiovisuales
            </div>

            <h1 class="noticia-titulo-principal-cinema"><?php echo $titulo; ?></h1>

            <div class="noticia-meta-info" style="color: #c0c0c0;">
                <div class="meta-item">
                    <i class="material-icons">person</i>
                    <span>Por <strong style="color: #ffd700;"><?php echo $autor; ?></strong></span>
                </div>
                <div class="meta-item">
                    <i class="material-icons">calendar_today</i>
                    <span><?php echo date('d/m/Y', strtotime($fecha)); ?></span>
                </div>
                <div class="meta-item">
                    <i class="material-icons">schedule</i>
                    <span>10 min de lectura</span>
                </div>
            </div>
        </header>

        <!-- Imagen destacada -->
        <figure class="noticia-imagen-destacada-cinema" data-aos="zoom-in">
            <img src="../imagenes/noticias/<?php echo $imagen_destacada; ?>" alt="<?php echo $titulo; ?>">
            <figcaption
                style="color: #ffd700; background: rgba(0, 0, 0, 0.8); padding: 20px; text-align: center; font-size: 1.1rem;">
                Estudiantes en acción durante una sesión de grabación del proyecto "Casi Siempre"
            </figcaption>
        </figure>

        <!-- Contenido de la noticia -->
        <div class="noticia-contenido-cinema" data-aos="fade-up">

            <p class="lead">
                En los pasillos de la IET San Nicolás se respira creatividad. Estudiantes con cámaras,
                micrófonos y una pasión desbordante están escribiendo, dirigiendo y produciendo sus propias
                historias. Bienvenidos a "Casi Siempre", el Centro de Interés que está transformando a
                nuestros jóvenes en realizadores audiovisuales y está poniendo a nuestra institución en
                el mapa de la innovación educativa.
            </p>

            <h2><i class="material-icons">movie_creation</i> "Casi Siempre": Más que un Proyecto, un Movimiento</h2>
            <p>
                "Casi Siempre" nació como un Centro de Interés enfocado en la creación de medios audiovisuales,
                pero rápidamente se convirtió en algo mucho más grande: un espacio donde los estudiantes
                descubren sus voces, desarrollan su creatividad y aprenden que sus historias importan.
            </p>

            <div class="production-card" data-aos="fade-right">
                <h3><i class="material-icons">lightbulb</i> La Visión del Proyecto</h3>
                <p style="color: #e5e5e5;">
                    El nombre "Casi Siempre" encapsula la filosofía del proyecto: nada en la vida es absoluto,
                    las historias tienen matices, y es precisamente en esa zona gris donde encontramos las
                    narrativas más interesantes. Este proyecto busca que los estudiantes exploren esa
                    complejidad a través del cine, el video y el podcast.
                </p>
                <ul class="noticia-lista-cinema">
                    <li>
                        <i class="material-icons">videocam</i>
                        <span><strong>Producción audiovisual:</strong> Desde la preproducción hasta la edición
                            final</span>
                    </li>
                    <li>
                        <i class="material-icons">mic</i>
                        <span><strong>Podcasting:</strong> Creación de contenido de audio con entrevistas y
                            reportajes</span>
                    </li>
                    <li>
                        <i class="material-icons">edit</i>
                        <span><strong>Narrativa transmedia:</strong> Contando historias a través de múltiples
                            plataformas</span>
                    </li>
                    <li>
                        <i class="material-icons">groups</i>
                        <span><strong>Trabajo colaborativo:</strong> Aprendiendo los roles de una producción
                            profesional</span>
                    </li>
                </ul>
            </div>

            <h2><i class="material-icons">celebration</i> El Entusiasmo se Siente en el Aire</h2>
            <p>
                Desde el primer día, el proyecto ha generado una emoción palpable. Los estudiantes llegan
                temprano los días de grabación, se quedan después de clase editando material y no paran de
                proponer nuevas ideas. Esta energía contagiosa está transformando la cultura de nuestra
                institución.
            </p>

            <blockquote class="noticia-quote-cinema">
                <p>
                    "Nunca pensé que me gustaría tanto estar detrás de una cámara. Cada vez que dirigimos
                    una escena o grabamos un podcast, siento que estoy encontrando mi verdadera pasión.
                    'Casi Siempre' me ha mostrado que puedo contar historias que importan."
                </p>
                <cite>- CAMILA TORRES, estudiante de grado 10°, Directora</cite>
            </blockquote>

            <div class="production-card" data-aos="fade-left">
                <h3><i class="material-icons">trending_up</i> Cifras que Hablan del Éxito</h3>
                <ul class="noticia-lista-cinema">
                    <li>
                        <i class="material-icons">group</i>
                        <span><strong>45 estudiantes participantes activos</strong> de grados 9° a 11°</span>
                    </li>
                    <li>
                        <i class="material-icons">movie_filter</i>
                        <span><strong>8 cortometrajes producidos</strong> en el primer semestre</span>
                    </li>
                    <li>
                        <i class="material-icons">podcast</i>
                        <span><strong>12 episodios de podcast</strong> con estudiantes y docentes</span>
                    </li>
                    <li>
                        <i class="material-icons">visibility</i>
                        <span><strong>+5,000 visualizaciones</strong> en nuestras plataformas digitales</span>
                    </li>
                    <li>
                        <i class="material-icons">schedule</i>
                        <span><strong>+120 horas</strong> de contenido audiovisual creado</span>
                    </li>
                </ul>
            </div>

            <h2><i class="material-icons">mic</i> Podcasts: Las Voces de San Nicolás</h2>
            <p>
                Una de las joyas del proyecto "Casi Siempre" es su serie de podcasts, donde estudiantes
                y docentes comparten sus historias, experiencias y perspectivas sobre diversos temas que
                impactan a nuestra comunidad educativa.
            </p>

            <div class="production-card" data-aos="zoom-in">
                <h3><i class="material-icons">headphones</i> Series de Podcasts Activos</h3>
                <div style="display: flex; flex-wrap: wrap; gap: 10px; margin: 20px 0;">
                    <span class="podcast-badge">
                        <i class="material-icons" style="font-size: 1.2rem;">mic</i>
                        Voces del Aula
                    </span>
                    <span class="podcast-badge">
                        <i class="material-icons" style="font-size: 1.2rem;">school</i>
                        Tras la Pizarra
                    </span>
                    <span class="podcast-badge">
                        <i class="material-icons" style="font-size: 1.2rem;">sports_soccer</i>
                        Deportes y Pasión
                    </span>
                    <span class="podcast-badge">
                        <i class="material-icons" style="font-size: 1.2rem;">music_note</i>
                        Ritmos Nicolaitas
                    </span>
                    <span class="podcast-badge">
                        <i class="material-icons" style="font-size: 1.2rem;">auto_stories</i>
                        Historias que Inspiran
                    </span>
                    <span class="podcast-badge">
                        <i class="material-icons" style="font-size: 1.2rem;">psychology</i>
                        Mente Joven
                    </span>
                </div>
                <p style="color: #e5e5e5; margin-top: 20px;">
                    Cada serie aborda temas relevantes para nuestra comunidad, desde entrevistas con docentes
                    sobre sus métodos de enseñanza, hasta conversaciones con estudiantes sobre sus sueños,
                    desafíos y logros. Los podcasts se han convertido en una plataforma donde todas las
                    voces encuentran eco.
                </p>
            </div>

            <h3><i class="material-icons">format_quote</i> Episodios Destacados</h3>
            <ul class="noticia-lista-cinema">
                <li>
                    <i class="material-icons">star</i>
                    <span><strong>"El Profesor que Cambió mi Vida"</strong> - Estudiantes comparten anécdotas sobre
                        docentes inspiradores</span>
                </li>
                <li>
                    <i class="material-icons">star</i>
                    <span><strong>"Sueños sin Fronteras"</strong> - Egresados exitosos cuentan cómo la IET los preparó
                        para el futuro</span>
                </li>
                <li>
                    <i class="material-icons">star</i>
                    <span><strong>"La Ciencia es Cool"</strong> - Docentes de ciencias explican experimentos
                        fascinantes</span>
                </li>
                <li>
                    <i class="material-icons">star</i>
                    <span><strong>"Arte en las Venas"</strong> - Estudiantes talentosos hablan sobre su proceso
                        creativo</span>
                </li>
            </ul>

            <blockquote class="noticia-quote-cinema">
                <p>
                    "Ser entrevistado en el podcast fue una experiencia increíble. Los estudiantes hicieron
                    preguntas profundas y me hicieron reflexionar sobre por qué enseño. Me sorprendió su
                    profesionalismo y su genuino interés en conocer nuestras historias."
                </p>
                <cite>- PROFESOR ROBERTO MARTÍNEZ, Docente de Matemáticas</cite>
            </blockquote>

            <h2><i class="material-icons">movie_filter</i> Producción Cinematográfica: Del Guion a la Pantalla</h2>
            <p>
                Los cortometrajes producidos en "Casi Siempre" abarcan diversos géneros y temáticas,
                reflejando la diversidad de intereses y talentos de nuestros estudiantes. Cada producción
                es un proyecto colaborativo donde los jóvenes aprenden todos los aspectos del proceso
                cinematográfico.
            </p>

            <div class="production-card" data-aos="fade-up">
                <h3><i class="material-icons">movie</i> Cortometrajes Producidos</h3>
                <ul class="noticia-lista-cinema">
                    <li>
                        <i class="material-icons">psychology</i>
                        <span><strong>"El Último Examen"</strong> - Drama sobre la presión académica y la salud
                            mental</span>
                    </li>
                    <li>
                        <i class="material-icons">sentiment_very_satisfied</i>
                        <span><strong>"Recreo"</strong> - Comedia sobre las amistades y los momentos cotidianos en el
                            colegio</span>
                    </li>
                    <li>
                        <i class="material-icons">favorite</i>
                        <span><strong>"Cartas sin Enviar"</strong> - Romance juvenil que explora la comunicación y los
                            malentendidos</span>
                    </li>
                    <li>
                        <i class="material-icons">eco</i>
                        <span><strong>"Verde Esperanza"</strong> - Documental sobre iniciativas ambientales de
                            estudiantes</span>
                    </li>
                    <li>
                        <i class="material-icons">sports_soccer</i>
                        <span><strong>"Más que un Partido"</strong> - Historia sobre superación personal a través del
                            deporte</span>
                    </li>
                    <li>
                        <i class="material-icons">menu_book</i>
                        <span><strong>"Palabras que Sanan"</strong> - Drama sobre el poder de la literatura y la
                            expresión</span>
                    </li>
                </ul>
            </div>

            <div class="filmstrip-gallery" data-aos="fade-up">
                <h3 style="color: #ffd700; text-align: center; margin: 0 0 20px; font-size: 1.8rem;">
                    <i class="material-icons" style="vertical-align: middle; font-size: 2rem;">photo_library</i>
                    Detrás de Cámaras
                </h3>
                <div class="filmstrip-grid">
                    <img src="../imagenes/noticias/casi-siempre-1.jpg" alt="Estudiantes preparando escena">
                    <img src="../imagenes/noticias/casi-siempre-2.jpg" alt="Grabación de podcast">
                    <img src="../imagenes/noticias/casi-siempre-3.jpg" alt="Sesión de edición">
                    <img src="../imagenes/noticias/casi-siempre-4.jpg" alt="Directora dando indicaciones">
                </div>
            </div>

            <h2><i class="material-icons">school</i> Aprendiendo Roles Profesionales</h2>
            <p>
                Cada estudiante en "Casi Siempre" tiene la oportunidad de explorar diferentes roles dentro
                de una producción audiovisual. Esta experiencia práctica les brinda habilidades valiosas
                que trascienden el aula.
            </p>

            <div class="production-card" data-aos="fade-right">
                <h3><i class="material-icons">groups</i> Roles y Responsabilidades</h3>
                <ul class="noticia-lista-cinema">
                    <li>
                        <i class="material-icons">edit_note</i>
                        <span><strong>Guionistas:</strong> Desarrollan historias originales y adaptan narrativas
                            existentes</span>
                    </li>
                    <li>
                        <i class="material-icons">directions</i>
                        <span><strong>Directores:</strong> Lideran el proceso creativo y toman decisiones
                            artísticas</span>
                    </li>
                    <li>
                        <i class="material-icons">videocam</i>
                        <span><strong>Camarógrafos:</strong> Capturan las imágenes con composición y técnica
                            profesional</span>
                    </li>
                    <li>
                        <i class="material-icons">volume_up</i>
                        <span><strong>Sonidistas:</strong> Aseguran la calidad del audio en grabaciones y mezclas</span>
                    </li>
                    <li>
                        <i class="material-icons">movie_edit</i>
                        <span><strong>Editores:</strong> Dan forma final al material con software profesional</span>
                    </li>
                    <li>
                        <i class="material-icons">theater_comedy</i>
                        <span><strong>Actores:</strong> Dan vida a los personajes con interpretaciones auténticas</span>
                    </li>
                    <li>
                        <i class="material-icons">palette</i>
                        <span><strong>Diseñadores:</strong> Crean arte de promoción y elementos visuales</span>
                    </li>
                </ul>
            </div>

            <h2><i class="material-icons">workspace_premium</i> Reconocimientos y Proyección</h2>
            <p>
                El trabajo de "Casi Siempre" no ha pasado desapercibido. El proyecto ha comenzado a recibir
                reconocimiento tanto dentro como fuera de la institución, y está abriendo puertas para
                nuestros estudiantes.
            </p>

            <div class="testimonios-cinema" data-aos="fade-up">
                <div class="testimonio-cinema">
                    <i class="material-icons">emoji_events</i>
                    <p>"Nuestro cortometraje 'El Último Examen' fue seleccionado para un festival regional de cine
                        estudiantil. ¡No lo podíamos creer!"</p>
                    <cite>DANIELA RUIZ, Guionista</cite>
                </div>
                <div class="testimonio-cinema">
                    <i class="material-icons">verified</i>
                    <p>"Gracias a 'Casi Siempre' descubrí mi vocación. Ya me aceptaron en un programa de comunicación
                        audiovisual."</p>
                    <cite>ANDRÉS GÓMEZ, Director y Editor</cite>
                </div>
                <div class="testimonio-cinema">
                    <i class="material-icons">favorite</i>
                    <p>"Ver a mis estudiantes tan apasionados y comprometidos me llena de orgullo. Este proyecto los
                        está transformando."</p>
                    <cite>PROFE CAROLINA, Coordinadora</cite>
                </div>
            </div>

            <h2><i class="material-icons">construction</i> Equipamiento y Recursos</h2>
            <p>
                Para hacer realidad estas producciones, el proyecto cuenta con equipamiento profesional
                que permite a los estudiantes trabajar con estándares de calidad elevados:
            </p>

            <div class="production-card" data-aos="fade-left">
                <h3><i class="material-icons">camera_alt</i> Nuestro Estudio</h3>
                <ul class="noticia-lista-cinema">
                    <li>
                        <i class="material-icons">videocam</i>
                        <span>Cámaras de video profesionales con lentes intercambiables</span>
                    </li>
                    <li>
                        <i class="material-icons">mic</i>
                        <span>Micrófonos de condensador y lavalier para grabación de audio</span>
                    </li>
                    <li>
                        <i class="material-icons">lightbulb</i>
                        <span>Kit de iluminación LED con softboxes y reflectores</span>
                    </li>
                    <li>
                        <i class="material-icons">computer</i>
                        <span>Estaciones de edición con software profesional (Premiere, Audition)</span>
                    </li>
                    <li>
                        <i class="material-icons">headphones</i>
                        <span>Cabina insonorizada para grabación de podcasts</span>
                    </li>
                    <li>
                        <i class="material-icons">photo_camera</i>
                        <span>Green screen y fondos para efectos visuales</span>
                    </li>
                </ul>
            </div>

            <h2><i class="material-icons">rocket_launch</i> Planes Futuros: Expandiendo Horizontes</h2>
            <p>
                El éxito de "Casi Siempre" ha generado planes ambiciosos para el futuro. La visión del
                proyecto se está expandiendo para incluir nuevas iniciativas y colaboraciones.
            </p>

            <div class="production-card" data-aos="zoom-in">
                <h3><i class="material-icons">upcoming</i> Próximos Proyectos</h3>
                <ul class="noticia-lista-cinema">
                    <li>
                        <i class="material-icons">live_tv</i>
                        <span><strong>Canal de YouTube oficial:</strong> Plataforma para distribuir todo el contenido
                            creado</span>
                    </li>
                    <li>
                        <i class="material-icons">movie_creation</i>
                        <span><strong>Largometraje estudiantil:</strong> Primer proyecto de larga duración (45
                            minutos)</span>
                    </li>
                    <li>
                        <i class="material-icons">workspaces</i>
                        <span><strong>Colaboración con otras instituciones:</strong> Intercambio de experiencias y
                            producciones conjuntas</span>
                    </li>
                    <li>
                        <i class="material-icons">celebration</i>
                        <span><strong>Festival de Cine Nicolaita:</strong> Evento anual para exhibir producciones
                            estudiantiles</span>
                    </li>
                    <li>
                        <i class="material-icons">campaign</i>
                        <span><strong>Serie web original:</strong> Producción episódica sobre la vida estudiantil</span>
                    </li>
                </ul>
            </div>

            <blockquote class="noticia-quote-cinema">
                <p>
                    "Casi Siempre" demuestra que cuando les damos a los jóvenes las herramientas y
                    la confianza para crear, son capaces de producir contenido de calidad profesional.
                    Este proyecto está formando no solo creadores de contenido, sino pensadores críticos
                    y comunicadores efectivos."
                </p>
                <cite>- MGS. ING. JEFERSON LEONEL FONSECA SOTO, Rector IET San Nicolás</cite>
            </blockquote>

            <div class="noticia-cta-cinema" data-aos="flip-up">
                <i class="material-icons">movie_creation</i>
                <div style="position: relative; z-index: 2;">
                    <h3>¡Únete al Movimiento Audiovisual!</h3>
                    <p style="color: white; margin: 15px 0; font-size: 1.1rem;">
                        Si tienes historias que contar, si sueñas con crear contenido que inspire,
                        o simplemente quieres aprender sobre producción audiovisual, "Casi Siempre"
                        te está esperando. Las inscripciones para el próximo semestre están abiertas.
                    </p>
                    <a href="../contacto.php" class="btn waves-effect waves-light">
                        <i class="material-icons left">videocam</i>
                        ¡Quiero Participar!
                    </a>
                </div>
            </div>

            <h2><i class="material-icons">auto_awesome</i> Conclusión: El Poder de Contar Historias</h2>
            <p>
                "Casi Siempre" es más que un Centro de Interés, es una revolución creativa. Está
                demostrando que nuestros estudiantes tienen voces poderosas, historias importantes y
                el talento necesario para compartirlas con el mundo. Cada cortometraje, cada episodio
                de podcast, cada sesión de edición es un paso hacia un futuro donde la comunicación
                audiovisual es una herramienta fundamental.
            </p>

            <p>
                En un mundo saturado de contenido, "Casi Siempre" enseña a nuestros estudiantes a crear
                con propósito, a contar historias con autenticidad y a usar los medios audiovisuales
                como instrumentos de cambio social. El entusiasmo que vemos en sus ojos cada día nos
                confirma que estamos en el camino correcto.
            </p>

            <p
                style="color: #ffd700; font-weight: 700; font-size: 1.3rem; text-align: center; margin-top: 50px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);">
                🎬 "Casi Siempre" una historia está esperando ser contada. 🎬
            </p>

            <p style="text-align: center; color: #e5e5e5; font-size: 1.1rem; margin-top: 20px;">
                ¿Cuál será la tuya?
            </p>

        </div>

        <!-- Footer de la noticia -->
        <footer class="noticia-footer" data-aos="fade-up"
            style="background: rgba(26, 0, 0, 0.8); border-top: 3px solid #ffd700;">
            <div class="noticia-tags" style="max-width: 900px; margin: 0 auto; padding: 40px;">
                <i class="material-icons" style="color: #ffd700;">local_offer</i>
                <span class="tag"
                    style="background: rgba(229, 9, 20, 0.3); color: #ffd700; border: 1px solid #e50914;">Casi
                    Siempre</span>
                <span class="tag"
                    style="background: rgba(229, 9, 20, 0.3); color: #ffd700; border: 1px solid #e50914;">Cine</span>
                <span class="tag"
                    style="background: rgba(229, 9, 20, 0.3); color: #ffd700; border: 1px solid #e50914;">Podcast</span>
                <span class="tag"
                    style="background: rgba(229, 9, 20, 0.3); color: #ffd700; border: 1px solid #e50914;">Medios
                    Audiovisuales</span>
                <span class="tag"
                    style="background: rgba(229, 9, 20, 0.3); color: #ffd700; border: 1px solid #e50914;">Centro de
                    Interés</span>
            </div>

            <div class="noticia-autor-bio"
                style="max-width: 900px; margin: 0 auto; padding: 0 40px 40px; background: transparent;">
                <div class="autor-avatar"
                    style="background: linear-gradient(135deg, #e50914 0%, #8b0049 100%); border: 3px solid #ffd700;">
                    <i class="material-icons" style="color: white;">person</i>
                </div>
                <div class="autor-info">
                    <h4 style="color: #ffd700;"><?php echo $autor; ?></h4>
                    <p class="autor-role" style="color: #e50914; font-weight: 700;">Editora en Jefe - Voces Nicolaitas
                    </p>
                    <p class="autor-description" style="color: #e5e5e5;">
                        Estudiante de grado 11° y líder del proyecto "Casi Siempre". Apasionada por contar
                        historias que inspiren y conecten a nuestra comunidad. Creo firmemente en el poder
                        transformador de los medios audiovisuales.
                    </p>
                </div>
            </div>
        </footer>

    </article>
</div>