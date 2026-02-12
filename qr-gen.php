<?php
// Datos del QR en formato JSON
$documento = '1049';
$doc_hash = hash('sha256', $documento);

$infoqr = json_encode([
    "tipo" => "usuario",
    "doc_hash" => $doc_hash
]);

echo $infoqr;
//$infoqr = 'http://192.168.154.185/SII-IETSN/frontend/prestamo.html';

// URL de la imagen que quieres en el centro del QR
$logoUrl = "https://ietsannicolas.edu.co/images/Escudo.png"; // Cambia esto por la URL real del logo

$data = [
    "data" => $infoqr,
    "config" => [
        "body" => "circular",
        "eye" => "frame6",
        "eyeBall" => "ball6",
        "erf1" => [],
        "erf2" => ["fh"],
        "erf3" => ["fv"],
        "brf1" => [],
        "brf2" => ["fh"],
        "brf3" => ["fv"],
        "bodyColor" => "#ffffff",
        "bgColor" => "#ffffff",
        "eye1Color" => "#191938", // Azul
        "eye2Color" => "#a3071a", // Rojo
        "eye3Color" => "#a3071a", // Rojo
        "eyeBall1Color" => "#a3071a", // Rojo
        "eyeBall2Color" => "#191938", // Azul
        "eyeBall3Color" => "#191938", // Azul
        "gradientColor1" => "#191938", // Azul
        "gradientColor2" => "#191938", // Azul
        "gradientType" => "radial",
        "gradientOnEyes" => false,
        "logo" => $logoUrl // Aquí se agrega el logo en el centro
    ],
    "size" => 300,
    "download" => false,
    "file" => "svg"
];

// Convertir los datos a formato JSON
$jsonData = json_encode($data);

// URL de la API de QR Code Monkey
$url = "https://api.qrcode-monkey.com/qr/custom";

// Inicializar cURL
$ch = curl_init($url);

// Configurar cURL
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Content-Type: application/json"
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);

// Ejecutar la solicitud y obtener la respuesta
$response = curl_exec($ch);

// Verificar si hubo errores
if (curl_errno($ch)) {
    echo "Error en cURL: " . curl_error($ch);
    curl_close($ch);
    exit;
}

// Cerrar cURL
curl_close($ch);

// Convertir el SVG en Base64 para mostrarlo directamente en la página
$base64Image = base64_encode($response);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code con Logo</title>
</head>

<body>
    <h1>Código QR Generado</h1>
    <p>El código QR generado con la API se muestra a continuación:</p>
    <img src="data:image/svg+xml;base64,<?= $base64Image ?>" alt="QR Code" />
</body>

</html>