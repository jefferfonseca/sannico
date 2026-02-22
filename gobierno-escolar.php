<?php
$menu = "Institución";
$css = "gobierno-escolar.css"; // CSS específico

// Meta tags específicos
$page_title = "IETSN | Gobierno Escolar";
$page_description = "Conoce el gobierno escolar de la IET San Nicolás: directivos docentes, consejo directivo, consejo académico y gobierno estudiantil.";
$page_keywords = "gobierno escolar IET San Nicolás, consejo directivo, consejo académico, personero estudiantil";
$page_image = "https://ietsannicolas.edu.co/images/Escudo.png";

include('includes/header.php');

// ============================================
// FUNCIÓN PARA CARGAR CSV (OPCIONAL)
// ============================================
function cargarMiembrosCSV($archivo)
{
    $miembros = [];
    if (file_exists($archivo)) {
        $handle = fopen($archivo, 'r');
        $headers = fgetcsv($handle); // Primera fila: encabezados

        while (($data = fgetcsv($handle)) !== false) {
            $miembro = [
                'nombre' => $data[0] ?? '',
                'cargo' => $data[1] ?? '',
                'seccion' => $data[2] ?? '',
                'foto' => $data[3] ?? 'images/docentes/default.png',
                'genero' => $data[4] ?? 'm'
            ];
            $miembros[] = $miembro;
        }
        fclose($handle);
    }
    return $miembros;
}

// Descomentar si usas CSV:
// $miembros = cargarMiembrosCSV('data/gobierno-escolar.csv');

// Por ahora usamos datos hardcoded (puedes cambiar a CSV después)
$directivos = [
    ['nombre' => 'Esp. Ana Jaqueline Saganome López', 'cargo' => 'Rectora', 'foto' => 'images/docentes/h1.png'],
    ['nombre' => 'Esp. Madyuri Andrea Guerrero Sánchez', 'cargo' => 'Psicoorientadora', 'foto' => 'images/docentes/m1.png']
];

$consejoDirectivo = [
    ['nombre' => 'Esp. Ana Jaqueline Saganome López', 'cargo' => 'Presidente', 'foto' => 'images/docentes/h1.png'],
    ['nombre' => 'Por definir', 'cargo' => 'Representante Docentes Secundaria', 'foto' => 'images/docentes/m1.png'],
    ['nombre' => 'Por definir', 'cargo' => 'Representante Docentes Primaria', 'foto' => 'images/docentes/h1.png'],
    ['nombre' => 'Por definir', 'cargo' => 'Representante Docente Sedes', 'foto' => 'images/docentes/m1.png'],
    ['nombre' => 'Por definir', 'cargo' => 'Representante Consejo de Padres', 'foto' => 'images/docentes/m1.png'],
    ['nombre' => 'Por definir', 'cargo' => 'Representante Consejo de Padres', 'foto' => 'images/docentes/m1.png'],
    ['nombre' => 'Por definir', 'cargo' => 'Representante Sector Productivo', 'foto' => 'images/docentes/m1.png'],
    ['nombre' => 'Por definir', 'cargo' => 'Representante Estudiantil', 'foto' => 'images/docentes/m1.png']
];

$consejoAcademico = [
    ['nombre' => 'Ing. Jefferson Leonel Fonseca Soto', 'cargo' => 'Técnico en Desarrollo de Aplicaciones Web', 'foto' => 'images/docentes/h1.png'],
    ['nombre' => 'Esp. Ana Jaqueline Saganome López', 'cargo' => 'Presidente', 'foto' => 'images/docentes/m1.png'],
    ['nombre' => 'Esp. Madyuri Andrea Guerrero Sánchez', 'cargo' => 'Psicoorientadora', 'foto' => 'images/docentes/m1.png'],
    ['nombre' => 'Constanza Milena Pérez Pérez', 'cargo' => 'Educación Física, Recreación y Deportes', 'foto' => 'images/docentes/m1.png'],
    ['nombre' => 'Julia Esther Peñuela Rodríguez', 'cargo' => 'Humanidades', 'foto' => 'images/docentes/m1.png'],
    ['nombre' => 'Néstor Lemus', 'cargo' => 'Tecnología e Informática', 'foto' => 'images/docentes/h1.png'],
    ['nombre' => 'Carlos Ricardo Adarme Rojas', 'cargo' => 'Matemáticas', 'foto' => 'images/docentes/h1.png'],
    ['nombre' => 'Diego Armando Avella Machuca', 'cargo' => 'Educación Religiosa y Moral', 'foto' => 'images/docentes/h1.png'],
    ['nombre' => 'Oscar Gonzalo Plazas Pérez', 'cargo' => 'Ciencias Sociales', 'foto' => 'images/docentes/h1.png'],
    ['nombre' => 'María Concepción Cely Berdugo', 'cargo' => 'Ciencias Naturales y Educación Ambiental', 'foto' => 'images/docentes/m1.png'],
    ['nombre' => 'Hakeri Alejandro Cotacio Chilito', 'cargo' => 'Educación Artística', 'foto' => 'images/docentes/h1.png'],
    ['nombre' => 'Diego Armando Avella Machuca', 'cargo' => 'Ética y Valores', 'foto' => 'images/docentes/m1.png'],
    ['nombre' => 'María Luisa Suárez Umba', 'cargo' => 'Preescolar', 'foto' => 'images/docentes/m1.png'],
    ['nombre' => 'Por definir', 'cargo' => 'Primaria', 'foto' => 'images/docentes/m1.png'],
    ['nombre' => 'Por definir', 'cargo' => 'Sedes', 'foto' => 'images/docentes/m1.png']
];

