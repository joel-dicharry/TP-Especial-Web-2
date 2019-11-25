{include "templates/header.tpl"}
<table class="table table-striped">
    <tbody>
    <table class ="table table-striped">
    <thead>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Foto Carnet</th>
    </thead>
    <tbody>
            <tr>
                <td>{$student->nombre}</td>
                <td>{$student->apellido}</td>
                <td><img src="{$student->imagen}"width="170"  alt="{$student->apellido}" srcset=""></td>
            </tr>
    </tbody>
<input type="hidden" value="{$student->id_alumno}"id="id_alumno">
<table class ="table table-striped">
<tbody id="showActas"> 
</tbody>
</table>
    <table class="table table-dark">
        <thead>
            <th>
                <label for="contenido">Contenido de acta</label>
            </th>
            <th>
                <label for="imagen">Imagen</label>
            </th>
        </thead>
    <form action="api/agregarActa" method="POST">
        <tbody>
            <tr>
                <td>
                    <input type="text" name="contenido">
                </td>
                <td>
                    <input type="file" name="input_name" id="imageToUpload">
                </td>
                <td>
                    <button type="submit">Cargar</button>
                </td>
            </tr>
        </tbody>
    </form>
    </table>
<script src="js/showstudents.js"></script>
{include "templates/footer.tpl"}