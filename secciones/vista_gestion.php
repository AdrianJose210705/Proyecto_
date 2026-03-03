<?php include('../template/cabecera.php')?>

<div class="col-md-5">

<form action="" method="post">
    <div class="card">
    <div class="card-header">Gestion de datos</div>
    <div class="card-body">
        <div class="mb-3">
    <label for="" class="form-label">ID</label>
    <input
        type="text"
        class="form-control"
        name="id"
        id="id"
        aria-describedby="helpId"
        placeholder="ID"/>
</div>  
<div class="mb-3">
    <label for="Nombre_curso" class="form-label">Nombre</label>
    <input
        type="text"
        class="form-control"
        name="Nombre"
        id="Nombre"
        aria-describedby="helpId"
        placeholder="Nombre"/>
</div>
<div class="mb-3">
    <label for="Mensaje" class="form-label">Mensaje</label>
    <textarea class="form-control" name="Mensaje" id="Mensaje" rows="2"></textarea>
</div>
<div class="mb-3">
    <label for="" class="form-label">Fecha/Hora</label>
    <input
        type="datetime-local"
        class="form-control"
        name="Fecha/Hora"
        id="Fecha/Hora"
        aria-describedby="helpId"
        placeholder="Fecha/Hora"/>
</div>

<div
    class="btn-group"
    role="group"
    aria-label="Basic checkbox toggle button group">
    <input
        type="checkbox"
        class="btn-check"
        id="btncheck1"
        autocomplete="off"/>
    <label class="btn btn-outline-primary" for="btncheck1">Leído</label>
</div>
<br>
<br>

<div class="btn-group" role="group" aria-label="Button group name">
    <button type="button" class="btn btn-success">Agregar</button>
    <button type="button" class="btn btn-warning">Editar</button>
    <button type="button" class="btn btn-danger">Borrar</button>
</div>

    </div>

</div>
</form>

</div>

<div class="col-md-7">
    <div
        class="table-responsive"
    >
        <table
            class="table"
        >
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Mensaje</th>
                    <th scope="col">Fecha/Hora</th>
                    <th scope="col">Leído</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Nombre</td>
                    <td>Mensaje</td>
                    <td>Fecha/Hora</td>
                    <td>Leído/ No Leído</td>
                    <td>Seleccionar</td>
                </tr>
            </tbody>
        </table>
    </div>
    

</div>

<?php include('../template/pie.php')?>