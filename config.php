<?php
//conexión a la base de datos
$host = "localhost";
$user = "root";
$password = "";
$database = "appreg";

$con = mysqli_connect($host, $user, $password);

if (!$con) {
  die('No pudo conectarse' . mysqli_connect_errno());
}
// se crea la base de datos en el server
$sql = 'CREATE DATABASE IF NOT EXISTS `appreg` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci';

if (mysqli_query($con, $sql)) {
  // echo "Base de datos creada - ";
} else {
  echo "Ya existe la base de datos" . mysqli_error($con);
}

// se crea un arreglo con el SQL para crear la table en el server
$table = "
CREATE TABLE IF NOT EXISTS `appreg`. `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `tickettype` varchar(20) COLLATE utf8_spanish2_ci NOT NULL, PRIMARY KEY(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;";

if ($con->query($table) === true) {
  // echo "Tabla creada";
} else {
  echo "Error al crear la tabla" . $con->error . " ";
}

$con->close();

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
  die('No pudo conectarse' . mysqli_connect_errno());
}


$sql = 'CREATE DATABASE IF NOT EXISTS appreg';

if (mysqli_query($conn, $sql)) {
  // echo "La base de datos mi_bd se creó correctamente\n";
} else {
  // echo 'Error al crear la base de datos';
}