<?php
// ============================================
// METADATA DE LA NOTICIA
// ============================================
$titulo = "Día de la Familia 2024: Un Encuentro de Amor y Unión";
$page_title = $titulo;
$fecha = "2024-06-09";
$autor = "Yerly Johana Robles Cepeda";
$categoria = "Eventos";
$imagen_destacada = "dia-familia-principal.jpg";
$resumen = "La IET San Nicolás celebró el Día de la Familia con actividades que fortalecieron los lazos entre estudiantes, familias y docentes, destacando la importancia de la familia en el proceso educativo.";
$destacada = true;
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

            <div class="noticia-categoria-badge categoria-eventos">
                <i class="material-icons">event</i>
                <?php echo $categoria; ?>
            </div>

            <h1 class="noticia-titulo-principal"><?php echo $titulo; ?></h1>

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
                    <span>6 min de lectura</span>
                </div>
            </div>
        </header>

        <!-- Imagen destacada -->
        <figure class="noticia-imagen-destacada" data-aos="zoom-in">
            <img src="./images/noticias/dia-familia/<?php echo $imagen_destacada; ?>" alt="<?php echo $titulo; ?>">
            <figcaption>Celebración del Día de la Familia en la IET San Nicolás - Junio 2024</figcaption>
        </figure>

        <!-- Contenido de la noticia -->
        <div class="noticia-contenido" data-aos="fade-up">

            <p class="lead">
                El 9 de junio de 2024, la Institución Educativa Técnica San Nicolás vivió una jornada
                extraordinaria que quedará grabada en el corazón de toda la comunidad educativa. El Día
                de la Familia se convirtió en un espacio de encuentro, alegría y fortalecimiento de los
                vínculos que nos unen como familia nicolaita.
            </p>

            <h2><i class="material-icons">favorite</i> Una Celebración Llena de Significado</h2>
            <p>
                Este día tan especial sirvió para fortalecer los lazos entre los estudiantes, sus familias
                y los docentes, resaltando la importancia de la familia como el pilar fundamental en el
                proceso educativo. Durante toda la jornada, se vivió un ambiente de fraternidad donde se
                promovieron valores esenciales que forman parte de nuestra identidad institucional.
            </p>

            <ul class="noticia-lista">
                <li><i class="material-icons">check_circle</i> <strong>Respeto:</strong> Valorando las diferencias y
                    promoviendo la convivencia armónica</li>
                <li><i class="material-icons">check_circle</i> <strong>Amor:</strong> Demostrando afecto y cuidado entre
                    todos los miembros de la comunidad</li>
                <li><i class="material-icons">check_circle</i> <strong>Solidaridad:</strong> Apoyándonos mutuamente en
                    cada momento</li>
                <li><i class="material-icons">check_circle</i> <strong>Unidad:</strong> Reconociendo que juntos somos
                    más fuertes</li>
            </ul>

            <div class="noticia-highlight-box">
                <i class="material-icons">info</i>
                <div>
                    <h3>El Valor de la Familia en la Educación</h3>
                    <p>
                        La familia es el primer escenario educativo de toda persona. En la IET San Nicolás
                        reconocemos que el éxito académico y personal de nuestros estudiantes depende en
                        gran medida del apoyo y acompañamiento de sus familias. Por eso, este día fue una
                        oportunidad para celebrar y agradecer ese compromiso constante que fortalece nuestra
                        labor educativa.
                    </p>
                </div>
            </div>

            <h2><i class="material-icons">church</i> Misa: Un Momento de Unión Espiritual</h2>
            <p>
                Uno de los momentos más importantes de la celebración fue la Santa Misa, un acto simbólico
                que no pudo faltar en esta jornada especial. En ella, los miembros de la comunidad educativa
                se reunieron para agradecer a Dios por un nuevo día y por la bendición de poder compartir
                juntos como familia.
            </p>

            <blockquote class="noticia-quote">
                <i class="material-icons">format_quote</i>
                <p>
                    "La misa nos permitió reflexionar sobre el valor de la familia y la importancia de su
                    apoyo mutuo en la vida cotidiana. Fue un espacio sagrado donde padres, hijos y educadores
                    se unieron espiritualmente para renovar su compromiso con el amor familiar y la formación
                    integral de nuestros estudiantes."
                </p>
                <cite>- Coordinadora de Pastoral, IET San Nicolás</cite>
            </blockquote>

            <p>
                Durante la celebración eucarística, se resaltó la importancia de agradecer por las familias
                que nos acompañan, por los valores que transmiten y por el esfuerzo conjunto que hacemos para
                formar mejores seres humanos.
            </p>

            <h2><i class="material-icons">theater_comedy</i> Actos Culturales: El Talento Nicolaita Brilla</h2>
            <p>
                Además de la misa, la celebración incluyó diversos actos culturales que dieron protagonismo
                a nuestros estudiantes, quienes mostraron sus talentos a través de múltiples expresiones
                artísticas que llenaron de orgullo a sus familias.
            </p>

            <div class="noticia-galeria">
                <h3><i class="material-icons">photo_library</i> Momentos Memorables</h3>
                <div class="galeria-grid">
                    <img src="./images/noticias/dia-familia/baile.jpg" alt="Presentación de danza folclórica">
                    <img src="./images/noticias/dia-familia/hola.jpg" alt="Saludo entre familias">
                    <img src="./images/noticias/dia-familia/famili.jpg" alt="Familia unida celebrando">
                    <img src="./images/noticias/dia-familia/ejje.jpg" alt="Charla de acompañamiento">
                </div>
            </div>

            <p>
                Las actividades culturales incluyeron:
            </p>

            <ul class="noticia-lista">
                <li><i class="material-icons">music_note</i> <strong>Danzas tradicionales colombianas</strong> que
                    rescataron nuestro folclor y tradiciones</li>
                <li><i class="material-icons">music_note</i> <strong>Canciones interpretadas por estudiantes</strong>
                    con talento vocal excepcional</li>
                <li><i class="material-icons">palette</i> <strong>Presentaciones teatrales</strong> que reflejaron
                    valores familiares</li>
                <li><i class="material-icons">celebration</i> <strong>Coreografías modernas</strong> preparadas con
                    dedicación por cada grado</li>
                <li><i class="material-icons">auto_stories</i> <strong>Declamaciones poéticas</strong> dedicadas a la
                    familia</li>
            </ul>

            <p>
                Estas actividades fueron una forma hermosa de compartir el fruto del esfuerzo y la creatividad
                de los jóvenes, mientras que al mismo tiempo se brindaba un espacio de diversión y disfrute
                para todas las familias presentes. El aplauso y la emoción se hicieron sentir en cada
                presentación, demostrando el talento y la preparación de nuestros estudiantes.
            </p>

            <h2><i class="material-icons">forum</i> Charlas de Acompañamiento: Fortaleciendo Vínculos</h2>
            <p>
                Un componente fundamental de la jornada fueron las charlas de acompañamiento entre padres
                e hijos, que ofrecieron una oportunidad única para fortalecer la comunicación entre ambas
                partes. Estos encuentros fueron facilitados por profesionales en psicología y orientación
                escolar.
            </p>

            <p>
                Durante estas sesiones, las familias pudieron:
            </p>

            <ol class="noticia-lista-numerada">
                <li>Compartir inquietudes y preocupaciones en un ambiente de confianza</li>
                <li>Reflexionar sobre la importancia de la comunicación familiar efectiva</li>
                <li>Recibir herramientas prácticas para mejorar el acompañamiento educativo en casa</li>
                <li>Establecer compromisos mutuos para fortalecer la relación padres-hijos</li>
                <li>Conocer estrategias para apoyar el desarrollo académico y emocional de los estudiantes</li>
            </ol>

            <p>
                Estos encuentros fueron clave para fomentar el entendimiento y la colaboración en la
                educación de los jóvenes, permitiendo que padres e hijos compartieran sus perspectivas,
                escucharan consejos profesionales y establecieran acuerdos sobre cómo mejorar su relación
                y apoyo mutuo en el día a día.
            </p>

            <div class="testimonios-grid">
                <div class="testimonio-card">
                    <i class="material-icons">person</i>
                    <p>"Fue hermoso compartir con mi familia en el colegio. Las actividades culturales y la misa nos
                        unieron más. Me sentí muy orgullosa de presentar mi baile."</p>
                    <cite>- Ana María González, estudiante de grado 8°</cite>
                </div>
                <div class="testimonio-card">
                    <i class="material-icons">person</i>
                    <p>"La charla de acompañamiento me ayudó a entender mejor las preocupaciones de mi hijo. Fue un
                        espacio muy valioso que nos permitió conectar de una manera más profunda."</p>
                    <cite>- Jorge López, padre de familia</cite>
                </div>
                <div class="testimonio-card">
                    <i class="material-icons">person</i>
                    <p>"Ver a toda la comunidad reunida celebrando la familia fue realmente emocionante. Estos momentos
                        nos recuerdan por qué estamos aquí: ¡Queremos y Podemos!"</p>
                    <cite>- Profesora Marta Rodríguez, docente de primaria</cite>
                </div>
            </div>

            <h2><i class="material-icons">emoji_events</i> Logros y Resultados de la Jornada</h2>
            <p>
                El Día de la Familia 2024 dejó resultados tangibles que fortalecen nuestra comunidad educativa
                y demuestran el compromiso de todos los actores involucrados:
            </p>

            <ol class="noticia-lista-numerada">
                <li>Participación de más de 500 familias en las diferentes actividades programadas</li>
                <li>Fortalecimiento significativo de la comunicación entre padres, hijos y docentes</li>
                <li>Renovación del compromiso familiar con el acompañamiento educativo</li>
                <li>Creación de espacios de diálogo y reflexión comunitaria sobre valores familiares</li>
                <li>Identificación de familias que requieren acompañamiento adicional de la institución</li>
                <li>Establecimiento de redes de apoyo entre familias de la comunidad educativa</li>
            </ol>

            <blockquote class="noticia-quote">
                <i class="material-icons">format_quote</i>
                <p>
                    "Este tipo de actividades nos permiten recordar que la educación es una tarea compartida.
                    Cuando las familias se involucran activamente en la vida escolar de sus hijos, los
                    resultados son extraordinarios. El Día de la Familia 2024 fue un éxito rotundo que nos
                    motiva a seguir trabajando unidos."
                </p>
                <cite>- Rector de la IET San Nicolás</cite>
            </blockquote>

            <h2><i class="material-icons">insights</i> El Impacto en Nuestra Comunidad</h2>
            <p>
                Más allá de ser una celebración, el Día de la Familia representa un compromiso institucional
                con la formación integral de nuestros estudiantes. Los estudios demuestran que cuando existe
                una comunicación fluida y un trabajo conjunto entre la escuela y la familia, los estudiantes:
            </p>

            <ul class="noticia-lista">
                <li><i class="material-icons">check_circle</i> Obtienen mejores resultados académicos</li>
                <li><i class="material-icons">check_circle</i> Desarrollan mayor autoestima y confianza</li>
                <li><i class="material-icons">check_circle</i> Muestran mejor comportamiento y actitud</li>
                <li><i class="material-icons">check_circle</i> Tienen menor índice de deserción escolar</li>
                <li><i class="material-icons">check_circle</i> Desarrollan habilidades socioemocionales más sólidas</li>
            </ul>

            <div class="noticia-call-to-action">
                <i class="material-icons">volunteer_activism</i>
                <div>
                    <h3>¡La Familia es Nuestra Fortaleza!</h3>
                    <p>
                        En la IET San Nicolás creemos firmemente que la educación es una tarea compartida.
                        Invitamos a todas las familias a seguir participando activamente en la vida escolar
                        de sus hijos. Juntos construimos el futuro de nuestra comunidad.
                    </p>
                    <a href="../contacto.php" class="btn waves-effect waves-light">
                        <i class="material-icons left">mail</i>
                        Únete a Nuestra Comunidad
                    </a>
                </div>
            </div>

            <h2><i class="material-icons">calendar_month</i> Próximos Eventos Familiares</h2>
            <p>
                Motivados por el éxito de esta jornada, la institución ha programado más actividades que
                involucran a las familias:
            </p>

            <ul class="noticia-lista">
                <li><i class="material-icons">event</i> <strong>Escuela de Padres:</strong> Cada último viernes del mes
                </li>
                <li><i class="material-icons">event</i> <strong>Jornadas de Convivencia:</strong> Trimestral por grados
                </li>
                <li><i class="material-icons">event</i> <strong>Festival de la Familia:</strong> Noviembre 2024</li>
                <li><i class="material-icons">event</i> <strong>Celebración de Fin de Año:</strong> Diciembre 2024</li>
            </ul>

        </div>

        <!-- Footer de la noticia -->
        <footer class="noticia-footer" data-aos="fade-up">
            <div class="noticia-tags">
                <i class="material-icons">local_offer</i>
                <span class="tag">Día de la Familia</span>
                <span class="tag">Eventos</span>
                <span class="tag">Comunidad</span>
                <span class="tag">Valores</span>
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
                    <p class="autor-role">Editora de Contenido - Voces Nicolaitas</p>
                    <p class="autor-description">
                        Estudiante de grado 11°, comprometida con capturar los momentos más importantes
                        de nuestra comunidad educativa. Apasionada por contar las historias que nos unen
                        y nos hacen crecer como familia nicolaita.
                    </p>
                </div>
            </div>
        </footer>

        <!-- Noticias relacionadas -->
        <section class="noticias-relacionadas" data-aos="fade-up">
            <h3><i class="material-icons">article</i> Te Puede Interesar</h3>
            <div class="relacionadas-grid">
                <a href="biblioteca-digital.php" class="relacionada-card">
                    <img src="./images/noticias/biblioteca.jpg" alt="Noticia relacionada">
                    <div class="relacionada-content">
                        <span class="relacionada-categoria">Institucional</span>
                        <h4>Nueva Biblioteca Digital Inaugurada</h4>
                        <span class="relacionada-fecha">18/02/2026</span>
                    </div>
                </a>
                <a href="#" class="relacionada-card">
                    <img src="./images/noticias/biblioteca.jpg" alt="Noticia relacionada">
                    <div class="relacionada-content">
                        <span class="relacionada-categoria">Cultura</span>
                        <h4>Festival de Arte y Cultura 2024</h4>
                        <span class="relacionada-fecha">15/05/2024</span>
                    </div>
                </a>
                <a href="#" class="relacionada-card">
                    <img src="./images/noticias/biblioteca.jpg" alt="Noticia relacionada">
                    <div class="relacionada-content">
                        <span class="relacionada-categoria">Académico</span>
                        <h4>Estudiantes Destacados del Semestre</h4>
                        <span class="relacionada-fecha">20/05/2024</span>
                    </div>
                </a>
            </div>
        </section>

    </article>
</div>