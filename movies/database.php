<?php
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
    header('Access-Control-Allow-Headers: Content-Type OJABIO MEJIA');
    header('Access-Control-Max-Age: 86400'); // Cache durante un día
    header('Content-Length: 0');
    header('Content-Type: text/plain');
    die();
}
$servername = "localhost"; // Nombre del servidor de la base de datos
$username = "root"; // Nombre de usuario de la base de datos
$password = ""; // Contraseña de la base de datos
$database = "movies"; // Nombre de la base de datos
$table = "comments"; // Nombre de la tabla

// Conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta SQL para obtener datos
$sql = "SELECT id, user, comment FROM $table";
$result = $conn->query($sql);

// Comprobar si hay resultados
if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Usuario</th><th>Comentario</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["user"] . "</td>";
        echo "<td>" . $row["comment"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No se encontraron resultados";
}

// Cerrar la conexión a la base de datos
$conn->close();
?>