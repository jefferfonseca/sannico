<?php
$directorio = $_POST['folder']; // Carpeta donde están los archivos
function listarDirectorio($ruta)
{
    $archivos = scandir($ruta);
    $estructura = [];

    foreach ($archivos as $archivo) {
        if ($archivo !== '.' && $archivo !== '..') {
            $rutaCompleta = "$ruta/$archivo";
            if (is_dir($rutaCompleta)) {
                // Si es un directorio, llamamos recursivamente a la función
                $estructura[] = [
                    'name' => $archivo,
                    'type' => 'folder',
                    'children' => listarDirectorio($rutaCompleta)
                ];
            } else {
                // Si es un archivo, agregamos con su extensión
                $extension = pathinfo($archivo, PATHINFO_EXTENSION);
                $estructura[] = [
                    'name' => $archivo,
                    'type' => 'file',
                    'extension' => $extension,
                    'path' => $rutaCompleta
                ];
            }
        }
    }
    return $estructura;
}

header('Content-Type: application/json');
echo json_encode(listarDirectorio($directorio));
