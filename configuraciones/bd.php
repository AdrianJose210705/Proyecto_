<?php
// Configuración para el docker
$host = "db"; 
$bd = "portafolio_db";
$usuario = "admin";
$contrasena = "admin";

try {
    $conexion = new PDO("mysql:host=$host;dbname=$bd", $usuario, $contrasena);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $ex) {
    echo "Error de conexión: " . $ex->getMessage();
}
?>