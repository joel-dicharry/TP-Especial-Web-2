{include "templates/header.tpl"}
<form action="cargaralumno" method="POST">
    <table>
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
                    <input type="text" name="nombre">
                </td>
                <td>
                    <input type="text" name="apellido">
                </td>
                <td>
                    <input type="text" name="dni">
                </td>
                <td>
                    <input type="text" name="id_especialidad">
                </td>
                <td>
                    <button type="submit">Cargar</button>
                </td>
            </tr>
        </tbody>
    </table>
</form>
<form action="agregarespecialidad" method="POST">
    <table>
        <thead>
            <th>
                <label for="especialidad">Especialidad</label>
            </th>
        </thead>
        <tbody>
            <tr>
                <td>
                    <input type="text" name="especialidad">
                </td>
                <td>
                    <button type="submit">Agregar</button>
                </td>
            </tr>
        </tbody>
    </table>
</form>
    <table>
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
                <td>{$student->id_especialidad}</td>
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
    </tbody>
</table>
{include "templates/footer.tpl"}