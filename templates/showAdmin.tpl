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
            <table>
                <thead>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>DNI</th>
                    <th>Especialidad</th>
                </thead>
                <tbody>
                    {foreach $students as $student} 
                            {* {$student->id_alumno}; *}
                            <form action="eliminarAlumno" method="post">
                            <tr>
                                <td>{$student->nombre}</td>
                                <td>{$student->apellido}</td>
                                <td>{$student->dni}</td>
                                <td>{$student->id_especialidad}</td>
                                    <form action="eliminarAlumno" method="post">
                                        <td>
                                            <button type="submit" name="btn_delete" value="{$student->id_alumno}">Eliminar</button>
                                        </td>
                                    </form>
                                    {* <form action="modificarAlumno" method="post">
                                        <td>
                                            <button type="submit" name="btn_modify" value="{$student->id_alumno}">Modificar</button>
                                        </td> *}
                            </tr>
                    {/foreach}
                </tbody>
            </table>
{include file="templates/footer.tpl"}