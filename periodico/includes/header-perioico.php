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
     <link rel="icon" href="https://ietsannicolas.edu.co/images/Escudo.png?v=2" type="image/png" sizes="any">
     <link rel="apple-touch-icon" href="https://ietsannicolas.edu.co/images/Escudo.png" sizes="any">
     <link rel="shortcut icon" href="https://ietsannicolas.edu.co/images/Escudo.png" sizes="any">

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
     <meta name="theme-color" content="#044535">
     <meta name="msapplication-navbutton-color" content="#044535">
     <meta name="apple-mobile-web-app-status-bar-style" content="#044535">

     <!-- ============================================
         GOOGLE FONTS Y MATERIAL ICONS
         ============================================ -->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="./../css/materialize.min.css">

     <!-- Compiled and minified JavaScript -->
     <script src="./../js/materialize.min.js"></script>
     <!-- ============================================
         CUSTOM CSS (EN ORDEN DE CARGA)
         ============================================ -->
     <link rel="stylesheet" href="css/sidebar.css">
     <link rel="stylesheet" href="css/<?php echo $css; ?>">

     <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
     <!-- ============================================
         AOS (ANIMATE ON SCROLL)
         ============================================ -->
     <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css"> -->

     <!-- ============================================
         PRECONNECT PARA MEJOR RENDIMIENTO
         ============================================ -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link rel="preconnect" href="https://cdn.jsdelivr.net">
</head>

<body>