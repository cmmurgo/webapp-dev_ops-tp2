<?php
$mysqli = new mysqli("mysql-server", "mmurgo", "marce123", "tp2murgodb");

if ($mysqli->connect_error) {
    die("Error de conexión: " . $mysqli->connect_error);
}
?>





