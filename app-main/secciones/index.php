<?php include('../template/cabecera.php')?>

<?php
if (isset($_POST['ejecutar_python'])) {
    exec('python3 /var/www/html/script/script.py 2>&1');
    header("Location: " . $_SERVER['PHP_SELF']); 
    exit();
}
?>

<div class="reporte-contenedor">
    <h3>Resumen de datos en el sistema</h3>
<br>
<pre>
    <?php 
        clearstatcache();
        if (file_exists('../reportes/reporte.txt')){
            echo file_get_contents('../reportes/reporte.txt');
        } else {
            echo "El reporte aun no ha sido generado";
        }
    ?>
    <form>
        <button type="submit" class="btn btn-info">Actualizar</button>
    </form>
</pre>
</div>

<?php include('../template/pie.php')?>      