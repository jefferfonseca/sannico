<!DOCTYPE html>
<html lang="es">

<head>
    <!-- ============================================
         META TAGS BÁSICOS
         ============================================ -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- ============================================
         SEO - TÍTULO Y DESCRIPCIÓN
         ============================================ -->
    <?php
    // ============================================
// VALORES POR DEFECTO SI NO ESTÁN DEFINIDOS
// ============================================
    if (!isset($page_title)) {
        $page_title = "ok";
    }
    if (!isset($page_description)) {
        $page_description = "Institución Educativa Técnica San Nicolás de Tuta, Boyacá. Formación integral con especialidad en Desarrollo de Aplicaciones Web.";
    }
    if (!isset($page_keywords)) {
        $page_keywords = "colegio Tuta, educación técnica Boyacá, IET San Nicolás";
    }
    if (!isset($page_image)) {
        $page_image = "https://ietsannicolas.edu.co/images/Escudo.png";
    }
    ?>
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    <meta name="keywords" content="<?php echo $page_keywords; ?>">


    <meta name="author" content="Mg. Ing. Jeferson Leonel Fonseca Soto">
    <meta name="robots" content="index, follow">

    <!-- ============================================
         SEO - IDIOMA Y REGIÓN
         ============================================ -->
    <link rel="canonical" href="https://ietsannicolas.edu.co/">
    <meta name="language" content="Spanish">
    <meta name="geo.region" content="CO-BOY">
    <meta name="geo.placename" content="Tuta, Boyacá">
    <meta name="geo.position" content="5.716261;-73.227351">

    <!-- ============================================
         OPEN GRAPH (FACEBOOK, LINKEDIN)
         ============================================ -->
    <meta property="og:site_name" content="IET San Nicolás - Tuta">
    <meta property="og:title" content="IET San Nicolás - Institución Educativa Técnica | Tuta, Boyacá">
    <meta property="og:description"
        content="Institución Educativa Técnica San Nicolás de Tuta, Boyacá. Formación integral con especialidad en Desarrollo de Aplicaciones Web">
    <meta property="og:image" content="https://ietsannicolas.edu.co/images/Escudo.png">
    <meta property="og:url" content="https://ietsannicolas.edu.co/">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="es_CO">

    <!-- ============================================
         TWITTER CARDS
         ============================================ -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="IET San Nicolás - Tuta, Boyacá">
    <meta name="twitter:description" content="Institución Educativa Técnica San Nicolás. Queremos y Podemos.">
    <meta name="twitter:image" content="https://ietsannicolas.edu.co/images/Escudo.png">

    <!-- ============================================
         FAVICON Y APP ICONS
         ============================================ -->
    <link rel="icon" href="simages/Escudo.png" type="image/png">
    <link rel="apple-touch-icon" href="./images/Escudo.png">
    <link rel="shortcut icon" href="./images/Escudo.png">

    <!-- ============================================
         STRUCTURED DATA (JSON-LD) PARA GOOGLE
         ============================================ -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "EducationalOrganization",
      "name": "Institución Educativa Técnica San Nicolás",
      "alternateName": "IET San Nicolás",
      "url": "https://ietsannicolas.edu.co",
      "logo": "https://ietsannicolas.edu.co/images/Escudo.png",
      "description": "Institución Educativa Técnica en Tuta, Boyacá, Colombia. Formación integral con especialidad en Desarrollo de Aplicaciones Web.",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Vda. El Arenal",
        "addressLocality": "Tuta",
        "addressRegion": "Boyacá",
        "addressCountry": "CO"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 5.716261,
        "longitude": -73.227351
      },
      "telephone": "+57-321-222-2082",
      "email": "tuta_colsannicolas@hotmail.com",
      "sameAs": [
        "https://web.facebook.com/ietsannicolas"
      ]
    }
    </script>

    <!-- ============================================
         THEME COLOR (PARA NAVEGADORES MÓVILES)
         ============================================ -->
    <meta name="theme-color" content="#056245">
    <meta name="msapplication-navbutton-color" content="#056245">
    <meta name="apple-mobile-web-app-status-bar-style" content="#056245">

    <!-- ============================================
         GOOGLE FONTS Y MATERIAL ICONS
         ============================================ -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- ============================================
         MATERIALIZE CSS
         ============================================ -->
    <link type="text/css" rel="stylesheet" href="/sannicolas-tuta/css/materialize.min.css" media="screen,projection">

    <!-- ============================================
         CUSTOM CSS (EN ORDEN DE CARGA)
         ============================================ -->
    <link rel="stylesheet" href="/sannicolas-tuta/css/style.css">
    <link rel="stylesheet" href="/sannicolas-tuta/css/header.css">
    <link rel="stylesheet" href="/sannicolas-tuta/css/footer.css">
    <link rel="stylesheet" href="/sannicolas-tuta/css/<?php echo $css; ?>">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- ============================================
         AOS (ANIMATE ON SCROLL)
         ============================================ -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">

    <!-- ============================================
         PRECONNECT PARA MEJOR RENDIMIENTO
         ============================================ -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
