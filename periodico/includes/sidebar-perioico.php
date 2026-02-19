<!-- ============================================
     SIDEBAR DINÃMICO - PERIÃ“DICO ESCOLAR
     Carga automÃ¡ticamente noticias desde /noticias
     ============================================ -->
<aside class="sidebar-periodico" id="sidebar-noticias">
    <div class="sidebar-header">
        <div class="sidebar-logo">
            <img src="..\images\Escudo.png" alt="IET San Nicolás" class="logo-sidebar">
        </div>
        <h2 class="sidebar-title">
            <i class="material-icons">newspaper</i>
            Perídico Escolar
        </h2>
        <p class="sidebar-subtitle">"Voces Nicolaitas"</p>
    </div>

    <!-- Barra de bÃºsqueda -->
    <div class="sidebar-search">
        <div class="input-field">
            <i class="material-icons prefix">search</i>
            <input type="text" id="search-noticias" placeholder="Buscar noticias...">
        </div>
    </div>

    <!-- Filtros por categorÃ­a -->
    <div class="sidebar-filters ">
        <h3 class="filter-title">Categorías</h3>
        <div class="filter-chips">
            <div class="chip filter-chip active" data-category="todas">
                <i class="material-icons tiny">done_all</i> Todas
            </div>
            <div class="chip filter-chip " data-category="institucional">
                <i class="material-icons tiny">account_balance</i> Institucional
            </div>
            <div class="chip filter-chip" data-category="deportes">
                <i class="material-icons tiny">sports_soccer</i> Deportes
            </div>
            <div class="chip filter-chip" data-category="cultura">
                <i class="material-icons tiny">palette</i> Cultura
            </div>
            <div class="chip filter-chip" data-category="academico">
                <i class="material-icons tiny">school</i> Académico
            </div>
            <div class="chip filter-chip" data-category="eventos">
                <i class="material-icons tiny">event</i> Eventos
            </div>
        </div>

        <!-- Lista de noticias -->
        <div class="sidebar-noticias-list">
            <h3 class="section-title">
                <i class="material-icons">article</i>
                Ultimas Noticias
            </h3>

            <?php
            // ============================================
            // CARGA AUTOMÃTICA DE NOTICIAS
            // ============================================
            
            $noticias_dir = 'noticias/';
            $noticias = [];

            // Verificar si existe el directorio
            if (is_dir($noticias_dir)) {
                // Obtener todos los archivos PHP del directorio
                $archivos = glob($noticias_dir . '*.php');

                // Ordenar por fecha (mÃ¡s reciente primero)
                usort($archivos, function ($a, $b) {
                    return filemtime($b) - filemtime($a);
                });

                // Extraer metadata de cada noticia
                foreach ($archivos as $archivo) {
                    // Capturar las variables definidas en cada noticia
                    ob_start();
                    include $archivo;
                    ob_end_clean();

                    // Crear objeto de noticia con metadata
                    $noticia = [
                        'archivo' => basename($archivo),
                        'titulo' => isset($page_title) ? $page_title : 'Sin título',
                        'fecha' => isset($fecha) ? $fecha : date('Y-m-d'),
                        'autor' => isset($autor) ? $autor : 'Redacción',
                        'categoria' => isset($categoria) ? strtolower($categoria) : 'general',
                        'imagen' => isset($imagen_destacada) ? $imagen_destacada : 'default.jpg',
                        'resumen' => isset($resumen) ? $resumen : '',
                        'destacada' => isset($destacada) ? $destacada : false
                    ];

                    $noticias[] = $noticia;

                    // Limpiar variables para la siguiente iteración
                    unset($page_title, $fecha, $autor, $categoria, $imagen_destacada, $resumen, $destacada);
                }
            }

            // ============================================
            // MOSTRAR NOTICIAS EN EL SIDEBAR
            // ============================================
            
            if (count($noticias) > 0) {
                foreach ($noticias as $index => $noticia) {
                    $fecha_formateada = date('d/m/Y', strtotime($noticia['fecha']));
                    $es_destacada = $noticia['destacada'] ? 'noticia-destacada' : '';
                    $animation_delay = $index * 0.1;
                    ?>

                    <article class="sidebar-noticia-card <?php echo $es_destacada; ?>"
                        data-category="<?php echo $noticia['categoria']; ?>" data-aos="fade-left"
                        data-aos-delay="<?php echo $animation_delay * 100; ?>">

                        <!-- Indicador de destacada -->
                        <?php if ($noticia['destacada']): ?>
                            <div class="badge-destacada">
                                <i class="material-icons tiny">star</i>
                                Destacada
                            </div>
                        <?php endif; ?>

                        <!-- Imagen de la noticia -->
                        <a href="ver-noticia.php?n=<?php echo str_replace('.php', '', $noticia['archivo']); ?>"
                            class="noticia-link">
                            <div class="noticia-imagen">
                                <img src="images/noticias/<?php echo $noticia['imagen']; ?>"
                                    alt="<?php echo htmlspecialchars($noticia['titulo']); ?>" loading="lazy">
                                <div class="noticia-overlay">
                                    <i class="material-icons">arrow_forward</i>
                                </div>
                            </div>

                            <!-- Contenido de la noticia -->
                            <div class="noticia-content">
                                <div class="noticia-meta">
                                    <span class="noticia-categoria categoria-<?php echo $noticia['categoria']; ?>">
                                        <?php echo ucfirst($noticia['categoria']); ?>
                                    </span>
                                    <span class="noticia-fecha">
                                        <i class="material-icons tiny">calendar_today</i>
                                        <?php echo $fecha_formateada; ?>
                                    </span>
                                </div>

                                <h4 class="noticia-titulo">
                                    <?php echo htmlspecialchars($noticia['titulo']); ?>
                                </h4>

                                <?php if (!empty($noticia['resumen'])): ?>
                                    <p class="noticia-resumen">
                                        <?php echo substr(htmlspecialchars($noticia['resumen']), 0, 100) . '...'; ?>
                                    </p>
                                <?php endif; ?>

                                <div class="noticia-footer">
                                    <span class="noticia-autor">
                                        <i class="material-icons tiny">person</i>
                                        <?php echo htmlspecialchars($noticia['autor']); ?>
                                    </span>
                                    <span class="noticia-leer-mas">
                                        Leer más
                                        <i class="material-icons tiny">chevron_right</i>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </article>

                    <?php
                }
            } else {
                // Mensaje cuando no hay noticias
                ?>
                <div class="no-noticias" data-aos="fade-up">
                    <i class="material-icons large">assignment</i>
                    <h4>No hay noticias disponibles</h4>
                    <p>Pronto publicaremos nuevas noticias escolares.</p>
                </div>
                <?php
            }
            ?>
        </div>

        <!-- BotÃ³n para crear nueva noticia (solo para administradores) -->
        <div class="sidebar-footer">
            <a href="nueva-noticia.php" class="btn-nueva-noticia waves-effect waves-light">
                <i class="material-icons left">add_circle</i>
                Nueva Noticia
            </a>
        </div>
