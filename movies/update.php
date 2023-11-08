<?php
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