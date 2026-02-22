<?php
// ============================================
// METADATA DE LA NOTICIA
// ============================================
$titulo = "Leyendas del Fútbol Colombiano: Los Mejores Jugadores de Nuestra Historia";
$page_title = $titulo;
$fecha = "2024-11-15";
$autor = "Maria Angelica Figueredo Fonseca";
$categoria = "Deportes";
$imagen_destacada = "futbol-colombia.jpg";
$resumen = "Un recorrido por la historia del fútbol colombiano a través de sus máximos exponentes: Valderrama, Falcao, James y Cuadrado, íconos que han llevado el nombre de Colombia por todo el mundo.";
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

            <div class="noticia-categoria-badge categoria-deportes">
                <i class="material-icons">sports_soccer</i>
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
                    <span>7 min de lectura</span>
                </div>
            </div>
        </header>

        <!-- Imagen destacada -->
        <figure class="noticia-imagen-destacada" data-aos="zoom-in">
            <img src="./images/noticias/mejores-jugadores/<?php echo $imagen_destacada; ?>" alt="<?php echo $titulo; ?>">
            <figcaption>Las leyendas del fútbol colombiano que han marcado historia</figcaption>
        </figure>

        <!-- Contenido de la noticia -->
        <div class="noticia-contenido" data-aos="fade-up">

            <p class="lead">
                El fútbol colombiano ha regalado al mundo jugadores extraordinarios que han dejado huella 
                en los estadios más importantes del planeta. Desde la "Generación Dorada" de los años 90 
                hasta las estrellas actuales, Colombia ha demostrado que tiene talento de sobra para competir 
                al más alto nivel. Hoy hacemos un homenaje a cuatro de los más grandes exponentes de nuestro 
                fútbol.
            </p>

            <h2><i class="material-icons">emoji_events</i> Carlos "El Pibe" Valderrama: El Maestro del Mediocampo</h2>
            
            <div class="noticia-highlight-box">
                <i class="material-icons">star</i>
                <div>
                    <h3>El Ícono de la Generación Dorada</h3>
                    <p>
                        <strong>Nombre completo:</strong> Carlos Alberto Valderrama Palacio<br>
                        <strong>Apodo:</strong> "El Pibe"<br>
                        <strong>Posición:</strong> Mediocampista ofensivo<br>
                        <strong>Mundiales:</strong> USA 1994, Francia 1998, Italia 1990<br>
                        <strong>Partidos con Colombia:</strong> 111<br>
                        <strong>Goles:</strong> 11
                    </p>
                </div>
            </div>

            <p>
                Con su característico cabello rubio y rizado que se convirtió en su sello personal, Carlos 
                Valderrama fue mucho más que un futbolista: fue un artista dentro del campo. Su visión de 
                juego inigualable, su capacidad para leer las jugadas antes que nadie y su precisión milimétrica 
                en los pases lo convirtieron en el líder indiscutible de la "Generación Dorada" de Colombia 
                en los años 90.
            </p>

            <p>
                Valderrama participó en tres Copas del Mundo (1990, 1994 y 1998), siendo el capitán y 
                cerebro del equipo. Su forma de jugar revolucionó el fútbol colombiano, demostrando que 
                la elegancia y la técnica podían ser armas tan poderosas como la velocidad o la fuerza física.
            </p>

            <blockquote class="noticia-quote">
                <i class="material-icons">format_quote</i>
                <p>
                    "Valderrama no solo dirigió el juego desde el mediocampo, él era el juego mismo. 
                    Cada pase suyo era una obra de arte, cada movimiento una lección de fútbol. Fue el 
                    primero en mostrarle al mundo que Colombia podía jugar bonito y competir contra cualquiera."
                </p>
                <cite>- Francisco Maturana, DT de la Selección Colombia 1990-1994</cite>
            </blockquote>

            <h3><i class="material-icons">workspace_premium</i> Logros Destacados de El Pibe</h3>
            <ul class="noticia-lista">
                <li><i class="material-icons">check_circle</i> Elegido como el mejor jugador sudamericano en 1987 y 1993</li>
                <li><i class="material-icons">check_circle</i> Incluido en el equipo ideal del Mundial USA 1994</li>
                <li><i class="material-icons">check_circle</i> Campeón de la Copa América 2001 como asistente técnico</li>
                <li><i class="material-icons">check_circle</i> Récord de asistencias en la historia de la MLS (Major League Soccer)</li>
                <li><i class="material-icons">check_circle</i> Inducido al Salón de la Fama del Fútbol Internacional</li>
            </ul>

            <h2><i class="material-icons">sports_soccer</i> Radamel Falcao García: "El Tigre" Goleador</h2>

            <div class="noticia-highlight-box">
                <i class="material-icons">star</i>
                <div>
                    <h3>El Depredador del Área</h3>
                    <p>
                        <strong>Nombre completo:</strong> Radamel Falcao García Zárate<br>
                        <strong>Apodo:</strong> "El Tigre"<br>
                        <strong>Posición:</strong> Delantero centro<br>
                        <strong>Partidos con Colombia:</strong> 102<br>
                        <strong>Goles:</strong> 36<br>
                        <strong>Clubes destacados:</strong> Atlético de Madrid, AS Mónaco, Manchester United
                    </p>
                </div>
            </div>

            <p>
                Radamel Falcao García, conocido como "El Tigre", ha sido uno de los jugadores más exitosos 
                y letales de la última década. Su capacidad goleadora, tanto de cabeza como con los pies, 
                su posicionamiento inteligente y su instinto depredador dentro del área lo han convertido 
                en una leyenda viviente del fútbol colombiano.
            </p>

            <p>
                Falcao alcanzó su cúspide en el Atlético de Madrid, donde se convirtió en el máximo goleador 
                histórico en la Europa League, ganando el torneo en dos ocasiones consecutivas (2011 y 2012). 
                Su legado en el club colchonero es imborrable: 70 goles en 91 partidos, incluyendo hat-tricks 
                memorables y finales ganadas con sus goles.
            </p>

            <h3><i class="material-icons">military_tech</i> Récords y Distinciones del Tigre</h3>
            <ol class="noticia-lista-numerada">
                <li>Máximo goleador histórico de la Europa League con 30 goles</li>
                <li>Campeón de la Europa League en 2011 y 2012 con el Atlético de Madrid</li>
                <li>Campeón de la Supercopa de Europa 2012</li>
                <li>Bota de Oro de la Europa League en 2011</li>
                <li>Máximo goleador de la Selección Colombia en Eliminatorias con 24 goles</li>
                <li>Primer colombiano en marcar en 5 ligas europeas diferentes</li>
            </ol>

            <div class="noticia-galeria">
                <h3><i class="material-icons">photo_library</i> Leyendas en Acción</h3>
                <div class="galeria-grid">
                    <img src="./images/noticias/mejores-jugadores/carlos-v.jpg" alt="Carlos Valderrama en acción">
                    <img src="./images/noticias/mejores-jugadores/falcao.jpg" alt="Radamel Falcao celebrando">
                    <img src="./images/noticias/mejores-jugadores/james-ro.jpg" alt="James Rodríguez">
                    <img src="./images/noticias/mejores-jugadores/cuadrado.jpg" alt="Juan Cuadrado">
                </div>
            </div>

            <h2><i class="material-icons">stars</i> James Rodríguez: La Magia del 10</h2>

            <div class="noticia-highlight-box">
                <i class="material-icons">star</i>
                <div>
                    <h3>El Volante de Oro</h3>
                    <p>
                        <strong>Nombre completo:</strong> James David Rodríguez Rubio<br>
                        <strong>Apodo:</strong> "El 10", "James"<br>
                        <strong>Posición:</strong> Mediocampista ofensivo<br>
                        <strong>Partidos con Colombia:</strong> 98<br>
                        <strong>Goles:</strong> 28<br>
                        <strong>Clubes destacados:</strong> Real Madrid, Bayern Múnich, Everton
                    </p>
                </div>
            </div>

            <p>
                James Rodríguez saltó a la fama mundial en la Copa del Mundo de Brasil 2014, donde su 
                técnica exquisita, visión de juego privilegiada y remate preciso lo convirtieron en la 
                sensación del torneo. Su gol de volea contra Uruguay, considerado uno de los mejores 
                goles en la historia de los Mundiales, quedó grabado para siempre en la memoria colectiva.
            </p>

            <blockquote class="noticia-quote">
                <i class="material-icons">format_quote</i>
                <p>
                    "James tiene ese talento especial que solo poseen los grandes. Su zurda es mágica, 
                    su visión de juego es extraordinaria y su capacidad para asociarse con sus compañeros 
                    es única. Llevó a Colombia a los cuartos de final del Mundial y conquistó la Bota de 
                    Oro. Fue el héroe de toda una nación."
                </p>
                <cite>- José Pékerman, DT de Colombia en Mundial 2014</cite>
            </blockquote>

            <h3><i class="material-icons">emoji_events</i> Logros Memorables de James</h3>
            <ul class="noticia-lista">
                <li><i class="material-icons">check_circle</i> <strong>Bota de Oro Mundial Brasil 2014</strong> con 6 goles</li>
                <li><i class="material-icons">check_circle</i> <strong>Mejor Gol del Mundial 2014</strong> - Premio Puskás FIFA</li>
                <li><i class="material-icons">check_circle</i> <strong>Campeón de la Champions League 2015-16</strong> con Real Madrid</li>
                <li><i class="material-icons">check_circle</i> <strong>Bicampeón de la Bundesliga</strong> con Bayern Múnich (2018, 2019)</li>
                <li><i class="material-icons">check_circle</i> <strong>Elegido en el Once Ideal del Mundial 2014</strong></li>
                <li><i class="material-icons">check_circle</i> <strong>Máximo asistidor de Colombia</strong> en su historia</li>
            </ul>

            <h2><i class="material-icons">flash_on</i> Juan Guillermo Cuadrado: La Electricidad Cafetera</h2>

            <div class="noticia-highlight-box">
                <i class="material-icons">star</i>
                <div>
                    <h3>El Panita Incansable</h3>
                    <p>
                        <strong>Nombre completo:</strong> Juan Guillermo Cuadrado Bello<br>
                        <strong>Apodo:</strong> "El Panita"<br>
                        <strong>Posición:</strong> Extremo derecho / Lateral<br>
                        <strong>Partidos con Colombia:</strong> 121<br>
                        <strong>Goles:</strong> 12<br>
                        <strong>Club actual:</strong> Inter de Milán (Serie A)
                    </p>
                </div>
            </div>

            <p>
                Con su rapidez fulminante y habilidad excepcional en el uno contra uno, Juan Guillermo 
                Cuadrado es uno de los jugadores más destacados y versátiles de los últimos años. Su 
                capacidad para desbordar por las bandas, su resistencia física impresionante y su 
                polivalencia táctica lo han convertido en pieza fundamental tanto en la Juventus de 
                Italia como en la Selección Colombia.
            </p>

            <p>
                Lo que hace especial a Cuadrado es su evolución constante. Comenzó como extremo eléctrico 
                y se ha transformado en un lateral derecho de primer nivel, manteniendo su capacidad 
                ofensiva pero añadiendo solidez defensiva. Su entrega, profesionalismo y amor por la 
                camiseta lo han convertido en un ejemplo para las nuevas generaciones.
            </p>

            <h3><i class="material-icons">workspace_premium</i> Palmarés de Cuadrado</h3>
            <ol class="noticia-lista-numerada">
                <li>6 veces campeón de la Serie A italiana con la Juventus</li>
                <li>5 veces campeón de la Copa Italia</li>
                <li>2 veces campeón de la Supercopa Italiana</li>
                <li>Subcampeón de la Champions League 2014-15 y 2016-17</li>
                <li>Participaciones en 3 Copas del Mundo (2014, 2018, 2022)</li>
                <li>Más de 400 partidos en equipos de élite europeos</li>
            </ol>

            <div class="testimonios-grid">
                <div class="testimonio-card">
                    <i class="material-icons">person</i>
                    <p>"Valderrama nos enseñó que se puede jugar con elegancia. Su legado sigue vivo en cada mediocampista colombiano que intenta jugar bonito."</p>
                    <cite>- Carlos Sánchez, exjugador de la Selección</cite>
                </div>
                <div class="testimonio-card">
                    <i class="material-icons">person</i>
                    <p>"Falcao es pura garra y determinación. Cuando lo ves jugar, sabes que va a dejar todo en la cancha. Es un guerrero con la 9 de Colombia."</p>
                    <cite>- Freddy Rincón (†), leyenda del fútbol colombiano</cite>
                </div>
                <div class="testimonio-card">
                    <i class="material-icons">person</i>
                    <p>"James y Cuadrado son la generación que llevó a Colombia de vuelta a los Mundiales después de 16 años. Su talento es innegable y su compromiso, ejemplar."</p>
                    <cite>- Iván Mejía, periodista deportivo</cite>
                </div>
            </div>

            <h2><i class="material-icons">trending_up</i> El Legado y el Futuro</h2>
            <p>
                Estos cuatro jugadores no solo han sido exitosos individualmente, sino que han inspirado 
                a millones de niños y jóvenes colombianos a soñar con el fútbol profesional. Su legado 
                trasciende las estadísticas y los títulos:
            </p>

            <ul class="noticia-lista">
                <li><i class="material-icons">check_circle</i> <strong>Valderrama</strong> demostró que la técnica y la inteligencia pueden superar la fuerza física</li>
                <li><i class="material-icons">check_circle</i> <strong>Falcao</strong> enseñó que el trabajo duro y la perseverancia llevan al éxito</li>
                <li><i class="material-icons">check_circle</i> <strong>James</strong> mostró que los sueños se pueden cumplir con talento y dedicación</li>
                <li><i class="material-icons">check_circle</i> <strong>Cuadrado</strong> ejemplifica la versatilidad y el profesionalismo constante</li>
            </ul>

            <p>
                Hoy, una nueva generación de futbolistas colombianos como Luis Díaz, Juan Fernando Quintero, 
                Davinson Sánchez y Luis Sinisterra están siguiendo los pasos de estos grandes, llevando 
                el fútbol colombiano a nuevas alturas en Europa y el mundo.
            </p>

            <div class="noticia-call-to-action">
                <i class="material-icons">sports_soccer</i>
                <div>
                    <h3>¡El Fútbol Colombiano Sigue Brillando!</h3>
                    <p>
                        ¿Te inspiran estas leyendas? En la IET San Nicolás promovemos el deporte como 
                        parte fundamental de la formación integral. Únete a nuestros equipos deportivos 
                        y desarrolla tu talento.
                    </p>
                    <a href="../contacto.php" class="btn waves-effect waves-light">
                        <i class="material-icons left">sports</i>
                        Conoce Nuestros Programas Deportivos
                    </a>
                </div>
            </div>

        </div>

        <!-- Footer de la noticia -->
        <footer class="noticia-footer" data-aos="fade-up">
            <div class="noticia-tags">
                <i class="material-icons">local_offer</i>
                <span class="tag">Fútbol</span>
                <span class="tag">Colombia</span>
                <span class="tag">Deportes</span>
                <span class="tag">Leyendas</span>
                <span class="tag">Selección</span>
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
                    <p class="autor-role">Reportera Deportiva - Voces Nicolaitas</p>
                    <p class="autor-description">
                        Estudiante de grado 11°, apasionada por el deporte y especialmente por el fútbol. 
                        Dedicada a contar las historias que inspiran a nuestra comunidad estudiantil a 
                        través del ejemplo de grandes deportistas.
                    </p>
                </div>
            </div>
        </footer>

        <!-- Noticias relacionadas -->
        <section class="noticias-relacionadas" data-aos="fade-up">
            <h3><i class="material-icons">article</i> Te Puede Interesar</h3>
            <div class="relacionadas-grid">
                <a href="dia-familia.php" class="relacionada-card">
                    <img src="./images/noticias/mejores-jugadores/dia-familia-principal.jpg" alt="Noticia relacionada">
                    <div class="relacionada-content">
                        <span class="relacionada-categoria">Eventos</span>
                        <h4>Día de la Familia 2024: Un Encuentro de Amor</h4>
                        <span class="relacionada-fecha">09/06/2024</span>
                    </div>
                </a>
                <a href="#" class="relacionada-card">
                    <img src="./images/noticias/mejores-jugadores/biblioteca.jpg" alt="Noticia relacionada">
                    <div class="relacionada-content">
                        <span class="relacionada-categoria">Deportes</span>
                        <h4>Campeonato Intercolegiado de Fútbol</h4>
                        <span class="relacionada-fecha">05/10/2024</span>
                    </div>
                </a>
                <a href="#" class="relacionada-card">
                    <img src="./images/noticias/mejores-jugadores/biblioteca.jpg" alt="Noticia relacionada">
                    <div class="relacionada-content">
                        <span class="relacionada-categoria">Deportes</span>
                        <h4>Equipo Nicolaita Campeón Regional</h4>
                        <span class="relacionada-fecha">28/09/2024</span>
                    </div>
                </a>
            </div>
        </section>

    </article>
</div>