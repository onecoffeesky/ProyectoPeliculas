<?php
$request_headers = getallheaders();

// Puedes realizar acciones específicas o simplemente devolver los encabezados recibidos.
header("Content-Type: text/plain");
foreach ($request_headers as $header => $value) {
    echo "$header: $value\n";
    echo "cola";
}
?>