<?php 
// upload.php

// Solo acepta solicitudes POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  echo json_encode(['success' => false, 'message' => 'Método no permitido.']);
  exit;
}

// Verifica que se hayan enviado archivos
if (!isset($_FILES['files'])) {
  echo json_encode(['success' => false, 'message' => 'No se han enviado archivos.']);
  exit;
}

// Obtiene la ruta destino enviada por POST
$folder = isset($_POST['folder']) ? $_POST['folder'] : '';
// Corrige la ruta para que termine con '/'
$folder = rtrim($folder, '/') . '/';

// Si la carpeta no existe, intenta crearla
if (!is_dir($folder)) {
  if (!mkdir($folder, 0777, true)) {
    echo json_encode(['success' => false, 'message' => 'La carpeta destino no existe y no se pudo crear.']);
    exit;
  }
}

// Función para obtener mensajes de error detallados
function getUploadErrorMessage($code) {
  $errors = [
    UPLOAD_ERR_INI_SIZE   => 'El archivo excede el tamaño máximo permitido por la directiva upload_max_filesize.',
    UPLOAD_ERR_FORM_SIZE  => 'El archivo excede el tamaño máximo permitido en el formulario.',
    UPLOAD_ERR_PARTIAL    => 'El archivo fue parcialmente subido.',
    UPLOAD_ERR_NO_FILE    => 'No se subió ningún archivo.',
    UPLOAD_ERR_NO_TMP_DIR => 'Falta la carpeta temporal.',
    UPLOAD_ERR_CANT_WRITE => 'No se pudo escribir el archivo en disco.',
    UPLOAD_ERR_EXTENSION  => 'Una extensión de PHP detuvo la subida del archivo.'
  ];
  return isset($errors[$code]) ? $errors[$code] : 'Error desconocido al subir el archivo.';
}

// Procesa cada archivo subido
foreach ($_FILES['files']['error'] as $key => $error) {
  if ($error !== UPLOAD_ERR_OK) {
    echo json_encode(['success' => false, 'message' => getUploadErrorMessage($error)]);
    exit;
  }
  $tmp_name = $_FILES['files']['tmp_name'][$key];
  $originalName = basename($_FILES['files']['name'][$key]);
  
  // Implementar control de versiones: si el archivo ya existe, se le agrega un timestamp al nombre.
  $destination = $folder . $originalName;
  if (file_exists($destination)) {
    $pathInfo = pathinfo($originalName);
    $filename = $pathInfo['filename'];
    $extension = isset($pathInfo['extension']) ? '.' . $pathInfo['extension'] : '';
    $newName = $filename . '_' . time() . $extension;
    $destination = $folder . $newName;
  }
  
  if (!move_uploaded_file($tmp_name, $destination)) {
    echo json_encode(['success' => false, 'message' => 'Error al mover el archivo.']);
    exit;
  }
}

echo json_encode(['success' => true]);
?>
