<?php
// Habilitar CORS (Cross-Origin Resource Sharing) para permitir solicitudes OPTIONS desde otros dominios
header("Access-Control-Allow-Origin: *");

// Indicar que se permiten las solicitudes OPTIONS
header("Access-Control-Allow-Methods: OPTIONS");

// Indicar las cabeceras personalizadas que se permiten en las solicitudes
header("Access-Control-Allow-Headers: Content-Type, Authorization");

// Establecer un tiempo de vida para la respuesta en segundos
header("Access-Control-Max-Age: 3600");

// Responder con un código de estado 200 OK
http_response_code(200);
?>
