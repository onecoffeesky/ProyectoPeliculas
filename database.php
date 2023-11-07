<?php
// Datos de conexión a la base de datos
$host = 'localhost'; // Nombre del servidor de la base de datos
$nombreBD = 'movies'; // Nombre de tu base de datos
$usuario = 'root'; // Nombre de usuario de la base de datos
$contrasena = ''; // Contraseña de la base de datos

try {
    // Establecer la conexión a la base de datos
    $conexion = new PDO("mysql:host=$host;dbname=$nombreBD", $usuario, $contrasena);

    // Configurar el modo de manejo de errores para que PDO arroje excepciones en caso de error
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexión exitosa a la base de datos.";
} catch (PDOException $e) {
    die("Error de conexión a la base de datos: " . $e->getMessage());
}

// Aquí puedes realizar tus operaciones en la base de datos

// Por ejemplo, puedes realizar una consulta
$query = "SELECT * FROM comments";
$resultado = $conexion->query($query);

// Iterar a través de los resultados (en este caso, solo se muestra un ejemplo)
foreach ($resultado as $fila) {
    echo "id: " . $fila['id'] . ", Usuario: " . $fila['user'] . "comment: " . $fila['comment'] . "<br>";
}

// Cerrar la conexión cuando hayas terminado
$conexion = null;
?>
