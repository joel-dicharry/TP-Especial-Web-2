{include file="templates/header.tpl"}
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
                            <button type="submit">Modificar</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
{include file="templates/footer.tpl"}