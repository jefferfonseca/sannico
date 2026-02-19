<?php
$archivo = $_GET['n'] ?? null;

if (!$archivo || !file_exists(__DIR__ . "/noticias/$archivo.php")) {
    die("Noticia no encontrada");
}

/*
  1️⃣ Primero cargamos el archivo
  Esto define las variables
*/
/*ob_start()
Para:

Ejecutar el archivo

Obtener las variables

Capturar el HTML

Evitar que se imprima antes del header*/

ob_start();
include __DIR__ . "/noticias/$archivo.php";
$contenido = ob_get_clean();

/*
  2️⃣ Ahora ya existen $page_title, $css, etc.
  Entonces cargamos el header
*/
include __DIR__ . "/includes/header-perioico.php";
include __DIR__ . "/includes/sidebar-perioico.php";

/*
  3️⃣ Imprimimos el contenido capturado
*/
echo $contenido;

include __DIR__ . "/includes/footer-perioico.php";
?>