$gobiernoEstudiantil = [
    ['nombre' => 'Oscar Alejandro Rivera Silva', 'cargo' => 'Personero Estudiantil 2024', 'grado' => '11A', 'foto' => 'images/docentes/h1.png'],
    ['nombre' => 'Por definir', 'cargo' => 'Representante Estudiantil', 'grado' => '11A', 'foto' => 'images/docentes/h1.png']
];
?>

<!-- ============================================
     PÁGINA: GOBIERNO ESCOLAR
     ============================================ -->
<main id="main-content" class="gobierno-page" role="main">

    <!-- ============================================
         HEADER
         ============================================ -->
    <section class="gobierno-header">
        <div class="container">
            <h1 class="titulo-principal yellow-text center" data-aos="fade-down">
                <i class="material-icons large">account_balance</i>
                GOBIERNO ESCOLAR
            </h1>
            <p class="subtitulo-pagina white-text center" data-aos="fade-up" data-aos-delay="200">
                Estructura organizacional y liderazgo institucional
            </p>
        </div>
    </section>

    <!-- ============================================
         TABS NAVIGATION
         ============================================ -->
    <section class="tabs-section">
        <div class="container">
            <ul class="tabs tabs-gobierno" data-aos="fade-up">
                <li class="tab">
                    <a href="#directivos">
                        <i class="material-icons">supervisor_account</i>
                        <span>Directivos</span>
                    </a>
                </li>
                <li class="tab">
                    <a href="#consejo-directivo">
                        <i class="material-icons">how_to_vote</i>
                        <span>Consejo Directivo</span>
                    </a>
                </li>
                <li class="tab">
                    <a href="#consejo-academico">
                        <i class="material-icons">menu_book</i>
                        <span>Consejo Académico</span>
                    </a>
                </li>
                <li class="tab">
                    <a href="#gobierno-estudiantil">
                        <i class="material-icons">school</i>
                        <span>Gobierno Estudiantil</span>
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <!-- ============================================
         TAB 1: DIRECTIVOS DOCENTES
         ============================================ -->
    <div id="directivos" class="section scrollspy tab-content">
        <div class="">
            <h2 class="section-title yellow-text center" data-aos="fade-down">
                <i class="material-icons">admin_panel_settings</i>
                Directivos Docentes
            </h2>
            <div class="miembros-wrapper">
                <div class="miembros-grid">
                    <?php foreach ($directivos as $index => $miembro): ?>
                        <div class="miembro-item" style="width: 300px;" data-aos="fade-up"
                            data-aos-delay="<?= $index * 100 ?>">
                            <div class="miembro-card destacado">
                                <div class="miembro-foto-wrapper">
                                    <img src="<?= $miembro['foto'] ?>" alt="<?= $miembro['nombre'] ?>" class="miembro-foto">
                                    <div class="miembro-badge">
                                        <i class="material-icons">star</i>
                                    </div>
                                </div>
                                <div class="miembro-info">
                                    <h3 class="miembro-nombre yellow-text"><?= $miembro['nombre'] ?></h3>
                                    <p class="miembro-cargo white-text">
                                        <i class="material-icons tiny">work</i>
                                        <?= $miembro['cargo'] ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================
         TAB 2: CONSEJO DIRECTIVO
         ============================================ -->
    <div id="consejo-directivo" class="section scrollspy tab-content">
        <div class="">
            <h2 class="section-title yellow-text center" data-aos="fade-down">
                <i class="material-icons">groups</i>
                Consejo Directivo
            </h2>
            <div class="miembros-wrapper">
                <div class="miembros-grid" >
                    <?php foreach ($consejoDirectivo as $index => $miembro): ?>
                        <div class="miembro-item" style="width: 300px;" data-aos="fade-up"
                            data-aos-delay="<?= ($index % 4) * 100 ?>">
                            <div class="miembro-card">
                                <div class="miembro-foto-wrapper">
                                    <img src="<?= $miembro['foto'] ?>" alt="<?= $miembro['nombre'] ?>" class="miembro-foto">
                                </div>
                                <div class="miembro-info">
                                    <h3 class="miembro-nombre yellow-text"><?= $miembro['nombre'] ?></h3>
                                    <p class="miembro-cargo white-text">
                                        <i class="material-icons tiny">badge</i>
                                        <?= $miembro['cargo'] ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================
         TAB 3: CONSEJO ACADÉMICO
         ============================================ -->
    <div id="consejo-academico" class="section scrollspy tab-content">
        <div class="">
            <h2 class="section-title yellow-text center" data-aos="fade-down">
                <i class="material-icons">school</i>
                Consejo Académico
            </h2>

            <div class="miembros-grid">
                <?php foreach ($consejoAcademico as $index => $miembro): ?>
                    <div class="miembro-item" style="width: 300px;" data-aos="fade-up"
                        data-aos-delay="<?= ($index % 4) * 100 ?>">
                        <div class="miembro-card">
                            <div class="miembro-foto-wrapper">
                                <img src="<?= $miembro['foto'] ?>" alt="<?= $miembro['nombre'] ?>" class="miembro-foto">
                            </div>
                            <div class="miembro-info">
                                <h3 class="miembro-nombre yellow-text"><?= $miembro['nombre'] ?></h3>
                                <p class="miembro-cargo white-text">
                                    <i class="material-icons tiny">subject</i>
                                    <?= $miembro['cargo'] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- ============================================
         TAB 4: GOBIERNO ESTUDIANTIL
         ============================================ -->
    <div id="gobierno-estudiantil" class="section scrollspy tab-content">
        <div class="">
            <h2 class="section-title yellow-text center" data-aos="fade-down">
                <i class="material-icons">person</i>
                Gobierno Estudiantil 2024
            </h2>

            <div class="miembros-grid">
                <?php foreach ($gobiernoEstudiantil as $index => $miembro): ?>
                    <div class="miembro-item" style="width: 300px;" data-aos="fade-up" data-aos-delay="<?= $index * 100 ?>">
                        <div class="miembro-card estudiante">
                            <div class="miembro-foto-wrapper">
                                <img src="<?= $miembro['foto'] ?>" alt="<?= $miembro['nombre'] ?>" class="miembro-foto">
                                <div class="miembro-grado">
                                    <?= $miembro['grado'] ?>
                                </div>
                            </div>
                            <div class="miembro-info">
                                <h3 class="miembro-nombre yellow-text"><?= $miembro['nombre'] ?></h3>
                                <p class="miembro-cargo white-text">
                                    <i class="material-icons tiny">verified_user</i>
                                    <?= $miembro['cargo'] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

