<?php
include("configuraciones/bd.php");
if (isset($_GET['id']) && isset($_GET['st'])) {
    $id = $_GET['id'];
    $nuevo_estado = $_GET['st'];

    try {
        //Actualización de la columna leído
        $sql = "UPDATE contactos SET leido = :st WHERE id = :id";
        $sentencia = $conexion->prepare($sql);
        $sentencia->bindParam(':st', $nuevo_estado, PDO::PARAM_INT);
        $sentencia->bindParam(':id', $id, PDO::PARAM_INT);
        $sentencia->execute();
    } catch (Exception $e) {
        echo "Error al actualizar: " . $e->getMessage();
        exit;
    }
}

//Reedirigimos a la tabla de index
header("Location: index.php"); 
exit;
?>