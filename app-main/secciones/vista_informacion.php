<?php include('../template/cabecera.php')?>
<?php 

include_once '../configuraciones/bd.php';
$conexionBD = BD::crearInstancia(); 

$sentencia = $conexionBD->prepare("SELECT * FROM perfil");
$sentencia->execute();
$listaPerfil = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="col-md-12">
    <div class="card mb-4">
        <div class="card-header">Información de contacto (Formulario)</div>
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Nombre y Apellido</label>
                        <input type="text" class="form-control" name="nombre_alumno" placeholder="Nombre y Apellido">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">C.I.</label>
                        <input type="text" class="form-control" name="cedula" placeholder="C.I.">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Universidad</label>
                        <input type="text" class="form-control" name="universidad" placeholder="Universidad">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Carrera</label>
                        <input type="text" class="form-control" name="carrera" placeholder="Carrera">
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Bio (Edad/Descripción)</label>
                    <input type="text" class="form-control" name="bio" placeholder="Ej: 22 años / Estudiante">
                </div>
                <div class="mb-3">
                    <label class="form-label">Foto</label>
                    <input type="file" class="form-control" name="Foto">
                </div>
                <div class="mb-3">
                    <label class="form-label">Habilidades</label>
                    <textarea class="form-control" name="habilidades" rows="2" placeholder="Habilidades separadas por coma"></textarea>
                </div>
                <div class="btn-group" role="group">
                    <button type="submit" class="btn btn-success">Agregar</button>
                    <button type="submit" class="btn btn-warning">Editar</button>
                    <button type="submit" class="btn btn-danger">Borrar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="card">
        <div class="card-header">Tabla de Perfiles</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>Foto</th>
                            <th>Nombre</th>
                            <th>C.I.</th>
                            <th>Uni / Carrera</th>
                            <th>Bio</th>
                            <th>Habilidades</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($listaPerfil as $perfil) { ?>
                        <tr>
                            <td>
                                <img src="../fotoperfil/<?php echo $perfil['foto_url']; ?>" width="70" class="rounded shadow-sm">
                            </td>
                            <td><strong><?php echo $perfil['nombre_alumno']; ?></strong></td>
                            <td><?php echo $perfil['cedula']; ?></td>
                            <td>
                                <?php echo $perfil['universidad']; ?><br>
                                <small class="text-muted"><?php echo $perfil['carrera']; ?></small>
                            </td>
                            <td><?php echo $perfil['bio']; ?></td>
                            <td>
                                <span class="badge bg-info text-dark">
                                    <?php echo $perfil['habilidades']; ?>
                                </span>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include('../template/pie.php')?>