</aside>

<!-- ============================================
     SCRIPT PARA FILTROS Y BÃšSQUEDA
     ============================================ -->
<script>
    document.addEventListener('DOMContentLoaded', function () {

        const searchInput = document.getElementById('search-noticias');
        const filterChips = document.querySelectorAll('.filter-chip');
        const noticiaCards = document.querySelectorAll('.sidebar-noticia-card');

        function aplicarFiltros() {

            const searchTerm = searchInput ? searchInput.value.toLowerCase() : '';
            const activeChip = document.querySelector('.filter-chip.active');
            const category = activeChip ? activeChip.dataset.category : 'todas';

            noticiaCards.forEach(card => {

                const titulo = card.querySelector('.noticia-titulo')?.textContent.toLowerCase() || '';
                const resumen = card.querySelector('.noticia-resumen')?.textContent.toLowerCase() || '';

                const coincideTexto = titulo.includes(searchTerm) || resumen.includes(searchTerm);
                const coincideCategoria = category === 'todas' || card.dataset.category === category;

                if (coincideTexto && coincideCategoria) {
                    card.style.display = '';
                } else {
                    card.style.display = 'none';
                }

            });
        }

        if (searchInput) {
            searchInput.addEventListener('input', aplicarFiltros);
        }

        filterChips.forEach(chip => {
            chip.addEventListener('click', function () {
                filterChips.forEach(c => c.classList.remove('active'));
                this.classList.add('active');
                aplicarFiltros();
            });
        });

    });

    const searchInput = document.getElementById('search-noticias');
    const filterChips = document.querySelectorAll('.filter-chip');
    const noticiaCards = document.querySelectorAll('.sidebar-noticia-card');

    // ============================================
    // BUSQUEDA EN TIEMPO REAL
    // ============================================
    if (searchInput) {
        searchInput.addEventListener('input', function () {
            const searchTerm = this.value.toLowerCase();

            noticiaCards.forEach(card => {
                const titulo = card.querySelector('.noticia-titulo').textContent.toLowerCase();
                const resumen = card.querySelector('.noticia-resumen')?.textContent.toLowerCase() || '';

                if (titulo.includes(searchTerm) || resumen.includes(searchTerm)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    }

    // ============================================
    // FILTROS POR CATEGORÃA
    // ============================================
    filterChips.forEach(chip => {

        if (!chip.dataset.category) return; // Ignorar chips inválidos

        chip.addEventListener('click', function () {

            const category = this.dataset.category;
            if (!category) return; // Seguridad extra

            filterChips.forEach(c => c.classList.remove('active'));
            this.classList.add('active');

            noticiaCards.forEach(card => {
                if (category === 'todas' || card.dataset.category === category) {
                    card.style.display = '';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });


    // ============================================
    // ANIMACIÃ“N DE HOVER EN TARJETAS
    // ============================================
    noticiaCards.forEach(card => {
        card.addEventListener('mouseenter', function () {
            this.style.transform = 'translateX(-5px)';
        });

        card.addEventListener('mouseleave', function () {
            this.style.transform = 'translateX(0)';
        });
    });
</script>