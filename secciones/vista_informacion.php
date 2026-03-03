<?php include('../template/cabecera.php')?>

<div class="col-md-12">

<form action="" method="post">
    <div class="card">
    <div class="card-header">Informacion de contacto</div>
    <div class="card-body">
<div class="mb-3">
    <label for="Nombre y Apellido" class="form-label">Nombre y Apellido</label>
    <input
        type="text"
        class="form-control"
        name="Nombre y Apellido"
        id="Nombre y Apellido"
        aria-describedby="helpId"
        placeholder="Nombre y Apellido"/>
</div>  

<div class="mb-3">
    <label for="CI" class="form-label">CI</label>
    <input
        type="number"
        class="form-control"
        name="CI"
        id="CI"
        aria-describedby="helpId"
        placeholder="CI"/>
</div>
<div class="mb-3">
    <label for="Universidad" class="form-label">Universidad</label>
    <input
        type="text"
        class="form-control"
        name="Universidad"
        id="Universidad"
        aria-describedby="helpId"
        placeholder="Universidad"/>
</div>
<div class="mb-3">
    <label for="Carerra Universitaria" class="form-label">Carerra Universitaria</label>
    <input
        type="text"
        class="form-control"
        name="Carerra Universitaria"
        id="Carerra Universitaria"
        aria-describedby="helpId"
        placeholder="Carerra Universitaria"/>
</div>
<div class="mb-3">
    <label for="Foto" class="form-label-">Foto</label>
    <input
        type="file"
        class="form-control"
        name="Foto"
        id="Foto"
        placeholder=""
        aria-describedby="fileHelpId"/>
</div>
<div class="mb-3">
    <label for="Habilidades" class="form-label">Habilidades</label>
    <textarea class="form-control" name="Habilidades" id="Habilidades" rows="4"></textarea>
</div>

<div class="btn-group" role="group" aria-label="Button group name">
    <button type="button" class="btn btn-success">Agregar</button>
    <button type="button" class="btn btn-warning">Editar</button>
    <button type="button" class="btn btn-danger">Borrar</button>
</div>

    </div>

</div>
</form>

</div>

<div class="col-md-12">
    <div
        class="table-responsive"
    >
        <table
            class="table"
        >
            <thead>
                <tr>
                    <th scope="col">Nombre y Apellido</th>
                    <th scope="col">CI</th>
                    <th scope="col">Universidad</th>
                    <th scope="col">Carerra Universitaria</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Habilidades</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nombre y Apellido</td>
                    <td>CI</td>
                    <td>Universidad</td>
                    <td>Carerra Universitaria</td>
                    <td>Foto</td>
                    <td>Habilidades</td>
                </tr>
            </tbody>
        </table>
    </div>
    

</div>

<?php include('../template/pie.php')?>