<?php

include_once '../configuraciones/bd.php';
$conexionBD=BD::crearInstancia();

$id=isset($_POST['id'])?$_POST['id']:'';
$Nombre=isset($_POST['Nombre'])?$_POST['Nombre']:'';
$accion=isset($_POST['accion'])?$_POST['accion']:'';

if ($accion!=''){
    switch ($accion) {
        case 'agregar':
            $sql="INSERT INTO contactos (id, Nombre) VALUES (NULL, '$Nombre')";
            $conexionBD->exec($sql);
            break;
    }
}

$conexionBD->exec("CREATE TABLE IF NOT EXISTS contactos (id INT AUTO_INCREMENT PRIMARY KEY, nombre VARCHAR(255), mensaje TEXT, fecha_hora DATETIME)");
$consulta = $conexionBD->prepare("SELECT * FROM contactos");
$consulta->execute();
$listaNombre=$consulta->fetchAll();


?>