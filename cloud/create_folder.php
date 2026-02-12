<?php
// create_folder.php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success'=>false, 'message'=>'Método no permitido']);
    exit;
}

$parent = isset($_POST['parent']) ? $_POST['parent'] : '';
$newFolderName = isset($_POST['folderName']) ? $_POST['folderName'] : '';

if (empty($parent) || empty($newFolderName)) {
    echo json_encode(['success'=>false, 'message'=>'Faltan parámetros.']);
    exit;
}

$targetFolder = rtrim($parent, '/') . '/' . $newFolderName . '/';

if (!is_dir($targetFolder)) {
    if (mkdir($targetFolder, 0777, true)) {
        echo json_encode(['success'=>true, 'message'=>'Carpeta creada.']);
    } else {
        echo json_encode(['success'=>false, 'message'=>'No se pudo crear la carpeta.']);
    }
} else {
    echo json_encode(['success'=>false, 'message'=>'La carpeta ya existe.']);
}
?>
