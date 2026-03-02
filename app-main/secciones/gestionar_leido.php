<?php
include_once '../configuraciones/bd.php';
$conexionBD = BD::crearInstancia(); 

if (isset($_GET['id']) && isset($_GET['st'])) {
    $id = $_GET['id'];
    $nuevo_estado = $_GET['st'];

    try {
        $sql = "UPDATE contactos SET leido = :st WHERE id = :id";
        $sentencia = $conexionBD->prepare($sql);
        $sentencia->bindParam(':st', $nuevo_estado, PDO::PARAM_INT);
        $sentencia->bindParam(':id', $id, PDO::PARAM_INT);
        $sentencia->execute();
    } catch (Exception $e) {
        echo "Error al actualizar: " . $e->getMessage();
        exit;
    }
}

header("Location: vista_gestion.php"); 
exit;
?>