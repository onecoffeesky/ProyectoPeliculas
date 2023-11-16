
<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Movies</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" media="all">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Barlow" rel="stylesheet">

	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>




</head>

<body>
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

$request_headers = getallheaders();

// Puedes realizar acciones específicas o simplemente devolver los encabezados recibidos.
header("Content-Type: text/plain");
foreach ($request_headers as $header => $value) {
    echo "$header: $value\n";
}


// Resto del código para manejar otras solicitudes (GET, POST, etc.)
// ...

// Conectarse a la base de datos (reemplaza con tus credenciales)
$servername = "localhost";
$username = "root";
$password = "";
$database = "movies";


$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta SQL para obtener los datos de las películas
$sql = "SELECT * FROM movies";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar los datos de cada película en las cards
    $i = 1;
    while ($row = $result->fetch_assoc()) {
        echo '<div class="col-sm-6 about_1_left padding_all">';
        echo '<div class="col-sm-12 about_1_left_top padding_all">';
        echo '<div class="col-sm-6 about_1_left_top_left clearfix">';
        echo '<div class="about_1_left_top_left_inner clearfix">';
        echo '<h3>' . $row['moviename'] . '</h3>';
        echo '<p>' . $row['description'] . '</p>';
        echo '</div>';
        echo '</div>';
        echo '<div class="col-sm-6 about_1_left_top_right clearfix">';
        echo '<div class="about_1_left_top_right_inner clearfix">';
        echo '<div class="ih-item square effect13 left_to_right"><a href="#">';
        echo '<div class="img"><img src="' . $row['url'] . '" alt="img"></div>';
        echo '<div class="info">';

        echo '</div>';
        echo '</a></div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';

        $i++;
        if ($i > 4) {
            break; // Mostrar solo las primeras 4 películas
        }
    }
} else {
    echo "No se encontraron películas en la base de datos.";
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
</body>

</html>
