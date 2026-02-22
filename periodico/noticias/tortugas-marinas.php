<?php
// ============================================
// METADATA DE LA NOTICIA
// ============================================
$titulo = "IETSN | Tortugas Marinas: Guardianas Ancestrales de Nuestros Océanos";
$page_title = $titulo;
$fecha = "2024-10-20";
$autor = "Yerly Johana Robles Cepeda";
$categoria = "Académico";
$imagen_destacada = "tortugas-marinas.jpg";
$resumen = "Un viaje fascinante por la historia evolutiva, características biológicas y conservación de las tortugas marinas, reptiles milenarios que han sobrevivido desde la era de los dinosaurios y hoy enfrentan amenazas críticas.";
$css = "noticia-biblioteca.css";
$destacada = false;
?>

<!-- Contenedor de la noticia -->
<div class="noticia-container">
    <!-- Contenido de la noticia -->
    <article class="noticia-completa">

        <!-- Header de la noticia -->
        <header class="noticia-header" data-aos="fade-down">
            <div class="noticia-breadcrumb">
                <a href="../index.php"><i class="material-icons">home</i> Inicio</a>
                <i class="material-icons">chevron_right</i>
                <span><?php echo $categoria; ?></span>
            </div>

            <div class="noticia-categoria-badge categoria-academico">
                <i class="material-icons">science</i>
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
                    <span>8 min de lectura</span>
                </div>
            </div>
        </header>

        <!-- Imagen destacada -->
        <figure class="noticia-imagen-destacada" data-aos="zoom-in">
            <img src="./images/noticias/tortugas-marinas/<?php echo $imagen_destacada; ?>" alt="<?php echo $titulo; ?>">
            <figcaption>Tortuga marina nadando en aguas cristalinas del océano</figcaption>
        </figure>

        <!-- Contenido de la noticia -->
        <div class="noticia-contenido" data-aos="fade-up">

            <p class="lead">
                Las tortugas marinas son testigos vivientes de la historia de nuestro planeta. Estos
                majestuosos reptiles han surcado los océanos durante más de 100 millones de años,
                sobreviviendo a la extinción masiva que acabó con los dinosaurios. Hoy, sin embargo,
                enfrentan su mayor desafío: la actividad humana. Conozcamos más sobre estas fascinantes
                criaturas que necesitan urgentemente nuestra protección.
            </p>

            <h2><i class="material-icons">history_edu</i> Historia Evolutiva: Sobrevivientes del Tiempo</h2>

            <div class="noticia-highlight-box">
                <i class="material-icons">access_time</i>
                <div>
                    <h3>Línea de Tiempo Evolutiva</h3>
                    <p>
                        <strong>230 millones de años atrás:</strong> Aparecen las primeras tortugas terrestres
                        (Triásico)<br>
                        <strong>150 millones de años atrás:</strong> Las tortugas comienzan a adaptarse al medio marino
                        (Jurásico)<br>
                        <strong>100 millones de años atrás:</strong> Aparecen las tortugas marinas modernas
                        (Cretácico)<br>
                        <strong>65 millones de años atrás:</strong> Sobreviven a la extinción masiva del
                        Cretácico-Paleógeno<br>
                        <strong>Presente:</strong> 7 especies de tortugas marinas habitan nuestros océanos
                    </p>
                </div>
            </div>

            <p>
                Las tortugas marinas pertenecen a la superfamilia Chelonioidea y representan uno de los
                grupos de reptiles más antiguos que aún existen. Su historia evolutiva es un testimonio
                de adaptabilidad y resistencia extraordinarias. Mientras que los dinosaurios desaparecieron
                hace 65 millones de años, las tortugas marinas lograron sobrevivir y adaptarse a los
                cambios climáticos y geológicos más drásticos de la historia del planeta.
            </p>

            <blockquote class="noticia-quote">
                <i class="material-icons">format_quote</i>
                <p>
                    "Las tortugas marinas son fósiles vivientes que nos conectan con un pasado remoto.
                    Estudiarlas no solo nos ayuda a entender la evolución de la vida marina, sino también
                    la salud actual de nuestros océanos. Son indicadores biológicos invaluables del estado
                    de los ecosistemas marinos."
                </p>
                <cite>- Dr. Archie Carr, pionero en conservación de tortugas marinas</cite>
            </blockquote>

            <h2><i class="material-icons">pets</i> Las 7 Especies de Tortugas Marinas</h2>
            <p>
                Actualmente existen solo 7 especies de tortugas marinas en todo el mundo, distribuidas
                en dos familias principales: Cheloniidae (6 especies) y Dermochelyidae (1 especie).
                Cada una posee características únicas que las hacen especiales:
            </p>

            <ol class="noticia-lista-numerada">
                <li><strong>Tortuga Verde (Chelonia mydas):</strong> La más grande de las tortugas de caparazón duro,
                    herbívora en edad adulta</li>
                <li><strong>Tortuga Caguama (Caretta caretta):</strong> Con cabeza grande y poderosas mandíbulas para
                    triturar moluscos</li>
                <li><strong>Tortuga Carey (Eretmochelys imbricata):</strong> Conocida por su hermoso caparazón, en
                    peligro crítico de extinción</li>
                <li><strong>Tortuga Laúd (Dermochelys coriacea):</strong> La más grande, puede pesar hasta 700 kg y
                    bucear a 1,200 metros</li>
                <li><strong>Tortuga Lora (Lepidochelys kempii):</strong> La más pequeña y en mayor peligro de extinción
                </li>
                <li><strong>Tortuga Golfina (Lepidochelys olivacea):</strong> Realiza anidaciones masivas llamadas
                    "arribadas"</li>
                <li><strong>Tortuga Plana (Natator depressus):</strong> Endémica de aguas australianas</li>
            </ol>

            <div class="noticia-galeria">
                <h3><i class="material-icons">photo_library</i> Diversidad de Especies</h3>
                <div class="galeria-grid">
                    <img src="./images/noticias/tortugas-marinas/tortuga-1.jpg" alt="Tortuga verde nadando">
                    <img src="./images/noticias/tortugas-marinas/tortuga-2.jpg" alt="Tortuga carey alimentándose">
                    <img src="./images/noticias/tortugas-marinas/tortuga-3.jpg" alt="Tortuga laúd en la playa">
                    <img src="./images/noticias/tortugas-marinas/tortuga-4.jpg" alt="Tortuga caguama">
                </div>
            </div>

            <h2><i class="material-icons">explore</i> Distribución Geográfica y Hábitat</h2>
            <p>
                Las tortugas marinas habitan en todos los océanos del mundo, excepto en las aguas polares
                de la Antártida y el Ártico. Su distribución está determinada principalmente por la
                temperatura del agua, ya que son reptiles ectotermos (de sangre fría) y dependen del
                ambiente para regular su temperatura corporal.
            </p>

            <div class="noticia-highlight-box">
                <i class="material-icons">public</i>
                <div>
                    <h3>Zonas de Presencia Global</h3>
                    <p>
                        <strong>Océano Pacífico:</strong> Todas las especies excepto la carey<br>
                        <strong>Océano Atlántico:</strong> Principalmente verdes, caguamas y carey<br>
                        <strong>Océano Índico:</strong> Gran diversidad, especialmente tortugas verdes<br>
                        <strong>Mar Mediterráneo:</strong> Caguamas y ocasionalmente verdes<br>
                        <strong>Mar Caribe:</strong> Hotspot de biodiversidad con 6 especies
                    </p>
                </div>
            </div>

            <h3><i class="material-icons">home</i> Ciclo de Vida y Migración</h3>
            <p>
                Las tortugas marinas tienen un ciclo de vida fascinante que abarca diferentes hábitats
                a lo largo de su desarrollo:
            </p>

            <ul class="noticia-lista">
                <li><i class="material-icons">check_circle</i> <strong>Neonatos (crías):</strong> Migran a mar abierto
                    donde viven entre el plancton y los sargazos flotantes, camuflándose de depredadores</li>
                <li><i class="material-icons">check_circle</i> <strong>Juveniles:</strong> Se trasladan a zonas costeras
                    menos profundas, como arrecifes de coral y praderas de pastos marinos</li>
                <li><i class="material-icons">check_circle</i> <strong>Sub-adultos:</strong> Continúan en zonas de
                    alimentación costeras, creciendo y madurando</li>
                <li><i class="material-icons">check_circle</i> <strong>Adultos:</strong> Migran entre zonas de
                    alimentación y playas de anidación, recorriendo miles de kilómetros</li>
            </ul>

            <blockquote class="noticia-quote">
                <i class="material-icons">format_quote</i>
                <p>
                    "Las tortugas marinas poseen un increíble sentido de navegación. Pueden regresar a
                    la misma playa donde nacieron, incluso después de décadas navegando por los océanos.
                    Utilizan el campo magnético terrestre como una especie de GPS natural, un fenómeno
                    que aún maravilla a la ciencia."
                </p>
                <cite>- Dra. Karen Eckert, Directora Ejecutiva de WIDECAST</cite>
            </blockquote>

            <h2><i class="material-icons">biotech</i> Adaptaciones Anatómicas Extraordinarias</h2>
            <p>
                Los ancestros de las tortugas marinas desarrollaron adaptaciones anatómicas y fisiológicas
                únicas que les permiten prosperar en el medio marino:
            </p>

            <h3><i class="material-icons">water_drop</i> Caparazón Hidrodinámico</h3>
            <p>
                A diferencia de sus parientes terrestres, las tortugas marinas poseen caparazones más
                aplanados y aerodinámicos que reducen la resistencia al agua. La tortuga laúd llevó
                esta adaptación al extremo: su "caparazón" está formado por placas óseas cubiertas de
                piel correosa, lo que le da mayor flexibilidad para bucear a grandes profundidades.
            </p>

            <h3><i class="material-icons">waves</i> Aletas en Lugar de Patas</h3>
            <p>
                Las extremidades evolucionaron en aletas poderosas perfectamente diseñadas para nadar.
                Las aletas delanteras proporcionan propulsión mientras que las traseras funcionan como
                timones para dirección. Algunas especies pueden alcanzar velocidades de hasta 35 km/h
                en el agua.
            </p>

            <h3><i class="material-icons">opacity</i> Glándulas de Sal</h3>
            <p>
                Las tortugas marinas desarrollaron glándulas lacrimales especiales que les permiten
                expulsar el exceso de sal del agua marina que ingieren. Estas glándulas secretan una
                solución salina concentrada, razón por la cual a menudo parecen estar "llorando" cuando
                están en tierra.
            </p>

            <h3><i class="material-icons">air</i> Capacidad de Apnea</h3>
            <p>
                Pueden permanecer bajo el agua durante horas sin respirar. La tortuga laúd posee el
                récord: puede sumergirse hasta 1,280 metros de profundidad y permanecer sumergida
                hasta 85 minutos, una hazaña imposible para la mayoría de los mamíferos marinos.
            </p>

            <div class="testimonios-grid">
                <div class="testimonio-card">
                    <i class="material-icons">science</i>
                    <p>"Estudiar las tortugas marinas es como viajar en el tiempo. Sus adaptaciones revelan millones de
                        años de evolución perfecta."</p>
                    <cite>- Dr. Peter Pritchard, biólogo conservacionista</cite>
                </div>
                <div class="testimonio-card">
                    <i class="material-icons">eco</i>
                    <p>"Las tortugas marinas son ingenieras de ecosistemas. Mantienen saludables los pastos marinos y
                        transportan nutrientes entre hábitats."</p>
                    <cite>- Dra. Nancy FitzSimmons, genetista marina</cite>
                </div>
                <div class="testimonio-card">
                    <i class="material-icons">warning</i>
                    <p>"Hemos perdido más del 90% de algunas poblaciones en el último siglo. La conservación no es
                        opcional, es urgente y necesaria."</p>
                    <cite>- Dr. Wallace J. Nichols, científico conservacionista</cite>
                </div>
            </div>

            <h2><i class="material-icons">dangerous</i> Amenazas Críticas y Conservación</h2>
            <p>
                A pesar de haber sobrevivido millones de años, las tortugas marinas enfrentan hoy su
                mayor amenaza: el ser humano. Las 7 especies están clasificadas como vulnerables,
                en peligro o en peligro crítico de extinción según la UICN (Unión Internacional para
                la Conservación de la Naturaleza).
            </p>

            <h3><i class="material-icons">report_problem</i> Principales Amenazas</h3>
            <ul class="noticia-lista">
                <li><i class="material-icons">close</i> <strong>Captura incidental:</strong> Miles mueren cada año
                    atrapadas en redes de pesca comercial</li>
                <li><i class="material-icons">close</i> <strong>Contaminación plástica:</strong> Confunden bolsas
                    plásticas con medusas, su alimento</li>
                <li><i class="material-icons">close</i> <strong>Pérdida de hábitat:</strong> Desarrollo costero destruye
                    playas de anidación</li>
                <li><i class="material-icons">close</i> <strong>Cambio climático:</strong> Altera la temperatura de la
                    arena, afectando el sexo de las crías</li>
                <li><i class="material-icons">close</i> <strong>Caza ilegal:</strong> Por su carne, huevos y caparazón
                </li>
                <li><i class="material-icons">close</i> <strong>Contaminación lumínica:</strong> Desorientación de crías
                    recién nacidas</li>
            </ul>

            <div class="noticia-highlight-box">
                <i class="material-icons">volunteer_activism</i>
                <div>
                    <h3>Datos Alarmantes de Conservación</h3>
                    <p>
                        • Solo 1 de cada 1,000 crías sobrevive hasta la edad adulta<br>
                        • Se estima que más de 100 millones de tortugas marinas fueron cazadas en el siglo XX<br>
                        • Anualmente mueren aproximadamente 250,000 tortugas por captura incidental<br>
                        • El 52% de las tortugas marinas han ingerido plástico<br>
                        • Algunas poblaciones han disminuido más del 90% en 50 años
                    </p>
                </div>
            </div>

            <h2><i class="material-icons">nature_people</i> ¿Cómo Podemos Ayudar?</h2>
            <p>
                La buena noticia es que cada uno de nosotros puede contribuir a la conservación de
                estas especies maravillosas:
            </p>

            <ol class="noticia-lista-numerada">
                <li>Reducir el uso de plásticos de un solo uso, especialmente bolsas y sorbetes</li>
                <li>Participar en limpiezas de playas y campañas de concienciación</li>
                <li>Consumir pescado y mariscos de fuentes sostenibles certificadas</li>
                <li>Nunca comprar productos hechos con carey u otras partes de tortugas</li>
                <li>Apoyar organizaciones dedicadas a la conservación marina</li>
                <li>Respetar las playas de anidación y seguir protocolos de observación</li>
                <li>Educar a otros sobre la importancia de las tortugas marinas</li>
            </ol>

            <div class="noticia-call-to-action">
                <i class="material-icons">eco</i>
                <div>
                    <h3>¡Sé Parte del Cambio!</h3>
                    <p>
                        En la IET San Nicolás promovemos la educación ambiental y la conservación de
                        especies. Únete a nuestro club de ciencias y participa en proyectos de
                        investigación y conservación de ecosistemas marinos.
                    </p>
                    <a href="../contacto.php" class="btn waves-effect waves-light">
                        <i class="material-icons left">science</i>
                        Únete al Club de Ciencias
                    </a>
                </div>
            </div>

            <h2><i class="material-icons">lightbulb</i> Conclusión: Guardianas que Necesitan Guardianes</h2>
            <p>
                Las tortugas marinas han sido testigos de la evolución de nuestro planeta durante más
                de 100 millones de años. Han sobrevivido a cambios climáticos extremos, erupciones
                volcánicas masivas y la extinción de los dinosaurios. Sin embargo, en menos de un siglo
                de actividad humana intensiva, sus poblaciones han colapsado dramáticamente.
            </p>

            <p>
                Proteger a las tortugas marinas no es solo salvar una especie; es preservar ecosistemas
                marinos enteros que dependen de ellas. Es mantener viva una conexión con nuestro pasado
                prehistórico. Es reconocer que el futuro de estas antiguas viajeras está en nuestras
                manos, y que cada acción cuenta.
            </p>

            <blockquote class="noticia-quote">
                <i class="material-icons">format_quote</i>
                <p>
                    "Al final, conservaremos solo lo que amamos, amaremos solo lo que entendemos,
                    y entenderemos solo lo que nos enseñen. Las tortugas marinas nos enseñan sobre
                    resistencia, navegación, y la interconexión de todos los océanos del mundo."
                </p>
                <cite>- Baba Dioum, ecologista senegalés</cite>
            </blockquote>

        </div>

        <!-- Footer de la noticia -->
        <footer class="noticia-footer" data-aos="fade-up">
            <div class="noticia-tags">
                <i class="material-icons">local_offer</i>
                <span class="tag">Tortugas Marinas</span>
                <span class="tag">Conservación</span>
                <span class="tag">Ciencias</span>
                <span class="tag">Biología Marina</span>
                <span class="tag">Medio Ambiente</span>
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
                    <p class="autor-role">Editora de Contenido Científico - Voces Nicolaitas</p>
                    <p class="autor-description">
                        Estudiante de grado 11°, apasionada por la biología marina y la conservación
                        ambiental. Dedicada a compartir conocimiento científico de manera accesible
                        para inspirar el cuidado de nuestro planeta.
                    </p>
                </div>
            </div>
        </footer>

        <!-- Noticias relacionadas -->
        <section class="noticias-relacionadas" data-aos="fade-up">
            <h3><i class="material-icons">article</i> Te Puede Interesar</h3>
            <div class="relacionadas-grid">
                <a href="#" class="relacionada-card">
                    <img src="./images/noticias/biblioteca.jpg" alt="Noticia relacionada">
                    <div class="relacionada-content">
                        <span class="relacionada-categoria">Académico</span>
                        <h4>Clases de Animales y Sus Adaptaciones</h4>
                        <span class="relacionada-fecha">05/11/2024</span>
                    </div>
                </a>
                <a href="#" class="relacionada-card">
                    <img src="./images/noticias/biblioteca.jpg" alt="Noticia relacionada">
                    <div class="relacionada-content">
                        <span class="relacionada-categoria">Académico</span>
                        <h4>Proyecto de Reciclaje Escolar</h4>
                        <span class="relacionada-fecha">12/10/2024</span>
                    </div>
                </a>
                <a href="biblioteca-digital.php" class="relacionada-card">
                    <img src="./images/noticias/biblioteca.jpg" alt="Noticia relacionada">
                    <div class="relacionada-content">
                        <span class="relacionada-categoria">Institucional</span>
                        <h4>Nueva Biblioteca Digital Inaugurada</h4>
                        <span class="relacionada-fecha">18/02/2026</span>
                    </div>
                </a>
            </div>
        </section>

    </article>
</div>
