{include "templates/header.tpl"}
<table class="table table-striped">
    <thead>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>DNI</th>
        <th>Especialidad</th>
    </thead>
    <tbody>
        {foreach $students as $student}
        <tr>
            <td>{$student->nombre}</td>
            <td>{$student->apellido}</td>
            <td>{$student->dni}</td>
            <td>{$student->especialidad}</td>
            <form action="eliminarAlumno/{$student->id_alumno}" method="post">
                <td>
                    <button type="submit">Eliminar</button>
                </td>
            </form>
            <form action="formularioModificar/{$student->id_alumno}" method="post">
                <td>
                    <button type="submit">Modificar</button>
                </td>
            </form>
        </tr>
        {/foreach}
{include "templates/footer.tpl"}