</main>

<!-- ============================================
     JAVASCRIPT
     ============================================ -->
<script src="js/materialize.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const tabsSection = document.querySelector('.tabs-section');
    const tabsLinks = document.querySelectorAll('.tabs a');
    const sections = document.querySelectorAll('.scrollspy');

    /* ===============================
       FONDO
    =============================== */
    document.body.style.backgroundImage = "url('./images/parallax/14.jpg')";
    document.body.style.backgroundSize = "cover";
    document.body.style.backgroundAttachment = "fixed";


    /* ===============================
       SMOOTH SCROLL CON OFFSET
    =============================== */
    tabsLinks.forEach(link => {

        link.addEventListener('click', function (e) {

            e.preventDefault();

            const target = document.querySelector(this.getAttribute('href'));
            if (!target) return;

            const tabsHeight = tabsSection.offsetHeight;

            const targetPosition =
                target.getBoundingClientRect().top + window.pageYOffset;

            const offsetPosition =
                targetPosition - tabsHeight;

            window.scrollTo({
                top: offsetPosition,
                behavior: 'smooth'
            });

        });

    });


    /* ===============================
       ACTUALIZAR ACTIVE EN SCROLL
    =============================== */
    function updateActiveTab() {

        const tabsHeight = tabsSection.offsetHeight;
        const scrollPosition = window.scrollY + tabsHeight - 20;

        sections.forEach(section => {

            const sectionTop = section.offsetTop;
            const sectionBottom = sectionTop + section.offsetHeight;
            const id = section.getAttribute('id');

            if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {

                tabsLinks.forEach(link => link.classList.remove('active'));

                const activeLink =
                    document.querySelector('.tabs a[href="#' + id + '"]');

                if (activeLink) {
                    activeLink.classList.add('active');
                }
            }

        });
    }

    window.addEventListener('scroll', function () {

        updateActiveTab();

        // efecto fixed compacto
        if (window.scrollY > 200) {
            tabsSection.classList.add('scrolled');
        } else {
            tabsSection.classList.remove('scrolled');
        }

    });

});
</script>

<?php include('includes/footer.php'); ?>