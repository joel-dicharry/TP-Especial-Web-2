{include "templates/header.tpl"}
<form action="../modificarAlumno/{$student->id_alumno}" method="POST">
    <table class="table table-dark">
        <thead>
            <th>
                <label for="nombre">Nombre</label>
            </th>
            <th>
                <label for="apellido">Apellido</label>
            </th>
            <th>
                <label for="dni">DNI</label>
            </th>
            <th>
                <label for="id_especialidad">Especialidad</label>
            </th>
        </thead>
        <tbody>
            <tr>
                <td>
                    <input type="text" name="nombre" value="{$student->nombre}">
                </td>
                <td>
                    <input type="text" name="apellido" value="{$student->apellido}">
                </td>
                <td>
                    <input type="text" name="dni" value="{$student->dni}">
                </td>
                <td>
                    <input type="text" name="id_especialidad" value="{$student->id_especialidad}">
                </td>
                <td>
                    <button type="submit">Cargar</button>
                </td>
            </tr>
        </tbody>
    </table>
</form>
{include "templates/footer.tpl"}