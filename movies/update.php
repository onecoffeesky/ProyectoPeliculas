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
$servername = "localhost";
$username = "root";
$password = "";
$database = "movies";
$table = "contact";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $address = $_POST["address"];

    $sql = "UPDATE $table SET phone='$phone', email='$email', address='$address' WHERE id=1";

    if ($conn->query($sql) === TRUE) {
        header("Location: contact.php"); // Redirige al usuario a la página principal
    } else {
        echo "Error al actualizar los datos: " . $conn->error;
    }
}

$conn->close();
?>