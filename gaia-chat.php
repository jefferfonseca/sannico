<?php
header("Content-Type: application/json; charset=utf-8");

// Cargar la API key desde el archivo externo
$apiKey = trim(include("gaia-key.php"));  // trim() elimina espacios o saltos ocultos

// Leer el mensaje que viene del frontend
$data = json_decode(file_get_contents("php://input"), true);
$userMessage = $data["message"] ?? "";

// Configurar cURL para llamar a la API de OpenAI
$ch = curl_init("https://api.openai.com/v1/chat/completions");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Content-Type: application/json",
    "Authorization: Bearer " . $apiKey
]);

// Datos de la petición
$postData = [
    "model" => "gpt-4o-mini",
    "messages" => [
        [
            "role" => "system",
            "content" => "Eres G.A.I.A., un asistente ambiental que enseña sobre reciclaje y sostenibilidad en la IET. 
                          Da respuestas completas, claras y bien estructuradas, usando listas y ejemplos cuando sea útil. 
                          Evita cortar tus respuestas a la mitad."
        ],
        ["role" => "user", "content" => $userMessage]
    ],
    "max_tokens" => 2500,   // límite extendido para respuestas largas
    "temperature" => 0.6
];

curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));

// Ejecutar la llamada a la API
$response = curl_exec($ch);

// Manejo de errores de cURL
if (curl_errno($ch)) { 
    echo json_encode(["reply" => "⚠️ Error en la conexión: " . curl_error($ch)]);
    exit;
}
curl_close($ch);

// Decodificar la respuesta
$result = json_decode($response, true);

// 🚨 Depuración: guarda la respuesta cruda en el log de PHP
error_log("Respuesta API: " . $response);

// Manejar errores de la API
if (isset($result["error"])) {
    echo json_encode(["reply" => "⚠️ Error de API: " . $result["error"]["message"]]);
    exit;
}

// Obtener el texto de la respuesta del asistente
$reply = $result["choices"][0]["message"]["content"] ?? "Lo siento, no tengo respuesta en este momento.";

// Enviar respuesta al frontend
echo json_encode(["reply" => $reply]);