</head>

<body>
    <!-- ============================================
         INICIALIZACIÓN DE AOS
         ============================================ -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true,
            mirror: false
        });
    </script>

    <!-- ============================================
         HEADER PRINCIPAL
         ============================================ -->
    <header role="banner">
        <!-- Barra superior con logos y nombre -->
        <div class="navbar">
            <div class="row center valign-wrapper">
                <!-- Logo San Nicolás -->
                <div class="col s12 m4">
                    <img src="./images/Escudo.png" alt="Escudo Institución Educativa Técnica San Nicolás" height="90"
                        width="90" loading="eager">
                </div>

                <!-- Nombre de la institución -->
                <div class="col s12 m4 center">
                    <h1 style="font-size: 1.5rem; margin: 10px 0;">
                        Institución Educativa Técnica<br>San Nicolás - Tuta
                    </h1>
                    <p class="center m-0" style="font-size: 1rem; font-style: italic;">
                        "Queremos y Podemos"
                    </p>
                </div>

                <!-- Logo Tuta -->
                <div class="col s12 m4">
                    <img src="./images/Escudo-tuta.png" alt="Escudo Municipio de Tuta, Boyacá" height="90" width="90"
                        loading="eager">
                </div>
            </div>
        </div>

        <!-- ============================================
             NAVEGACIÓN PRINCIPAL
             ============================================ -->
        <nav id="myHeader" class="nav z-depth-0" role="navigation" aria-label="Navegación principal">
            <div class="nav-wrapper">
                <!-- Logo sticky (visible solo al hacer scroll) -->
                <a href="index.php" id="logo" class="hide" aria-label="Inicio - IET San Nicolás">
                    <img style="padding: 10px;" src="./images/Escudo.png" alt="IET San Nicolás" height="100%"
                        width="auto">
                </a>

                <!-- Botón menú responsive -->
                <a href="#" data-target="menu-responsive" class="sidenav-trigger right"
                    aria-label="Abrir menú de navegación" aria-controls="menu-responsive" aria-expanded="false">
                    <i class="material-icons">menu</i>
                </a>

                <!-- Menú principal (desktop) -->
                <ul class="right hide-on-med-and-down">
                    <li><a href="index.php" title="Página de inicio">Inicio</a></li>

                    <li>
                        <a href="#" class="dropdown-trigger" data-target="institucion" title="Información institucional"
                            aria-haspopup="true" aria-expanded="false">
                            Institución
                            <i class="material-icons right">arrow_drop_down</i>
                        </a>
                    </li>

                    <li>
                        <a href="constru.php" target="_blank" rel="noopener noreferrer" title="Emisora institucional">
                            Radio
                        </a>
                    </li>

                    <li>
                        <a href="#" class="dropdown-trigger" data-target="esp" title="Especialidad técnica de los estudiantes"
                            aria-haspopup="true" aria-expanded="false">
                            Especialidad
                            <i class="material-icons right">arrow_drop_down</i>
                        </a>
                    </li>

                    <li>
                        <a href="https://compucol.co/colegios/tutaiesannicolas/" target="_blank"
                            rel="noopener noreferrer" title="Consultar notas académicas">
                            Sistema de Notas
                        </a>
                    </li>

                    <li>
                        <a href="contacto.php" title="Información de contacto">
                            Contáctenos
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- ============================================
             SUBMENÚS DROPDOWN
             ============================================ -->

        <!-- Dropdown: Institución -->
        <ul id="institucion" class="dropdown-content">
            <li><a href="nosotros.php" title="Historia de la institución">Reseña Histórica</a></li>
            <li><a href="simbolos.php" title="Himno, bandera y escudo">Símbolos Institucionales</a></li>
            <li><a href="sedes.php" title="Ubicación de sedes">Sedes</a></li>
            <li><a href="docentes.php" title="Planta docente">Docentes</a></li>
            <li><a href="gobierno-escolar.php" title="Gobierno escolar">Gobierno Escolar</a></li>
            <li><a href="proyectos.php" title="Proyectos institucionales">Proyectos</a></li>
            <li><a href="#" target="_blank" title="Servicio de psicoorientación">Psicoorientación</a></li>
        </ul>

        <!-- Dropdown: Especialidad -->
        <ul id="esp" class="dropdown-content">
            <li><a href="tecnico-web.php" title="Especialidad en Desarrollo de Aplicaciones Web">Desarrollo de Aplicaciones Web</a></li>
            <li><a href="niveles.php" title="Asignaturas de la especialidad">Asignaturas</a></li>
        </ul>

        <!-- ============================================
             MENÚ LATERAL RESPONSIVE (MOBILE)
             ============================================ -->
        <ul class="sidenav" id="menu-responsive">
            <li><a href="index.php"><i class="material-icons left">home</i>Inicio</a></li>

            <li class="divider"></li>
            <li><a class="subheader">Institución</a></li>
            <li><a href="nosotros.php"><i class="material-icons left">history_edu</i>Reseña Histórica</a></li>
            <li><a href="simbolos.php"><i class="material-icons left">flag</i>Símbolos Institucionales</a></li>
            <li><a href="sedes.php"><i class="material-icons left">location_on</i>Sedes</a></li>
            <li><a href="docentes.php"><i class="material-icons left">people</i>Docentes</a></li>
            <li><a href="gobierno-escolar.php"><i class="material-icons left">gavel</i>Gobierno Escolar</a></li>
            <li><a href="proyectos.php"><i class="material-icons left">folder_special</i>Proyectos</a></li>

            <li class="divider"></li>
            <li><a class="subheader">Servicios</a></li>
            <li><a href="constru.php" target="_blank"><i class="material-icons left">radio</i>Radio</a></li>

            <li class="divider"></li>
            <li><a class="subheader">Especialidades</a></li>
            <li><a href="redes.php"><i class="material-icons left">computer</i>Redes y Sistemas</a></li>
            <li><a href="salud.php"><i class="material-icons left">local_hospital</i>Salud</a></li>
            <li><a href="turismo.php"><i class="material-icons left">landscape</i>Turismo</a></li>

            <li class="divider"></li>
            <li><a href="https://compucol.co/colegios/tutaiesannicolas/" target="_blank" rel="noopener noreferrer">
                    <i class="material-icons left">assignment</i>Sistema de Notas
                </a></li>
            <li><a href="contacto.php"><i class="material-icons left">email</i>Contáctenos</a></li>
        </ul>
    </header>

    <!-- ============================================
         SKIP TO CONTENT (ACCESIBILIDAD)
         ============================================ -->
    <a href="#main-content" class="skip-link" style="position: absolute; left: -9999px; z-index: 999;">
        Saltar al contenido principal
    </a>